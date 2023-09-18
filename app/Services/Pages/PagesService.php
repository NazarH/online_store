<?php

<<<<<<< HEAD
namespace App\Services\Pages;

use App\Models\Order;
use App\Models\Review;
use App\Models\Product;
use App\Models\Category;

=======
namespace App\Services\Products;

use App\Models\ListBook;
use App\Models\ListMobilePhone;
use App\Models\ListNotebook;
use App\Models\ListTv;
use App\Models\Order;
use App\Models\Review;
>>>>>>> bbcfcfb7764e40f704a2e8732ee6ce3046a23d2b
use Illuminate\Support\Facades\Auth;

class PagesService
{
<<<<<<< HEAD
   public function index($link, $id): object
   {
        $category = Category::where('name', $link)->get()[0];
        $product = Product::where('id', $id)->where('category_id', $category->id)->get();
        if (empty($product[0])) return redirect(route('pages.index'));
        else return $product = $product[0];

   }
=======
   
>>>>>>> bbcfcfb7764e40f704a2e8732ee6ce3046a23d2b
}
