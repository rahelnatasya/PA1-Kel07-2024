<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Asrama;
use Illuminate\Http\Request;

class AsramaController extends Controller
{
    public function index()
    {
    $asrama = Asrama::all();
    return view('admin.asrama.index', ['asrama' => $asrama]);
    }

    public function create()
    {
    return view('admin.asrama.create');
    }

    public function store(Request $request)
    {
    $request->validate([
        'nama' => 'required|string',
        'gambar' => 'image|mimes:jpg,jpeg,png|'
    ]);

    $namaFile = null;
    if ($request->hasFile('gambar')) {
        $file = $request->file('gambar');
        $namaFile = $file->getClientOriginalName();
        $tujuanFile = 'aset/img';

        if (!$file->move($tujuanFile, $namaFile)) {
            return redirect()->back()->withErrors(['upload' => 'Gagal mengunggah gambar.'])->withInput();
        }
    }

    $newasrama = new Asrama();
    $newasrama->nama = $request->nama;
    $newasrama->gambar = $namaFile;

    $newasrama->save();

    return redirect()->route('admin.asrama.index')->with('success', 'asrama berhasil dibuat!');
    }

    public function edit($id)
    {
    $asrama = Asrama::findOrFail($id);
    
    return view('admin.asrama.edit', compact('asrama'));
    }

    public function update(Request $request, $id)
    {
    $request->validate([
        'nama' => 'required|string',
        'gambar' => 'image|mimes:jpg,jpeg,png'
    ]);

    $asrama = Asrama::findOrFail($id);

    if ($request->hasFile('gambar')) {
        $file = $request->file('gambar');
        $namaFile = $file->getClientOriginalName();
        $tujuanFile = 'aset/img';

        if (!$file->move($tujuanFile, $namaFile)) {
            return redirect()->back()->withErrors(['upload' => 'Gagal mengunggah gambar.'])->withInput();
        }
        if ($asrama->gambar && file_exists($tujuanFile . '/' . $asrama->gambar)) {
            unlink($tujuanFile . '/' . $asrama->gambar);
        }

        $asrama->gambar = $namaFile;
    }

    $asrama->nama = $request->nama;
    $asrama->deskripsi = $request->deskripsi;
    $asrama->save();

    return redirect()->route('admin.asrama.index')->with('success', 'asrama berhasil diperbarui!');
    }
    public function destroy($id)
    {
    $asrama = Asrama::findOrFail($id);
    $asrama->delete();

    return redirect()->back()->with([
        'message' => 'Success Delete!',
        'alert-type' => 'danger'
    ]);
}

}
