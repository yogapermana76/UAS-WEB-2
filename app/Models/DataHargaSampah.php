<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataHargaSampah extends Model
{
    use HasFactory;

    protected $table = 'data_harga_sampah';
    
    protected $fillable = ['jenis_sampah', 'harga_per_kg'];
}
