<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;

class BeritaController extends Controller
{
    public function index(){
        $berita = Berita::get();
        return view('backend.layouts.berita', compact('berita'));
    }
    
    public function store(Request $request){
        Berita::create([
            'judul_berita' => $request->input('txt_judul'),
            'dekripsi_berita' => $request->input('txt_isi'),
            'gambar' => $request->file('file')->getClientOriginalName()
        ]);

        $file = $request->file('file');
        $tujuan_upload = 'frontend/assets/img/berita_image';

        $file->move($tujuan_upload, $file->getClientOriginalName());

        return redirect()->route('berita.index');
    }

    public function destroy(Berita $beritum) {

        $image_path = 'frontend/assets/img/berita_image/' . $beritum->gambar;

        if(File::exists($image_path)){
            File::delete($image_path);
            $beritum->delete();
        }

        return redirect()->route('berita.index');
    }
}