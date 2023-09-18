<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
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
=======
use App\Models\ListBook;
use App\Models\ListMobilePhone;
use App\Models\ListNotebook;
use App\Models\ListTv;
use App\Models\TopBanner;
use Illuminate\Http\Request;

class BasketController extends \App\Http\Controllers\Products\BaseController
{
    public function basket_index(Request $request){
>>>>>>> bbcfcfb7764e40f704a2e8732ee6ce3046a23d2b
        $top_banner = TopBanner::first();
        if($request->isMethod('get')){
            $basket = $this->service->reviewed();
            return view('basket.index', compact('top_banner', 'basket'));
        } else {
            $this->service->basket_index($request);
        }
    }

<<<<<<< HEAD
    public function basketDelete(Request $request): object
    {
=======
    public function basket_delete(Request $request){
>>>>>>> bbcfcfb7764e40f704a2e8732ee6ce3046a23d2b
        $this->service->basket_product_delete($request->link, $request->id);
        return redirect(asset('/basket'));
    }
}
