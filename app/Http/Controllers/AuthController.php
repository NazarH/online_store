<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\Register;
use App\Http\Requests\Profile\Update;
use App\Models\Order;
use App\Models\TopBanner;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index(){
        $top_banner = TopBanner::first();
        $orders = Order::where('user_id', Auth::user()->id)->get();
        return view('profile.index', compact('top_banner', 'orders'));
    }

    public function update($id, Update $request){
        $user = User::find($id);
        $data = $request->validated();
        foreach ($data as $key => $value){
            if($value === null){unset($data[$key]); continue;}
            if($key === 'password'){$data[$key] = Hash::make($data[$key]); continue;}
        }
        $user->update($data);
        return redirect(asset('/profile'));
    }
}
