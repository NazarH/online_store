<?php

namespace App\Services\Products;

use App\Models\ListBook;
use App\Models\ListMobilePhone;
use App\Models\ListNotebook;
use App\Models\ListTv;
use App\Models\Order;
use App\Models\Review;
use Illuminate\Support\Facades\Auth;

class ProductService
{
    public function arrSort($request)
    {
        $arr = [];
        foreach ($request->request as $key => $value){
            if($key === '_token') continue;
            $key = substr($key, 0, -2);
            if(mb_substr($key,  -1) === '_') $key = substr($key, 0, -1);
            if($key === 'price_min' && $value === null) continue;
            if($key === 'price_max' && $value === null) continue;

            if(array_key_exists($key, $arr)){
                if(strpos($value, '-') !== false) $value = explode('-', $value);
                array_push($arr[$key], $value);
            }
            else{
                $arr[$key] = [];
                if(strpos($value,'-') !== false) $value = explode('-', $value);
                array_push($arr[$key], $value);
            }
        }
        return $arr;
    }

    public function sendReview($request)
    {
        $id = preg_replace('/[^0-9]/', '', $_SERVER['REQUEST_URI']);
        $product = strpos($_SERVER['REQUEST_URI'], '/notebooks/') !== false ? 'notebook_id'
            : (strpos($_SERVER['REQUEST_URI'], '/books/') !== false ? 'book_id'
                : (strpos($_SERVER['REQUEST_URI'], '/mobile-phones/') !== false ? 'phone_id'
                    : (strpos($_SERVER['REQUEST_URI'], '/televisions/') !== false ? 'television_id' : '')));
        $benefits = $request['benefits'] !== null ? $request['benefits'] : 'Немає';
        $disadvantages = $request['disadvantages'] !== null ? $request['disadvantages'] : 'Немає';
        if($request['review'] === null) return 0;
        Review::create([
            'review' => trim($request['review']),
            'user_id' => Auth::user()->id,
            'benefits' => trim($benefits),
            'disadvantages' => trim($disadvantages),
            $product => $id
        ]);
    }

    public function reviewed(): array
    {
        $reviewed = [];
        foreach ($_COOKIE as $key => $value){
            if(strpos($key, '/notebook/') !== false){
                $notebook = ListNotebook::find($value);
                $notebook->link = '/notebooks/';
                $reviewed[] = $notebook;
            } else if(strpos($key, '/phone/') !== false){
                $phone = ListMobilePhone::find($value);
                $phone->link = '/mobile-phones/';
                $reviewed[] = $phone;
            } else if(strpos($key, '/book/') !== false){
                $book = ListBook::find($value);
                $book->link = '/books/';
                $reviewed[] = $book;
            } else if(strpos($key, '/tv/') !== false){
                $tv = ListTv::find($value);
                $tv->link = '/televisions/';
                $reviewed[] = $tv;
            }
        }
        $reviewed = array_reverse($reviewed);
        return $reviewed;
    }

    public function firstElementSplice()
    {
        foreach ($_COOKIE as $key => $value){
            setcookie($key,$value, time() - 10800, '/main-page');
            setcookie($key,$value, time() - 10800, '/notebooks');
            setcookie($key,$value, time() - 10800, '/books');
            setcookie($key,$value, time() - 10800, '/mobile-phones');
            setcookie($key,$value, time() - 10800, '/televisions');
            break;
        }
    }

    public function cookieSplice()
    {
        foreach ($_COOKIE as $key => $value){
                if($key === "XSRF-TOKEN") unset($_COOKIE[$key]);
                if($key === "laravel_session") unset($_COOKIE[$key]);
        }
    }

    public function basketIndex($request)
    {
            foreach ($_COOKIE as $key => $value){
                if($key === "XSRF-TOKEN") unset($_COOKIE[$key]);
                if($key === "laravel_session") unset($_COOKIE[$key]);
            }
            if(str_contains($request->link, '/notebooks')){
                if(empty($_COOKIE['/notebook/'.$request->id])){
                    setcookie('/notebook/'.$request->id, $request->id, time() + 10800, '/basket');
                    setcookie('/notebook/'.$request->id, $request->id, time() + 10800, '/orders');
                }
            } else if(str_contains($request->link, '/books')){
                if(empty($_COOKIE['/book/'.$request->id])){
                    setcookie('/book/'.$request->id, $request->id, time() + 10800, '/basket');
                    setcookie('/book/'.$request->id, $request->id, time() + 10800, '/orders');
                }
            } else if(str_contains($request->link, '/mobile-phones')){
                if(empty($_COOKIE['/phone/'.$request->id])){
                    setcookie('/phone/'.$request->id, $request->id, time() + 10800, '/basket');
                    setcookie('/phone/'.$request->id, $request->id, time() + 10800, '/orders');
                }
            } else if(str_contains($request->link, '/televisions')){
                if(empty($_COOKIE['/tv/'.$request->id])){
                    setcookie('/tv/'.$request->id, $request->id, time() + 10800, '/basket');
                    setcookie('/tv/'.$request->id, $request->id, time() + 10800, '/orders');
                }
            }
            header("Refresh: 0");
    }

