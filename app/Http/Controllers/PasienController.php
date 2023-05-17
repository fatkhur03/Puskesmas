<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    public function index(){
        $pasiens = Pasien::getAll();
        return view('pasien.index', [
            'pasiens' => $pasiens
        ]);
    }

    public function create(){
        return view('pasien.create');
    }

    public function store(Request $request){
        dd($request->all());
    }
}
