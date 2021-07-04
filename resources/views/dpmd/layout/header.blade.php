<div class="container-fluid container-xl d-flex align-items-center justify-content-between">

<h1 class="logo"><img src="{{ asset('assets/img/logobolmong.png') }}" alt=""><a href="index.html"> DPMD</a>  
</h1>

<nav class="nav-menu d-none d-lg-block">

  <ul>
    <li class="{{ (request()->is('/')) ? 'active' : '' }}"><a href="{{ ('/') }}">Beranda</a></li>

    <li class="drop-down"><a href="#">Profil</a>
      <ul>
        <li class="{{ (request()->is('v-tugasfungsi')) ? 'active' : '' }}"><a href="{{ ('/v-tugasfungsi') }}">Tugas dan Fungsi</a></li>
        <li class="{{ (request()->is('v-sambutan')) ? 'active' : '' }}"><a href="{{ ('/v-sambutan') }}">Sambutan Kepala Dinas</a></li>
        <li class="{{ (request()->is('v-visimisi')) ? 'active' : '' }}"><a href="{{ ('/v-visimisi') }}">Visi & Misi</a></li>
        <li class="{{ (request()->is('v-struktur')) ? 'active' : '' }}"><a href="{{ ('/v-struktur') }}">Struktur Organisasi</a></li>
      </ul>
    </li>

    <li class="{{ (request()->is('v-berita')) ? 'active' : '' }}"><a href="{{ ('/v-berita') }}">Berita</a></li>
    <li class="drop-down"><a href="#">Bidang</a>
      <ul>
        <li class="{{ (request()->is('v-kelembagaan')) ? 'active' : '' }}"><a href="{{ ('/v-kelembagaan') }}">Bina Kelembagaan dan Pemanfaatan TTG</a></li>
        <li class="{{ (request()->is('v-pemerintahan')) ? 'active' : '' }}"><a href="{{ ('/v-pemerintahan') }}">Bina Pemerintahan Desa dan Pengembangan Desa</a></li>
        <li class="{{ (request()->is('v-usaha')) ? 'active' : '' }}"><a href="{{ ('/v-usaha') }}">Bina Usaha Ekonomi Desa</a></li>
      </ul>
    </li>
    <li class="{{ (request()->is('v-agenda')) ? 'active' : '' }}"><a href="{{ ('/v-agenda') }}">Agenda</a></li>
    <li><a href="https://ppid.bolmongkab.go.id">PPID</a></li>
    <li class="{{ (request()->is('v-galeri')) ? 'active' : '' }}"><a href="{{ ('/v-galeri') }}">Galeri</a></li>
    <li class="{{ (request()->is('v-kontak')) ? 'active' : '' }}"><a href="{{ ('/v-kontak') }}">Kontak</a></li>

  </ul>

</nav><!-- .nav-menu -->

</div>