<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with JohnDoe landing page.">
    <meta name="author" content="Devcrud">
    <title>Sistem Informasi Donasi dan Distribusi Donasi</title>
    <!-- font icons -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/themify-icons/css/themify-icons.css') }}">
    <!-- Bootstrap + JohnDoe main styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/johndoe.css') }}">
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
                    <span class="nav-link">Welcome, {{ Auth::user()->name }}</span> <!-- Menampilkan nama pengguna -->
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
                        <a href="#home" class="nav-link">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a href="#about" class="nav-link">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a href="#resume" class="nav-link">Daftar distribusi dan donatur</a>
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
                        <a href="#portfolio" class="nav-link">Dokumentasi</a>
                    </li>
                    <li class="nav-item">
                        <a href="#blog" class="nav-link">Breaking News</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</body>
    <div class="container-fluid">
        <div id="about" class="row about-section">
            <div class="col-lg-4 about-card">
                <h3 class="font-weight-light">Apa itu Sistem Informasi Penerimaan dan Pendistribusian Donasi?</h3>
                <span class="line mb-5"></span>
                <h5 class="mb-3" style="text-align: justify;">
                <p>Sistem Informasi Penerimaan dan Pendistribusian Donasi adalah sebuah sistem yang dirancang untuk mengelola seluruh proses penerimaan donasi, mulai dari pencatatan data donatur, jenis donasi, hingga penyaluran donasi ke penerima manfaat.</p>
                <p>Sistem ini biasanya berbasis komputer atau online, sehingga dapat mengotomatisasi banyak tugas dan meningkatkan efisiensi serta transparansi dalam pengelolaan donasi.</p>
                </h5>
                <p class="mt-20"></p>
                
            </div>
            <div class="col-lg-4 about-card">
                <h3 class="font-weight-light">Web Kami Menyediakan:</h3>
                <span class="line mb-5"></span>
                <ul class="mt40 info list-unstyled">
                    <li><strong>Pencatatan Distribusi</strong> Memperlihatkan data distribusi donasi yang telah dilakukan.</li>
                    <li><strong>Pencatatan Donatur:</strong> Memperlihatkan data donatur yang telah melakukan donasi.</li>
                </ul>
                
            </div>
            <div class="col-lg-4 about-card">
                <h3 class="font-weight-light"> Lembaga yang mendukung</h3>
                <span class="line mb-5"></span>
                <div class="row">
                    <div class="col-1 text-danger pt-1"><i class="ti-widget icon-lg"></i></div>
                    <div class="col-10 ml-auto mr-3">
                        <h6>Rumah zakat</h6>
                        <p class="subtitle"> Satu Donasi, Sejuta Senyuman.</p>
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="col-1 text-danger pt-1"><i class="ti-paint-bucket icon-lg"></i></div>
                    <div class="col-10 ml-auto mr-3">
                        <h6>Palang Merah Indonesia (PMI)</h6>
                        <p class="subtitle">Kemanusiaan Tanpa Batas.</p>
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="col-1 text-danger pt-1"><i class="ti-stats-up icon-lg"></i></div>
                    <div class="col-10 ml-auto mr-3">
                        <h6> Aksi Cepat Tanggap (ACT)</h6>
                        <p class="subtitle">Berbagi untuk Negeri.</p>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Menu Backend Section -->
