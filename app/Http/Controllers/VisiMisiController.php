<?php

namespace App\Http\Controllers;

use App\Models\VisiMisi;
use Illuminate\Http\Request;

class VisiMisiController extends Controller
{
    public function index(){
        $visimisi =VisiMisi::all();
        return view('visimisi', ['visimisi' => $visimisi]);
    }
}
