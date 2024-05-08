<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\StrukturDosen;
use Illuminate\Http\Request;


class StrukturDosenController extends Controller
{
    public function index()
    {
    $strukturdosen = StrukturDosen::all();
    return view('admin.strukturdosen.index', ['strukturdosen' => $strukturdosen]);
    }

    public function create()
    {
    return view('admin.strukturdosen.create');
    }

    public function store(Request $request)
    {
    $request->validate([
        'name' => 'required|string',
        'posisition' => 'required|string',
        'images' => 'image|mimes:jpg,jpeg,png|max:5000'
    ]);

    $namaFile = null;
    if ($request->hasFile('images')) {
        $file = $request->file('images');
        $namaFile = $file->getClientOriginalName();
        $tujuanFile = 'aset/img';

        if (!$file->move($tujuanFile, $namaFile)) {
            return redirect()->back()->withErrors(['upload' => 'Gagal mengunggah images.'])->withInput();
        }
    }

    $newstrukturdosen = new StrukturDosen();
    $newstrukturdosen->name = $request->name;
    $newstrukturdosen->posisition = $request->posisition;
    $newstrukturdosen->images = $namaFile;

    $newstrukturdosen->save();

    return redirect()->route('admin.strukturdosen.index')->with('success', 'strukturdosen berhasil dibuat!');
    }

    public function edit($id)
    {
    $strukturdosen = StrukturDosen::findOrFail($id);
    
    return view('admin.strukturdosen.edit', compact('strukturdosen'));
    }

    public function update(Request $request, $id)
    {
    $request->validate([
        'name' => 'required|string',
        'posisition' => 'required|string',
        'images' => 'image|mimes:jpg,jpeg,png|max:5000'
    ]);

    $strukturdosen = StrukturDosen::findOrFail($id);

    if ($request->hasFile('images')) {
        $file = $request->file('images');
        $namaFile = $file->getClientOriginalName();
        $tujuanFile = 'aset/img';

        if (!$file->move($tujuanFile, $namaFile)) {
            return redirect()->back()->withErrors(['upload' => 'Gagal mengunggah images.'])->withInput();
        }
        if ($strukturdosen->images && file_exists($tujuanFile . '/' . $strukturdosen->images)) {
            unlink($tujuanFile . '/' . $strukturdosen->images);
        }

        $strukturdosen->images = $namaFile;
    }

    $strukturdosen->name = $request->name;
    $strukturdosen->posisition = $request->posisition;
    $strukturdosen->save();

    return redirect()->route('admin.strukturdosen.index')->with('success', 'strukturdosen berhasil diperbarui!');
    }
    public function destroy($id)
    {
    $strukturdosen = StrukturDosen::findOrFail($id);
    $strukturdosen->delete();

    return redirect()->back()->with([
        'message' => 'Success Delete!',
        'alert-type' => 'danger'
    ]);
}

}
