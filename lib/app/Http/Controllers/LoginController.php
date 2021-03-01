<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function getLogin(){
        return view('backend.login');
    }

    public function postLogin(Request $request){
        $arr = [
            'name' => $request->name,
            'password' => $request->password
        ];
        if(Auth::attempt($arr)){
            return redirect('admin/home');
        }else {
            return back()->withInput()->with('error', 'Sai tài khoản hoặc mật khẩu');
        }
    }
}
