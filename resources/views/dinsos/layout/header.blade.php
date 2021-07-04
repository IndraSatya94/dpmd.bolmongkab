<!-- <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

<a href="index.html" class="logo d-flex align-items-center">
  <img src="assets/img/logobolmong.png" alt="">
  <span>DISHUB</span>
</a>
<nav id="navbar" class="navbar">
  <ul>
    <li><a class="{{ (request()->is('/')) ? 'active' : '' }}" href="{{ ('/') }}">Beranda</a></li>
    <li class="dropdown"><a href="#"><span>Profil</span> <i class="bi bi-chevron-down"></i></a>
      <ul>
        <li><a class="{{ (request()->is('v-tugasfungsi')) ? 'active' : '' }}" href="{{ ('/v-tugasfungsi') }}">Tugas dan Fungsi</a></li>
        <li><a class="{{ (request()->is('v-visimisi')) ? 'active' : '' }}" href="{{ ('/v-visimisi') }}">Visi dan Misi</a></li>
        <li><a class="{{ (request()->is('v-struktur')) ? 'active' : '' }}" href="{{ ('/v-struktur') }}">Struktur Organisasi</a></li>
      </ul>
    </li>
    <li><a class="{{ (request()->is('v-berita')) ? 'active' : '' }}" href="{{ ('/v-berita') }}">Berita</a></li>
    <li><a class="{{ (request()->is('v-agenda')) ? 'active' : '' }}" href="{{ ('/v-agenda') }}">Agenda</a></li>
    <li><a href="https://ppid.bolmongkab.go.id">PPID</a></li>
    <li><a class="{{ (request()->is('v-galeri')) ? 'active' : '' }}" href="{{ ('/v-galeri') }}">Galeri</a></li>
    <li><a class="{{ (request()->is('v-kontak')) ? 'active' : '' }}" href="{{ ('/v-kontak') }}">Kontak</a></li>
  </ul>
  <i class="bi bi-list mobile-nav-toggle"></i>
</nav>
</div> -->




<div class="container d-flex justify-content-between align-items-center">

<a href="index.html" class="logo d-flex align-items-center">
  <img src="assets/img/logobolmong.png" alt="">
  <span>DINAS SOSIAL</span>
</a>

<nav class="nav-menu d-none d-lg-block">

  <ul>
    <li class="{{ (request()->is('/')) ? 'active' : '' }}"><a href="{{ ('/') }}">Beranda</a></li>

    <li class="drop-down"><a href="#">Profil</a>
      <ul>
        <li class="{{ (request()->is('v-visimisi')) ? 'active' : '' }}"><a href="{{ ('/v-visimisi') }}">Visi & Misi</a></li>
        <li class="{{ (request()->is('v-struktur')) ? 'active' : '' }}"><a href="{{ ('/v-struktur') }}">Struktur Organisasi</a></li>
      </ul>
    </li>

    <li class="{{ (request()->is('v-berita')) ? 'active' : '' }}"><a href="{{ ('/v-berita') }}">Berita</a></li>
    <li class="{{ (request()->is('v-agenda')) ? 'active' : '' }}"><a href="{{ ('/v-agenda') }}">Agenda</a></li>
    <li class="drop-down"><a href="#">Bidang</a>
      <ul>
        <li class="{{ (request()->is('v-sekretariat')) ? 'active' : '' }}"><a href="{{ ('/v-sekretariat') }}">Sekretariat</a></li>
        <li class="{{ (request()->is('v-bidangrehabilitas')) ? 'active' : '' }}"><a href="{{ ('/v-bidangrehabilitas') }}">Rehabilitas Sosial</a></li>
      </ul>
    </li>
    <li><a href="https://ppid.bolmongkab.go.id">PPID</a></li>
    <li class="{{ (request()->is('v-galeri')) ? 'active' : '' }}"><a href="{{ ('/v-galeri') }}">Galeri</a></li>
    <li class="{{ (request()->is('v-kontak')) ? 'active' : '' }}"><a href="{{ ('/v-kontak') }}">Kontak</a></li>

  </ul>

</nav><!-- .nav-menu -->

</div>