<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\GaleriRuangKelas;


class GaleriRuangKelasController extends Controller
{
    public function index(){
        $ruangkelas = GaleriRuangKelas::all();
        return view('admin.ruangkelas.index', ['ruangkelas' => $ruangkelas]);
    }

    public function create(){
        return view('admin.ruangkelas.create');
    }

    public function store(Request $request){
        $request->validate([
            'gambar' => 'required|image|mimes:jpg,jpeg,png',
        ]);

        $file = $request->file('gambar');
        $namaFile = $file->getClientOriginalName();
        $tujuanFile = 'aset/img';
        $file->move($tujuanFile, $namaFile);

        $newgaleris = new GaleriRuangKelas();
        $newgaleris->gambar = $namaFile;     
        $newgaleris->save(); 

        return redirect()->route('admin.ruangkelas.index')->with('success', 'Galeri Ruang Baca berhasil di buat!');

    }
        public function edit($id)
    {
        $galeri = GaleriRuangKelas::findOrFail($id);

        return view('admin.ruangkelas.edit', compact('galeri'));
    }
        public function update(Request $request, $id)
    {
        $request->validate([
            'gambar' => 'image|mimes:jpg,jpeg,png',
        ]);

        $galeri = GaleriRuangKelas::findOrFail($id);

        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $namaFile = $file->getClientOriginalName();
            $tujuanFile = 'aset/img';
            $file->move($tujuanFile, $namaFile);
            $galeri->gambar = $namaFile;
        }

        $galeri->save();

        return redirect()->route('admin.ruangkelas.index')->with('success', 'Data berhasil diperbarui.');
    }

        public function destroy($id)
    {
        $galeri = GaleriRuangKelas::findOrFail($id);

        $galeri->delete();

        return redirect()->route('admin.ruangkelas.index')->with('success', 'Data berhasil dihapus.');
    }
}
