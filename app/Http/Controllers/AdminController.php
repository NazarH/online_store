<?php

namespace App\Http\Controllers;

use App\Http\Requests\Banner\BannerRequest;
use App\Http\Requests\Book\BookRequest;
use App\Http\Requests\Mobile\MobileRequest;
use App\Http\Requests\Notebook\NotebookRequest;
use App\Http\Requests\TV\TvRequest;
use App\Models\BlockBanner;
use App\Models\BookImage;
use App\Models\ListBook;
use App\Models\ListMobilePhone;
use App\Models\ListNotebook;
use App\Models\ListTv;
use App\Models\MobileImage;
use App\Models\NotebookImage;
use App\Models\Order;
use App\Models\Review;
use App\Models\TopBanner;
use App\Models\TvImage;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends BaseController
{
    public function index(){
        return view('admin.index');
    }

    public function statistic_index(){
        $users_count = count(User::all());
        $products_count = count(ListNotebook::all()) + count(ListBook::all()) + count(ListTv::all()) + count(ListMobilePhone::all());
        $order_count = count(Order::all());
        $most_popular = $this->service->most_popular();
        return view('admin.statistic-index', compact('users_count', 'products_count',
            'order_count', 'most_popular'));
    }

    public function banner_index(){
        $top_banner = TopBanner::first();
        $block_banners = BlockBanner::all();
        return view('admin.banner-index', compact('top_banner', 'block_banners'));
    }

    public function banner_top_create(BannerRequest $request){
        if(count(TopBanner::all()) === 1) return view('admin.banner-index');
        $data = $request->validated();
        TopBanner::create($data);

        $top_banner = TopBanner::first();
        $block_banners = BlockBanner::all();
        return view('admin.banner-index', compact('top_banner', 'block_banners'));
    }
    public function banner_block_create(BannerRequest $request){
        if(count(BlockBanner::all()) === 4) return view('admin.banner-index');
        $data = $request->validated();
        BlockBanner::create($data);

        $top_banner = TopBanner::first();
        $block_banners = BlockBanner::all();
        return view('admin.banner-index', compact('top_banner', 'block_banners'));
    }

    public function notebook_index(Request $request){
        if($request->isMethod('get')) $product = ListNotebook::all();
        else{
            if(empty($request->code)) $product = ListNotebook::all();
            else $product = ListNotebook::where('code', $request->code)->get();
        }
        return view('admin.notebook-index', compact('product'));
    }
    public function notebook_form(Request $request, $id = null){
        if($request->isMethod('get')){
            if($request->is('admin/notebook/edit/'.$id)){
                $notebook = ListNotebook::find($id);
                $images = $notebook->images;
                return view('admin.notebook-form', compact('notebook', 'images'));
            } else {
                return view('admin.notebook-form');
            };
        }
        if($request->isMethod('post')){
            $request = app()->make(NotebookRequest::class);
            if($request->is('admin/notebook/edit/'.$id)) $this->service->notebook_update($request, $id);
            else $this->service->notebook_create($request);
            return redirect(route('admin.notebook.index'));
        }
    }
    public function notebook_delete($id){
        $images = NotebookImage::where('notebook_id', $id)->delete();
        $notebooks = ListNotebook::find($id)->delete();
        return redirect(asset('/admin/notebooks'));
    }

    public function mobile_index(Request $request){
        if($request->isMethod('get')) $product = ListMobilePhone::all();
        else{
            if(empty($request->code)) $product = ListMobilePhone::all();
            else $product = ListMobilePhone::where('code', $request->code)->get();
        }
        return view('admin.mobile-index', compact('product'));
    }
    public function mobile_form(Request $request, $id = null){
        if($request->isMethod('get')){
            if($request->is('admin/mobile-phone/edit/'.$id)){
                $phone = ListMobilePhone::find($id);
                $images = $phone->images;
                return view('admin.mobile-form', compact('phone', 'images'));
            } else return view('admin.mobile-form');
        }
        if($request->isMethod('post')){
            $request = app()->make(MobileRequest::class);
            if($request->is('admin/mobile-phone/edit/'.$id)) $this->service->mobile_update($request, $id);
            else $this->service->mobile_create($request);
            return redirect(route('admin.mobile.index'));
        }
    }
    public function mobile_delete($id){
        $images = MobileImage::where('notebook_id', $id)->delete();
        $phones = ListMobilePhone::find($id)->delete();
        return redirect(asset('/admin/mobile-phones'));
    }

    public function tv_index(Request $request){
        if($request->isMethod('get')) $product = ListTv::all();
        else{
            if(empty($request->code)) $product = ListTv::all();
            else $product = ListTv::where('code', $request->code)->get();
        }
        return view('admin.tv-index', compact('product'));
    }
    public function tv_form(Request $request, $id = null){
        if($request->isMethod('get')){
            if($request->is('admin/tv/edit/'.$id)){
                $tv = ListTv::find($id);
                $images = $tv->images;
                return view('admin.tv-form', compact('tv', 'images'));
            } else return view('admin.tv-form');
        }
        if($request->isMethod('post')){
            $request = app()->make(TvRequest::class);
            if($request->is('admin/tv/edit/'.$id))$this->service->tv_update($request, $id);
            else $this->service->tv_create($request);
            return redirect(route('admin.tv.index'));
        }
    }
    public function tv_delete($id){
        $images = TvImage::where('notebook_id', $id)->delete();
        $tvs = ListTv::find($id)->delete();
        return redirect(asset('/admin/tvs'));
    }

    public function book_index(Request $request){
        if($request->isMethod('get')) $product = ListBook::all();
        else{
            if(empty($request->code)) $product = ListBook::all();
            else $product = ListBook::where('code', $request->code)->get();
        }
        return view('admin.book-index', compact('product'));
    }
    public function book_form(Request $request, $id = null){
        if($request->isMethod('get')){
            if($request->is('admin/book/edit/'.$id)){
                $book = ListBook::find($id);
                $images = $book->images;
                return view('admin.book-form', compact('book', 'images'));
            } else return view('admin.book-form');

        }
        if($request->isMethod('post')){
            $request = app()->make(BookRequest::class);
            if($request->is('admin/book/edit/'.$id)) $this->service->book_update($request, $id);
            else $this->service->book_create($request);
            return redirect(route('admin.book.index'));
        }
    }
    public function book_delete($id){
        $images = BookImage::where('notebook_id', $id)->delete();
        $books = ListBook::find($id)->delete();
        return redirect(asset('/admin/books'));
    }

    public function review_index(){
        $reviews = Review::where('verify', 0)->get();
        return view('admin.review-index', compact('reviews'));
    }
    public function review_accept($id){
        Review::find($id)->update([
            'verify' => 1
        ]);
        return redirect(asset('/admin/reviews'));
    }
    public function review_delete($id){
        Review::find($id)->delete();
        return redirect(asset('/admin/reviews'));
    }

    public function order_index(){
        $orders = Order::all();
        return view('admin.order-index', compact('orders'));
    }
    public function order_info(Request $request){
        $order = Order::where('id', $request->id)->get();
        return view('admin.order-info', compact('order'));
    }
    public function order_accept($id){
        Order::find($id)->update([
            'verify' => 1
        ]);
        return redirect(asset('/admin/orders'));
    }
    public function order_delete($id){
        Order::find($id)->delete();
        return redirect(asset('/admin/orders'));
    }

    public function user_index(Request $request){
        if($request->isMethod('get')) $users = User::all();
        else{
            if(empty($request->id)) $users = User::all();
            else $users = User::where('id', $request->id)->get();
        }
        return view('admin.user-index', compact('users'));
    }
    public function user_role($id, Request $request){
        User::find($id)->update([
            'role' => $request['userRole']
        ]);
        return redirect(asset('/admin/users'));
    }
    public function user_delete($id){
        User::find($id)->delete();
        return redirect(asset('/admin/users'));
    }

}
