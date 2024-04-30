<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\VisiMisi;

class VisiMisiController extends Controller
{
    public function index(){
        $visimisi = visimisi::all();
        return view('admin.visimisi.index', ['visimisi' => $visimisi]);
    }

    public function create(){
        return view('admin.visimisi.create');
    }

    public function store(Request $request){
        $request->validate([
            'judul' => 'required|string',
            'deskripsi' => 'required|string',
        ]);

        $visimisi = new visimisi([
            'judul' => $request->get('judul'),
            'deskripsi' => $request->get('deskripsi'),
        ]);

        $visimisi->save();
        return redirect()->route('admin.visimisi.index')->with('success', 'Visi Misi Tujuan berhasil di buat!');
    }

    public function update(Request $request, $id)
{
    $request->validate([
        'judul' => 'required|string',
        'deskripsi' => 'required|string',
    ]);

    $visimisi = visimisi::findOrFail($id);
    $visimisi->judul = $request->input('judul');
    $visimisi->deskripsi = $request->input('deskripsi');
    $visimisi->save();

    return redirect()->route('admin.visimisi.index')->with('success', 'Visi Misi Tujuan berhasil diperbarui!');
}

public function edit($id)
{
    $visimisi = visimisi::findOrFail($id);
    return view('admin.visimisi.edit', ['visimisi' => $visimisi]);
}

    public function destroy($id)
{
    $visimisi = visimisi::findOrFail($id);
    $visimisi->delete();

    return redirect()->route('admin.visimisi.index')->with('success', 'Visi Misi Tujuan berhasil dihapus!');
}

}
