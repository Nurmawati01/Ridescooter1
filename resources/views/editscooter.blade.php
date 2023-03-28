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
<H1 style="color: black; font-family: sans-serif; font-weight: bold; text-align: center; margin-bottom: 50px">Edit Data Scooter</H1>
<div class="container" style="width: 50%">
    <form method="POST" action="/updatescooter/{{ $ubah->kdscooter }}" enctype="multipart/form-data">
        {{ @csrf_field() }}
        <div class="form-group">
            <label for="exampleFormControlInput1">Kode Scooter</label>
            <input type="text" name="kdscooter" value="{{ $ubah->kdscooter }}" class="form-control" >
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Nama Scooter</label>
            <input type="text" name="namascooter" value="{{ $ubah->namascooter }}" class="form-control" >
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Jenis Scooter</label>
            <input type="text" name="jenisscooter" value="{{ $ubah->jenisscooter }}" class="form-control" >
        </div>
        
        <div class="form-group">
            <label for="exampleFormControlInput1">Warna Scooter</label>
            <input type="text" name="warnascooter" value="{{ $ubah->warnascooter }}" class="form-control" >
        </div>
        <input type="submit" name="simpan" value="update">
    </form>
</div>
<br><br>
@endsection
