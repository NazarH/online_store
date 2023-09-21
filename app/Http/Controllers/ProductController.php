<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Product;
use App\Models\Category;

use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Products\BaseController;


class ProductController extends BaseController
{
    public function index(string $link, int $id): View
    {
        $top_banner = Banner::where('banner_type', 'top')->latest()->get()[0];
        $block_banners = Banner::where('banner_type', 'block')->get();
        $user = Auth::user();
        $product = $this->service->index($link, $id);
        return view('product.index', compact('product', 'link', 'top_banner', 'block_banners', 'user'));
    }
}
