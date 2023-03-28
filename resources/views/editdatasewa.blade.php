@extends('master')

@section('title')
    Edit Data Sewa Scooter
@endsection

@section('sidebar')
    @parent
@endsection

@section('top')
    @parent
@endsection

@section('judul')
    <center>
        <h1>EDIT DOSEN</h1>
    </center>
@endsection

@section('konten')
<center><img src="/logobaru.png" alt="" style="width: 25%; margin-bottom: 20px"></center>
<H1 style="color: black; font-family: sans-serif; font-weight: bold; text-align: center; margin-bottom: 50px">Sewa Scooter</H1>
<div class="container" style="width: 50%">
    <form method="POST" action="/updatesewa/{{ $ubah->idsewa }}" enctype="multipart/form-data">
        {{ @csrf_field() }}
        <div class="form-group">
            <label for="exampleFormControlInput1">ID Sewa</label>
            <input type="text" name="idsewa" value="{{ $ubah->idsewa }}" class="form-control" >
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Tanggal</label>
            <input type="date" name="tanggal" value="{{ $ubah->tanggal_sewa }}" class="form-control" >
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Nama</label>
            <input type="text" name="nama" value="{{ $ubah->namalengkap_sewa }}" class="form-control" >
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Durasi</label>
            <input type="text" name="durasi" value="{{ $ubah->durasi_sewa }}" class="form-control" >
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Waktu</label>
            <input type="time" name="waktu" value="{{ $ubah->waktu_sewa }}" class="form-control" >
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Harga</label>
            <input type="text" name="harga" value="{{ $ubah->harga_sewa }}" class="form-control" >
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Metode Pembayaran</label>
            <input type="text" name="metode" value="{{ $ubah->metode_pembayaran }}" class="form-control" >
        </div>
        <input type="submit" name="simpan" value="update">
    </form>
</div>
<br><br>
@endsection
