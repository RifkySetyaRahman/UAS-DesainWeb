<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Daftar Programmer</title>
    <link rel="stylesheet" href="{{ asset('assets/vendors/bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/johndoe.css') }}">
    <style>
        .profile-card {
            border: 1px solid #e0e0e0;
            border-radius: 10px;
            padding: 20px;
            text-align: center;
            margin-bottom: 20px;
        }
        .image-background {
            background-color: #f0f0f0; /* Warna latar belakang */
            border-radius: 50%; /* Membuat latar belakang berbentuk bulat */
            padding: 10px; /* Ruang di sekitar gambar */
            display: inline-block; /* Agar latar belakang mengikuti ukuran gambar */
        }
        .profile-card img {
            width: 150px;
            height: auto;
            border-radius: 50%; /* Membuat gambar berbentuk bulat */
            margin-bottom: 15px;
        }
        .profile-card h5 {
            margin: 10px 0;
        }
        .brand-img {
            width: 30px; /* Atur lebar logo */
            height: auto; /* Tinggi otomatis untuk menjaga proporsi */
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ asset('assets/imgs/hehe.jpg') }}" alt="Logo" class="brand-img"> <!-- Ganti dengan path logo Anda -->
                Home
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}">Beranda</a> <!-- Tautan ke halaman beranda -->
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <h2 class="mb-4 text-center"><span class="text-danger">Programmer</span> yang Bekerja</h2>
        <div class="row justify-content-center">
            @foreach($programmers as $programmer)
                <div class="col-md-4 col-sm-6">
                    <div class="profile-card text-center">
                        <div class="image-background">
                            <img src="{{ asset('storage/' . $programmer->item_image_path) }}" alt="Foto {{ $programmer->nama }}" class="img-fluid">
                        </div>
                        <h5>{{ $programmer->nama }}</h5>
                        <p>Tanggal Lahir: {{ $programmer->Tanggal_lahir }}</p>
                        <p>{{ $programmer->deskripsi }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <script src="{{ asset('assets/vendors/jquery/jquery-3.4.1.js') }}"></script>
    <script src="{{ asset('assets/vendors/bootstrap/bootstrap.bundle.js') }}"></script>
</body>
</html>
