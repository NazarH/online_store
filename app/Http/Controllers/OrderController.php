<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\ListTv;
use App\Models\ListBook;
use App\Models\ListNotebook;
use App\Models\ListMobilePhone;

use App\Http\Requests\Order\OrderRequest;
use App\Http\Controllers\Products\BaseController;

use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class OrderController extends BaseController
{

    public function orderIndex(Request $request): View
    {
        $product = $this->service->order_index($request);
        if(empty($product)) return redirect(asset('/main-page'));
        return view('order.index', compact('product'));
    }

    public function orderPost(OrderRequest $request): RedirectResponse
    {
        $data = $request->validated();
        if(!empty(Auth::user()->id)) $data['user_id'] = Auth::user()->id;
        $data = $this->service->not_null($data);
        Order::create($data);
        return redirect(asset('/main-page'));
    }

    public function ordersIndex(): View
    {
        $product = $this->service->reviewed();
        if(empty($product)) return redirect(asset('/main-page'));
        return view('order.index', compact('product'));
    }
}
