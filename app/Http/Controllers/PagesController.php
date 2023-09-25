<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Banner;
use App\Models\Review;

use App\Http\Controllers\Products\BaseController;

use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class PagesController extends BaseController
{
    public function index(): View
    {
        $top_banner = Banner::where('banner_type', 'top')->latest()->get()[0];
        $block_banners = Banner::where('banner_type', 'block')->get();
        $user = Auth::user();
        return view('main-page.index', compact('top_banner', 'block_banners', 'user'));
    }

    public function redirect(): RedirectResponse
    {
        return redirect(asset('/main-page'));
    }
}
