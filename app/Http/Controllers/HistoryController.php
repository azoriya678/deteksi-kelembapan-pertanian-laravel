<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\History;

class HistoryController extends Controller
{
    
    public function store(Request $request)
    {
        $history = new History();
        $history->tanggal = $request->tanggal;
        $history->jam = $request->jam;
        $history->kelembapan = $request->kelembapan;
        $history->suhu = $request->suhu;
        $history->status = $request->status;
        $history->save();

        return response()->json(['message' => 'Data history berhasil disimpan']);
    }

    public function index()
    {
        // Ambil semua data dari tabel history
        $history = History::all();

        // Kirim data ke view history.blade.php
        return view('history', compact('history'));
    }

}
