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

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        @foreach ($slide1 as $sli)
        <div class="carousel-item active" style="background-image: url(image/slide/{{ $sli->image }})">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown"><span>{{ $sli->caption }}</span></h2>
              <p class="animate__animated animate__fadeInUp">{{ $sli->body }}</p>
            </div>
          </div>
        </div>
        @endforeach

      </div>

      <!-- <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon icofont-simple-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon icofont-simple-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a> -->

    </div>
  </section><!-- End Hero -->

  <main id="main">


    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container">
        <div class="section-title">
          <h2>Berita</h2>
          <p>Terbaru</p>
        </div>
        <div class="row">
        @foreach($recents as $berita)
          <div class="col-lg-4  col-md-6 d-flex align-items-stretch" data-aos="fade-up">
            <article class="entry">

              <div class="entry-img">
                <img src="image/berita/{{$berita->image}}" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="{{ route('berita-detail',$berita->id) }}">{{$berita->judul}}</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="blog-single.html">{{$berita->user->level}}</a></li>
                  <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">{{$berita->created_at}}</time></a></li>
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

            </article><!-- End blog entry -->
          </div>
          @endforeach

        </div>

        <div class="blog-pagination" data-aos="fade-up">
          <ul class="justify-content-center">
            <li class="disabled"><i class="icofont-rounded-left"></i></li>
            <li><a href="{{ ('v-berita') }}">Lainnya</a></li>
          </ul>
        </div>

      </div>
    </section><!-- End Blog Section -->

    <section id="dinsos" class="services">
      <div class="container">

        <div class="section-title">
          <h2>Dinas Sosial</h2>
          <p>Bolaang Mongondow</p>
        </div>

        <div class="row">
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="icofont-users-social"></i>
              <h4>KERAGAMAN</h4>
              <p>Memelihara, memperkuat ketahanan sosial dan kesetiakawanan sosial;
                Mengembangkan prakarsa dan peran serta masyarakat untuk usaha
                kesejahteraan sosial
              </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="icofont-handshake-deal"></i>
              <h4>SALING MENGHORMATI</h4>
              <p>Meningkatkan aksesbilitas perlindungan sosial untuk menjamin
                pemenuhan kebutuhan dasar, pelayanan sosial, pemberdayaan sosial
                dan jaminan kesejahteraan sosial bagi PMKS</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="icofont-transparent"></i>
              <h4>TRANSPARANSI</h4>
              <p>Meningkatkan transparansi dan akuntabilitas dalam penyelenggaraan
                pembangunan kesejahteraan sosial</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="icofont-workers-group"></i>
              <h4>INTEGRITAS</h4>
              <p>Meningkatkan profesionalisme dalam penyelenggaraan pembangunan
                kesejahteraan sosial dan dalam pelayanan sosial</p>
            </div>
          </div>
      </div>
    </section><!-- End Services Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
    <div class="container">

<div class="section-title">
  <h2>Galeri</h2>
  <p>Foto dan Video</p>
</div>

<div class="row">
  <div class="col-lg-12 d-flex justify-content-center">
    <ul id="portfolio-flters">
      <li data-filter="*" class="filter-active">All</li>
      <li data-filter=".filter-foto">Foto</li>
      <li data-filter=".filter-video">Video</li>
    </ul>
  </div>
</div>

<div class="row portfolio-container">
@foreach($gambars as $gambar)
  <div class="col-lg-4 col-md-6 portfolio-item filter-foto">
    <div class="portfolio-wrap">
      <img src="file/galeri/{{ $gambar->file}}" class="img-fluid" alt="">
      <div class="portfolio-info">
        <h4>{{$gambar->nama}}</h4>
        <p>{{$gambar->keterangan}}</p>
        <div class="portfolio-links">
          <a href="file/galeri/{{ $gambar->file}}" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="bx bx-plus"></i></a>
          <a href="portfolio-details.html" data-gall="portfolioDetailsGallery" data-vbtype="iframe" class="venobox" title="Portfolio Details"><i class="bx bx-link"></i></a>
        </div>
      </div>
    </div>
  </div>
  @endforeach

  @foreach($videos as $video)
  <div class="col-lg-4 col-md-6 portfolio-item filter-video">
    <div class="portfolio-wrap">
    <video controls>
            <source src="file/galeri/{{$video->file}}" type="video/webm" />
          </video>
      <div class="portfolio-info">
        <h4>{{$video->nama}}</h4>
        <p>{{$video->keterangan}}</p>
        <div class="portfolio-links">
        <a href="file/galeri/{{ $video->file}}" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Web 3"><i class="bi bi-plus"></i></a>
        </div>
      </div>
    </div>
  </div>
  @endforeach

</div>

</div>
    </section><!-- End Portfolio Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <section id="footer" className="text-center">


    <div className="container">
      <div className="row">
        <div className="col-md-12 col-sm-6 col-xs-12">
        <p>Dinas Sosial Kabupaten Bolaang Mongondow</p>
          <p className="copyright-text">Copyright &copy; 2021 by  <a href="#"> E-Government</a> Diskominfo</p>
        </div>
      </div>
    </div>
    
  </section>

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  @include('dinsos.layout.script')

</body>

</html>