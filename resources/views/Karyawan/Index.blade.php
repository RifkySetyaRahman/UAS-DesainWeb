<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Data Form</title>
    <link rel="stylesheet" href="assets/css/johndoe.css">
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">
    <header class="header">
        <div class="container">
            <div class="header-content">
                <h4 class="header-subtitle">Selamat Datang</h4>
                <h1 class="header-title">Sistem Informasi</h1>
                <h6 class="header-mono">Penerimaan dan Pendistribusian Donasi</h6>
            </div>
            <div class="header-links">
                @auth
                    <span class="nav-link">Welcome, {{ Auth::user()->name }}</span>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: inline;">
                        @csrf
                        <a href="{{ route('logout') }}" class="btn btn-danger" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                    </form>
                @endauth
                @guest
                    <a href="{{ url('/signin') }}" class="btn btn-primary">Sign In</a>
                    <a href="{{ url('/register') }}" class="btn btn-secondary">Register</a>
                @endguest
            </div>
        </div>
    </header>

    <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-white" data-spy="affix" data-offset-top="510">
        <div class="container">
            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse mt-sm-20 navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a href="{{ route('home') }}" class="nav-link">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('karyawan.index') }}" class="nav-link">Karyawan</a>
                    </li>
                </ul>
                <ul class="navbar-nav brand">
                    <img src="{{ asset('assets/imgs/hehe.jpg') }}" alt="" class="brand-img">
                    <li class="brand-txt">
                        <h5 class="brand-title">Poliban</h5>
                        <div class="brand-subtitle">Politeknik Negeri Banjarmasin</div>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a href="#portfolio" class="nav-link">Portofolio</a>
                        </li>
                    <li class="nav-item">
                        <a href="#blog" class="nav-link">Breaking News</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="notification" class="alert alert-success" style="display: none; margin-top: 10px;"></div>

    <div class="container mt-5">
        <h2 class="text-center mb-4">Employee Data Form</h2>
        <form  action="{{ route('karyawan.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" class="form-control" placeholder="Enter your full name" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" class="form-control" placeholder="Enter your email" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" id="phone" name="phone" class="form-control" placeholder="Enter your phone number" required>
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" id="address" name="address" class="form-control" placeholder="Enter your address">
            </div>
            <div class="form-group">
                <label for="departemen_id">Departemen</label>
                <select id="departemen_id" name="departemen_id" class="form-control" required>
                    @foreach ($departemens as $departemen)
                    <option value="{{$departemen->id}}">{{$departemen->id}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="posisi_id">Posisi</label>
                <select id="posisi_id" name="posisi_id" class="form-control" required>
                    @foreach ($posisis as $posisi)
                    <option value="{{$posisi->id}}">{{$posisi->id}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="hire_date">Hire Date</label>
                <input type="date" id="hire_date" name="hire_date" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Submit</button>
        </form>
    </div>

    <div class="container mt-5">
        <h2 class="text-center mb-4">Employee Data Table</h2>
        <table class="table table-striped table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Departemen</th>
                    <th>Posisi</th>
                    <th>Hire Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach($karyawans as $data)
                <tr>
                    <td>{{ $data->name }}</td>
                    <td>{{ $data->email }}</td>
                    <td>{{ $data->phone }}</td>
                    <td>{{ $data->address }}</td>
                    <td>{{ $data->departemens->name}}</td>
                    <td>{{ $data->posisis->title}}</td>
                    <td>{{ $data->hire_date }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
