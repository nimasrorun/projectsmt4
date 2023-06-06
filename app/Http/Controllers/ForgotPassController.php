<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ForgotPassController extends Controller
{
    public function index(){
        return view('frontend.layouts.forgotp');
    }

    public function check(Request $request){
        $user = User::where('username', '=', $request->username)->where('email', '=', $request->email)->first();
        
        if($user){
            return view('frontend.layouts.resetp', compact('user'));
        }else{
            return route('forgot-password.index');
        }
    }

    public function reset_password(Request $request){
        $user = User::where('id', '=', $request->id)->first();

        if($request->password == $request->confirm_password){
            $user->update([
                'password' => bcrypt($request->password)
            ]);
            
            return redirect()->route('login');
        }else{
            return view('frontend.layouts.resetp', compact('user'));
        }
    }
}
