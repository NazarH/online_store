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
    public function index(Category $link, Product $prod): RedirectResponse|View
    {
        $top_banner = Banner::where('banner_type', 'top')->latest()->first();
        $user = Auth::user();
        $product = Product::where('id', $prod->id)->where('category_id', $link->id)->first();
        if (empty($product)) {
            return redirect(route('pages.index'));
        }
        return view('product.index', compact('product', 'link', 'top_banner', 'user'));
    }
}
