<?php

namespace App\Http\Controllers;

use App\Models\History;

class HistoryController extends Controller
{
    public function index()
    {
        // Ambil data sejarah beserta detail deskripsi & fotonya
        $histories = History::with('details')->orderBy('history_date', 'asc')->get();

        return view('history', compact('histories'));
    }
}
