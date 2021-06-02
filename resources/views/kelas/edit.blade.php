@extends('layout.template')

@section('content')

<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Edit Kelas</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{route('kelas.update', ['id' => $kelas->id]) }}" method="POST">
        @method('PUT')
        @csrf

      <div class="card-body">
        <div class="form-group">
          <label for="exampleInputEmail1">Nama Kelas</label>
          <input type="text" class="form-control" name="nama" id="exampleInputEmail1" placeholder="Enter Kelas" value="{{$kelas->nama}}">
        </div>
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>
@endsection
