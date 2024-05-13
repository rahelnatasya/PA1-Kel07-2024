<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\CategoryRoom;
use App\Models\GaleriRuang;
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

    public function fasilitas(Request $request){
        $kategoriId = $request->input('category');
        $galery = GaleriRuang::query();

        if ($kategoriId) {
            $galery->where('room_id', $kategoriId);
        }

        $galery = $galery->latest()->get();
        $category = CategoryRoom::all();

        return view('ruang', compact('galery', 'category'));

    }
    public function show($id){
        $berita = Berita::findOrFail($id);
        $testimoni = Testimoni::all();
        $category = CategoryRoom::all();
        return view('detail_berita', compact('berita','testimoni', 'category'));
    }
}
