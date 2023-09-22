<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Order;
use App\Models\Banner;
use App\Models\Review;
use App\Models\Product;
use App\Models\Category;
use App\Models\ProductAttribute;
use App\Models\BlockBanner;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

use App\Http\Requests\Banner\BannerRequest;
use App\Http\Requests\Product\ProductRequest;
use App\Http\Requests\Category\CategoryRequest;
use App\Http\Requests\Product\ProductAttrRequest;
use App\Http\Requests\Product\ProductUpdateRequest;

class AdminController extends BaseController
{
    public function index(): View
    {
        $authUser = Auth::user();
        return view('admin.index', compact('authUser'));
    }

    // public function statisticIndex()
    // {
    //     $users_count = count(User::all());
    //     $products_count = count(ListNotebook::all()) + count(ListBook::all()) + count(ListTv::all()) + count(ListMobilePhone::all());
    //     $order_count = count(Order::all());
    //     $most_popular = $this->service->most_popular();
    //     return view('admin.statistic-index', compact('users_count', 'products_count',
    //         'order_count', 'most_popular'));
    // }

    /*
    *
    *  Банери
    *
    */

    public function bannerIndex(): View
    {
        $banners = Banner::all();
        return view('admin.banner-index', compact('banners'));
    }

    public function bannerCreate(BannerRequest $request): RedirectResponse
    {
        $data = $request->validated();
        Banner::create($data);
        return redirect(route('admin.banner.index'));
    }

    /*
    *
    *  Категорії
    *
    */

    public function categoryIndex(): View
    {
        $categories = Category::all();
        return view('admin.category-index', compact('categories'));
    }

    public function categoryCreate(CategoryRequest $request): RedirectResponse
    {
        $data = $request->validated();
        Category::create($data);
        return redirect(asset('/admin/categories'));
    }

    /*
    *
    *  Товари
    *
    */

    public function productIndex(Request $request): View
    {
        $products = Product::all();
        return view('admin.product-index', compact('products'));
    }

    public function productCreate(Request $request): View|RedirectResponse
    {
        if($request->isMethod('get')){
            $categories = Category::all();
            return view('admin.product-form', compact('categories'));
        } else {
            $request = app()->make(ProductRequest::class);
            $this->service->productCreate($request);
            return redirect(route('admin.product.index'));
        }
    }

    public function productUpdate(Request $request, int $id): View|RedirectResponse
    {
        if ($request->isMethod('get')) {
            $product = Product::find($id);
            $attributes = ProductAttribute::where('product_id', $id)->get();
            return view('admin.product-update', compact('product', 'attributes'));
        } else {
            $request = app()->make(ProductUpdateRequest::class);
            $this->service->productUpdate($request, $id);
            return redirect(route('admin.product.update', $id));
        }
    }

    public function productAddAttr(ProductAttrRequest $request, int $id): RedirectResponse
    {
        $data = $request->validated();
        ProductAttribute::create([
            'product_id' => $id,
            'name' => $data['name'],
            'type' => $data['type'],
            'value' => $data['value']
        ]);
        return redirect(route('admin.product.update', $id));
    }

    public function notebookDelete(int $id): RedirectResponse
    {
        $images = NotebookImage::where('notebook_id', $id)->delete();
        $notebooks = ListNotebook::find($id)->delete();
        return redirect(asset('/admin/notebooks'));
    }


    /*
    *
    * Відгуки
    *
    */

    public function reviewIndex(): View
    {
        $reviews = Review::where('verify', 0)->get();
        return view('admin.review-index', compact('reviews'));
    }

    public function reviewAccept(int $id): RedirectResponse
    {
        Review::find($id)->update([
            'verify' => 1
        ]);
        return redirect(asset('/admin/reviews'));
    }

    public function reviewDelete(int $id): RedirectResponse
    {
        Review::find($id)->delete();
        return redirect(asset('/admin/reviews'));
    }

    /*
    *
    * Замовлення
    *
    */

    public function orderIndex(): View
    {
        $orders = Order::all();
        return view('admin.order-index', compact('orders'));
    }

    public function orderInfo(Request $request): View
    {
        $order = Order::where('id', $request->id)->get();
        return view('admin.order-info', compact('order'));
    }

    public function orderAccept(int $id): RedirectResponse
    {
        Order::find($id)->update([
            'verify' => 1
        ]);
        return redirect(asset('/admin/orders'));
    }

    public function orderDelete(int $id): RedirectResponse
    {
        Order::find($id)->delete();
        return redirect(asset('/admin/orders'));
    }

    /*
    *
    * Юзери
    *
    */

    public function userIndex(Request $request): View
    {
        $auth = Auth::user();
        if ($request->isMethod('get')) {
            $users = User::all();
        } else {
            if(empty($request->id)) $users = User::all();
            else $users = User::where('id', $request->id)->get();
        }
        return view('admin.user-index', compact('users', 'auth'));
    }

    public function userRole(Request $request, $id): RedirectResponse
    {
        User::find($id)->update([
            'role' => $request['userRole']
        ]);
        return redirect(asset('/admin/users'));
    }

    public function userDelete(int $id): RedirectResponse
    {
        User::find($id)->delete();
        return redirect(asset('/admin/users'));
    }

}
