<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimoni;
use Illuminate\Http\Request;

class TestimoniController extends Controller
{
    public function index()
    {
    $testimoni = Testimoni::all();
    return view('admin.testimoni.index', ['testimoni' => $testimoni]);
    }

    public function create()
    {
        return view('admin.testimoni.create');
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'content' => 'required|string',
            'jobdescription' => 'required|string',
            'images' => 'image|mimes:jpg,jpeg,png|max:5000',
            'created_by'=>'required|string',
            'updated_by'=>'required|string'
        ]);
    
        $namaFile = null;
        if ($request->hasFile('images')) {
            $file = $request->file('images');
            $namaFile = $file->getClientOriginalName();
            $tujuanFile = 'aset/img';
    
            if (!$file->move($tujuanFile, $namaFile)) {
                return redirect()->back()->withErrors(['upload' => 'Gagal mengunggah gambar.'])->withInput();
            }
        }
    
        $newtestimoni = new Testimoni();
        $newtestimoni->name = $request->name;
        $newtestimoni->content = $request->content;
        $newtestimoni->jobdescription = $request->jobdescription;
        $newtestimoni->created_by = $request->created_by;
        $newtestimoni->updated_by = $request->updated_by;
        $newtestimoni->images = $namaFile;
    
        $newtestimoni->save();
    
        return redirect()->route('admin.testimoni.index')->with('success', 'testimoni berhasil dibuat!');
    }
    
    public function edit($id)
    {
    $testimoni = Testimoni::findOrFail($id);
    
    return view('admin.testimoni.edit', compact('testimoni'));
    }

    public function update(Request $request, $id)
    {
    $request->validate([
        'name' => 'required|string',
        'content' => 'required|string',
        'jobdescription' => 'required|string',
        'images' => 'image|mimes:jpg,jpeg,png|max:5000',
        'created_by'=>'required|string',
        'updated_by'=>'required|string'

    ]);

    $testimoni = Testimoni::findOrFail($id);

    if ($request->hasFile('images')) {
        $file = $request->file('images');
        $namaFile = $file->getClientOriginalName();
        $tujuanFile = 'aset/img';

        if (!$file->move($tujuanFile, $namaFile)) {
            return redirect()->back()->withErrors(['upload' => 'Gagal mengunggah gambar.'])->withInput();
        }
        if ($testimoni->images && file_exists($tujuanFile . '/' . $testimoni->images)) {
            unlink($tujuanFile . '/' . $testimoni->images);
        }

        $testimoni->images = $namaFile;
    }

    $testimoni->name = $request->name;
    $testimoni->content = $request->content;
    $testimoni->jobdescription = $request->jobdescription;
    $testimoni->created_by = $request->created_by;
    $testimoni->updated_by = $request->updated_by;

    $testimoni->save();

    return redirect()->route('admin.testimoni.index')->with('success', 'testimoni berhasil diperbarui!');
    }
    public function destroy($id)
    {
    $testimoni = Testimoni::findOrFail($id);
    $testimoni->delete();

    return redirect()->back()->with([
        'message' => 'Success Delete!',
        'alert-type' => 'danger'
    ]);
}
}
