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
<H1 style="color: black; font-family: sans-serif; font-weight: bold; text-align: center; margin-bottom: 50px">DATA SCOOTER</H1>
<a href="/inputscooter"><button type="button" class="btn btn-danger" style=" font-family: sans-serif; font-weight: bold; font-size: 12px; margin-left: 900px; margin-top: -20px">Tambah Data</button></a>
    <div class="container" style="width: 70%;">
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">Kode Scooter</th>
                <th scope="col">Nama Scooter</th>
                <th scope="col">Jenis Scooter</th>
                <th scope="col">Warna Scooter</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($datascooter as $x)
            <tr>
                <td>{{$x->kdscooter}}</td>
                <td>{{$x->namascooter}}</td>
                <td>{{$x->jenisscooter}}</td>
                <td>{{$x->warnascooter}}</td>
                <td style=""><a href="/editscooter/{{$x->kdscooter}}"><button type="button" class="btn btn-info" style="margin-top: -3px; padding-left:18px; padding-right:18px; font-family: sans-serif; color:white; font-weight: bold; font-size: 12px;">Edit</button></a>
                    <a href="/hapusscooter/{{$x->kdscooter}}"><button type="button" class="btn btn-danger" style=" font-family: sans-serif; font-weight: bold; font-size: 12px; padding-left:11px; padding-right:11px; text-align: center; margin-top:5px; margin-top:-1px">Delete</button></a></td>
            </tr>
            @endforeach
            </tbody>
      </table>
    </div>
    <br><br><br><br><br><br><br><br>
@endsection
