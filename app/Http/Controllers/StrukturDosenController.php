<?php

namespace App\Http\Controllers;

use App\Models\CategoryRoom;
use App\Models\Meta;
use App\Models\StrukturDosen;
use Illuminate\Http\Request;


class StrukturDosenController extends Controller
{
    public function index(){
        $strukturdosen = Meta::where('meta_key', 'SOD')->first();
        $category = CategoryRoom::all();
        return view('strukturdosen', ['strukturdosen' => $strukturdosen, 'category' => $category]); 
    }
}
