<?php

namespace App\Http\Controllers;

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
        $top_banner = Banner::where('banner_type', 'top')->latest()->get()[0];
        $block_banners = Banner::where('banner_type', 'block')->get();
        return view('main-page.index', compact('top_banner', 'block_banners'));
    }

    public function redirect(): object
    {
        return redirect(asset('/main-page'));
    }

    // public function search(Request $request): object
    // {
    //     $search = $request['search'];
    //     $top_banner = TopBanner::first();

    //     if($search === null){
    //         $products = 'Нажаль нічого не знайдено :(';
    //         return view('search.index', compact('top_banner', 'products'));
    //     }

    //     $notebooks = ListNotebook::where('name', 'like', '%'.$search.'%')
    //         ->orWhere('code', 'like', '%'.$search.'%')->get();
    //     $books = ListBook::where('name', 'like', '%'.$search.'%')
    //         ->orWhere('code', 'like', '%'.$search.'%')->get();
    //     $phones = ListMobilePhone::where('name', 'like', '%'.$search.'%')
    //         ->orWhere('code', 'like', '%'.$search.'%')->get();
    //     $tvs = ListTv::where('name', 'like', '%'.$search.'%')
    //         ->orWhere('code', 'like', '%'.$search.'%')->get();

    //     if(!empty($notebooks[0])) {
    //         $products = $notebooks;
    //         $link = '/notebooks/';
    //     }
    //     else if(!empty($books[0])) {
    //         $products = $books;
    //         $link = '/books/';
    //     }
    //     else if(!empty($phones[0])) {
    //         $products = $phones;
    //         $link = '/mobile-phones/';
    //     }
    //     else if(!empty($tvs[0])) {
    //         $products = $tvs;
    //         $link = '/televisions/';
    //     }
    //     else{
    //         $products = 'Нажаль нічого не знайдено :(';
    //         return view('search.index', compact('top_banner', 'products'));
    //     }

    //     return view('search.index', compact('top_banner', 'products', 'link', 'search'));
    // }
}
