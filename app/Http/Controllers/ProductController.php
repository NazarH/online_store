<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Products\BaseController;


class ProductController extends BaseController
{
    public function index(string $link, int $id): object
    {
        $product = $this->service->index($link, $id);
        return view('product.index', compact('product', 'link'));
    }
}
