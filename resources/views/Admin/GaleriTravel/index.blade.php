@extends('layouts.app')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Galeri Travel</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="admin">Dashboard</a></li>
              <li class="breadcrumb-item active">Galeri Travel</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

        <!-- TABLE: LATEST ORDERS -->
        <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title">Tabel Galeri Travel</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool">
                    <a href="{{ route('GaleriTravel.create')}}"><i class="fas fa-plus"></i></a>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
              @if(Session::has('success'))
                <div class="alert alert-light">
                  {{ Session('success') }}
                </div>
              @endif
                <div class="table-responsive">
                  <table class="table m-0" border="1">
                    <thead>
                    <tr>
                      <th>ID</th>
                      <th>Travel</th>
                      <th>Gambar</th>
                      <th>Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($items as $row)
                    <tr>
                      <td><a href="pages/examples/invoice.html">{{$row -> id}}</a></td>
                      <td>{{$row -> travel_package->title}}</td>
                      <td><img src="{{ Storage::url($row->image)}}" alt="" style="width: 150px;" class="img-thumbnail"/></td>
                      <td>
                        <div class="sparkbar" data-color="#00a65a" data-height="20">
                        <a class="badge badge-success" href="{{ route('GaleriTravel.edit',$row->id)}}">Edit</a> | 
                        
                        <form action="{{ route('GaleriTravel.destroy',$row->id)}}" method="POST" class="d-inline">
                        @csrf
                        @method('delete')
                        <button class="badge badge-warning">Hapus</button>
                        </form>

                        </div>
                      </td>
                    </tr>
                    @empty
                    <tr>
                      <td colspan=6 class="text-center"><i>Data Masih Kosong</i></td>
                    </tr>
                    @endforelse
                    </tbody>
                  </table>
                  </div> 
              </div>
        <!-- /.table-responsive -->
        </div>
      <!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
</div>
@endsection