<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    //
    public function index(){
        $pasiens = Pasien::all();
        return view('pasien.index', [
            'pasiens' => $pasiens
        ]);
    }

    public function create(){
        return view('pasien.create');
    }

    //method untuk menyimpan form tambah pasien ke database
    public function store(Request $request){
       Pasien::create([
            'nama' => $request->nama,
            'jk' => $request->jk,
            'tgl_lahir' => $request->tgl_lahir,
            'alamat' => $request->alamat,
            'telp' => $request->telp,
       ]);
       return redirect('/pasien');
    }

    //method untuk menghapus data pasien
    public function destroy(Request $request){
        //
        Pasien::destroy($request->id);

        return redirect('/pasien');
    }
}
