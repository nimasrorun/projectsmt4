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
            'confirm_password' => 'required|same:password'
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
        if(Auth::attempt(['email' => $request->email]))  {
            $auth = Auth::user();
            $success['token'] = $auth->createToken('auth_token')->plainTextToken; 
            $success['username'] = $auth->username;

            return response()->json([
                'status' => true,
                'message' => $success['username'] = $auth->username,
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
}
