<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CalisanlarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://randomuser.me/api/?nat=tr&results=61');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $res = curl_exec($ch);
        curl_close($ch);

        $res = json_decode($res);
        $res = (array) $res;
        $ad = [];
        $soyad = [];
        $sehir = [];
        foreach($res['results'] as $single){
            array_push($ad,$single->name->first);
            array_push($soyad,$single->name->last);
            array_push($sehir,$single->location->city);
        }

        for($i = 0; $i < 61; $i++)
        {
            $mevki = rand(1,3);
            switch($mevki){
                case 1:
                    $mevki = 'Frontend Developer';
                    break;
                case 2:
                    $mevki = 'Backend Developer';
                    break;
                case 3:
                    $mevki = 'Fullstack Developer';
                    break;
            }
            $yetkinlik = rand(1,3);
            switch($yetkinlik){
                case 1:
                    $yetkinlik = 'Junior';
                    break;
                case 2:
                    $yetkinlik = 'Mid';
                    break;
                case 3:
                    $yetkinlik = 'Senior';
                    break;
            }

            DB::table('calisanlars')->insert([
                'ad' => $ad[$i],
                'soyad' => $soyad[$i],
                'yas' => rand(18,27),
                'mevki' => $mevki,
                'yetkinlik' => $yetkinlik,
                'yasadigi_sehir' => $sehir[$i]
            ]);
        }
    }
}
