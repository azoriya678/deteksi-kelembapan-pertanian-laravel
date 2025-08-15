<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    use HasFactory;

    protected $table = 'history'; // Nama tabel di database

    protected $fillable = ['tanggal', 'jam', 'kelembapan', 'suhu', 'status']; // Izinkan mass assignment
    
    public $timestamps = false;
}
