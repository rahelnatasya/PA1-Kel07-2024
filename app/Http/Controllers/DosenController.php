<?php

namespace App\Http\Controllers;

use App\Models\CategoryRoom;
use App\Models\Dosen;
use Illuminate\Http\Request;


class DosenController extends Controller
{
    public function index(){
        $dosen = Dosen::all();
        $category = CategoryRoom::all();
        return view('dosen', ['dosen' => $dosen],  ['category' => $category]);
    }
}