    public function basketProductDelete($link, $id)
    {
        if($link === '/televisions/') $link = '/tv/';
        if($link === '/mobile-phones/') $link = '/phone/';
        foreach ($_COOKIE as $key => $value){
            if(str_replace(range('0', '9'), '', $key) === str_replace('s', '', $link)
                && $value === $id){
                setcookie($key,$value, time() - 10800, '/basket');
                setcookie($key,$value, time() - 10800, '/orders');
            }
        }
    }

    // public function orderIndex($request): object
    // {
    //     if(str_contains($request->link, '/televisions')){
    //         $product = ListTv::where('id', $request->id)->get();
    //         $product->link = $request->link;
    //     } else if(str_contains($request->link, '/notebooks')){
    //         $product = ListNotebook::where('id', $request->id)->get();
    //         $product->link = $request->link;
    //     } else if(str_contains($request->link, '/books')){
    //         $product = ListBook::where('id', $request->id)->get();
    //         $product->link = $request->link;
    //     } else if(str_contains($request->link, '/mobile-phones')){
    //         $product = ListMobilePhone::where('id', $request->id)->get();
    //         $product->link = $request->link;
    //     }
    //     return $product;
    // }

    public function notNull($data): object
    {
        foreach ($data as $key => $value){
            if($value === null) unset($data[$key]);
        }
        return $data;
    }

    public function mostPopular(): array
    {
        $orders_codes = [];
        $orders = Order::all();
        foreach ($orders as $order){
            $explode = explode(' ', $order->product_code);
            foreach ($explode as $item){
                $orders_codes[] = str_replace(['(', ')'], '', $item);
            }
        }
        $orders_codes = array_count_values($orders_codes);
        return $orders_codes;
    }

    // public function productsSort($products): array
    // {
    //     $products_sort = [];
    //     foreach($products as $key => $value){
    //         if(!empty(ListNotebook::where('code', 'like', '%'.$key.'%')->get()[0]->id)){
    //             $products_sort[] = ListNotebook::where('code', 'like', '%'.$key.'%')->get()[0];
    //             end($products_sort)->link = '/notebooks/';
    //         }
    //         if(!empty(ListBook::where('code', 'like', '%'.$key.'%')->get()[0]->id)){
    //             $products_sort[] = ListBook::where('code', 'like', '%'.$key.'%')->get()[0];
    //             end($products_sort)->link = '/books/';
    //         }
    //         if(!empty(ListMobilePhone::where('code', 'like', '%'.$key.'%')->get()[0]->id)){
    //             $products_sort[] = ListMobilePhone::where('code', 'like', '%'.$key.'%')->get()[0];
    //             end($products_sort)->link = '/mobile-phones/';
    //         }
    //         if(!empty(ListTv::where('code', 'like', '%'.$key.'%')->get()[0]->id)){
    //             $products_sort[] = ListTv::where('code', 'like', '%'.$key.'%')->get()[0];
    //             end($products_sort)->link = '/televisions/';
    //         }
    //     }
    //     return array_slice($products_sort, 0, 5);
    // }

/* pages */

    // public function notebooksIndex($request, $arr){
    //         if($request->list_sort === 'cheap') $notebooks = ListNotebook::orderBy('price', 'asc')->paginate(50);
    //         else if($request->list_sort === 'expensive') $notebooks = ListNotebook::orderBy('price', 'desc')->paginate(50);
    //         else $notebooks = ListNotebook::where(function ($query)use($arr){
    //                 foreach ($arr as $key => $value){
    //                     if($key === 'price_min'){$query->where('price', '>', $value); continue;};
    //                     if($key === 'price_max'){$query->where('price', '<', $value); continue;};
    //                     if($key === 'weight'){
    //                         if($value[0] === '1'){
    //                             $query->where('weight', '<', $value);
    //                             setcookie($key.rand(1,100), $value[0], time() + 5);
    //                             continue;
    //                         } else if($value[0] === '3'){
    //                             $query->where('weight', '>', $value);
    //                             setcookie($key.rand(1,100), $value[0], time() + 5);
    //                             continue;
    //                         }
    //                         $value = explode('-', $value[0]);
    //                         $query->whereBetween('weight', [$value[0], $value[1]]);
    //                         setcookie($key.rand(1,100), $value[0], time() + 5);
    //                         continue;
    //                     }
    //                     if($key === 'battery'){
    //                         if($value[0] === '30'){
    //                             $query->where('battery', '<', $value);
    //                             setcookie($key.rand(1,100), $value[0], time() + 5);
    //                             continue;
    //                         } else if($value[0] === '90'){
    //                             $query->where('battery', '>', $value);
    //                             setcookie($key.rand(1,100), $value[0], time() + 5);
    //                             continue;
    //                         }
    //                         $value = explode('-', $value[0]);
    //                         $query->whereBetween('battery', [$value[0], $value[1]])->get();
    //                         setcookie($key.rand(1,100), $value[0], time() + 5);
    //                         continue;
    //                     }
    //                     $query->whereIn($key, $value);
    //                 }
    //         })->paginate(50);
    //         return $notebooks;
    // }

