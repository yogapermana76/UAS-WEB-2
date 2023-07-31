<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Harga Sampah</title>

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
        <!-- Form untuk tambah data harga sampah -->
        <h1>Tambah Data Harga Sampah</h1>
        <form action="{{ route('data-harga-sampah.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="jenis_sampah">Jenis Sampah</label>
                <input type="text" class="form-control" id="jenis_sampah" name="jenis_sampah" required>
            </div>
            <div class="form-group">
                <label for="harga_per_kg">Harga per kg</label>
                <input type="number" step="any" class="form-control" id="harga_per_kg" name="harga_per_kg" required>
            </div>
            <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
