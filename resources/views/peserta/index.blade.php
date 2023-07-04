@extends('layout.template')
        
        <!-- START DATA -->
        @section('konten')
            
        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <!-- FORM PENCARIAN -->
            <div class="pb-3">
              <form class="d-flex" action="{{ url ('peserta')}}" method="get">
                  <input class="form-control me-1" type="search" name="katakunci" 
                  value="{{ Request::get('katakunci') }}" placeholder="Masukkan kata kunci" aria-label="Search">
                  <button class="btn btn-secondary" type="submit">Cari</button>
              </form>
            </div>
            
            <!-- TOMBOL TAMBAH DATA -->
            <div class="pb-3">
              <a href='{{ url('/create')}}' class="btn btn-primary">+ Tambah Data</a>
            </div>
      
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th class="col-md-1">No</th>
                        <th class="col-md-3">NIK</th>
                        <th class="col-md-4">Nama</th>
                        <th class="col-md-5">Umur</th>
                        <th class="col-md-6">Kekuatan</th>
                        <th class="col-md-7">Ketahanan</th>
                        <th class="col-md-8">kelenturan</th>
                        <th class="col-md-9">prestasi</th>
                        <th class="col-md-2">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i =  $data->firstItem() ?>
                    @foreach ($data as $item)
                    
                    <tr>
                        <td>{{$i}}</td>
                        <td>{{$item->nik}}</td>
                        <td>{{$item->nama}}</td>
                        <td>{{$item->umur}}</td>
                        <td>{{$item->kekuatan}}</td>
                        <td>{{$item->ketahanan}}</td>
                        <td>{{$item->kelenturan}}</td>
                        <td>{{$item->prestasi}}</td>
                        <td>
                            <a href='{{url('peserta/'.$item->nik.'/edit')}}' class="btn btn-warning btn-sm">Edit</a>
                            <form onsubmit="return confirm('Yakin mau di hapus?')" class='d-inline' action="{{ url('peserta/'.$item->nik)}}"
                                method="post">
                                @csrf
                                @method('DELETE')

                                <button type="submit" name="submit"class="btn btn-danger btn-sm">DEL</button>

                        </td>
                    </tr>
                    <?php $i++ ?>
                    @endforeach
                </tbody>
            </table>
            {{ $data->withQueryString()->links()}}
           
      </div>
        @endsection
        <
          <!-- AKHIR DATA -->
