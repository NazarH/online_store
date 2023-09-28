<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use App\Models\Category;
use App\Models\ProductAttribute;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

use App\Http\Requests\Product\ProductRequest;
use App\Http\Requests\Product\ProductAttrRequest;
use App\Http\Requests\Product\ProductUpdateRequest;

use App\Http\Controllers\BaseController;

class ProductController extends BaseController
{
    public function index(Request $request): View
    {
        $products = Product::all();
        return view('admin.product-index', compact('products'));
    }

    public function createForm(Request $request): View|RedirectResponse
    {
        $categories = Category::all();
        return view('admin.product-form', compact('categories'));
    }

    public function create(Request $request): View|RedirectResponse
    {
        $request = app()->make(ProductRequest::class);
        $this->service->productCreate($request);
        return redirect(route('admin.product.index'));
    }

    public function updateForm(Request $request, Product $product): View|RedirectResponse
    {
        $attributes = ProductAttribute::where('product_id', $product->id)->get();
        return view('admin.product-update', compact('product', 'attributes'));
    }

    public function update(Request $request, Product $product): View|RedirectResponse
    {
        $request = app()->make(ProductUpdateRequest::class);
        $this->service->productUpdate($request, $product->id);
        return redirect(route('admin.product.update', $product));
    }

    public function add(ProductAttrRequest $request, int $id): RedirectResponse
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
}
