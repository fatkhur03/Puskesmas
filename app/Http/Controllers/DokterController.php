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
        //validasi data form
        $request->validate([
            'nama' => 'required|min:3',
            'jk' => 'required',
            'spesialis' => 'required',
            'alamat' => 'required',
            'telp' => 'required|numeric',
        ]);

       DOkter::create([
            'nama' => $request->nama,
            'jk' => $request->jk,
            'spesialis' => $request->spesialis,
            'alamat' => $request->alamat,
            'telp' => $request->telp,
       ]);
       return redirect('/dokter');
    }

    //method untuk menampilkan form edit
    public function edit($id) {
        //cari pasien berdasarkan id
        $dokter = Dokter::find($id);

        return view('dokter.edit', [
            'dokter' => $dokter
        ]);
    }

     //method untuk update pasien
     public function update($id, Request $request){
        //validasi data form
        $request->validate([
            'nama' => 'required|min:3',
            'jk' => 'required',
            'spesialis' => 'required',
            'alamat' => 'required',
            'telp' => 'required|numeric',
        ]);

        //cari pasien berdasarkan id
        $dokter = Dokter::find($id);

        $dokter->update([
            'nama' => $request->nama,
            'jk' => $request->jk,
            'spesialis' => $request->spesialis,
            'alamat' => $request->alamat,
            'telp' => $request->telp,
        ]);

        return redirect('/dokter')->with('success', 'Alhamdulillah data berhasil diupdate');
    }

    //method untuk menghapus data dokter
    public function destroy(Request $request){
        //
        Dokter::destroy($request->id);

        return redirect('/dokter');
    }
}
