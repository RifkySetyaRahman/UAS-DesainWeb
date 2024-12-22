<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
        }
        .login-container {
            display: flex;
            flex-direction: row;
            max-width: 900px;
            width: 100%;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            overflow: hidden;
        }
        .image-section {
            flex: 1;
            background: url('assets/imgs/ImageFT.png') no-repeat center center/cover;
        }
        .form-section {
            flex: 1;
            padding: 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        .form-title {
            text-align: center;
            margin-bottom: 30px;
            font-weight: bold;
            font-size: 24px;
            color: #333;
        }
        .form-control {
            border-radius: 30px;
            padding: 10px 20px;
            margin-bottom: 15px;
        }
        .btn-custom {
            background-color: #28a745;
            color: white;
            border-radius: 30px;
            padding: 10px 20px;
            font-weight: bold;
            width: 100%;
        }
        .btn-custom:hover {
            background-color: #218838;
        }
        .toggle-links {
            text-align: center;
            margin-top: 20px;
        }
        .toggle-links a {
            color: #007bff;
            text-decoration: none;
        }
        .toggle-links a:hover {
            text-decoration: underline;
        }
        .alert-container {
            position: fixed;
            top: 10%;
            left: 50%;
            transform: translateX(-50%);
            z-index: 1050;
            width: 80%;
            max-width: 600px;
            text-align: center;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }
        .alert p {
            margin: 0;
        }
    </style>
</head>
<body>
    @if ($errors->any())
        <div class="alert alert-danger alert-container">
            <p><strong>Terjadi kesalahan:</strong></p>
            @foreach ($errors->all() as $error)
                <p>- {{ $error }}</p>
            @endforeach
        </div>
    @endif

    @if (session('success'))
        <div class="alert alert-success alert-container">
            <p><strong>Berhasil:</strong> {{ session('success') }}</p>
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger alert-container">
            <p><strong>Error:</strong> {{ session('error') }}</p>
        </div>
    @endif

    <div class="login-container">
        <div class="image-section"></div>
        <div class="form-section">
            <h2 class="form-title">Register</h2>
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <input type="text" class="form-control" id="name" name="name" placeholder="Nama" required>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Konfirmasi Password" required>
                <button type="submit" class="btn btn-custom">Register</button>
            </form>
            <div class="toggle-links">
                <p>Sudah punya akun? <a href="{{ route('signin') }}">Sign In di sini</a></p>
            </div>
        </div>
    </div>
</body>
</html>
