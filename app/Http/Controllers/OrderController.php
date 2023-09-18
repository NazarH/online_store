<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\ListTv;
use App\Models\ListBook;
use App\Models\ListNotebook;
use Illuminate\Http\Request;
use App\Models\ListMobilePhone;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Order\OrderRequest;
use App\Http\Controllers\Products\BaseController;

class OrderController extends BaseController
{

    public function orderIndex(Request $request): object
    {
        $product = $this->service->order_index($request);
        if(empty($product)) return redirect(asset('/main-page'));
        return view('order.index', compact('product'));
    }

    public function orderPost(OrderRequest $request): object
    {
        $data = $request->validated();
        if(!empty(Auth::user()->id)) $data['user_id'] = Auth::user()->id;
        $data = $this->service->not_null($data);
        Order::create($data);
        return redirect(asset('/main-page'));
    }

    public function ordersIndex(): object
    {
        $product = $this->service->reviewed();
        if(empty($product)) return redirect(asset('/main-page'));
        return view('order.index', compact('product'));
    }
}
