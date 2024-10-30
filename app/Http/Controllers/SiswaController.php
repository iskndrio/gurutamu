<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller{
   public function index(){ 
    $title = "ini adalah halaman siswa dari controller";
    $data = Siswa::$data;
    return view('siswa.index', compact('title', 'data'));
   }
}