    // public function notebooksPage($notebook){
    //     if(empty($_COOKIE['/notebook/'.$notebook->id])){
    //         if(count($_COOKIE) < 5){
    //             setcookie('/notebook/'.$notebook->id,$notebook->id, time() + 10800, '/main-page');
    //             setcookie('/notebook/'.$notebook->id,$notebook->id, time() + 10800, '/notebooks');
    //             setcookie('/notebook/'.$notebook->id,$notebook->id, time() + 10800, '/books');
    //             setcookie('/notebook/'.$notebook->id,$notebook->id, time() + 10800, '/mobile-phones');
    //             setcookie('/notebook/'.$notebook->id,$notebook->id, time() + 10800, '/televisions');
    //         } else if(count($_COOKIE) === 5){
    //             $this->first_element_splice();
    //             setcookie('/notebook/'.$notebook->id,$notebook->id, time() + 10800, '/main-page');
    //             setcookie('/notebook/'.$notebook->id,$notebook->id, time() + 10800, '/notebooks');
    //             setcookie('/notebook/'.$notebook->id,$notebook->id, time() + 10800, '/books');
    //             setcookie('/notebook/'.$notebook->id,$notebook->id, time() + 10800, '/mobile-phones');
    //             setcookie('/notebook/'.$notebook->id,$notebook->id, time() + 10800, '/televisions');
    //         }
    //     }
    // }

    // public function phonesIndex($request, $arr)
    // {
    //     if($request->list_sort === 'cheap') $phones = ListMobilePhone::orderBy('price', 'desc')->paginate(50);
    //         else if($request->list_sort === 'expensive') $phones = ListMobilePhone::orderBy('price', 'asc')->paginate(50);
    //         else $phones = ListMobilePhone::where(function ($query)use($arr){
    //             foreach ($arr as $key => $value){
    //                 if($key === 'price_min'){$query->where('price', '>', $value); continue;};
    //                 if($key === 'price_max'){$query->where('price', '<', $value); continue;};
    //                 if($key === 'core_count'){
    //                     if($value[0] === '2'){
    //                         $query->where('core_count','<=',$value);
    //                         continue;
    //                     }
    //                     if($value[0] === '8'){
    //                         $query->where('core_count','>=',$value);
    //                         continue;
    //                     }
    //                 }
    //                 if($key === 'diagonal'){
    //                     if($value[0] === '6'){
    //                         $query->where('diagonal','<=',$value);
    //                         continue;
    //                     }
    //                     if($value[0] === '6.6'){
    //                         $query->where('diagonal','>=',$value);
    //                         continue;
    //                     }
    //                 }
    //                 if($key === 'storage'){
    //                     if($value[0] === '16'){
    //                         $query->where('storage','<=',$value);
    //                         continue;
    //                     }
    //                 }
    //                 if($key === 'ram_memory'){
    //                     if($value[0] === '2'){
    //                         $query->where('ram_memory','<=',$value);
    //                         continue;
    //                     }
    //                 }
    //                 if($key === 'ram_memory'){
    //                     if($value[0] === '2'){
    //                         $query->where('ram_memory','<=',$value);
    //                         continue;
    //                     }
    //                 }
    //                 if($key === 'main_mp'){
    //                     $query->whereIn($key, $value);
    //                     continue;
    //                 }

    //                 $query->whereIn($key, $value);
    //             }
    //     })->paginate(50);
    //     return $phones;
    // }

