<nav class="navbar sticky-top navbar-expand-lg navbar-light bg-white">
    <div class="container">
        <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item"><a href="{{ route('dashboard.index') }}" class="nav-link">Dashboard</a></li>
                <li class="nav-item"><a href="{{ route('karyawans.index') }}" class="nav-link">Karyawan</a></li>
                <li class="nav-item"><a href="{{ route('departemens.index') }}" class="nav-link">Departemen</a></li>
                <li class="nav-item"><a href="{{ route('posisis.index') }}" class="nav-link">Posisi</a></li>
            </ul>
        </div>
    </div>
</nav>