<section class="section" id="service">
    <div class="container">
        <h2 class="mb-5 pb-4"><span class="text-danger">Daftar Distribusi</span> Dan Donatur</h2>
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <div class="card mb-5">
                    <div class="card-header has-icon">
                        <i class="ti-package text-danger" aria-hidden="true"></i>
                    </div>
                    <div class="card-body px-4 py-3">
                        <h5 class="mb-3 card-title text-dark">Distribusi</h5>
                        <p class="subtitle">Kelola distribusi donasi kepada penerima manfaat.</p>
                        <a href="" class="btn btn-primary">Kelola Distribusi</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="card mb-5">
                    <div class="card-header has-icon">
                        <i class="ti-heart text-danger" aria-hidden="true"></i>
                    </div>
                    <div class="card-body px-4 py-3">
                        <h5 class="mb-3 card-title text-dark">Donasi</h5>
                        <p class="subtitle">Lihat dan kelola semua donasi yang diterima.</p>
                        <a href="" class="btn btn-primary">Kelola Donasi</a>
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

    <!-- Portfolio Section -->
    <section class="section bg-custom-gray" id="portfolio">
        <div class="container">
            <h1 class="mb-5"><span class="text-danger">Dokumentasi</span> Kegiatan</h1>
            <div class="portfolio">
                <div class="filters">
                    <a href="#" data-filter=".new" class="active">
                        2021
                    </a>
                    <a href="#" data-filter=".advertising">
                        2022
                    </a>
                    <a href="#" data-filter=".branding">
                        2023
                    </a>
                    <a href="#" data-filter=".web">
                        2024
                    </a>
                </div>
                <div class="portfolio-container"> 
                    <div class="col-md-6 col-lg-4 web new">
                        <div class="portfolio-item">
                            <img src="{{asset('assets/imgs/web-1.jpg') }}" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">
                            <div class="content-holder">
                                <a class="img-popup" href="{{asset('assets/imgs/web-1.jpg') }}"></a>
                                <div class="text-holder">
                                    <h6 class="title">PMI</h6>
                                    <p class="subtitle">PMI Bersama melawan Covid-19</p>
                                </div>
                            </div>   
                        </div>             
                    </div>
                    <div class="col-md-6 col-lg-4 web new">
                        <div class="portfolio-item">
                            <img src="{{asset('assets/imgs/web-2.jpg') }}" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">
                            <div class="content-holder">
                                <a class="img-popup" href="{{asset('assets/imgs/web-2.jpg') }}"></a>
                                <div class="text-holder">
                                    <h6 class="title">PT.VALE Indonesia</h6>
                                    <p class="subtitle">Bantuan Pasca Gempa-Cianjur</p>
                                </div>
                            </div> 
                        </div>                         
                    </div>
                    <div class="col-md-6 col-lg-4 advertising new">
                        <div class="portfolio-item">
                            <img src="{{asset('assets/imgs/advertising-2.jpg') }}" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">                         
                            <div class="content-holder">
                                <a class="img-popup" href="{{asset('assets/imgs/advertising-2.jpg') }}"></a>
                                <div class="text-holder">
                                    <h6 class="title">BCA</h6>
                                    <p class="subtitle">Bakti BCA Pandemi Covid-19</p>
                                </div>
                            </div>    
                        </div>              
                    </div> 
                    <div class="col-md-6 col-lg-4 web">
                        <div class="portfolio-item">
                            <img src="{{asset('assets/imgs/web-4.jpg') }}" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">
                            <div class="content-holder">
                                <a class="img-popup" href="{{asset('assets/imgs/web-4.jpg') }}"></a>
                                <div class="text-holder">
                                    <h6 class="title">BBC</h6>
                                    <p class="subtitle">Bntuan Bencana Alam banjir di Sumedang</p>
                                </div>
                            </div>
                        </div>                                                     
                    </div>

                    <div class="col-md-6 col-lg-4 advertising"> 
                        <div class="portfolio-item">
                            <img src="{{asset('assets/imgs/advertising-1.jpg') }}" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">                               
                            <div class="content-holder">
                                <a class="img-popup" href="{{asset('assets/imgs/advertising-1.jpg') }}"></a>
                                <div class="text-holder">
                                    <h6 class="title">BPBD</h6>
                                    <p class="subtitle">Penyerahan Bantuan Pencegahan Covid-19</p>
                                </div>
                            </div>
                        </div>                                                       
                    </div> 
                    <div class="col-md-6 col-lg-4 web new">
                        <div class="portfolio-item">
                            <img src="{{asset('assets/imgs/web-3.jpg') }}" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">  
                           <div class="content-holder">
                                <a class="img-popup" href="{{asset('assets/imgs/web-3.jpg') }}"></a>
                                <div class="text-holder">
                                    <h6 class="title">HDI</h6>
                                    <p class="subtitle">Pejuang Medis Melawan Covid-19</p>
                                </div>
                            </div>
                        </div>                                                     
                    </div>
                    <div class="col-md-6 col-lg-4 advertising new">
                        <div class="portfolio-item">
                            <img src="{{asset('assets/imgs/advertising-3.jpg') }}" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">       
                           <div class="content-holder">
                                <a class="img-popup" href="{{asset('assets/imgs/advertising-3.jpg') }}"></a>
                                <div class="text-holder">
                                    <h6 class="title"></h6>
                                    <p class="subtitle">Memberi tanpa Balas Budi</p>
                                </div>
                            </div>
                        </div>                                                       
                    </div> 
                    <div class="col-md-6 col-lg-4 advertising new"> 
                        <div class="portfolio-item">
                            <img src="{{asset('assets/imgs/advertising-4.jpg') }}" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">            
                            <div class="content-holder">
                                <a class="img-popup" href="{{asset('assets/imgs/advertising-4.jpg') }}"></a>
                                <div class="text-holder">
                                    <h6 class="title">BPBD</h6>
                                    <p class="subtitle">Gempa Palu</p>
                                </div>
                            </div>
                        </div>
                                
                    </div> 
                    <div class="col-md-6 col-lg-4 branding new">
                        <div class="portfolio-item">
                            <img src="{{asset('assets/imgs/branding-1.jpg') }}" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">                        
                            <div class="content-holder">
                                <a class="img-popup" href="{{asset('assets/imgs/branding-1.jpg') }}"></a>
                                <div class="text-holder">
                                    <h6 class="title">PMI</h6>
                                    <p class="subtitle">PMI untuk masyarakat yang sehat</p>
                                </div>
                            </div> 
                        </div>
                    </div> 
                    <div class="col-md-6 col-lg-4 branding">
                        <div class="portfolio-item">
                            <img src="{{asset('assets/imgs/branding-2.jpg') }}" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">  
                            <div class="content-holder">
                                <a class="img-popup" href="{{asset('assets/imgs/branding-2.jpg') }}"></a>
                                <div class="text-holder">
                                    <h6 class="title">RSJ</h6>
                                    <p class="subtitle">Donasi untuk keluarga/tempat pengasuhan disabilitas</p>
                                </div>
                            </div>
                        </div>                                                     
                    </div> 
                    <div class="col-md-6 col-lg-4 branding new">
                        <div class="portfolio-item">
                            <img src="{{asset('assets/imgs/branding-3.jpg') }}" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">   
                            <div class="content-holder">
                                <a class="img-popup" href="{{asset('assets/imgs/branding-3.jpg') }}"></a>
                                <div class="text-holder">
                                    <h6 class="title">UMKM</h6>
                                    <p class="subtitle">Bantuan paket sembako</p>
                                </div>
                            </div>
                        </div>                                                    
                    </div> 
                    <div class="col-md-6 col-lg-4 branding">
                        <div class="portfolio-item">
                            <img src="{{asset('assets/imgs/branding-4.jpg') }}" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">                      
                            <div class="content-holder">
                                <a class="img-popup" href="{{asset('assets/imgs/branding-4.jpg') }}"></a>
                                <div class="text-holder">
                                    <h6 class="title">iStock</h6>
                                    <p class="subtitle">Donasi kepala keluarga yang kurang mampu</p>
                                </div>
                            </div>
                        </div>                                                      
                    </div> 
                    <div class="col-md-6 col-lg-4 branding">
                        <div class="portfolio-item">
                            <img src="{{asset('assets/imgs/branding-5.jpg') }}" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">          
                            <div class="content-holder">
                                <a class="img-popup" href="{{asset('assets/imgs/branding-5.jpg') }}"></a>
                                <div class="text-holder">
                                    <h6 class="title">Yayasan Nurani Dunia</h6>
                                    <p class="subtitle">Ikut serta adlaam partisipasi donasi</p>
                                </div>
                            </div>
                        </div>                                                   
                    </div>
                </div> 
            </div>  
        </div>            
    </section>
    <!-- End of portfolio section -->

    <section class="section" id="blog">
        <div class="container">
            <h2 class="mb-5">Breaking <span class="text-danger">News</span></h2>
            <div class="row">
                <div class="blog-card">
                    <div class="img-holder">
                        <img src="{{asset('assets/imgs/blog1.jpg') }}" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, meyawo Landing page">
                    </div>
                    <div class="content-holder">
                        <h6 class="title">KNRPP Serahkan Donasi Untuk Palestina Melalui Baznas RI</h6>

                        <p class="post-details">
                            <a href="#">By: Admin</a>
                            <a href="#"><i class="ti-heart text-danger"></i> 234</a>
                            <a href="#"><i class="ti-comment"></i> 123</a>
                        </p>
                        
                        <p>Komite Nagan Raya Peduli Palestina (KNRPP) menyerahkan donasi untuk rakyat Palestina sebesar Rp525 juta melalui Badan Amil Zakat Nasional Republik Indonesia (Baznas RI).

