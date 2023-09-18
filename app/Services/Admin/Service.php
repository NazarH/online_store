<?php

namespace App\Services\Admin;

<<<<<<< HEAD
use App\Models\Order;
use App\Models\ListTv;
use App\Models\Product;
use App\Models\TvImage;
use App\Models\ListBook;
use App\Models\BookImage;
use App\Models\MobileImage;
use App\Models\ListNotebook;
use App\Models\ProductImage;
use App\Models\NotebookImage;
use App\Models\ListMobilePhone;

class Service
{
=======
use App\Models\BookImage;
use App\Models\ListBook;
use App\Models\ListMobilePhone;
use App\Models\ListNotebook;
use App\Models\ListTv;
use App\Models\MobileImage;
use App\Models\NotebookImage;
use App\Models\Order;
use App\Models\TvImage;

class Service
{
    public function notebook_create($request){
        $data = $request->validated();
        $notebook = ListNotebook::create($data);
        foreach ($request->file('images') as $file){
            $path = $file->store('notebook', 'public');
            NotebookImage::create([
                'notebook_id' => $notebook->id,
                'image_url' => $path
            ]);
        }
    }

    public function notebook_update($request, $id){
        $notebook = ListNotebook::find($id);
        $data = $request->validated();
        $notebook->update($data);
    }

    public function mobile_create($request){
        $data = $request->validated();
        $mobile = ListMobilePhone::create($data);
        foreach ($request->file('images') as $file){
            $path = $file->store('mobile', 'public');
            MobileImage::create([
                'mobile_id' => $mobile->id,
                'image_url' => $path
            ]);
        }
    }

    public function mobile_update($request, $id){
        $phone = ListMobilePhone::find($id);
        $data = $request->validated();
        $phone->update($data);
    }

    public function tv_create($request){
        $data = $request->validated();
        $tv = ListTv::create($data);
        foreach ($request->file('images') as $file){
            $path = $file->store('tv', 'public');
            TvImage::create([
                'tv_id' => $tv->id,
                'image_url' => $path
            ]);
        }
    }

    public function tv_update($request, $id){
        $tv = ListTv::find($id);
        $data = $request->validated();
        $tv->update($data);
    }

    public function book_create($request){
        $data = $request->validated();
        $book = ListBook::create($data);
        foreach ($request->file('images') as $file){
            $path = $file->store('book', 'public');
            BookImage::create([
                'book_id' => $book->id,
                'image_url' => $path
            ]);
        }
    }

    public function book_update($request, $id){
        $book = ListBook::find($id);
        $data = $request->validated();
        $book->update($data);
    }

>>>>>>> bbcfcfb7764e40f704a2e8732ee6ce3046a23d2b
    public function most_popular(){
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
<<<<<<< HEAD

    public function productCreate($request)
    {
        $data = $request->validated();
        $product = Product::create($data);
        foreach ($request->file('images') as $file){
            $path = $file->store('product', 'public');
            ProductImage::create([
                'product_id' => $product->id,
                'image_url' => $path
            ]);
        }
    }

    public function productUpdate($request, int $id)
    {
        $product = Product::find($id);
        $data = $request->validated();
        $product->update($data);
    }
=======
>>>>>>> bbcfcfb7764e40f704a2e8732ee6ce3046a23d2b
}
