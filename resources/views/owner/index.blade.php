@extends('layouts.master2')

@section('content2')
    @if(session('sukses'))
        <div class="alert alert-dark" role="alert">
         {{session('sukses')}}
        </div>
    @endif
    
    <div class="row mt-lg-5">
        <div class="col-lg-10 mr-auto">
            <h4>Data Owner</h4>
        </div>
        <div class="col">
            <a href="/owner/tambah" class="btn btn-primary btn-sm">Tambah Owner</a>
        </div>
    </div>
   <table class="table table-hover">
      <thead style="background-color: #100851; color: #fff;" align="center">
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nama</th>
          <th scope="col">Username</th>
          <th scope="col">Outlet</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
    
    <?php $no = 1; ?>
      @foreach($data_owner as $o)
      <tbody align="center">
        <tr>
          <td>{{$no++}}</td>
          <td>{{$o->nama}}</td>
          <td>{{$o->username}}</td>
          <!-- Ngambil dari function di model paket -->
          <td>{{$o->tb_outlet->nama}}</td>
          <td>
            <a href="/owner/{{$o->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
            <a href="/owner/{{$o->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin Ingin Dihapus?')">Hapus</a>
          </td>
        </tr>
      </tbody>
      @endforeach

    </table>

@endsection