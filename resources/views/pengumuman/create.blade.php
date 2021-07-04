<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->

<html lang="en">

<head>
    <title>AdminLTE 3 | Starter</title>
    @include('Template.head')
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Navbar -->
        @include('Template.navbar')
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        @include('Template.left-sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">Kelola Halaman Pengumuman</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Starter Page</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->
            <div class="content">

                @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Periksa Kembali Inputan Anda !</strong><br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <div class="card card-primary" style="margin-top:10px;">
                    <div class="card-header">
                        Tambah Pengumuman
                    </div>
                    <div class="card-body card-primary">
                        <form action="{{ route('pengumuman.store') }}" method="POST">
                            @csrf

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Judul:</strong>
                                    <input type="text" value="{{ old('judul') }}" name="judul" class="form-control" placeholder="Judul">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <label class="input-group-text" for="inputGroupSelect01">Kategori
                                                Pengumuman</label>
                                        </div>
                                        <select class="custom-select" id="inputGroupSelect01" name="id_kategori"
                                            id="id_kategori">
                                            <option value="">Pilih Kategori</option>
                                            @foreach ($kategori as $kateg)
                                            <option value="{{ $kateg->id}}">{{ $kateg->nama }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <label class="input-group-text" for="inputGroupSelect01">Tag
                                                Pengumuman</label>
                                        </div>
                                        <div class="multi_select_box">
                                        <select class="multi_select" name="id_tag"
                                            id="id_tag">
                                            <option value="">Pilih Tag</option>
                                            @foreach ($tags as $tag)
                                            <option value="{{ $tag->id}}">{{ $tag->nama }}</option>
                                            @endforeach
                                        </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-1 col-sm-1 col-md-1">
                                <div class="form-group">
                                    <strong>Author ID:</strong>
                                    <input class="form-control" type="text" name="id_user" id="id_user"
                                        value="{{ auth()->user()->id }}" placeholder="{{ auth()->user()->id }}"
                                        readonly>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Konten:</strong>
                                    <textarea class="form-control" style="height:150px" name="konten"
                                        placeholder="Konten">{{ old('konten') }}</textarea>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Slug:</strong>
                                    <input type="text" value="{{ old('slug') }}" name="slug" class="form-control" placeholder="slug">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 text-left">
                                <button type="submit" class="btn btn-primary" onClick="return confirm('Simpan ?')">Simpan</button>
                                <a class="btn btn-light" href="{{ route('pengumuman.index') }}">Batal</a>
                            </div>

                        </form>
                    </div>
                </div>



            </div>
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
        <div class="p-3">
            <h5>Title</h5>
            <p>Sidebar content</p>
        </div>
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    @include('Template.footer')
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    @include('Template.script')
</body>

</html>
