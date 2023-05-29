<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login(Request $request){
        $loginType = filter_var($request->username, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
        

        if($loginType == 'email'){
            $user = User::where('email', '=', $request->username)->first();
            if($user && $request->password == $user->password){
                Auth::login($user);
                if(Auth::check()) return redirect()->route('home');
            }else{
                return redirect()->route('login');
            }
        }else if($loginType == 'username'){
            $user = User::where('username', '=', $request->username)->first();
            if($user && $request->password == $user->password){
                Auth::login($user);
                if(Auth::check()) return redirect()->route('home');
            }else{
                return redirect()->route('login');
            }
        }
    }

    public function register(Request $request){
        $date = Carbon::now();
        User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => $request->password,
            'joined' => $date->format('Y-m-d'),
            'level' => "1",
            'status' => "1",
            'jmlh_kolom' => '0'
        ]);

        return redirect()->route('login');
    }

    public function logout(){
        Auth::logout();

        return redirect()->route('login');
    }

    public function index(){
        return view('frontend.layouts.login');
    }
}
