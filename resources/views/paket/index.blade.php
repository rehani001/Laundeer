@extends('layouts.master2')

@section('content2')

				@if(session('sukses'))
					<div class="alert alert-dark" role="alert">
					 {{session('sukses')}}
					</div>
				@endif

					<div class="row mt-lg-5">
						<div class="col-lg-10 mr-auto">
							<h4>Data Paket</h4>
						</div>

						<div class="col">
							<a href="/paket/tambah" class="btn btn-primary btn-sm">Tambah Paket</a>
						</div>
					</div>

					
		
				<table class="table table-hover">
	  			  <thead style="background-color: #100851; color: #fff;" align="center">
				    <tr>
				      <th scope="col">No</th>
				      <th scope="col">Outlet</th>
				      <th scope="col">Jenis</th>
				      <th scope="col">Nama Paket</th>
				      <th scope="col">Harga</th>
				      <th scope="col">Aksi</th>
				    </tr>
				  </thead>
				
				<?php $no = 1; ?>
				  @foreach($data_paket as $p)
				  <tbody align="center">
				    <tr>
				      <td>{{$no++}}</td>
				      <td>{{$p->tb_outlet->nama}}</td>
				      <td>{{$p->jenis}}</td>
				      <td>{{$p->nama_paket}}</td>
				      <td>{{$p->harga}}</td>
				      <td>
				      	<a href="/paket/{{$p->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
				      	<a href="/paket/{{$p->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin Ingin Dihapus?')">Hapus</a>
				      </td>
				    </tr>
				  </tbody>
				  @endforeach

				</table>

@endsection
