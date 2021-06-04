@extends('layouts.app')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
        <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Ubah Galeri Travel</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

        <div class="card">
              <div class="card-header border-transparent">

                <form method="POST" action="{{route('GaleriTravel.update', $item->id)}}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                    <div class="card-body">

                    <label for="travel_packages_id">Pilih Paket Travel</label>

                    <select name="travel_packages_id" required class="form-control">
                    <option value="{{$item->travel_packages_id}}">Harap teliti sebelum mengubah!</option>
                    @foreach($travel_packages as $travel_package)
                        <option value="{{ $travel_package->id}}"> {{ $travel_package->title }}</option>
                    @endforeach
                    </select>
                    <br>

                    <label for="image">Image</label>
                    <input type="file" name="image" class="form-control" placeholder="Masukan gambar Travel..." required>
                    <br>

                    <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="reset" class="btn btn-danger">Reset</button>
                    <a href="{{route('GaleriTravel.index')}}" class="btn btn-primary">Back</a>
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