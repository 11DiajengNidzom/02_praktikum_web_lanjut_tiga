<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return 'Selamat Datang di Website Diajeng Nidzom Yoesharnilillah';
    }

    public function about(){
        return 'Nama: Diajeng Nidzom Yoesharnilillah <br> NIM: 2041720165 <br> 
        Prodi: D4 Teknik Informatika <br> POLITEKNIK NEGERI MALANG';
    }
}