Donasi yang diserahkan oleh Ketua KNRPP Ir. H. Ardimartha itu diterima langsung oleh Direktur Layanan Baznas RI, Rulli Kurniawan di Gedung BAZNAS RI, Jakarta, Kamis 18 April 2024. Ardimartha mengatakan donasi senilai Rp525 juta tersebut merupakan hasil penggalangan dana yang dilakukan oleh KNRPP bersama masyarakat, termasuk Aparatur Sipil Negara (ASN), aparatur desa, pelajar, dan berbagai elemen lainnya.

“Donasi ini merupakan bentuk kepedulian dan solidaritas masyarakat Nagan Raya terhadap rakyat Palestina yang saat ini sedang dalam kondisi yang sulit. Kami berharap donasi ini dapat meringankan beban dan membantu saudara-saudara kita di Palestina,” kata Ardimartha yang juga Sekretaris Daerah (Sekda) Kabupaten Nagan Raya.</p>

                     

                    </div>
                </div><!-- end of blog wrapper -->

                <!-- blog-card -->
                <div class="blog-card">
                    <div class="img-holder">
                        <img src="{{asset('assets/imgs/blog2.jpg') }}" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, meyawo Landing page">
                    </div>
                    <div class="content-holder">
                        <h6 class="title">Santunan Yatim</h6>

                        <p class="post-details">
                            <a href="#">Abulyatama</a>
                            <a href="#"><i class="ti-heart text-danger"></i> 456</a>
                            <a href="#"><i class="ti-comment"></i> 264</a>
                        </p>
                        
                        <p>Bismillaah... Assalamualaikum warahmatullaah wabarakaatuh Ketika berjumpa anak yatim Maka dekap dia Usaplah kepalanya Rasakan hausnya ia Akan kasih sayang, pengajaran dan teladan sosok ayah Mengapa mengusap kepala? Karena ini sabda Nabi shallallahu alaihi wa sallam Sabda ini keluar dari lubuk hati Karena beliau merasakan menjadi yatim-piatu Lembutkan hati Dan mengobati kerasnya hati Keras hati malas beribadah Malas melakukan kebaikan Dari Abu Hurairah, bahwasanya ada seseorang yang mengeluhkan kerasnya hati kepada Rasulullah shallallahu ‘alaihi wa sallam, lalu beliau berkata kepadanya: “Jika engkau ingin melembutkan hatimu, maka berilah makan kepada orang miskin dan usaplah kepala anak yatim.”</p>
                        
                        <p>
                    </div>
                </div><!-- end of blog wrapper -->
                <!-- blog-card -->
                <div class="blog-card">
                    <div class="img-holder">
                        <img src="{{asset('assets/imgs/blog3.jpg') }}" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, meyawo Landing page">
                    </div>
                    <div class="content-holder">
                        <h4 class="title">Dompet Dhuafa</h4>

                        <p class="post-details">
                            <a href="#">By: Admin</a>
                            <a href="#"><i class="ti-heart text-danger"></i> 431</a>
                            <a href="#"><i class="ti-comment"></i> 312</a>
                        </p>
                        
                        <p> Dompet Dhuafa adalah lembaga filantropi dan kemanusiaan yang bergerak untuk pemberdayaan untuk (Empowering People) dan kemanusiaan. Pemberdayaan bergulir melalui pengelolaan dana zakat, infak, sedekah dan wakaf (Ziswaf), serta dana sosial lainnya yang terkelola secara modern dan amanah. Dalam pengelolaan mengedepankannya mengedepankan konsep welas asih atau kasih sayang sebagai akar gerakan filantropis yang mengedepankan lima pilar program yaitu Kesehatan, Pendidikan, Ekonomi, Sosial, serta Dakwah dan Budaya</p>

                        
                    </div>
                </div><!-- end of blog wrapper -->

            </div>
        </div>
    </section>
    </div>
    <footer class="footer py-3">
        <div class="container">
            <p class="small mb-0 text-light">
                &copy; <script>document.write(new Date().getFullYear())</script> Created With <i class="ti-heart text-danger"></i> By <a href="http://devcrud.com" target="_blank"><span class="text-danger" title="Bootstrap 4 Themes and Dashboards">DevCRUD</span></a> 
            </p>
        </div>
    </footer>

	<!-- core  -->
    <script src="{{asset('assets/vendors/jquery/jquery-3.4.1.js') }}"></script>
    <script src="{{asset('assets/vendors/bootstrap/bootstrap.bundle.js') }}"></script>

    <!-- bootstrap 3 affix -->
    <script src="{{asset('assets/vendors/bootstrap/bootstrap.affix.js') }}"></script>

    <!-- Isotope  -->
    <script src="{{asset('assets/vendors/isotope/isotope.pkgd.js') }}"></script>
    
    <!-- Google mpas -->
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCtme10pzgKSPeJVJrG1O3tjR6lk98o4w8&callback=initMap"></script>

    <!-- JohnDoe js -->
    <script src="{{asset('assets/js/johndoe.js') }}"></script>

</body>
</html>