    // public function phonesPage($phone)
    // {
    //     if(empty($_COOKIE['/phone/'.$phone->id])){
    //         if(count($_COOKIE) < 5){
    //             setcookie('/phone/'.$phone->id,$phone->id, time() + 10800, '/main-page');
    //             setcookie('/phone/'.$phone->id,$phone->id, time() + 10800, '/notebooks');
    //             setcookie('/phone/'.$phone->id,$phone->id, time() + 10800, '/books');
    //             setcookie('/phone/'.$phone->id,$phone->id, time() + 10800, '/mobile-phones');
    //             setcookie('/phone/'.$phone->id,$phone->id, time() + 10800, '/televisions');
    //         } else if(count($_COOKIE) === 7){
    //             $this->first_element_splice();
    //             setcookie('/phone/'.$phone->id,$phone->id, time() + 10800, '/main-page');
    //             setcookie('/phone/'.$phone->id,$phone->id, time() + 10800, '/notebooks');
    //             setcookie('/phone/'.$phone->id,$phone->id, time() + 10800, '/books');
    //             setcookie('/phone/'.$phone->id,$phone->id, time() + 10800, '/mobile-phones');
    //             setcookie('/phone/'.$phone->id,$phone->id, time() + 10800, '/televisions');
    //         }
    //     }
    // }

    // public function televisionsIndex($request, $arr)
    // {
    //     if($request->list_sort === 'cheap') $televisions = ListTv::orderBy('price', 'asc')->paginate(50);
    //         else if($request->list_sort === 'expensive') $televisions = ListTv::orderBy('price', 'desc')->paginate(50);
    //         else $televisions = ListTv::where(function ($query)use($arr){
    //             foreach ($arr as $key => $value){
    //                 if($key === 'price_min'){$query->where('price', '>', $value); continue;};
    //                 if($key === 'price_max'){$query->where('price', '<', $value); continue;};
    //                 if($key === 'diagonal'){
    //                     $query->whereIn($key, range(intval($value[0][0]), intval($value[0][1])));
    //                     continue;
    //                 };
    //                 $query->whereIn($key, $value);
    //             }
    //     })->paginate(50);
    //     return $televisions;
    // }

    // public function televisionsPage($television){
    //     if(empty($_COOKIE['/tv/'.$television->id])){
    //         if(count($_COOKIE) < 5){
    //             setcookie('/tv/'.$television->id,$television->id, time() + 10800, '/main-page');
    //             setcookie('/tv/'.$television->id,$television->id, time() + 10800, '/notebooks');
    //             setcookie('/tv/'.$television->id,$television->id, time() + 10800, '/books');
    //             setcookie('/tv/'.$television->id,$television->id, time() + 10800, '/mobile-phones');
    //             setcookie('/tv/'.$television->id,$television->id, time() + 10800, '/televisions');
    //         } else if(count($_COOKIE) === 5){
    //             $this->first_element_splice();
    //             setcookie('/tv/'.$television->id,$television->id, time() + 10800, '/main-page');
    //             setcookie('/tv/'.$television->id,$television->id, time() + 10800, '/notebooks');
    //             setcookie('/tv/'.$television->id,$television->id, time() + 10800, '/books');
    //             setcookie('/tv/'.$television->id,$television->id, time() + 10800, '/mobile-phones');
    //             setcookie('/tv/'.$television->id,$television->id, time() + 10800, '/televisions');
    //         }
    //     }
    // }

    // public function booksIndex($request, $arr)
    // {
    //     if($request->list_sort === 'cheap') $books = ListBook::orderBy('price', 'asc')->paginate(50);
    //         else if($request->list_sort === 'expensive') $books = ListBook::orderBy('price', 'desc')->paginate(50);
    //         else $books = ListBook::where(function ($query)use($arr){
    //             foreach ($arr as $key => $value){
    //                 if($key === 'price_min'){$query->where('price', '>', $value); continue;};
    //                 if($key === 'price_max'){$query->where('price', '<', $value); continue;};
    //                 $query->whereIn($key, $value);
    //             }
    //     })->paginate(50);
    //     return $books;
    // }

    // public function booksPage($book)
    // {
    //     if(empty($_COOKIE['/book/'.$book->id])){
    //         if(count($_COOKIE) < 5){
    //             setcookie('/book/'.$book->id,$book->id, time() + 10800, '/main-page');
    //             setcookie('/book/'.$book->id,$book->id, time() + 10800, '/notebooks');
    //             setcookie('/book/'.$book->id,$book->id, time() + 10800, '/books');
    //             setcookie('/book/'.$book->id,$book->id, time() + 10800, '/mobile-phones');
    //             setcookie('/book/'.$book->id,$book->id, time() + 10800, '/televisions');
    //         }else if(count($_COOKIE) === 5){
    //             $this->first_element_splice();
    //             setcookie('/book/'.$book->id,$book->id, time() + 10800, '/main-page');
    //             setcookie('/book/'.$book->id,$book->id, time() + 10800, '/notebooks');
    //             setcookie('/book/'.$book->id,$book->id, time() + 10800, '/books');
    //             setcookie('/book/'.$book->id,$book->id, time() + 10800, '/mobile-phones');
    //             setcookie('/book/'.$book->id,$book->id, time() + 10800, '/televisions');
    //         }
    //     }
    // }
}
