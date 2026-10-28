<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PendaftaranSiswaController extends Controller
{
    public function index()
    {
        return view('pendaftaran-siswa');
    }
}
