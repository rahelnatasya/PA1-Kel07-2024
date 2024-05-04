<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Laboratorium;
use Illuminate\Http\Request;


class LaboratoriumController extends Controller
{
    public function index()
        {
        $laboratorium = Laboratorium::all();
        return view('admin.laboratorium.index', ['laboratorium' => $laboratorium]);
        }

        public function create()
        {
        return view('admin.laboratorium.create');
        }

        public function store(Request $request)
        {
            $request->validate([
                'nama' => 'required|string',
                'deskripsi' => 'required|string',
                'gambar' => 'image|mimes:jpg,jpeg,png'
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
        
            $newlaboratorium = new Laboratorium();
            $newlaboratorium->nama = $request->nama;
            $newlaboratorium->deskripsi = $request->deskripsi;
            $newlaboratorium->gambar = $namaFile;
        
            $newlaboratorium->save();
        
            return redirect()->route('admin.laboratorium.index')->with('success', 'Laboratorium berhasil dibuat!');
        }
        public function edit($id)
        {
        $laboratorium = Laboratorium::findOrFail($id);
        
        return view('admin.laboratorium.edit', compact('laboratorium'));
        }
    
        public function update(Request $request, $id)
        {
            $request->validate([
                'nama' => 'required|string',
                'deskripsi' => 'required|string',
                'gambar' => 'image|mimes:jpg,jpeg,png'
            ]);
        
            $laboratorium = Laboratorium::findOrFail($id);
        
            if ($request->hasFile('gambar')) {
                $file = $request->file('gambar');
                $namaFile = $file->getClientOriginalName();
                $tujuanFile = 'aset/img';
        
                if (!$file->move($tujuanFile, $namaFile)) {
                    return redirect()->back()->withErrors(['upload' => 'Gagal mengunggah gambar.'])->withInput();
                }
                if ($laboratorium->gambar && file_exists($tujuanFile . '/' . $laboratorium->gambar)) {
                    unlink($tujuanFile . '/' . $laboratorium->gambar);
                }
        
                $laboratorium->gambar = $namaFile;
            }
        
            $laboratorium->nama = $request->nama;
            $laboratorium->deskripsi = $request->deskripsi;
            $laboratorium->save();
        
            return redirect()->route('admin.laboratorium.index')->with('success', 'Laboratorium berhasil diperbarui!');
        }
        public function destroy($id)
        {
            $laboratorium = Laboratorium::findOrFail($id);
            $laboratorium->delete();

            return redirect()->back()->with([
            'message' => 'Success Delete!',
            'alert-type' => 'danger'
        ]);
    }
}

