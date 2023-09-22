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

class Service
{
    public function most_popular(): array
    {
        $orders_codes = [];
        $orders = Order::all();
        foreach ($orders as $order) {
            $explode = explode(' ', $order->product_code);
            foreach ($explode as $item) {
                $orders_codes[] = str_replace(['(', ')'], '', $item);
            }
        }
        $orders_codes = array_count_values($orders_codes);
        return $orders_codes;
    }

    public function productCreate($request)
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

    public function productUpdate($request, int $id)
    {
        $product = Product::find($id);
        $data = $request->validated();
        $product->update($data);
    }
}
