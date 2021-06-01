@extends('layouts.app')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
        <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Create a New Article</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blank Page</li>
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

                <form method="POST" action="{{route('article.store')}}" enctype="multipart/form-data">
                @csrf
                    <div class="card-body">
                    <label for="tittle">Tittle</label>
                    <input type="text" name="judul" class="form-control" id="text" placeholder="Enter of Tittle..">
                    <br>

                    <label for="body">Body</label>
                    <textarea name="body" class="form-control"> </textarea>
                    <br>

                    <label for="category">Category</label>
                    <select name="category_id" class="form-control">
                    @foreach($category as $row)
                        <option value="{{$row -> id}}">{{$row->name_category}}</option>
                    @endforeach
                    </select>
                    <br>

                    <label for="image">Image</label>
                    <input type="file" name="image_article" class="form-control">
                    <br>

                    <label for="status">Status</label>
                    <select name="is_active" class="form-control">
                        <option value="1">Publish</option>
                        <option value="0">Draft</option>
                    </select>
                    <br>

                    <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="reset" class="btn btn-danger">Reset</button>
                    <a href="{{route('article.index')}}" class="btn btn-primary">Back</a>
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