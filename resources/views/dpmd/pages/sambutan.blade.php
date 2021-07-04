<!DOCTYPE html>
<html lang="en">

<head>
@include('dpmd.layout.head')
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
  @include('dpmd.layout.header')
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Sambutan</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Sambutan</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= About Section ======= -->
    <section id="statiks" class="statiks">
      @foreach($sambutan as $sambut)
      <div class="container">

            <h2>SAMBUTAN</h2>
            <p>{{$sambut->body}}</p>

      </div>
      @endforeach
    </section><!-- End About Section -->


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <section id="footer" className="text-center">
  @include('dpmd.layout.footer')
  </section>

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  @include('dpmd.layout.script')

</body>

</html>