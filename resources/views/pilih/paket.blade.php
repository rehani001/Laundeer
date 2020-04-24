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
				</div>
				<table class="table table-hover">
	 			 <thead style="background-color: #100851; color: #fff;" align="center">
				    <tr align="center">
				      <th scope="col">No</th>
				      <th scope="col">Nama Paket</th>
				      <th scope="col">Jenis</th>
				      <th scope="col">Harga</th>
				      <th scope="col">Outlet</th>
				      <th scope="col">Jumlah</th>
				      <th scope="col">Keterangan</th>
				      <th scope="col">Aksi</th>
				    </tr>
				  </thead>
				<?php $no = 1; ?>
				  @foreach($data_paket as $p)
				  <tbody align="center">
				    <tr>
				      <td>{{$no++}}</td>
				      <td>{{$p->nama_paket}}</td>
				      <td>{{$p->jenis}}</td>
				      <td>{{$p->harga}}</td>
				      <td>{{$p->tb_outlet->nama}}</td>
				      <form action="/postkeranjang" method="POST">
				      	{{csrf_field()}}
				      	<input type="hidden" name="id_paket"  value="{{$p->id}}">
					      <td><input class="text-center" type="text" placeholder="Jumlah Pesanan" name="qty" required></td>
					      <td><input class="text-center" type="text" placeholder="(Opsional)" name="keterangan"></td>
					      <td>
					      	<button class="btn btn-sm btn-outline-info" style="color: #100851;">Pesan</button>
					      </td>
					  </form>
				    </tr>
				  </tbody>
				  @endforeach

				</table>
@endsection
