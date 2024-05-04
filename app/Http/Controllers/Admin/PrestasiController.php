<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Prestasi;
use Illuminate\Http\Request;


class PrestasiController extends Controller
{
    public function index()
    {
        $prestasi = Prestasi::all();
        return view('admin.prestasi.index', compact('prestasi'));
    }

    public function create()
    {
        return view('admin.prestasi.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string',
            'jenisprestasi' => 'required|string',
            'deskripsi' => 'required|string',
        ]);

        $prestasi = new Prestasi([
            'nama' => $request->get('nama'),
            'jenisprestasi' => $request->get('jenisprestasi'),
            'deskripsi' => $request->get('deskripsi'),
        ]);

        $prestasi->save();
        return redirect()->route('admin.prestasi.index')->with('success', 'prestasi berhasil dibuat!');
    }

    public function edit($id)
    {
        $prestasi = Prestasi::findOrFail($id);
        
        return view('admin.prestasi.edit', compact('prestasi'));
    }
    
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string',
            'jenisprestasi' => 'required|string',
            'deskripsi' => 'required|string',
        ]);
    
        $prestasi = Prestasi::findOrFail($id);
        
        $prestasi->nama = $request->input('nama');
        $prestasi->jenisprestasi = $request->input('jenisprestasi');
        $prestasi->deskripsi = $request->input('deskripsi');
        
        $prestasi->save();

        return redirect()->route('admin.prestasi.index')->with('success', 'prestasi berhasil diperbarui!');
    }
    
    public function destroy($id)
    {
        $prestasi = Prestasi::find($id);

        if ($prestasi) {
            $prestasi->delete();
            
            return redirect()->route('admin.prestasi.index')->with('success', 'Prestasi berhasil dihapus.');
        } else {
            return redirect()->route('admin.prestasi.index')->with('error', 'Prestasi tidak ditemukan.');
        }
}
}