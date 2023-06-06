<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class TransaksiController extends Controller
{
    public function index(){
        return view('frontend.layouts.transaksi');
    }

    public function pembayaran(Request $request){
        $date = Carbon::now();

        $user = User::where('id', '=', Auth::user()->id);

        $file = $request->file('bukti_pembayaran');

        $fileName = "img_pembayaran_". uniqid() . "." . $file->getClientOriginalExtension();

        $tujuan_upload = public_path('img/img_pembayaran');

        if(!File::isDirectory($tujuan_upload)){
            File::makeDirectory($tujuan_upload, 0777, true);
        }

        if($file->move($tujuan_upload, $fileName)){
            Transaksi::create([
                'tanggal' => $date->format('Y-m-d'),
                'harga' => '20000',
                'bukti_pembayaran' => $fileName,
                'nama_akun_bank' => $request->nama_akun_bank,
                'nomer_rekening' => $request->nomer_rekening,
                'kode_pembayaran' => $request->kode_pembayaran,
                'id' => Auth::user()->id
            ]);

            $user->update([
                'level' =>'2'
            ]);
        }

        return redirect()->route('transaksi.index');
    }
}
