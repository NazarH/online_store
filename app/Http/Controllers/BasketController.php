<?php

namespace App\Http\Controllers;

use App\Models\ListTv;
use App\Models\ListBook;
use App\Models\TopBanner;
use App\Models\ListNotebook;
use App\Models\ListMobilePhone;

use App\Http\Controllers\Products\BaseController;

use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class BasketController extends BaseController
{
    public function basketIndex(Request $request): View
    {
        $top_banner = TopBanner::first();
        if($request->isMethod('get')){
            $basket = $this->service->reviewed();
        } else {
            $this->service->basket_index($request);
        }
        return view('basket.index', compact('top_banner', 'basket'));
    }

    public function basketDelete(Request $request): RedirectResponse
    {
        $this->service->basket_product_delete($request->link, $request->id);
        return redirect(asset('/basket'));
    }
}
