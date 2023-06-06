<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Helpers\ApiFormatter;
use Illuminate\Http\Request;
use App\Models\Schedule;
use App\Models\User;
use Validator;
use Auth; 
use Illuminate\Support\Facades\DB;
class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }
    public function schejul(Request $request, $id) {
        $validator = Validator::make($request->all(), [
            'judul' => 'required',
            'deskripsi' => 'required',
            'tanggal' => 'required',
            'jam' => 'required',
            'status' => 'required'
        ]);

        if($validator->fails()) { 
            return response()->json([
                'status' => false,
                'message' => 'Ada kesalahan',
                'data' => $validator->errors()
            ]);    
        }
        //$data =  DB::table('berita')->where('id_berita', '=', '1')->count();
        $input = $request->all();
        $Schedule = Schedule::create($input);
        //update user
        $user = User::findOrFail($id);
        
        $data =  DB::table('schedule')->where(['id'=> $id,'level'=> '1'],)->count();
        
        $user->update([
            'jmlh_kolom' => $data,
        ]);

        if($data) {
            return ApiFormatter::createApi(200, 'Success', $data);
        }else  {
            return ApiFormatter::createApi(400, 'failed');  
        }
        //
        return response()->json([
            'status' => true, 
            'message' => 'sukses belajar',
            'data' => $input
        ]);
    }
    public function getSchejul()
    {
        $data = Schedule::all();

        if($data) {
            return ApiFormatter::createApi(200, 'success', $data);
        }else {
            return ApiFormatter::createApi(400, 'failed');
        }
    }

    public function updateSchejul(Request $request, $kode_schedule)
    {
        $request->validate ([
            'status' => 'required',
        ]);
        $schedule = Schedule::findOrFail($kode_schedule);

        $schedule->update([
            'status' => $request-> status,
        ]);

        $data = Schedule::where('kode_schedule', '=', $schedule->kode_schedule)->get();

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
