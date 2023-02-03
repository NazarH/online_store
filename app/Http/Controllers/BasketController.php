<?php

namespace App\Http\Controllers;

use App\Models\ListBook;
use App\Models\ListMobilePhone;
use App\Models\ListNotebook;
use App\Models\ListTv;
use App\Models\TopBanner;
use Illuminate\Http\Request;

class BasketController extends \App\Http\Controllers\Products\BaseController
{
    public function basket_index(Request $request){
        $top_banner = TopBanner::first();
        if($request->isMethod('get')){
            $basket = $this->service->reviewed();
            return view('basket.index', compact('top_banner', 'basket'));
        } else {
            $this->service->basket_index($request);
        }
    }

    public function basket_delete(Request $request){
        $this->service->basket_product_delete($request->link, $request->id);
        return redirect(asset('/basket'));
    }
}
