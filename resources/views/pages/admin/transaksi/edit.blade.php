@extends('layouts.admin')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Edit Status transaksi</h1>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">

                <div class="card">
                    <div class="card-header border-transparent">
                        <form method="POST" action="{{ route('transaksi.update', $item->id) }}">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <label>Status transaksi</label>
                                <select name="transaction_status" required class="form-control">
                                    <option value="{{ $item->transaction_status }}">
                                        Status saat ini ({{ $item->transaction_status }})
                                    </option>
                                    <option value="IN_CART">In Cart</option>
                                    <option value="PENDING">Pending</option>
                                    <option value="SUCCESS">Success</option>
                                    <option value="CANCEL">Cancel</option>
                                    <option value="FAILED">Failed</option>
                                </select>
                                <br>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <a href="{{ route('paket-travel.index') }}" class="btn btn-primary">Back</a>
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
