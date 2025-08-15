<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\History;

class HistorySeeder extends Seeder
{
    public function run()
    {
        History::create([
            'tanggal' => '2025-03-26',
            'jam' => '14:00',
            'kelembapan' => 75
        ]);
    }
}
