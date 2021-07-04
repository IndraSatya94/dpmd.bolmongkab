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
                            <h1 class="m-0 text-dark">Kelola Halaman Agenda</h1>
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
    Tambah Agenda
  </div>
  <div class="card-body">
<form action="{{ route('agenda.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    
    
        <div class="col-xs-6 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Author ID:</strong>
                <input class="form-control" type="text" name="user" id="user" value="{{ auth()->user()->name }}" placeholder="{{ auth()->user()->name }}" readonly>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>acara:</strong>
                <textarea class="form-control" style="height:150px" name="acara" placeholder="Acara">{{ old('acara') }}</textarea>
            </div>
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4">
            <div class="form-group">
                <strong>Tempat:</strong>
                <input type="text" value="{{ old('tempat') }}" name="tempat" class="form-control" placeholder="Tempat">
            </div>
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4">
            <div class="form-group">
                <strong>Tanggal:</strong>
                <input type="date" value="{{ old('tanggal') }}" name="tanggal" class="form-control" placeholder="Tanggal">
            </div>
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4">
            <div class="form-group">
                <strong>Mulai:</strong>
                <input type="time" value="{{ old('mulai') }}" name="mulai" class="form-control" placeholder="Mulai">
            </div>
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4">
            <div class="form-group">
                <strong>Selesai:</strong>
                <input type="time" value="{{ old('selesai') }}" name="selesai" class="form-control" placeholder="Selesai">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-left">
                <button type="submit" class="btn btn-primary" onClick="return confirm('Simpan ?')">Simpan</button>
                <a class="btn btn-light" href="{{ route('agenda.index') }}">Batal</a>
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