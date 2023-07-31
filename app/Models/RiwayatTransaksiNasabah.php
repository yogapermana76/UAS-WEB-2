<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiwayatTransaksiNasabah extends Model
{
    use HasFactory;   
    protected $table = 'riwayat_transaksi_nasabah';
    protected $fillable = ['tanggal_transaksi', 'nama_nasabah', 'jenis_sampah', 'status'];
}
