<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataHargaSampah; // Import model HargaSampah

class DataHargaSampahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Mengambil semua data harga sampah dari model
        $dataHargaSampah = DataHargaSampah::all();

        // Kirim data harga sampah ke halaman harga.blade.php
        return view('harga', compact('dataHargaSampah'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }
    
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi data yang diterima dari form
        $request->validate([
            'jenis_sampah' => 'required|string|max:255',
            'harga_per_kg' => 'required|numeric|min:0',
        ]);

        // Simpan data harga sampah ke dalam database
        DataHargaSampah::create([
            'jenis_sampah' => $request->jenis_sampah,
            'harga_per_kg' => $request->harga_per_kg,
        ]);

        // Redirect ke halaman data harga sampah setelah berhasil menyimpan
        return redirect()->route('data-harga-sampah.index')->with('success', 'Data harga sampah berhasil ditambahkan.');
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
        // Cari data harga sampah berdasarkan ID yang diberikan
        $dataHargaSampah = DataHargaSampah::findOrFail($id);
    
        // Tampilkan halaman edit dengan data harga sampah yang ditemukan
        return view('edit', compact('dataHargaSampah'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validasi data yang diterima dari form edit
        $request->validate([
            'jenis_sampah' => 'required|string|max:255',
            'harga_per_kg' => 'required|numeric|min:0',
        ]);

        // Cari data harga sampah berdasarkan ID yang diberikan
        $dataHargaSampah = DataHargaSampah::findOrFail($id);

        // Update data harga sampah dengan data baru dari form edit
        $dataHargaSampah->update([
            'jenis_sampah' => $request->jenis_sampah,
            'harga_per_kg' => $request->harga_per_kg,
        ]);

        // Redirect kembali ke halaman data harga sampah setelah berhasil memperbarui
        return redirect()->route('data-harga-sampah.index')->with('success', 'Data harga sampah berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Cari data harga sampah berdasarkan ID yang diberikan
        $dataHargaSampah = DataHargaSampah::findOrFail($id);

        // Hapus data harga sampah
        $dataHargaSampah->delete();

        // Redirect kembali ke halaman data harga sampah setelah berhasil menghapus
        return redirect()->route('data-harga-sampah.index')->with('success', 'Data harga sampah berhasil dihapus.');
    }
}
