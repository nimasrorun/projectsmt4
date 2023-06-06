<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use Intervention\Image\Facades\Image;

class BeritaController extends Controller
{
    public function index(){
        $berita = Berita::get();
        return view('backend.layouts.berita', compact('berita'));
    }
    
    public function store(Request $request){

        $this->validate($request, [
            'file' => 'max:2048'
        ]);

        $file = $request->file('file');

        $fileName = "IMG_BERITA_".uniqid().'.'.$file->getClientOriginalExtension();

        $canvas = Image::canvas(200, 150);

        $resizeImage = Image::make($file)->resize(null, 200, function($constraint) {
            $constraint->aspectRatio();
        });

        $canvas->insert($resizeImage, 'center');
        $tujuan_upload = 'frontend/assets/img/berita_image';

        if(!File::isDirectory($tujuan_upload)){
            File::makeDirectory($tujuan_upload, 0777, true);
        }

        if($canvas->save($tujuan_upload. '/' . $fileName)){
            Berita::create([
                'judul_berita' => $request->input('txt_judul'),
                'dekripsi_berita' => $request->input('txt_isi'),
                'link' => $request->input('txt_link'),
                'gambar' => $fileName
            ]);
        }

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
