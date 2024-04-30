<?php

namespace App\Http\Controllers\Admin;

use App\Models\Dosen;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;


class DosenController extends Controller
{
    public function index()
    {
    $dosen = Dosen::all();
    return view('admin.dosen.index', ['dosen' => $dosen]);
    }

    public function create()
    {
    return view('admin.dosen.create');
    }

    public function store(Request $request)
    {
    $request->validate([
        'nama' => 'required|string',
        'pendidikan' => 'required|string',
        'role'=>'required|string',
        'nidn'=>'required|string',
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

    $newdosen = new dosen();
    $newdosen->nama = $request->nama;
    $newdosen->pendidikan = $request->pendidikan;
    $newdosen->role = $request->role;
    $newdosen->nidn = $request->nidn;
    $newdosen->gambar = $namaFile;

    $newdosen->save();

    return redirect()->route('admin.dosen.index')->with('success', 'dosen berhasil dibuat!');
    }

    public function edit($id)
    {
    $dosen = dosen::findOrFail($id);
    
    return view('admin.dosen.edit', compact('dosen'));
    }

    public function update(Request $request, $id)
    {
    $request->validate([
        'nama' => 'required|string',
        'pendidikan' => 'required|string',
        'role'=>'required|string',
        'nidn'=>'required|string',
        'gambar' => 'image|mimes:jpg,jpeg,png'
    ]);

    $dosen = dosen::findOrFail($id);

    if ($request->hasFile('gambar')) {
        $file = $request->file('gambar');
        $namaFile = $file->getClientOriginalName();
        $tujuanFile = 'aset/img';

        if (!$file->move($tujuanFile, $namaFile)) {
            return redirect()->back()->withErrors(['upload' => 'Gagal mengunggah gambar.'])->withInput();
        }
        if ($dosen->gambar && file_exists($tujuanFile . '/' . $dosen->gambar)) {
            unlink($tujuanFile . '/' . $dosen->gambar);
        }

        $dosen->gambar = $namaFile;
    }

    $dosen->nama = $request->nama;
    $dosen->pendidikan = $request->pendidikan;
    $dosen->role = $request->role;
    $dosen->nidn = $request->nidn;
    $dosen->save();

    return redirect()->route('admin.dosen.index')->with('success', 'dosen berhasil diperbarui!');
    }
    public function destroy($id)
    {
    $dosen = dosen::findOrFail($id);
    $dosen->delete();

    return redirect()->back()->with([
        'message' => 'Success Delete!',
        'alert-type' => 'danger'
    ]);
}
}
