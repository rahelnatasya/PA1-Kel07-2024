<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\CategoryRoom;
use App\Models\Testimoni;
use Illuminate\Http\Request;


class BeritaController extends Controller
{
    public function index(){
        $berita = Berita::all();
        $testimoni = Testimoni::all();
        $category = CategoryRoom::all();
        return view('beranda', compact('berita', 'testimoni', 'category'));
    }
}
