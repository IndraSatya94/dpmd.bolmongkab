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
                    <h2>Visi dan Misi</h2>
                    <ol>
                        <li><a href="index.html">Home</a></li>
                        <li>Visi dan Misi</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= content Section ======= -->
        <section id="content" class="content">
            @foreach($visimisi as $vmisi)
            <div class="container">

                <img src="image/statiks/{{$vmisi->image}}" alt="" class="img-fluid center" style="width: 10%;">
                <h2 style="font-size: 38px">VISI DAN MISI</h2>
                <p>
                    {{$vmisi->body}}
                </p>

            </div>
            @endforeach
        </section><!-- End About Section -->


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
