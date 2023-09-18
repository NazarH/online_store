<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use App\Models\Order;
use App\Models\Banner;
use App\Models\ListTv;
use App\Models\Review;
use App\Models\ListBook;
use App\Models\TopBanner;
use App\Models\BlockBanner;
use App\Models\ListNotebook;
use Illuminate\Http\Request;
use App\Models\ListMobilePhone;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Products\BaseController;

class PagesController extends BaseController
{
    public function index(): object
    {
        // $top_banner = TopBanner::first();
        // $block_banners = BlockBanner::all();
        // $notebook = ListNotebook::orderBy(DB::raw('RAND()'))->take(2)->get();
        // $book = ListBook::orderBy(DB::raw('RAND()'))->take(1)->get();
        // $television = ListTv::orderBy(DB::raw('RAND()'))->take(1)->get();
        // $phone = ListMobilePhone::orderBy(DB::raw('RAND()'))->take(1)->get();
        // $rev_products = $this->service->reviewed();
        // $products = $this->service->most_popular();
        // $products = $this->service->products_sort($products);
        $top_banner = Banner::where('banner_type', 'top')->latest()->get();
        $block_banners = Banner::where('banner_type', 'block')->get();
        return view('main-page.index', compact('top_banner', 'block_banners'));
    }

    public function redirect(): object
    {
        return redirect(asset('/main-page'));
    }

