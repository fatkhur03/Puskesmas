<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use Illuminate\Http\Request;

class DokterController extends Controller
{
    //
    public function index(){
        $dokters = Dokter::all();
        return view('dokter.index', [
            'dokters' => $dokters
        ]);
    }

    public function create(){
        return view('dokter.create');
    }

    //method untuk menyimpan form tambah pasien ke database
    public function store(Request $request){
       DOkter::create([
            'nama' => $request->nama,
            'jk' => $request->jk,
            'spesialis' => $request->spesialis,
            'alamat' => $request->alamat,
            'telp' => $request->telp,
       ]);
       return redirect('/dokter');
    }

    //method untuk menghapus data pasien
    public function destroy(Request $request){
        //
        Dokter::destroy($request->id);

        return redirect('/dokter');
    }
}
