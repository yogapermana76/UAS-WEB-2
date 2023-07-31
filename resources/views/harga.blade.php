<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Harga Sampah</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        body {
            background-color: #f0f0f0;
        }

        .navbar-custom {
            background-color: #007bff; /* Warna biru dominan */
        }

        .navbar-custom .navbar-brand,
        .navbar-custom .navbar-nav .nav-link {
            color: #fff; /* Warna teks putih */
        }

        .navbar-custom .navbar-nav .nav-link:hover {
            color: #eee; /* Warna teks putih saat di-hover */
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-custom">
        <div class="container">
            <a class="navbar-brand" href="#">Bank Sampah</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('beranda') }}">Beranda</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('data-harga-sampah.index') }}">Data Harga Sampah</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('riwayat-transaksi-nasabah.index') }}">Riwayat Transaksi Nasabah</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <!-- Konten halaman data-harga-sampah -->
        <h1>Data Harga Sampah</h1>
        <a class="btn btn-primary mb-2" href="{{ route('data-harga-sampah.create') }}">Tambah Data</a>
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Jenis Sampah</th>
                    <th>Harga per kg</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <!-- Loop untuk menampilkan data harga sampah -->
                @foreach($dataHargaSampah as $hargaSampah)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $hargaSampah->jenis_sampah }}</td>
                    <td>{{ $hargaSampah->harga_per_kg }}</td>
                    <td>
                        <a class="btn btn-sm btn-primary" href="{{ route('data-harga-sampah.edit', $hargaSampah->id) }}">Edit</a>
                        <form action="{{ route('data-harga-sampah.destroy', $hargaSampah->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
