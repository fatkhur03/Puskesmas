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
        //validasi data form
        $request->validate([
            'nama' => 'required|min:3',
            'jk' => 'required',
            'tgl_lahir' => 'required|date',
            'alamat' => 'required',
            'telp' => 'required|numeric',
        ]);

       Pasien::create([
            'nama' => $request->nama,
            'jk' => $request->jk,
            'tgl_lahir' => $request->tgl_lahir,
            'alamat' => $request->alamat,
            'telp' => $request->telp,
       ]);
       return redirect('/pasien');
    }

    //method untuk menampilkan form edit
    public function edit($id) {
        //cari pasien berdasarkan id
        $pasien = Pasien::find($id);

        return view('pasien.edit', [
            'pasien' => $pasien
        ]);
    }

    //method untuk update pasien
    public function update($id, Request $request){
        //validasi data form
        $request->validate([
            'nama' => 'required|min:3',
            'jk' => 'required',
            'tgl_lahir' => 'required|date',
            'alamat' => 'required',
            'telp' => 'required|numeric',
        ]);

        //cari pasien berdasarkan id
        $pasien = Pasien::find($id);

        $pasien->update([
            'nama' => $request->nama,
            'jk' => $request->jk,
            'tgl_lahir' => $request->tgl_lahir,
            'alamat' => $request->alamat,
            'telp' => $request->telp,
        ]);

        return redirect('/pasien')->with('success', 'Alhamdulillah data berhasil diupdate');
    }

    //method untuk menghapus data pasien
    public function destroy(Request $request){
        //
        Pasien::destroy($request->id);

        return redirect('/pasien');
    }
}