    public function search(Request $request): object
    {
        $search = $request['search'];
        $top_banner = TopBanner::first();

=======
use App\Models\BlockBanner;
use App\Models\ListBook;
use App\Models\ListMobilePhone;
use App\Models\ListNotebook;
use App\Models\ListTv;
use App\Models\Order;
use App\Models\Review;
use App\Models\TopBanner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PagesController extends \App\Http\Controllers\Products\BaseController
{
    public function index(){
        $top_banner = TopBanner::first();
        $block_banners = BlockBanner::all();
        $notebook = ListNotebook::orderBy(DB::raw('RAND()'))->take(2)->get();
        $book = ListBook::orderBy(DB::raw('RAND()'))->take(1)->get();
        $television = ListTv::orderBy(DB::raw('RAND()'))->take(1)->get();
        $phone = ListMobilePhone::orderBy(DB::raw('RAND()'))->take(1)->get();
        $rev_products = $this->service->reviewed();
        $products = $this->service->most_popular();
        $products = $this->service->products_sort($products);
        return view('main-page.index', compact('block_banners', 'top_banner',
            'notebook', 'book', 'television', 'phone', 'rev_products', 'products'));
    }

    public function redirect(){
        return redirect(asset('/main-page'));
    }

    public function search(Request $request){
        $search = $request['search'];
        $top_banner = TopBanner::first();
        
>>>>>>> bbcfcfb7764e40f704a2e8732ee6ce3046a23d2b
        if($search === null){
            $products = 'Нажаль нічого не знайдено :(';
            return view('search.index', compact('top_banner', 'products'));
        }

        $notebooks = ListNotebook::where('name', 'like', '%'.$search.'%')
            ->orWhere('code', 'like', '%'.$search.'%')->get();
        $books = ListBook::where('name', 'like', '%'.$search.'%')
            ->orWhere('code', 'like', '%'.$search.'%')->get();
        $phones = ListMobilePhone::where('name', 'like', '%'.$search.'%')
            ->orWhere('code', 'like', '%'.$search.'%')->get();
        $tvs = ListTv::where('name', 'like', '%'.$search.'%')
            ->orWhere('code', 'like', '%'.$search.'%')->get();

        if(!empty($notebooks[0])) {
            $products = $notebooks;
            $link = '/notebooks/';
        }
        else if(!empty($books[0])) {
            $products = $books;
            $link = '/books/';
        }
        else if(!empty($phones[0])) {
            $products = $phones;
            $link = '/mobile-phones/';
        }
        else if(!empty($tvs[0])) {
            $products = $tvs;
<<<<<<< HEAD
            $link = '/televisions/';
=======
            $link = '/televisions/'; 
>>>>>>> bbcfcfb7764e40f704a2e8732ee6ce3046a23d2b
        }
        else{
            $products = 'Нажаль нічого не знайдено :(';
            return view('search.index', compact('top_banner', 'products'));
        }

        return view('search.index', compact('top_banner', 'products', 'link', 'search'));
    }
<<<<<<< HEAD
=======

    public function notebooks_index(Request $request){
        $top_banner = TopBanner::first();
        if($request->isMethod('get')){
            $notebooks = ListNotebook::paginate(50);
            return view('notebooks.index', compact('top_banner', 'notebooks'));
        } else {
            $arr = $this->service->arr_sort($request);
            $notebooks = $this->service->notebooks_index($request, $arr);
            return view('notebooks.index', compact('top_banner', 'notebooks', 'arr'));
        }
    }
    public function notebooks_page($id, Request $request){
        $top_banner = TopBanner::first();
        $notebook = ListNotebook::find($id);
        $reviews = Review::where('notebook_id', intval($id))->where('verify', 1)->get();
        if($request->isMethod('post')) $this->service->send_review($request);
        $this->service->cookie_splice();
        $this->service->notebooks_page($notebook);
        $rev_products = $this->service->reviewed();
        return view('notebooks.page', compact('top_banner', 'notebook', 'reviews', 'rev_products'));
    }

    public function phones_index(Request $request){
        $top_banner = TopBanner::first();
        if($request->isMethod('get')){
            $phones = ListMobilePhone::paginate(50);
            return view('mobile-phones.index', compact('top_banner', 'phones'));
        } else {
            $arr = $this->service->arr_sort($request);
            $phones = $this->service->phones_index($request, $arr);
            return view('mobile-phones.index', compact('top_banner', 'phones', 'arr'));
        }
    }

    public function phones_page($id, Request $request){
        $top_banner = TopBanner::first();
        $phone = ListMobilePhone::find($id);
        $reviews = Review::where('phone_id', intval($id))->where('verify', 1)->get();
        if($request->isMethod('post')) $this->service->send_review($request);
        $this->service->cookie_splice();
        $this->service->phones_page($phone);
        $rev_products = $this->service->reviewed();
        return view('mobile-phones.page', compact('top_banner', 'phone', 'reviews', 'rev_products'));
    }

    public function televisions_index(Request $request){
        $top_banner = TopBanner::first();
        if($request->isMethod('get')){
            $televisions = ListTv::paginate(50);
            return view('televisions.index', compact('top_banner', 'televisions'));
        } else {
            $arr = $this->service->arr_sort($request);
            $televisions = $this->service->televisions_index($request, $arr);
            return view('televisions.index', compact('top_banner', 'televisions', 'arr'));
        }
    }

    public function televisions_page($id, Request $request){
        $top_banner = TopBanner::first();
        $television = ListTv::find($id);
        $reviews = Review::where('television_id', intval($id))->where('verify', 1)->get();
        if($request->isMethod('post')) $this->service->send_review($request);
        $this->service->cookie_splice();
        $this->service->televisions_page($television);
        $rev_products = $this->service->reviewed();
        return view('televisions.page', compact('top_banner', 'television', 'reviews', 'rev_products'));
    }

    public function books_index(Request $request){
        $top_banner = TopBanner::first();
        if($request->isMethod('get')){
            $books = ListBook::paginate(50);
            return view('books.index', compact('top_banner', 'books'));
        } else {
            $arr = $this->service->arr_sort($request);
            $books = $this->service->books_index($request, $arr);
            return view('books.index', compact('top_banner', 'books', 'arr'));
        }
    }

    public function books_page($id, Request $request){
        $top_banner = TopBanner::first();
        $book = ListBook::find($id);
        $reviews = Review::where('book_id', intval($id))->where('verify', 1)->get();
        if($request->isMethod('post')) $this->service->send_review($request);
        $this->service->cookie_splice();
        $this->service->books_page($book);
        $rev_products = $this->service->reviewed();
        return view('books.page', compact('top_banner', 'book', 'reviews', 'rev_products'));
    }
>>>>>>> bbcfcfb7764e40f704a2e8732ee6ce3046a23d2b
}
