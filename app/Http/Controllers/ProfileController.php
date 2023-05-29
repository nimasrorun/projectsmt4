<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(){
        return view('frontend.layouts.profile');
    }

    public function edit(){
        return view('frontend.layouts.editp');
    }

    public function update(Request $request, User $user){
        $user->update([
            'username' => $request->username,
            'email' => $request->email,
            'phone' => $request->phone
        ]);

        return redirect()->route('profile.index');
    }
}
