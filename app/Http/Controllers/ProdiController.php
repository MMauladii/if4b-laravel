<?php

namespace App\Http\Controllers;

use App\Models\prodi;
use Illuminate\Http\Request;

class ProdiController extends Controller
{
    //
    public function index(){
        $prodi = prodi::all();
        //dd($prodi);
        return view('prodi.index')->with('prodis', $prodi);
    }
}
