<?php

namespace App\Http\Controllers;

use App\Models\CategoryRoom;
use App\Models\VisiMisi;
use Illuminate\Http\Request;

class VisiMisiController extends Controller
{
    public function index(){
        $visimisi =VisiMisi::all();
        $category = CategoryRoom::all();
        return view('visimisi', ['visimisi' => $visimisi],  ['category' => $category]);
    }
}
