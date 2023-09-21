<?php

namespace App\Services\Pages;

use App\Models\Order;
use App\Models\Review;
use App\Models\Product;
use App\Models\Category;

use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class PagesService
{
   public function index($link, $id): RedirectResponse|Product
   {
        $category = Category::where('name', $link)->get()[0];
        $product = Product::where('id', $id)->where('category_id', $category->id)->get();
        if (empty($product[0])) return redirect(route('pages.index'));
        else return $product = $product[0];

   }
}
