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
          <h2>Kontak</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Kontak</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      @foreach($kontaks as $kontak)
      <div class="container">

        <div>
        <iframe style="border:0; width: 100%; height: 270px;" src="{{$kontak->embed}}" width="600" height="450" frameborder="0" allowfullscreen></iframe>
        </div>

        <div class="row mt-5">

          <!-- <div class="col-lg-4"> -->
            <div class="info">
              <div class="address">
                <i class="icofont-google-map"></i>
                <h4>Alamat:</h4>
                <p>{{$kontak->alamat}}</p>
              </div>

              <div class="email">
                <i class="icofont-envelope"></i>
                <h4>Email:</h4>
                <p>{{$kontak->email}}</p>
              </div>

              <div class="phone">
                <i class="icofont-phone"></i>
                <h4>Telepon:</h4>
                <p>{{$kontak->telepon}}</p>
              </div>

            </div>
        </div>

      </div>
      @endforeach
    </section><!-- End Contact Section -->

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