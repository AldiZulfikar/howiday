@extends('layouts.app')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
        <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambahkan Paket Travel Baru</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="Admin.Dashboard">Dashboard</a></li>
              <li class="breadcrumb-item active">Tambah Paket Travel</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

        <div class="card">
              <div class="card-header border-transparent">
                <form method="POST" action="{{route('PaketTravel.store')}}">
                @csrf
                    <div class="card-body">
                    <label>Judul Travel</label>
                        <input type="text" name="title" class="form-control" id="text" placeholder="Tambahkan judul travel..." value="{{ old('title')}}">
                        <br>
                    <label>Lokasi Travel</label>
                        <input type="text" name="location" class="form-control" id="text" placeholder="Lokasi travel..." value="{{ old('location')}}">
                        <br>
                    <label>Deskripsi Travel</label>
                        <textarea name="about" rows="10" class="d-block w-100 form-control">{{ old('about') }}</textarea>
                        <br>
                    <label>Featured event</label>        
                        <input type="text" class="form-control" name="featured_event" placeholder="Featured event" value="{{ old('featured_event')}}">
                        <br>
                    <label>Bahasa</label>
                        <input type="text" class="form-control" name="language" placeholder="Language" value="{{ old('language')}}">
                        <br>
                    <label>Makanan</label>
                        <input type="text" class="form-control" name="foods" placeholder="Foods" value="{{ old('foods')}}">
                        <br>
                    <label>Departured Date</label>
                        <input type="date" class="form-control" name="departure_date" placeholder="Departure Date" value="{{ old('departure_date')}}">
                        <br>
                    <label>Durasi</label>
                        <input type="text" class="form-control" name="duration" placeholder="Duration" value="{{ old('duration')}}">
                        <br>
                    <label>Tipe</label>
                        <input type="text" class="form-control" name="type" placeholder="Tipe Travel..." value="{{ old('type')}}">
                        <br>
                    <label>Harga</label>
                        <input type="number" class="form-control" name="price" placeholder="Harga Travel..." value="{{ old('price')}}">
                        <br>
                    <label>Bintang</label>
                        <input type="number" class="form-control" name="star" placeholder="Bintang Travel..." value="{{ old('star')}}">
                        <br>
                    <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{route('PaketTravel.index')}}" class="btn btn-primary">Back</a>
                    </div>
                </form>
              </div>
        </div>
      <!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
</div>
@endsection