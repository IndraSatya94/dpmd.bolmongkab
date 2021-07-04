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
                <div class="container-fluid animate__animated animate__bounceInDown">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">Halaman Agenda</h1>
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

            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                    @endif
                    <div class="button-buat animate__animated animate__bounceInDown">
                        <a class="btn btn-primary" href="{{ route('agenda.create') }}"><i class="fas fa-plus"></i>
                            Tambah</a>
                    </div>


                    <div class="card text-center card-primary" style="margin-top:10px;">
                        <div class="card-header">
                            Data Agenda
                        </div>
                        <div class="card-body">
                            <table
                                class="table table-bordered table-responsive animate__animated animate__bounceInRight animate__fast">
                                <thead class="table-primary">
                                    <tr>
                                        <th>No</th>
                                        <th>Author</th>
                                        <th>Acara</th>
                                        <th>Tempat</th>
                                        <th>Tanggal</th>
                                        <th>Mulai</th>
                                        <th>Selesai</th>
                                        <th width="280px">Action</th>
                                    </tr>
                                </thead>

                                @foreach ($agenda as $agen)
                                <tbody>
                                    <tr>
                                        <td>{{ ++$i }}</td>
                                        <td>{{ $agen->user }}</td>
                                        <td>{{ $agen->acara }}</td>
                                        <td>{{ $agen->tempat }}</td>
                                        <td>{{ $agen->tanggal }}</td>
                                        <td>{{ $agen->mulai }}</td>
                                        <td>{{ $agen->selesai }}</td>
                                        <td>
                                            <form action="{{ route('agenda.destroy',$agen->id) }}" method="POST"
                                                onSubmit="return confirm('Apakah anda yakin ingin menghapus data ?')">

                                                <a class="btn btn-warning"
                                                    href="{{ route('agenda.edit',$agen->id) }}"><i
                                                        class="fas fa-pen-square"></i></a>

                                                @csrf
                                                @method('DELETE')

                                                <button type="submit" class="btn btn-danger"><i
                                                        class="fas fa-trash"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                </tbody>

                                @endforeach
                            </table>



                            <div class="pagination" style="margin-top:20px;">
                                {!! $agenda->links() !!}
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
