<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            height: 100vh;
            display: flex;
        }
        .login-container {
            display: flex;
            width: 100%;
            height: 100%;
        }
        .left-side {
            flex: 1;
            background-color: #ffffff;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            position: relative;
        }
        .right-side {
            flex: 1;
            background-color: #dc3545;
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
        .link {
            text-align: center;
            margin-top: 10px;
            color: #ffffff;
        }
        .bottom-text {
            margin-top: 20px;
            color: #333;
            text-align: center;
            padding: 10px;
            font-size: 18px;
            font-weight: bold;
        }
        .alert {
            color: red;
            margin-bottom: 20px;
            text-align: center;
        }
        .checkbox-container {
            display: flex;
            align-items: center;
            margin-top: 10px;
            justify-content: flex-start; /* Geser ke kiri */
            width: 100%; /* Pastikan lebar 100% */
        }
        .checkbox-container input {
            margin-right: 5px;
        }
        .checkbox-container label {
            margin: 0; /* Menghapus margin untuk label */
            font-size: 14px; /* Ukuran font label */
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
                <h1>REGISTER</h1>
                @if ($errors->any())
                    <div class="alert">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form method="POST" action="{{ route('register.post') }}">
                    @csrf
                    <input type="text" name="username" placeholder="Enter your username" required>
                    <input type="password" name="password" id="password" placeholder="Enter your password" required>
                    
                    <div class="checkbox-container">
                        <input type="checkbox" id="show-password" onclick="togglePasswordVisibility()">
                        <label for="show-password">Show Password</label>
                    </div>
                    
                    <button type="submit">REGISTER</button>
                </form>
                <p class="footer-text">Do you have an account? <a href="{{ route('register.post') }}" style="color: blue;">Login Now</a></p>
            </div>
        </div>
    </div>

    <script>
        function togglePasswordVisibility() {
            const passwordInput = document.getElementById('password');
            const checkbox = document.getElementById('show-password');

            if (checkbox.checked) {
                passwordInput.type = 'text'; // Tampilkan password
            } else {
                passwordInput.type = 'password'; // Sembunyikan password
            }
        }
    </script>
</body>
</html>