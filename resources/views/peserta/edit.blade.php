@extends('layout.template')
@section('konten')

    
<form action='{{url('peserta/'.$data->nik)}}' method='post'>
    @csrf 
    @method('PUT')
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <a href='{{ url('peserta')}}' class="btn btn-secondary">Kembali</a>
        <div class="mb-3 row">
            <label for="nik" class="col-sm-2 col-form-label">NIK</label>
            <div class="col-sm-10">
                {{ $data->nik}}
            </div>
        </div>
        <div class="mb-3 row">
            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='nama' value="{{ $data->nama}}" id="nama">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="umur" class="col-sm-2 col-form-label">Umur</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='umur' value="{{$data->umur}}" id="umur">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="kekuatan" class="col-sm-2 col-form-label">Kekuatan</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='kekuatan' value="{{$data->kekuatan}}" id="kekuatan">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="ketahanan" class="col-sm-2 col-form-label">Ketahanan</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='ketahanan' value="{{$data->ketahanan}}" id="ketahanan">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="kelenturan" class="col-sm-2 col-form-label">Kelenturan</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='kelenturan' value="{{$data->kelenturan}}" id="kelenturan">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="prestasi" class="col-sm-2 col-form-label">Prestasi</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='prestasi' value="{{$data->prestasi}}" id="prestasi">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="umur" class="col-sm-2 col-form-label"></label>
            <label for="kekuatan" class="col-sm-2 col-form-label"></label>
            <label for="ketahanan" class="col-sm-2 col-form-label"></label>
            <label for="kelenturan" class="col-sm-2 col-form-label"></label>
            <label for="prestasi" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button></div>
        </div>
    </div>
</form>
@endsection