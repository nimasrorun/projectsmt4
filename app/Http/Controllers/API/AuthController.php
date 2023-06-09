<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Validator;
use Auth; 

class AuthController extends Controller
{
    public function register(Request $request) {
        $validator = Validator::make($request->all(), [
            'username' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'confirm_password' => 'required|same:password',
            'level' => 'required'
        ]);

        if($validator->fails()) { 
            return response()->json([
                'status' => false,
                'message' => 'Ada kesalahan',
                'data' => $validator->errors()
            ]);    
        }
        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $user = User::create($input);

        $success['token'] = $user->createToken('auth_token')->plainTextToken;
        $success['username'] = $user->username;

        return response()->json([
            'status' => true, 
            'message' => 'sukses belajar',
            'data' => $success
        ]);
    }

    public function login(Request $request) {
        if(Auth::attempt(['username' => $request->username, 'password' => $request->password]))  {
            $auth = Auth::user();
            $success['token'] = $auth->createToken('auth_token')->plainTextToken; 
            $success['username'] = $auth->username;
            $success['id'] = $auth->id;
            return response()->json([
                'status' => true,
                'message' => $success['username'] = $auth->username,
                'data' => $success
            ]);
        }else {
            return response()->json([
                'status' => false,
                'message' => 'Username dan password salah',
                'data' => null
            ]);
        }
    }

    public function forgotPass(Request $request) {
        $user = User::where("email", '=',  $request->email)->first();
        if($user)  {
            //$User = Auth::user();
            //$success['token'] = $user->createToken('auth_token')->plainTextToken;
            $success['username'] = $user->username;
            $success['id'] = $user->id;

            return response()->json([
                'status' => true,
                'message' => 'Email terdaftar',
                'data' => $success
            ]);
        }else {
            return response()->json([
                'status' => false,
                'message' => 'Email tidak terdaftar',
                'data' => null
            ]);
        }
    }

    public function logout(Request $request) {
        $request->User()->tokens()->delete();
        return response()->json([
            'message' => 'log out success'
        ]);
    }
}
