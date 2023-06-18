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

    // menghubungkan ke model pasien
    // 1 dokter dapat menangani banyak pasien
    public function pasien() {
        // karena dokter menitipkann id ke pasien
        // maka dokter menghubungkan has + kardinalitas
        // kardinalitas 1 to M dari model ini kemodel lain: hasMany
        // 1 to 1 ke model lain:hasOne
        return $this->hasMany(Pasien::class);
    }
}
