<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Profillulusan;
use Illuminate\Http\Request;


class ProfilLulusanController extends Controller
{
    public function index(){
        $profillulusan = Profillulusan::all();
        return view('admin.profillulusan.index', ['profillulusan' => $profillulusan]);
    }

    public function create(){
        return view('admin.profillulusan.create');
    }

    public function store(Request $request){
        $request->validate([
            'judul' => 'required|string',
            'jobtitle' => 'required|string',
            'deskripsi' => 'required|string',
        ]);

        $profillulusan = new Profillulusan([
            'judul' => $request->get('judul'),
            'jobtitle' => $request->get('jobtitle'),
            'deskripsi' => $request->get('deskripsi'),
        ]);

        $profillulusan->save();
        return redirect()->route('admin.profillulusan.index')->with('success', 'Profil Lulusan berhasil di buat!');
    }

    public function update(Request $request, $id)
{
    $request->validate([
        'judul' => 'required|string',
        'jobtitle' => 'required|string',
        'deskripsi' => 'required|string',
    ]);

    $profillulusan = Profillulusan::findOrFail($id);
    $profillulusan->judul = $request->input('judul');
    $profillulusan->jobtitle = $request->input('jobtitle');
    $profillulusan->deskripsi = $request->input('deskripsi');
    $profillulusan->save();

    return redirect()->route('admin.profillulusan.index')->with('success', 'Profil Lulusan berhasil diperbarui!');
}

public function edit($id)
{
    $profillulusan = Profillulusan::findOrFail($id);
    return view('admin.profillulusan.edit', ['profillulusan' => $profillulusan]);
}

    public function destroy($id)
{
    $profillulusan = Profillulusan::findOrFail($id);
    $profillulusan->delete();

    return redirect()->route('admin.profillulusan.index')->with('success', 'Profil Lulusan berhasil dihapus!');
}


}
