<?php

namespace App\Http\Controllers\Admin;

use App\Models\Banner;

use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

use App\Http\Controllers\BaseController;
use App\Http\Requests\Banner\BannerRequest;

class BannerController extends BaseController
{
    public function index(): View
    {
        $banners = Banner::all();
        return view('admin.banner-index', compact('banners'));
    }

    public function create(BannerRequest $request): RedirectResponse
    {
        $data = $request->validated();
        Banner::create($data);
        return redirect(route('admin.banner.index'));
    }
}
