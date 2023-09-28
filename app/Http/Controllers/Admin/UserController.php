<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

use App\Http\Controllers\BaseController;

class UserController extends BaseController
{
    public function index(Request $request): View
    {
        $auth = Auth::user();
        $users = User::all();
        return view('admin.user-index', compact('users', 'auth'));
    }

    public function role(Request $request, User $user): RedirectResponse
    {
        $user->update([
            'role' => $request['userRole']
        ]);
        return redirect(asset('/admin/users'));
    }

    public function delete(User $user): RedirectResponse
    {
        $user->delete();
        return redirect(asset('/admin/users'));
    }
}
