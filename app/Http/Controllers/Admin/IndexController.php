<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

use App\Http\Controllers\BaseController;

class IndexController extends BaseController
{
    public function index(): View
    {
        $authUser = Auth::user();
        return view('admin.index', compact('authUser'));
    }
}
