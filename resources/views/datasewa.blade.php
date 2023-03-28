@extends('master')

@section('title')
    Ride Scooter
@endsection

@section('sidebar')
    @parent
@endsection

@section('top')
    @parent
@endsection

@section('judul')
    
@endsection

@section('konten')
<center><img src="/logobaru.png" alt="" style="width: 25%; margin-bottom: 20px"></center>
<H1 style="color: black; font-family: sans-serif; font-weight: bold; text-align: center; margin-bottom: 50px">DATA SEWA</H1>
<br>
<a href="/sewascter"><button type="button" class="btn btn-danger" style=" font-family: sans-serif; font-weight: bold; font-size: 12px; margin-left: 900px; margin-top: -100px">Tambah Data</button></a>
<div class="container" style="width: 80%; margin-top:-40px; margin-bottom:250px">

    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">ID Sewa</th>
            <th scope="col">Tanggal</th>
            <th scope="col">Nama</th>
            <th scope="col">Durasi</th>
            <th scope="col">Waktu</th>
            <th scope="col">Harga</th>
            <th scope="col">Metode Pembayaran</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($sewa as $x)
        <tr>
            <td>{{$x->idsewa}}</td>
            <td>{{$x->tanggal_sewa}}</td>
            <td>{{$x->namalengkap_sewa}}</td>
            <td>{{$x->durasi_sewa}}</td>
            <td>{{$x->waktu_sewa}}</td>
            <td>{{$x->harga_sewa}}</td>
            <td>{{$x->metode_pembayaran}}</td>
            <td style=""><a href="/editdatasewa/{{$x->idsewa}}" ><button type="button" class="btn btn-info" style="margin-left: -40px; padding-left:23px; padding-right:23px; font-family: sans-serif; color:white; font-weight: bold; font-size: 12px;">Edit</button></a>
                <a href="/hapusdatasewa/{{$x->idsewa}}" ><button type="button" class="btn btn-danger" style=" font-family: sans-serif; font-weight: bold; font-size: 12px; ">Delete</button></a></td>
        </tr>
            @endforeach
        </tbody>
  </table>
</div>

@endsection
