<?php

namespace App\Http\Controllers;

use App\Models\ListTv;
use App\Models\ListBook;
use App\Models\TopBanner;
use App\Models\ListNotebook;
use Illuminate\Http\Request;
use App\Models\ListMobilePhone;
use App\Http\Controllers\Products\BaseController;

class BasketController extends BaseController
{
    public function basketIndex(Request $request): object
    {
        $top_banner = TopBanner::first();
        if($request->isMethod('get')){
            $basket = $this->service->reviewed();
            return view('basket.index', compact('top_banner', 'basket'));
        } else {
            $this->service->basket_index($request);
        }
    }

    public function basketDelete(Request $request): object
    {
        $this->service->basket_product_delete($request->link, $request->id);
        return redirect(asset('/basket'));
    }
}
