<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    use HasFactory;

    public static function getAll(){
        return [
        [
            'nama'=>'Ujang',
            'alamat'=>'Depok',
            'jk'=>'16/05/2005',
            'spesialis'=>'Ilmu Mata',
            'telp'=>'082285512813'
        ],
        [
            'nama'=>'Imel',
            'alamat'=>'Bogor',
            'jk'=>'16/05/2003',
            'spesialis'=>'Ilmu Hati',
            'telp'=>'082286544313'
        ],
        [
            'nama'=>'Silvi',
            'alamat'=>'Jakarta',
            'jk'=>'16/05/2001',
            'spesialis'=>'Ilmu Saraf',
            'telp'=>'085456543'
            ],
        ];
    }
}
