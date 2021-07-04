<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Dinas sosial bolaang mongondow</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="../assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="../assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

    <link href="../assets/css/style.css" rel="stylesheet">
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
        @include('dinsos.layout.header')
    </header><!-- End Header -->

    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Berita</h2>
                    <ol>
                        <li><a href="index.html">Home</a></li>
                        <li>Berita</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= berita Section ======= -->
        <section id="berita" class="berita">
            <div class="container" data-aos="fade-up">

                <div class="row">

                    <div class="col-lg-8 entries">

                        <article class="entry">

                            <div class="entry-single">
                                <img src="/image/berita/{{$beritas->image}}" alt="" class="img-fluid">
                            </div>

                            <h2 class="entry-title">
                                {{$beritas->judul}}
                            </h2>

                            <div class="entry-meta">
                                <ul>
                                    <li class="d-flex align-items-center"><i class="icofont-user"></i> <a
                                            href="#">{{$beritas->user->name}}</a></li>
                                    <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a
                                            href="#"><time datetime="2020-01-01">25 Maret 2021</time></a></li>
                                </ul>
                            </div>

                            <div class="entry-detail">
                                <p>
                                {{$beritas->konten}}
                   
                                </p>
                            </div>
                            <div class="entry-footer">
                                <i class="bi bi-folder"></i>
                                <ul class="cats">
                                    <li><a href="#">{{$beritas->kategori->nama}}</a></li>
                                </ul>
                                <!-- 
                                <i class="bi bi-tags"></i>
                                <ul class="tags">
                                    <li><a href="#">Umum</a></li>
                                </ul> -->
                            </div>
                        </article><!-- End berita entry -->
                    </div><!-- End berita entries list -->

                    <div class="col-lg-4">
                        <div class="sidebar">
                            <h3 class="sidebar-title">Cari</h3>
                            <div class="sidebar-item search-form">
                                <form action="{{ ('/berita-cari') }}" method="GET">
                                    <input type="search" name="cari" value="{{ request()->get('cari') }}">
                                    <button type="submit"><i class="bi bi-search"></i></button>
                                </form>
                            </div><!-- End sidebar search formn-->

                            <h3 class="sidebar-title">Kategori</h3>
                            <div class="sidebar-item categories">
                                <ul>
                                    @foreach($kategori as $kateg)
                                    <li><a href="#">{{$kateg->nama}} <span>-</span></a></li>
                                    @endforeach
                                </ul>
                            </div><!-- End sidebar categories-->

                            <h3 class="sidebar-title">Lainnya</h3>
                            <div class="sidebar-item recent-posts">
                                @foreach($sidebar as $side)
                                <div class="post-item clearfix">
                                    <img src="/image/berita/{{$side->image}}" alt="">
                                    <h4><a href="blog-single.html">{{$side->judul}}</a></h4>
                                    <time datetime="2020-01-01">{{$side->created_at}}</time>
                                </div>
                                @endforeach

                            </div><!-- End sidebar recent posts-->

                            <!-- <h3 class="sidebar-title">Tags</h3>
                            <div class="sidebar-item tags">
                                <ul>
                                    <li><a href="#">Umum</a></li>
                                    <li><a href="#">Khusus</a></li>
                                </ul>
                            </div> -->

                        </div><!-- End sidebar -->

                    </div><!-- End berita sidebar -->

                </div>

            </div>
        </section><!-- End berita Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <section id="footer" className="text-center">


        <div className="container">
            <div className="row">
                <div className="col-md-12 col-sm-6 col-xs-12">
                    <p>Dinas Sosial Kabupaten Bolaang Mongondow</p>
                    <p className="copyright-text">Copyright &copy; 2021 by <a href="#"> E-Government</a> Diskominfo
                        Bolmong</p>
                </div>
            </div>
        </div>

    </section>

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    <!-- Vendor JS Files -->
    @include('dinsos.layout.script')

</body>

</html>
