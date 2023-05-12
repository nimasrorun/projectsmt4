<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $berita = Berita::get();
        return view('frontend.layouts.index', compact('berita'));
    }
}
