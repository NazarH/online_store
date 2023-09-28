<?php

namespace App\Services\Admin;

use App\Models\Product;
use App\Models\ProductImage;

use Illuminate\Http\Request;

class Service
{
    public function create(Request $request)
    {
        $data = $request->validated();
        $product = Product::create($data);
        foreach ($request->file('images') as $file) {
            $path = $file->store('product', 'public');
            ProductImage::create([
                'product_id' => $product->id,
                'image_url' => $path
            ]);
        }
    }

    public function update(Request $request, Product $product)
    {
        $data = $request->validated();
        $product->update($data);
    }
}
