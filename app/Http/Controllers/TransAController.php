<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use App\Models\Transaksi;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Redis;

class TransAController extends Controller
{
    public function index(){
        $accounts = Transaksi::with('user')->get();
        $waiting = User::where('level', 2)->count();
        $membership = User::where('level', 3)->count();
        $total = $membership * 20000;
        $membershipRemove = User::where('level', 3)->get();

        return view('backend.layouts.transaksi' , compact('accounts' , 'waiting' ,'membership' , 'total','membershipRemove' ));
    }

    public function update(Transaksi $transaksi)
    {
        $user = User::where('id', '=', $transaksi->id)->first();

        if ($user) {
            // Ubah status dari 2 menjadi 3
            $user->update([
                'level' =>  '3'
            ]);
            $path = public_path('img/img_pembayaran');

            File::delete($path . $transaksi->bukti_pembayaran);

            $transaksi->delete();

            // Redirect atau berikan respons sesuai kebutuhan Anda
            return redirect()->back()->with('success', 'Status berhasil diubah.');
        }

        // Jika model tidak ditemukan, berikan respons atau tindakan yang sesuai
        return redirect()->back()->with('error', 'User tidak ditemukan.');
    }

    public function batal(Transaksi $transaksi){
        $user = User::where('id', '=', $transaksi->id)->first();

        if ($user) {
            // Ubah status dari 2 menjadi 3
            $user->update([
                'level' =>  '1'
            ]);
            $path = public_path('img/img_pembayaran');

            File::delete($path . $transaksi->bukti_pembayaran);
            
            $transaksi->delete();

            // Redirect atau berikan respons sesuai kebutuhan Anda
            return redirect()->back()->with('success', 'Status berhasil diubah.');
        }

        return redirect()->back()->with('error', 'User tidak ditemukan');
    }

    public function revokeMember(User $user){
        if ($user) {

            $user->update([
                'level' =>  '1'
            ]);

            // Redirect atau berikan respons sesuai kebutuhan Anda
            return redirect()->back()->with('success', 'Status berhasil diubah.');
        }

        return redirect()->back()->with('error', 'User tidak ditemukan');
    }
}


