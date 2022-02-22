<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ParamController extends Controller
{
    public function news(){
        return 'Berikut ini adalah list berita-berita pada tahun 2022';
    }
    public function berita($judul){
        return 'Berikut ini adalah berita'.$judul;
    }
}
