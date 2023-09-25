<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

use App\Http\Controllers\BaseController;
use App\Http\Requests\Category\CategoryRequest;

class CategoryController extends BaseController
{
    public function categoryIndex(): View
    {
        $categories = Category::all();
        return view('admin.category-index', compact('categories'));
    }

    public function categoryCreate(CategoryRequest $request): RedirectResponse
    {
        $data = $request->validated();
        Category::create($data);
        return redirect(asset('/admin/categories'));
    }
}
