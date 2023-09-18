<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
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
=======
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
>>>>>>> bbcfcfb7764e40f704a2e8732ee6ce3046a23d2b
        $product = $this->service->order_index($request);
        if(empty($product)) return redirect(asset('/main-page'));
        return view('order.index', compact('product'));
    }

<<<<<<< HEAD
    public function orderPost(OrderRequest $request): object
    {
=======
    public function order_post(OrderRequest $request){
>>>>>>> bbcfcfb7764e40f704a2e8732ee6ce3046a23d2b
        $data = $request->validated();
        if(!empty(Auth::user()->id)) $data['user_id'] = Auth::user()->id;
        $data = $this->service->not_null($data);
        Order::create($data);
        return redirect(asset('/main-page'));
    }

<<<<<<< HEAD
    public function ordersIndex(): object
    {
=======
    public function orders_index(){
>>>>>>> bbcfcfb7764e40f704a2e8732ee6ce3046a23d2b
        $product = $this->service->reviewed();
        if(empty($product)) return redirect(asset('/main-page'));
        return view('order.index', compact('product'));
    }
}
