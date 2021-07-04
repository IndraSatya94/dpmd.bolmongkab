<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{ asset('AdminLte/dist/img/AdminLTELogo.png') }}" class="brand-image img-circle elevation-3"
            style="opacity: .8" alt="AdminLTE Logo">
        <span class="brand-text font-weight-light">Halaman Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-4 pb-4 mb-4 d-flex">
            <div class="image">
                <img src="{{ asset('AdminLte/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ auth()->user()->name }}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

               <li class="nav-item">
                    <a href="{{ route('statiks.index') }}"
                        class="nav-link {{ (request()->is('statiks')) ? 'active' : '' }}">
                        <i class="fas fa-caret-right"></i>
                        <p>Halaman Statis</p>
                    </a>
                </li>

               <li class="nav-item">
                    <a href="{{ route('kontaks.index') }}"
                        class="nav-link {{ (request()->is('kontaks')) ? 'active' : '' }}">
                        <i class="fas fa-caret-right"></i>
                        <p>Kontak</p>
                    </a>
                </li>

               <li class="nav-item">
                    <a href="{{ route('galeris.index') }}"
                        class="nav-link {{ (request()->is('galeris')) ? 'active' : '' }}">
                        <i class="fas fa-caret-right"></i>
                        <p>Galeri</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('beritas.index') }}"
                        class="nav-link {{ (request()->is('beritas')) ? 'active' : '' }}">
                        <i class="fas fa-caret-right"></i>
                        <p>Berita</p>
                    </a>
                </li>

                <!-- <li class="nav-item">
                    <a href="{{ route('tips.index') }}" class="nav-link {{ (request()->is('tips')) ? 'active' : '' }}">
                        <i class="fas fa-caret-right"></i>
                        <p>Tips</p>
                    </a>
                </li> -->

                <li class="nav-item">
                    <a href="{{ route('agenda.index') }}"
                        class="nav-link {{ (request()->is('agenda')) ? 'active' : '' }}">
                        <i class="fas fa-caret-right"></i>
                        <p>Agenda</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('pengumuman.index') }}"
                        class="nav-link {{ (request()->is('pengumuman')) ? 'active' : '' }}">
                        <i class="fas fa-caret-right""></i>
                        <p>Pengumuman</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('kategori.index') }}"
                        class="nav-link {{ (request()->is('kategori')) ? 'active' : '' }}">
                        <i class="fas fa-caret-right""></i>
                        <p>Kategori</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('slide.index') }}"
                        class="nav-link {{ (request()->is('slide')) ? 'active' : '' }}">
                        <i class="fas fa-caret-right"></i>
                        <p>Slide</p>
                    </a>
                </li>

                <!-- <li class="nav-item">
                    <a href="{{ route('tags.index') }}" class="nav-link {{ (request()->is('tags')) ? 'active' : '' }}">
                        <i class="fas fa-caret-right"></i>
                        <p>Tags</p>
                    </a>
                </li> -->

                <li class="nav-item">
                    <a href="{{ route('logout') }}" class="nav-link">
                        <i class="fas fa-caret-right"></i>
                        <p>
                            Logout
                        </p>
                    </a>
                </li>

                @if (auth()->user()->level == "admin")
                <li class="nav-item">
                    <a href="{{ route('admin') }}" class="nav-link {{ (request()->is('admin')) ? 'active' : '' }}">
                        <i class="fas fa-caret-right"></i>
                        <p>Management User</p>
                    </a>
                </li>
                @endif


            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
