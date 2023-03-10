@extends('layouts.admin')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Perbarui Paket Travel Baru</h1>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">

                <div class="card">
                    <div class="card-header border-transparent">
                        <form method="POST" action="{{ route('paket-travel.update', $item->id) }}">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <label>Judul Travel</label>
                                <input type="text" name="title" required class="form-control" id="text"
                                    placeholder="Tambahkan judul travel..." value="{{ $item->title }}">
                                <br>
                                <label>Lokasi Travel</label>
                                <input type="text" name="location" required class="form-control" id="text"
                                    placeholder="Lokasi travel..." value="{{ $item->location }}">
                                <br>
                                {{-- <label for="editor">Deskripsi Travel</label>
                                <textarea name="about" rows="10" required id="editor"
                                    class="ckeditor w-100 ">{!! $item->about !!}</textarea> --}}

                                <label>Deskripsi Travel</label>
                                <textarea name="about" rows="10" required
                                    class="d-block w-100 form-control">{{ $item->about }}</textarea>

                                <br>
                                <label>Acara Unggulan</label>
                                <input type="text" class="form-control" required name="featured_event"
                                    placeholder="Featured event" value="{{ $item->featured_event }}">
                                <br>
                                <label>Bahasa</label>
                                <input type="text" class="form-control" required name="language" placeholder="Language"
                                    value="{{ $item->language }}">
                                <br>
                                <label>Makanan</label>
                                <input type="text" class="form-control" required name="foods" placeholder="Foods"
                                    value="{{ $item->foods }}">
                                <br>
                                <label>Tanggal keberangkatan</label>
                                <input type="date" class="form-control" required name="departure_date"
                                    placeholder="Departure Date" value="{{ $item->departure_date }}">
                                <br>
                                <label>Durasi</label>
                                <input type="text" class="form-control" required name="duration" placeholder="Duration"
                                    value="{{ $item->duration }}">
                                <br>
                                <label>Tipe</label>
                                <input type="text" class="form-control" required name="type" placeholder="Tipe Travel..."
                                    value="{{ $item->type }}">
                                <br>
                                <label>Harga</label>
                                <input type="number" class="form-control" required name="price"
                                    placeholder="Harga Travel..." value="{{ $item->price }}">
                                <br>
                                <label>Bintang</label>
                                <input type="number" class="form-control" required name="star"
                                    placeholder="Bintang Travel..." value="{{ $item->star }}">
                                <br>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <button type="reset" class="btn btn-danger">Reset</button>
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
