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
          <h2>Galeri</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Galeri</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

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
            <h4>App 1</h4>
            <p>App</p>
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
            <p>Web</p>
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
          <p className="copyright-text">Copyright &copy; 2021 by  <a href="#"> E-Government</a> Diskominfo Bolmong</p>
        </div>
      </div>
    </div>
    
  </section>

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  @include('dinsos.layout.script')
</body>

</html>