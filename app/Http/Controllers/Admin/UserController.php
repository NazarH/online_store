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
    public function userIndex(Request $request): View
    {
        $auth = Auth::user();
        if ($request->isMethod('get')) {
            $users = User::all();
        } else {
            if(empty($request->id)) $users = User::all();
            else $users = User::where('id', $request->id)->get();
        }
        return view('admin.user-index', compact('users', 'auth'));
    }

    public function userRole(Request $request, $id): RedirectResponse
    {
        User::find($id)->update([
            'role' => $request['userRole']
        ]);
        return redirect(asset('/admin/users'));
    }

    public function userDelete(int $id): RedirectResponse
    {
        User::find($id)->delete();
        return redirect(asset('/admin/users'));
    }
}
