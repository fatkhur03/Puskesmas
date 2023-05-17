<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;

    public static function getAll(){
        return [
        [
            'nama'=>'Budi',
            'jk'=>'l',
            'tgl_lahir'=>'12/04/2003',
            'alamat'=>'Depok',
            'telp'=>'082285512813'
        ],
        [
            'nama'=>'Elsa',
            'jk'=>'p',
            'tgl_lahir'=>'05/09/2003',
            'alamat'=>'Jaksel',
            'telp'=>'56789765445'
        ],
        [
            'nama'=>'Asep',
            'jk'=>'l',
            'tgl_lahir'=>'10/11/2002',
            'alamat'=>'Beji',
            'telp'=>'6578978676545'
            ],
        ];
    }
}
