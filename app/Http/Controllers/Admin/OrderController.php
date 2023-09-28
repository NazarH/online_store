<?php

namespace App\Http\Controllers\Admin;

use App\Models\Order;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

use App\Http\Controllers\BaseController;

class OrderController extends BaseController
{
    public function index(): View
    {
        $orders = Order::all();
        return view('admin.order-index', compact('orders'));
    }

    public function info(Request $request): View
    {
        $order = Order::where('id', $request->id)->get();
        return view('admin.order-info', compact('order'));
    }

    public function accept(int $id): RedirectResponse
    {
        Order::find($id)->update([
            'verify' => 1
        ]);
        return redirect(asset('/admin/orders'));
    }

    public function delete(int $id): RedirectResponse
    {
        Order::find($id)->delete();
        return redirect(asset('/admin/orders'));
    }
}
