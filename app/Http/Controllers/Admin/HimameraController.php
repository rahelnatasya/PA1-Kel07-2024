<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Himamera;
use Illuminate\Http\Request;

class HimameraController extends Controller
{
    public function index()
        {
        $himamera = Himamera::all();
        return view('admin.himamera.index', ['himamera' => $himamera]);
        }

        public function create()
        {
        return view('admin.himamera.create');
        }

        public function store(Request $request)
        {
        $request->validate([
            'judul' => 'required|string',
            'deskripsi' => 'required|string',
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
    
        $newHimamera = new Himamera();
        $newHimamera->judul = $request->judul;
        $newHimamera->deskripsi = $request->deskripsi;
        $newHimamera->gambar = $namaFile;
    
        $newHimamera->save();
    
        return redirect()->route('admin.himamera.index')->with('success', 'Himamera berhasil dibuat!');
        }

        public function edit($id)
        {
        $himamera = Himamera::findOrFail($id);
        
        return view('admin.himamera.edit', compact('himamera'));
        }
    
        public function update(Request $request, $id)
        {
        $request->validate([
            'judul' => 'required|string',
            'deskripsi' => 'required|string',
            'gambar' => 'image|mimes:jpg,jpeg,png'
        ]);
    
        $himamera = Himamera::findOrFail($id);
    
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $namaFile = $file->getClientOriginalName();
            $tujuanFile = 'aset/img';
    
            if (!$file->move($tujuanFile, $namaFile)) {
                return redirect()->back()->withErrors(['upload' => 'Gagal mengunggah gambar.'])->withInput();
            }
            if ($himamera->gambar && file_exists($tujuanFile . '/' . $himamera->gambar)) {
                unlink($tujuanFile . '/' . $himamera->gambar);
            }
    
            $himamera->gambar = $namaFile;
        }
    
        $himamera->judul = $request->judul;
        $himamera->deskripsi = $request->deskripsi;
        $himamera->save();
    
        return redirect()->route('admin.himamera.index')->with('success', 'Himamera berhasil diperbarui!');
        }
        public function destroy($id)
        {
        $himamera = Himamera::findOrFail($id);
        $himamera->delete();

        return redirect()->back()->with([
            'message' => 'Success Delete!',
            'alert-type' => 'danger'
        ]);
    }
}
