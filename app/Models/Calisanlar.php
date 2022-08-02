<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calisanlar extends Model
{

    public static function  DogumYili($calisan){
        $yil = 0;
        $yil = date("Y")-$calisan->yas;
        return $yil;
    }
    use HasFactory;
}
