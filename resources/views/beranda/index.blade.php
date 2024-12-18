<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('assets/css/johndoe.css') }}">
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">
    <!-- Header -->
    <header class="header">
        <div class="container">
            <div class="header-content">
                <h4 class="header-subtitle">Selamat Datang</h4>
                <h1 class="header-title">Sistem Informasi</h1>
                <h6 class="header-mono">Pendataan Karyawan</h6>
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

    <!-- Navbar -->
    <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-white" data-spy="affix" data-offset-top="510">
        <div class="container">
            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse mt-sm-20 navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a href="#home" class="nav-link">Beranda</a>
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

    <!-- Dashboard Section -->
    <div class="container mt-5">
        <h2 class="text-center mb-4">Dashboard</h2>
        <div class="row">
            <!-- Card for Total Employees -->
            <div class="col-md-4">
                <div class="card text-white bg-primary mb-3">
                    <div class="card-header">Total Karyawan</div>
                    <div class="card-body">
                        <h5 class="card-title text-center">{{ $totalKaryawans }}</h5>
                    </div>
                </div>
            </div>
            
            <!-- Card for Total Departments -->
            <div class="col-md-4">
                <div class="card text-white bg-success mb-3">
                    <div class="card-header">Total Departemen</div>
                    <div class="card-body">
                        <h5 class="card-title text-center">{{ $totalDepartemens }}</h5>
                    </div>
                </div>
            </div>

            <!-- Card for Total Positions -->
            <div class="col-md-4">
                <div class="card text-white bg-info mb-3">
                    <div class="card-header">Total Posisi</div>
                    <div class="card-body">
                        <h5 class="card-title text-center">{{ $totalPosisis }}</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio bg-light py-5">
        <div class="container">
            <h2 class="text-center mb-4">Portofolio Perusahaan Batubara</h2>
            <p class="text-center mb-4">Kami adalah perusahaan batubara terkemuka yang fokus pada inovasi, keberlanjutan, dan tanggung jawab sosial.</p>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm">
                        <img src="{{ asset('assets/imgs/tambang1.jpg') }}" alt="Tambang Batubara" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Lokasi Tambang A</h5>
                            <p class="card-text">Tambang dengan teknologi modern untuk efisiensi dan keberlanjutan.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm">
                        <img src="{{ asset('assets/imgs/tambang2.jpg') }}" alt="Fasilitas Pengelolaan" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Fasilitas Pengelolaan</h5>
                            <p class="card-text">Proses pengelolaan batubara dengan standar internasional.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm">
                        <img src="{{ asset('assets/imgs/tambang3.jpg') }}" alt="CSR Perusahaan" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Program CSR</h5>
                            <p class="card-text">Kontribusi kami untuk masyarakat sekitar tambang.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Breaking News Section -->
    <section id="blog" class="breaking-news py-5">
        <div class="container">
            <h2 class="text-center mb-4">Breaking News</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">Proyek Baru Dimulai</h5>
                            <p class="card-text">Perusahaan telah meluncurkan proyek tambang baru di Kalimantan Timur.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">Penghargaan Keberlanjutan</h5>
                            <p class="card-text">Kami menerima penghargaan untuk praktik pertambangan yang bertanggung jawab.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">Program Sosial Terbaru</h5>
                            <p class="card-text">Kami telah menyelesaikan pembangunan sekolah di daerah sekitar tambang.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section" id="service">
        <div class="container">
            <h2 class="mb-5 pb-4"><span class="text-danger">Daftar Programmer</span> yang bekerja</h2>
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="card mb-5">
                        <div class="card-header has-icon">
                            <i class="ti-user text-danger" aria-hidden="true"></i> <!-- Ikon manusia -->
                        </div>
                        <div class="card-body px-4 py-3">
                            <h5 class="mb-3 card-title text-dark">About</h5>
                            <p class="subtitle">List orang yang bekerja dibelakang web</p>
                            <a href="{{ route('programmers.index') }}" class="btn btn-primary">ABOUT</a>
                        </div>
                    </div>
                </div>
    </section>
</body>
</html>
