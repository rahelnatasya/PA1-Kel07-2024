<?php

namespace App\Http\Controllers\Admin;

use App\Models\MrClub;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;


class MrClubController extends Controller
{
    public function index()
        {
        $mrclub = MrClub::all();
        return view('admin.mrclub.index', ['mrclub' => $mrclub]);
        }

        public function create()
        {
        return view('admin.mrclub.create');
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
    
        $newmrclub = new MrClub();
        $newmrclub->judul = $request->judul;
        $newmrclub->deskripsi = $request->deskripsi;
        $newmrclub->gambar = $namaFile;
    
        $newmrclub->save();
    
        return redirect()->route('admin.mrclub.index')->with('success', 'mrclub berhasil dibuat!');
        }

        public function edit($id)
        {
        $mrclub = MrClub::findOrFail($id);
        
        return view('admin.mrclub.edit', compact('mrclub'));
        }
    
        public function update(Request $request, $id)
        {
        $request->validate([
            'judul' => 'required|string',
            'deskripsi' => 'required|string',
            'gambar' => 'image|mimes:jpg,jpeg,png'
        ]);
    
        $mrclub = MrClub::findOrFail($id);
    
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $namaFile = $file->getClientOriginalName();
            $tujuanFile = 'aset/img';
    
            if (!$file->move($tujuanFile, $namaFile)) {
                return redirect()->back()->withErrors(['upload' => 'Gagal mengunggah gambar.'])->withInput();
            }
            if ($mrclub->gambar && file_exists($tujuanFile . '/' . $mrclub->gambar)) {
                unlink($tujuanFile . '/' . $mrclub->gambar);
            }
    
            $mrclub->gambar = $namaFile;
        }
    
        $mrclub->judul = $request->judul;
        $mrclub->deskripsi = $request->deskripsi;
        $mrclub->save();
    
        return redirect()->route('admin.mrclub.index')->with('success', 'mrclub berhasil diperbarui!');
        }
        public function destroy($id)
        {
        $mrclub = MrClub::findOrFail($id);
        $mrclub->delete();

        return redirect()->back()->with([
            'message' => 'Success Delete!',
            'alert-type' => 'danger'
        ]);
    }
}
