<!DOCTYPE html>
<html lang="en">

<head>

    @include('dpmd.layout.head')

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top">

        @include('dpmd.layout.header')

    </header><!-- End Header -->

    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Agenda</h2>
                    <ol>
                        <li><a href="index.html">Home</a></li>
                        <li>Agenda</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= agenda Section ======= -->
        <section id="agenda" class="agenda">
            <div class="container">
                <div class="judul">
                    <h2>AGENDA</h2>
                    <hr>
                </div>
                @foreach ($agenda as $agen )
                <article class="entry">

                    <h2 class="entry-title">
                        <a href="{{ route('agenda-detail',$agen->id) }}">{{ $agen->acara }}</a>
                    </h2>

                    <div class="entry-meta">
                        <ul>
                            <li class="d-flex align-items-center"><i class="icofont-user"></i> <a
                                    href="pengumuman-detail.html">{{ $agen->user }}</a></li>
                            <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a
                                    href="pengumuman-detail.html"><time
                                        datetime="{{ $agen->created_at }}">{{ $agen->created_at }}</time></a></li>
                        </ul>
                    </div>

                </article><!-- End pengumuman entry -->
                @endforeach
                {!! $agenda->links() !!}
            </div>

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