@extends('layouts.master2')

@section('content2')

				@if(session('sukses'))
					<div class="alert alert-dark" role="alert">
					 {{session('sukses')}}
					</div>
				@endif

				<div class="row mt-lg-5">
					<div class="col-lg-10 mr-auto">
						<h4>Data Kasir</h4>
					</div>

					<div class="col">
						<a href="/kasir/tambah" class="btn btn-primary btn-sm">Tambah Kasir</a>
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
				  @foreach($data_kasir as $k)
				  <tbody align="center">
				    <tr>
				      <td>{{$no++}}</td>
				      <td>{{$k->nama}}</td>
				      <td>{{$k->username}}</td>
				      <!-- Ngambil dari function di model paket -->
				      <td>{{$k->tb_outlet->nama}}</td>
				      <td>
				      	<a href="/kasir/{{$k->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
				      	<a href="/kasir/{{$k->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin Ingin Dihapus?')">Hapus</a>
				      </td>
				    </tr>
				  </tbody>
				  @endforeach

				</table>
@endsection