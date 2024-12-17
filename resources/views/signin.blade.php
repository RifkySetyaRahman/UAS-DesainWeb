<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sign In</title>
    <link rel="stylesheet" href="{{ asset('assets/vendors/bootstrap/bootstrap.min.css') }}">
    <style>
        body {
            background-color: #000; /* Warna latar belakang hitam */
            color: white; /* Warna teks putih */
            height: 100vh; /* Tinggi penuh viewport */
            display: flex; /* Menggunakan flexbox */
            justify-content: center; /* Pusatkan secara horizontal */
            align-items: center; /* Pusatkan secara vertikal */
            margin: 0; /* Menghapus margin default */
        }
        .container {
            max-width: 400px; /* Lebar maksimum kontainer */
            padding: 20px; /* Padding dalam kontainer */
            background-color: #343a40; /* Warna latar belakang kontainer abu-abu gelap */
            border-radius: 8px; /* Sudut melengkung */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); /* Bayangan */
        }
        h2 {
            text-align: center; /* Pusatkan teks */
            margin-bottom: 20px; /* Jarak bawah */
        }
        .alert {
            margin-bottom: 20px; /* Jarak bawah untuk alert */
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Sign In</h2>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('login') }}" method="POST"> <!-- Ganti route di sini -->
            @csrf
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
        </form>
        <p class="mt-3 text-center">Belum punya akun? <a href="{{ url('/register') }}" style="color: #007bff;">Register di sini</a></p>
    </div>
</body>
</html>
