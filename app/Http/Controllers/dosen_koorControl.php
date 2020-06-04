<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dosen_koorControl extends Controller
{
    public function index_koor(){
        return view('koor.index');
    }

    public function index_bimbingan(){
        return view('bimbing_koor.index');
    }

    public function index_pengujian(){
        return view('pengujian_koor.index');
    }

    public function index_pengajuan(){
        return view('pengajuan_koor.index');
    }

    public function index_verifikasi(){
        return view('verifikasi.index');
    }

    public function index_regis(){
        return view('regis.index');
    }

    public function index_aturjadwal(){
        return view('aturjadwal.index');
    }

    public function index_aturkp(){
        return view('bataskp.index');
    }

}
