<?php

namespace App\Http\Controllers\API;

use App\Helpers\ApiFormatter;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = User::all();

        if($data) {
            return ApiFormatter::createApi(200, 'success', $data);
        }else {
            return ApiFormatter::createApi(400, 'failed');
        }
    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data =  DB::table('users')->where('id', '=', $id)->get();

        if($data) {
            return ApiFormatter::createApi(200, 'success', $data);
        }else {
            return ApiFormatter::createApi(400, 'failed');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
            $request->validate ([
                'username' => 'required',
                'email' => 'required',
                'nama' => 'required',
                'alamat' => 'required',
                'phone' => 'required',
            ]);
            $user = User::findOrFail($id);
            $user->update([
                'username' => $request-> username,
                'email' => $request-> email,
                'nama' => $request-> nama,
                'alamat' => $request-> alamat,
                'phone' => $request-> phone,
            ]);

            $data = User::where('id', '=', $user->id)->get();

            if($data) {
                return ApiFormatter::createApi(200, 'Success', $data);
            }else  {
                return ApiFormatter::createApi(400, 'failed');  
            }
    }
    public function updatepass(Request $request, $id)
    {
    
            $request->validate ([
                'password' => 'required',
                'confirm_pass' => 'required|same:password',
            ]);
            $user = User::findOrFail($id);

            $user->update([
                'password' => bcrypt($request-> password),
            ]);

            $data = User::where('id', '=', $user->id)->get();

            if($data) {
                return ApiFormatter::createApi(200, 'Success', $data);
            }else  {
                return ApiFormatter::createApi(400, 'failed');  
            }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
