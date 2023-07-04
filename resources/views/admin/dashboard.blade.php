@extends('admin.layouts.main')
@push('style')
    <link href="{{ asset('sbadmin/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endpush
@section('content')
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Ketentuan Peserta</h1>
                    <p class="mb-4"> Hasil akhir dari Value yang peserta inputkan

                    <!-- DataTales Example -->

                    
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Umur</th>
                                            <th>Kekuatan</th>
                                            <th>Ketahanan</th>
                                            <th>Kelenturan</th>
                                            <th>prestasi</th>
                                            <th>Keterangan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach  ($hasil as $h )
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$h->peserta->nama}}</td>
                                            <td>{{$h->peserta->umur}}</td>
                                            <td>{{$h->peserta->kekuatan}}</td>
                                            <td>{{$h->peserta->ketahanan}}</td>
                                            <td>{{$h->peserta->kelenturan}}</td>
                                            <td>{{$h->peserta->prestasi}}</td>
                                            <td>{{$h->status}}</td>


                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    
@endsection