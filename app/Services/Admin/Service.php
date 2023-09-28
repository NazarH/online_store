<?php

namespace App\Services\Admin;

use App\Models\Order;
use App\Models\ListTv;
use App\Models\Product;
use App\Models\TvImage;
use App\Models\ListBook;
use App\Models\BookImage;
use App\Models\MobileImage;
use App\Models\ListNotebook;
use App\Models\ProductImage;
use App\Models\NotebookImage;
use App\Models\ListMobilePhone;

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

    public function update(Request $request, int $id)
    {
        $product = Product::find($id);
        $data = $request->validated();
        $product->update($data);
    }
}
