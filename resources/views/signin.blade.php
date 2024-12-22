<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
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
            background-color: #007bff;
            color: white;
            border-radius: 30px;
            padding: 10px 20px;
            font-weight: bold;
            width: 100%;
        }
        .btn-custom:hover {
            background-color: #0056b3;
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
        .alert-danger {
            text-align: center;
            font-size: 14px;
            margin-bottom: 20px;
            padding: 10px;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="image-section"></div>
        <div class="form-section">
            <h2 class="form-title">Sign In</h2>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                <button type="submit" class="btn btn-custom">Sign In</button>
            </form>
            <div class="toggle-links">
                <p>Belum punya akun? <a href="{{ route('register') }}">Daftar di sini</a></p>
            </div>
        </div>
    </div>
</body>
</html>
