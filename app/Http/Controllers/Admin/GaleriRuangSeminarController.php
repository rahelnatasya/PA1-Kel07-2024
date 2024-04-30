<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\GaleriRuangSeminar;

class GaleriRuangSeminarController extends Controller
{
    public function index(){
        $ruangseminar = GaleriRuangSeminar::all();
        return view('admin.ruangseminar.index', ['ruangseminar' => $ruangseminar]);
    }

    public function create(){
        return view('admin.ruangseminar.create');
    }

    public function store(Request $request){
        $request->validate([
            'gambar' => 'required|image|mimes:jpg,jpeg,png',
        ]);

        $file = $request->file('gambar');
        $namaFile = $file->getClientOriginalName();
        $tujuanFile = 'aset/img';
        $file->move($tujuanFile, $namaFile);

        $newgaleris = new GaleriRuangSeminar();
        $newgaleris->gambar = $namaFile;     
        $newgaleris->save(); 

        return redirect()->route('admin.ruangseminar.index')->with('success', 'Galeri Ruang Baca berhasil di buat!');

    }
        public function edit($id)
    {
        $galeri = GaleriRuangSeminar::findOrFail($id);

        return view('admin.ruangseminar.edit', compact('galeri'));
    }
        public function update(Request $request, $id)
    {
        $request->validate([
            'gambar' => 'image|mimes:jpg,jpeg,png',
        ]);

        $galeri = GaleriRuangSeminar::findOrFail($id);

        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $namaFile = $file->getClientOriginalName();
            $tujuanFile = 'aset/img';
            $file->move($tujuanFile, $namaFile);
            $galeri->gambar = $namaFile;
        }

        $galeri->save();

        return redirect()->route('admin.ruangseminar.index')->with('success', 'Data berhasil diperbarui.');
    }

        public function destroy($id)
    {
        $galeri = GaleriRuangSeminar::findOrFail($id);

        $galeri->delete();

        return redirect()->route('admin.ruangseminar.index')->with('success', 'Data berhasil dihapus.');
    }
}
