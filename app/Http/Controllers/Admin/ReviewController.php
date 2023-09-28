<?php

namespace App\Http\Controllers\Admin;

use App\Models\Review;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

use App\Http\Controllers\BaseController;

class ReviewController extends BaseController
{
    public function index(): View
    {
        $reviews = Review::where('verify', 0)->get();
        return view('admin.review-index', compact('reviews'));
    }

    public function accept(int $id): RedirectResponse
    {
        Review::find($id)->update([
            'verify' => 1
        ]);
        return redirect(asset('/admin/reviews'));
    }

    public function delete(int $id): RedirectResponse
    {
        Review::find($id)->delete();
        return redirect(asset('/admin/reviews'));
    }
}
