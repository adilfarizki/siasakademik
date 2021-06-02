@extends('layout.template')

@section('content')

<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Quick Example</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="/kelas/store" method="POST">
        @csrf

      <div class="card-body">
        <div class="form-group">
          <label for="exampleInputEmail1">Nama Kelas</label>
          <input type="text" class="form-control" name="nama" id="exampleInputEmail1" placeholder="Enter Kelas">
        </div>
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>
@endsection
