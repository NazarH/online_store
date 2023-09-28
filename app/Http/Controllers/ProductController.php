<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Product;
use App\Models\Category;

use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function index($link, Product $product): RedirectResponse|View
    {
        $top_banner = Banner::where('banner_type', 'top')->latest()->first();
        $block_banners = Banner::where('banner_type', 'block')->get();
        $user = Auth::user();
        $product = Product::where('id', $product->id)->where('category_id', $link->id)->first();
        if (empty($product)) {
            return redirect(route('pages.index'));
        }
        return view('product.index', compact('product', 'link', 'top_banner', 'block_banners', 'user'));
    }
}
