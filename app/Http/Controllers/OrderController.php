<?php

namespace App\Http\Controllers;

use App\Http\Requests\Order\OrderRequest;
use App\Models\ListBook;
use App\Models\ListMobilePhone;
use App\Models\ListNotebook;
use App\Models\ListTv;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends \App\Http\Controllers\Products\BaseController
{

    public function order_index(Request $request){
        $product = $this->service->order_index($request);
        if(empty($product)) return redirect(asset('/main-page'));
        return view('order.index', compact('product'));
    }

    public function order_post(OrderRequest $request){
        $data = $request->validated();
        if(!empty(Auth::user()->id)) $data['user_id'] = Auth::user()->id;
        $data = $this->service->not_null($data);
        Order::create($data);
        return redirect(asset('/main-page'));
    }

    public function orders_index(){
        $product = $this->service->reviewed();
        if(empty($product)) return redirect(asset('/main-page'));
        return view('order.index', compact('product'));
    }
}
