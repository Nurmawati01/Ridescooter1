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
<H1 style="color: black; font-family: sans-serif; font-weight: bold; text-align: center; margin-bottom: 50px">Sewa Scooter</H1>
<div class="container" style="width: 50%; margin-right: 300px; margin-top:-40px">
    <form method="POST" action="/simpansewa" enctype="multipart/form-data">
      {{ @csrf_field() }}
        <!-- 2 column grid layout with text inputs for the first and last names -->
        <div class="row mb-4">
          <div class="col">
            <div class="form-outline">
              <label class="form-label" for="form6Example1">Id Sewa</label>
              <input type="text" id="form6Example1" class="form-control" name="idsewa"/>
            </div>
          </div>
          <div class="col">
            <div class="form-outline">
                <label class="form-label" for="form6Example2">Tanggal Sewa</label>
              <input type="date" id="form6Example2" class="form-control" name="tanggal"/>
            </div>
          </div>
        </div>
        <div class="row mb-4">
          <div class="col">
            <div class="form-outline">
              <label class="form-label" for="form6Example1">Nama Lengkap</label>
              <input type="text" id="form6Example1" class="form-control" name="nama"/>
            </div>
          </div>
          <div class="col">
            <div class="form-outline">
                <label class="form-label" for="form6Example2">Durasi Sewa</label>
                <select class="custom-select" id="inputGroupSelect01" name="durasi">
                  <option selected> </option>
                  <option value="30 Menit">30 Menit</option>
                  <option value="1 Jam">1 Jam</option>
                  <option value="1 Jam 30 Menit">1 Jam 30 Menit</option>
                  <option value="2 Jam">2 Jam</option>
                </select>
            </div>
          </div>
        </div>
      
        <!-- Text input -->
        <div class="form-outline mb-4" style="margin-top: -20px">
            <label class="form-label" for="form6Example4">Waktu</label>
          <input type="time" id="form6Example4" class="form-control" name="waktu"/>
        </div>
      
        <!-- Email input -->
        <div class="form-outline mb-4" style="margin-top: -20px; padding-bottom:-50px">
            <label class="form-label" for="form6Example5">Harga</label>
            <select class="custom-select" id="inputGroupSelect01" name="harga">
              <option selected> </option>
              <option value="50000">Rp.50.000,- / 30 Menit</option>
              <option value="100000">Rp.100.000,- / 1 Jam</option>
              <option value="150000">Rp.150.000,-/ 1 Jam 30 Menit</option>
              <option value="200000">Rp.200.000,- / 2 Jam</option>
            </select>
        </div>
        <label class="form-label" for="form6Example5" style="margin-top: -100px">Metode Pembayaran</label>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
              <label class="input-group-text" for="inputGroupSelect01">Pilihan</label>
            </div>
            <select class="custom-select" id="inputGroupSelect01" name="metode">
              <option selected> </option>
              <option value="Dana">Dana</option>
              <option value="Ovo">Ovo</option>
              <option value="Gopay">Gopay</option>
              <option value="ShopeePay">ShopeePay</option>
            </select>
          </div>
      
        <!-- Submit button -->
        <button type="submit" class="btn btn-primary btn-block mb-4" name="simpan">Sewa</button>
      </form>
</div>
@endsection