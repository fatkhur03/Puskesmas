<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    use HasFactory;

    //menghubungkan model dengan tabel dokter
    protected $table = 'dokters';

    //deklarasikan kolom yang boleh diisi
    protected $fillable = ['nama', 'jk', 'alamat', 'spesialis', 'telp'];
}
