<?php

namespace App\Http\Controllers;

use App\Models\Fakultas;
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

    public function create()
    {
        $fakultas = Fakultas::orderBy('nama_fakultas', 'ASC')->get();
        return view('prodi.create')->with('fakultas', $fakultas);
    }
    public function store(Request $request)
    {
        //dd($request);
        //dd($request->nama_fakultas);
        $validasi = $request->validate([
            'nama_prodi' => 'required|unique:prodi',
            'fakultas_id' => 'required',
            
 
        ]);

      


        //dd($validasi);

        $prodi = new prodi();
        $prodi->nama_prodi = $validasi['nama_prodi'];
        $prodi->fakultas_id = $validasi['fakultas_id'];
        $prodi->save();

        return redirect()->route('prodi.index')->with('success', "Data prodi".$validasi ['nama_prodi']." Berhasil disimpan");
    }

}
