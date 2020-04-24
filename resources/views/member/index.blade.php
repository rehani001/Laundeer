@extends('layouts.master2')

@section('content2') 
	@if(session('sukses'))
		<div class="alert alert-dark" role="alert">
		 {{session('sukses')}}
		</div>
	@endif
	
	<div class="row mt-lg-5">
		<div class="col-lg-10 mr-auto">
			<h4>Data Member</h4>
		</div>

		<div class="col">
			<a href="/member/tambah" class="btn btn-primary btn-sm">Tambah Member</a>
		</div>
	</div>
	<table class="table table-hover">
	  <thead style="background-color: #100851; color: #fff;" align="center">
	    <tr>
	      <th scope="col">No</th>
	      <th scope="col">Nama</th>
	      <th scope="col">Alamat</th>
	      <th scope="col">Jenis Kelamin</th>
	      <th scope="col">Telepon</th>
	      <th scope="col">Aksi</th>
	    </tr>
	  </thead>
	
	<?php $no = 1; ?>
	  @foreach($data_member as $m)
	  <tbody align="center">
	    <tr>
	      <td>{{$no++}}</td>
	      <td>{{$m->nama}}</td>
	      <td>{{$m->alamat}}</td>
	      <td>{{$m->jenis_kelamin}}</td>
	      <td>{{$m->tlp}}</td>
		  <td>
		    <a href="/member/{{$m->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
		    <a href="/member/{{$m->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin Ingin Dihapus?')">Hapus</a>
		 </td>
	    </tr>
	  </tbody>
	  @endforeach

	</table>

@endsection
