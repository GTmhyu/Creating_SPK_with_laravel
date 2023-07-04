@extends('layout.template')
@section('konten')

    
<form action='{{url('peserta')}}' method='post' enctype="multipart/form-data">
    @method('post')
    @csrf 
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <div class="mb-3 row">
            <label for="nik" class="col-sm-2 col-form-label">NIK</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" name='nik' value="{{ Session::get
                ('nik')}}" id="nik">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='nama' value="{{ Session::get
                    ('nama')}}" id="nama">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="jurusan" class="col-sm-2 col-form-label">Umur</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='umur' value="{{ Session::get
                    ('umur')}}" id="umur">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="jurusan" class="col-sm-2 col-form-label">Kekuatan</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='kekuatan' value="{{ Session::get
                    ('kekuatan')}}" id="kekuatan">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="jurusan" class="col-sm-2 col-form-label">Ketahanan</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='ketahanan' value="{{ Session::get
                    ('ketahanan')}}" id="ketahanan">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="jurusan" class="col-sm-2 col-form-label">Kelenturan</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='kelenturan' value="{{ Session::get
                    ('kelenturan')}}" id="kelenturan">
            </div>
        </div>

        <div class="mb-3 row">
            <label for="jurusan" class="col-sm-2 col-form-label">Prestasi</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='prestasi' value="{{ Session::get
                    ('prestasi')}}" id="prestasi">
            </div>
        </div>          
        <div class="mb-3 row">
            <label for="jurusan" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button></div>
        </div>
    </div>
</form>
@endsection