@extends('layout.template')

@section('content')

    <a href="/kelas/tambah" class="btn btn-primary w-25 m-3">Tambah Kelas</a>
    <div class="card">
        <div class="card-header">
          <h3 class="card-title">Bordered Table</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th style="width: 10px">#</th>
                <th>Nama</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($kelas as $item)
                <tr>
                    <td>1</td>
                    <td>{{$item->nama}}</td>
                    <td>
                        <a href="{{route('kelas.edit',['id'=>$item->id])}}" class="btn btn-warning">Edit</a>
                        <form action="{{route('kelas.hapus', ['id' => $item->id])}}" method="POST">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
@endsection
