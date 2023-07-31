<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RiwayatTransaksiNasabah;


class RiwayatTransaksiNasabahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        // Ambil data riwayat transaksi nasabah dari model
        $riwayatTransaksi = RiwayatTransaksiNasabah::all();

        // Kirim data ke halaman riwayat.blade.php
        return view('riwayat', compact('riwayatTransaksi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('transaksi');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi data yang diterima dari form tambah transaksi
        $request->validate([
            'tanggal_transaksi' => 'required|date',
            'nama_nasabah' => 'required|string|max:255',
            'jenis_sampah' => 'required|string|max:255',
            'status' => 'required|numeric|min:0',
        ]);

        // Simpan data transaksi ke dalam database
        RiwayatTransaksiNasabah::create([
            'tanggal_transaksi' => $request->tanggal_transaksi,
            'nama_nasabah' => $request->nama_nasabah,
            'jenis_sampah' => $request->jenis_sampah,
            'status' => $request->status,
        ]);

        // Redirect kembali ke halaman riwayat transaksi setelah berhasil menyimpan
        return redirect()->route('riwayat-transaksi-nasabah.index')->with('success', 'Transaksi nasabah berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
