<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>gudang-custom.id</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic"
        rel="stylesheet" type="text/css" />
    <!-- Third party plugin CSS-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css"
        rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">GUDANG CUSTOM</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto my-2 my-lg-0">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">Tentang Kami</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#services">Layanan</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#portfolio">Artikel</a></li>
                    {{-- <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{ url('/dashboard') }}">Masuk</a>
                    </li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{ url('/dashboard') }}">Daftar</a>
                    </li> --}}
                    @if (Route::has('login'))
                    @auth
                    <li class="nav-item"><a href="{{ url('/dashboard') }}"
                            class="nav-link js-scroll-trigger">Dashboard</a>
                        @else
                    <li class="nav-item"><a href="{{ route('login') }}" class="nav-link js-scroll-trigger">Masuk</a>

                        @if (Route::has('register'))
                    <li class="nav-item"><a href="{{ route('register') }}" class="nav-link js-scroll-trigger">Daftar</a>
                        @endif
                        @endauth
                        @endif
                </ul>
            </div>
        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead">
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center text-center">
                <div class="col-lg-10 align-self-end">
                    <h1 class="text-uppercase text-white font-weight-bold">GUDANG CUSTOM</h1>
                    <hr class="divider my-4" />
                </div>
                <div class="col-lg-8 align-self-baseline">
                    <p class="text-white-75 font-weight-light mb-5">Media penjembatan antara pekerja kreatif dengan klien untuk custom desain
                    </p>
                    <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Tentang Kami</a>
                </div>
            </div>
        </div>
    </header>
    <!-- About-->
    <section class="page-section bg-primary" id="about">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="text-black mt-0">Tentang Kami</h2>
                    <hr class="divider light my-4" />
                    <p class="text-black-50 mb-4">Gudang Custom merupakan sebuah platform marketplace sebagai media penjembatan antara pekerja kreatif dengan klien yang ingin membuat barang (custom design) sesuai dengan keinginan. mulailah custom bersama gudang custom.id, platform ini untuk memajukan para pedagang kecil dan menghubungkan seluruh bidang kreatif yang ada di indonesia. kami juga ingin bisa memudahkan para pencari barang custom agar dapat mudah untuk menemukan suatu design yang mereka inginkan</p>
                    <a class="btn btn-light btn-xl js-scroll-trigger" href="#services">Get Started!</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Services-->
    <section class="page-section" id="services">
        <div class="container">
            <h2 class="text-center mt-0">Layanan</h2>
            <hr class="divider my-4" />
            <div class="row">
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <i class="fas fa-4x fa-user text-primary mb-4"></i>
                        <h3 class="h4 mb-2">Jual Beli</h3>
                        <p class="text-muted mb-0">Penjual dapat memasangkan produknya dan dapat di beli oleh pembeli.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <i class="fas fa-4x fa-building text-primary mb-4"></i>
                        <h3 class="h4 mb-2">Custom Design</h3>
                        <p class="text-muted mb-0">Klien dapat memilih sendiri desain yang diinginkan dan langsung dibuatkan oleh seniman terkait.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <i class="fas fa-4x fa-search text-primary mb-4"></i>
                        <h3 class="h4 mb-2">Chatting</h3>
                        <p class="text-muted mb-0">Penjual, pembeli, seniman dapat saling berhubungan langsung melalui fitur chat.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <i class="fas fa-4x fa-newspaper text-primary mb-4"></i>
                        <h3 class="h4 mb-2">Artikel</h3>
                        <p class="text-muted mb-0">Kuli dan Mandor dapat berbagi informasi tentang kehidupan dan berita
                            terkini perproyekan bangunan.</p>
                    </div>
                </div>

                {{-- <h2 class="text-center mt-0"><a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Tentang Kami</a></h2> --}}
            </div>

        </div>


        </div>
    </section>
    <!-- Portfolio-->
    <div id="portfolio">
        <div class="container-fluid p-0">
            <div class="row no-gutters">
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="assets/img/portfolio/fullsize/1.jpg">
                        <img class="img-fluid" src="assets/img/portfolio/thumbnails/1.jpg" alt="" />
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50">Category</div>
                            <div class="project-name">Project Name</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="assets/img/portfolio/fullsize/2.jpg">
                        <img class="img-fluid" src="assets/img/portfolio/thumbnails/2.jpg" alt="" />
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50">Category</div>
                            <div class="project-name">Project Name</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="assets/img/portfolio/fullsize/3.jpg">
                        <img class="img-fluid" src="assets/img/portfolio/thumbnails/3.jpg" alt="" />
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50">Category</div>
                            <div class="project-name">Project Name</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="assets/img/portfolio/fullsize/4.jpg">
                        <img class="img-fluid" src="assets/img/portfolio/thumbnails/4.jpg" alt="" />
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50">Category</div>
                            <div class="project-name">Project Name</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="assets/img/portfolio/fullsize/5.jpg">
                        <img class="img-fluid" src="assets/img/portfolio/thumbnails/5.jpg" alt="" />
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50">Category</div>
                            <div class="project-name">Project Name</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="assets/img/portfolio/fullsize/6.jpg">
                        <img class="img-fluid" src="assets/img/portfolio/thumbnails/6.jpg" alt="" />
                        <div class="portfolio-box-caption p-3">
                            <div class="project-category text-white-50">Category</div>
                            <div class="project-name">Project Name</div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    {{-- <!-- Call to action-->
    <section class="page-section bg-dark text-white">
        <div class="container text-center">
            <h2 class="mb-4">Free Download at Start Bootstrap!</h2>
            <a class="btn btn-light btn-xl" href="https://startbootstrap.com/theme/creative/">Download Now!</a>
        </div>
    </section> --}}
    <!-- Contact-->
    <section class="page-section" id="contact">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="mt-0">Mari Ketahui Kami Lebih Lanjut</h2>
                    <hr class="divider my-4" />
                    <p class="text-muted mb-5">Jika perlu bantuan lebih lanjut mengenai website kami, silahkan hubungi
                        kami dinomor berikut
                        atau kirimkan kepada email yang tertera dibawah. Kami akan merespon secepat mungkin.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 ml-auto text-center mb-5 mb-lg-0">
                    <i class="fas fa-phone fa-3x mb-3 text-muted"></i>
                    <div>0857-3653-4000</div>
                </div>
                <div class="col-lg-4 mr-auto text-center">
                    <i class="fas fa-envelope fa-3x mb-3 text-muted"></i>
                    <!-- Make sure to change the email address in BOTH the anchor text and the link target below!-->
                    <a class="d-block" href="mailto:contact@yourwebsite.com">sabililhaq.furqony@gmail.com</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer-->
    {{-- <footer class="bg-light py-5">
        <div class="container">
            <div class="small text-center text-muted">Copyright Â© 2021 - Kelompok 7 PEMWEB</div>
        </div>
    </footer> --}}
    <x-footer />
    <!-- Bootstrap core JS-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Third party plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>
