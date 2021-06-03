@extends('layouts.app')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
        <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Detail Transaksi {{ $item->user->name}}</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="Admin.Dashboard">Dashboard</a></li>
              <li class="breadcrumb-item active">Detail Transaksi</li>
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
              <table class="table table-bordered">
                <tr>
                  <th>ID</th>
                  <td>{{ $item->id}}</td>
                </tr>
                <tr>
                  <th>Paket Travel</th>
                  <td>{{ $item->travel_package->title}}</td>
                </tr>
                <tr>
                  <th>Pembeli</th>
                  <td>{{ $item->user->name}}</td>
                </tr>
                <tr>
                  <th>Additional Visa</th>
                  <td>Rp.{{ $item->additional_visa}}.000</td>
                </tr>
                <tr>
                  <th>Total Transaksi</th>
                  <td>Rp.{{ $item->transaction_total}}.000</td>
                </tr>
                <tr>
                  <th>Status Transaksi</th>
                  <td>{{ $item->transaction_status}}</td>
                </tr>
                <tr>
                  <th>Pembelian</th>
                  <td>
                    <table class="table table-bordered">
                      <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Nationality</th>
                        <th>Visa</th>
                        <th>DOE Passport</th>
                      </tr>
                      @foreach ($item->details as $detail)
                          <tr>
                            <td>{{ $detail->id }}</td>
                            <td>{{ $detail->username }}</td>
                            <td>{{ $detail->nationality }}</td>
                            <td>{{ $detail->is_visa ? '30 Hari' : 'N/A' }}</td>
                            <td>{{ $detail->doe_passport }}</td>
                          </tr>
                      @endforeach
                    </table>
                  </td>
                </tr>
              </table>
              </div>
        </div>
      <!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
</div>
@endsection