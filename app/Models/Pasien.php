<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;

    //menghubungkan model dengan tabel pasiens
    protected $table = 'pasiens';

    //deklarasikan kolom yang boleh diisi
    protected $fillable = ['nama', 'jk', 'alamat', 'tgl_lahir', 'telp', 'dokter_id'];

    // menghubungkan ke model dokter
    public function dokter() {
        // karena status model saat ini adalah yang ditipkan id.
        // maka dapat menggunakan belongsTo atau belongsToMany
        return $this->belongsTo(Dokter::class);
    }
}
