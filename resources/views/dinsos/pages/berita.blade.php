<!DOCTYPE html>
<html lang="en">

<head>
    @include('dinsos.layout.head')
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
                        @foreach($beritas as $berita)
                        <article class="entry">

                            <div class="entry-single">
                                <img src="image/berita/{{$berita->image}}" alt="" class="img-fluid">
                            </div>

                            <h2 class="entry-title">
                                <a href="{{ route('berita-detail',$berita->id) }}">{{$berita->judul}}</a>
                            </h2>

                            <div class="entry-meta">
                                <ul>
                                    <li class="d-flex align-items-center"><i class="icofont-user"></i> <a
                                            href="detail-berita.html">{{$berita->user->name}}</a></li>
                                    <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a
                                            href="detail-berita.html"><time
                                                datetime="2020-01-01">2{{$berita->created_at}}</time></a></li>
                                </ul>
                            </div>

                            <div class="entry-content">
                                <p>
                                    {{$berita->konten}}
                                </p>
                                <div class="read-more">
                                    <a href="{{ route('berita-detail',$berita->id) }}">Selengkapnya...</a>
                                </div>
                            </div>

                        </article><!-- End berita entry -->
                        @endforeach

                        <div class="berita-pagination">
                            {!! $beritas->links('Template.pagination') !!}
                        </div>

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
                                    @foreach($kategori as $k)
                                    <li><a href="#">{{$k->nama}} <span>-</span></a></li>
                                    @endforeach
                                </ul>
                            </div><!-- End sidebar categories-->

                            <h3 class="sidebar-title">Lainnya</h3>
                            <div class="sidebar-item recent-posts">
                            @foreach($sidebar as $side)
                                <div class="post-item clearfix">
                                    <img src="image/berita/{{$side->image}}" alt="">
                                    <h4><a href="{{ route('berita-detail',$side->id) }}">{{$side->judul}}</a>
                                    </h4>
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
