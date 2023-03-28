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
<H1 style="color: black; font-family: sans-serif; font-weight: bold; text-align: center; margin-bottom: 50px">Input Scooter</H1>
<div class="container" style="width: 50%; margin-right: 300px; margin-top:-30px">
    <form method="POST" action="/simpanscooter" enctype="multipart/form-data">
      {{ @csrf_field() }}
        <!-- 2 column grid layout with text inputs for the first and last names -->
        <div class="row mb-4">
          <div class="col">
            <div class="form-outline">
              <label class="form-label" for="form6Example1">Kode Scooter</label>
              <input type="text" id="form6Example1" class="form-control" name="kdscooter"/>
            </div>
          </div>
          <div class="col">
            <div class="form-outline">
                <label class="form-label" for="form6Example2">Nama Scooter</label>
              <input type="text" id="form6Example2" class="form-control" name="namascooter"/>
            </div>
          </div>
        </div>
        <div class="row mb-4">
          <div class="col">
            <div class="form-outline">
              <label class="form-label" for="form6Example1">Jenis Scooter</label>
              <input type="text" id="form6Example1" class="form-control" name="jenisscooter"/>
            </div>
          </div>
          <div class="col">
            <div class="form-outline">
                <label class="form-label" for="form6Example2">Warna Scooter</label>
              <input type="text" id="form6Example2" class="form-control" name="warnascooter"/>
            </div>
          </div>
        </div>
      
        <!-- Submit button -->
        <button type="submit" class="btn btn-primary btn-block mb-4" name="simpan">Sewa</button>
      </form>
</div>
<br><br><br><br>
@endsection