<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\GaleriRuangBaca;


class GaleriRuangBacaController extends Controller
{
    public function index(){
        $ruangbaca = GaleriRuangBaca::all();
        return view('admin.ruangbaca.index', ['ruangbaca' => $ruangbaca]);
    }

    public function create(){
        return view('admin.ruangbaca.create');
    }

    public function store(Request $request){
        $request->validate([
            'gambar' => 'required|image|mimes:jpg,jpeg,png',
        ]);

        $file = $request->file('gambar');
        $namaFile = $file->getClientOriginalName();
        $tujuanFile = 'aset/img';
        $file->move($tujuanFile, $namaFile);

        $newgaleris = new GaleriRuangBaca();
        $newgaleris->gambar = $namaFile;     
        $newgaleris->save(); 

        return redirect()->route('admin.ruangbaca.index')->with('success', 'Galeri Ruang Baca berhasil di buat!');

    }
        public function edit($id)
    {
        $galeri = GaleriRuangBaca::findOrFail($id);

        return view('admin.ruangbaca.edit', compact('galeri'));
    }
        public function update(Request $request, $id)
    {
        $request->validate([
            'gambar' => 'image|mimes:jpg,jpeg,png',
        ]);

        $galeri = GaleriRuangBaca::findOrFail($id);

        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $namaFile = $file->getClientOriginalName();
            $tujuanFile = 'aset/img';
            $file->move($tujuanFile, $namaFile);
            $galeri->gambar = $namaFile;
        }

        $galeri->save();

        return redirect()->route('admin.ruangbaca.index')->with('success', 'Data berhasil diperbarui.');
    }

        public function destroy($id)
    {
        $galeri = GaleriRuangBaca::findOrFail($id);

        $galeri->delete();

        return redirect()->route('admin.ruangbaca.index')->with('success', 'Data berhasil dihapus.');
    }

}
