<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RekrutmenController extends Controller
{
    public function index()
    {
        return view('rekrutmen');
    }
}
