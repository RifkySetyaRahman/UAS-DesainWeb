<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            height: 100vh;
            display: flex;
        }
        .login-container {
            display: flex;
            width: 100%; /* Lebar 100% untuk seluruh layar */
            height: 100%; /* Tinggi 100% untuk seluruh layar */
        }
        .left-side {
            flex: 1;
            background-color: #ffffff; /* Warna putih */
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            position: relative;
        }
        .right-side {
            flex: 1;
            background-color: #dc3545; /* Warna merah */
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }
        .login-form {
            width: 300px;
            padding: 40px;
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
        }
        .login-form h1 {
            margin-bottom: 20px;
            color: #dc3545;
            text-align: center;
        }
        .login-form input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ced4da;
            border-radius: 5px;
        }
        .login-form button {
            width: 100%;
            padding: 10px;
            background-color: #dc3545;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .login-form button:hover {
            background-color: #c82333;
        }
        .footer-text {
            margin-top: 20px;
            text-align: center;
            color: #6c757d;
        }
        .bottom-text {
            margin-top: 20px;
            color: #333; /* Warna kontras untuk teks */
            text-align: center;
            padding: 10px;
            font-size: 18px; /* Ukuran font yang sesuai */
            font-weight: bold; /* Menebalkan teks */
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="left-side">
            <img src="{{ asset('assets/imgs/AnimasiSistemInfo.jpg') }}" alt="Background Image" style="width: 100%; height: auto;">
            <p class="bottom-text">Sistem Informasi Pendataan Karyawan</p>
        </div>
        <div class="right-side">
            <div class="login-form">
                <h1>LOGIN</h1>
                <form action="{{ route('login.post') }}" method="POST">
                    @csrf
                    <input type="text" name="username" placeholder="Enter your username" required>
                    <input type="password" name="password" placeholder="Enter your password" required>
                    <button type="submit">Login</button>
                </form>

                <p class="footer-text">Don’t have an account? <a href="{{ route('register') }}" style="color: blue;">Register Now</a></p>
            </div>
        </div>
    </div>
</body>
</html>