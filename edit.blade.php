@extends('tamplate')
<!-- START FORM -->
@section('konten') 

<form action='{{ url('data_pembayaran/'.$data->id) }}' method='post'>
@csrf 
@method('PUT')
<div class="my-3 p-3 bg-body rounded shadow-sm">
    <div class="mb-3 row">
        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name='nama' value="{{ Session::get('nama') }}" id="nama">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name='alamat' value="{{ Session::get('alamat') }}" id="alamat">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="noTelp" class="col-sm-2 col-form-label">No.Telp</label>
        <div class="col-sm-10">
            <input type="number" class="form-control" name='noTelp' value="{{ Session::get('noTelp') }}" id="noTelp">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="jenisKelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name='jenisKelamin' value="{{ Session::get('jenisKelamin') }}" id="jenisKelamin">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="jumlah" class="col-sm-2 col-form-label">Jumlah</label>
        <div class="col-sm-10">
            <input type="number" class="form-control" name='jumlah' value="{{ Session::get('jumlah') }}" id="jumlah">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="jurusan" class="col-sm-2 col-form-label"></label>
        <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button></div>
    </div>
</div>
</form>
<!-- AKHIR FORM -->
@endsection