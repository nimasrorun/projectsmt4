<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request){
        $loginType = filter_var($request->username, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

        if($loginType == 'email'){
            $user = User::where('email', '=', $request->username)->first();
            if($user && $request->password == $user->password){
                if($user->status == '2') {
                    Auth::login($user);
                } else {
                    return redirect()->route('admin.login');
                }
                if(Auth::check()) return redirect()->route('berita.index');
            }else{
                return redirect()->route('admin.login');
            }
        }else if($loginType == 'username'){
            $user = User::where('username', '=', $request->username)->first();
            if($user && $request->password == $user->password){
                if($user->status == '2') {
                    Auth::login($user);
                } else {
                    return redirect()->route('admin.login');
                }
                if(Auth::check()) return redirect()->route('berita.index');
            }else{
                return redirect()->route('admin.login');
            }
        }
    }

    public function logout(){
        Auth::logout();

        return redirect()->route('admin.login');
    }

    public function index(){
        return view('backend.layouts.loginadmin');
    }
}
