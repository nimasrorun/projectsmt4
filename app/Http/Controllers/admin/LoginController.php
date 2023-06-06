<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('backend.layouts.loginadmin');
    }

    public function login(Request $request){
        
        $loginType = filter_var($request->username, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
        
        
        if($loginType == 'email'){
            if(Auth::attempt(['email' => $request->username, 'password' => $request->password]))  {
                if (Auth::user()->status == '2') {
                    return redirect()->route('admin.transaksi.index');
                }else{
                    return redirect()->route('admin.login');
                }
            }else{
                return redirect()->route('admin.login');
            }
        }else if($loginType == 'username'){
            if(Auth::attempt(['username' => $request->username, 'password' => $request->password])){
                if (Auth::user()->status == '2') {
                    return redirect()->route('admin.transaksi.index');
                }else{
                    return redirect()->route('admin.login');
                }
            }else{
                return redirect()->route('admin.login');
            }
        }
    }
    
    public function logout(){
        Auth::logout();
    
        return redirect()->route('admin.login');
    }
}
