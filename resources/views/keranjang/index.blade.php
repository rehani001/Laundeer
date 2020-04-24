@extends('layouts.master2')

@section('content2')

				@if(session('isi'))
					<div class="alert alert-dark" role="alert">
					 {{session('isi')}}
					</div>
				@endif

				<div class="row mt-lg-5 ml-lg-4">
						<div class="col-lg-7 mr-5">
							<h4>Keranjang Pesanan</h4>
						</div>

						<div class="col">
							<form action="/posttransaksi" method="POST">
							{{csrf_field()}}

						    <select name="id_member" class="custom-select col-lg-12" id="exampleFormControlSelect1">
						      <option disabled selected>- Pilih Member -</option>
						     @foreach($member as $m)
						      <option value="{{$m->id}}">{{$m->nama}}</option>
						     @endforeach
						    </select>
					  	</div>

						<div class="col">
							<button class="btn btn-outline-info" style="color: #100851;">Pesan</button>
						</div>
					</form>
				</div>
				<br>

				<table class="table table-hover">
	  			  <thead style="background-color: #100851; color: #fff;" align="center">
				    <tr>
				      <th scope="col">No</th>
				      <th scope="col">Nama Paket</th>
				      <th scope="col">Harga</th>
				      <th scope="col">Jumlah</th>
				      <th scope="col">Keterangan</th>
				      <th scope="col">Total Harga</th>
				      <th scope="col">Aksi</th>
				    </tr>
				  </thead>
				
				<?php $no = 1; ?>
				@foreach($keranjang as $k)
				  <tbody align="center">
				    <tr>
				      <td>{{$no++}}</td>
					  <!-- Ngambil function dari model tb_detail_transaksi -->
				      <td>{{$k->tb_paket->nama_paket}}</td>
				      <td>{{$k->tb_paket->harga}}</td>
				      <td>{{$k->qty}}</td> 
				      <td>
				      	@if($k->keterangan == null)

				      	-

				      	@elseif($k->keterangan == !null)
							{{$k->keterangan}}
						@endif
				      	</td>
				      <td>Rp{{$total = $k->tb_paket->harga*$k->qty}},00</td>
				      <input type="hidden" name="id_outlet"  value="auth()->user()->id_outlet">
					  <input type="hidden" name="id_user"  value="{{$k->id}}">
				      <td>
				      	<a href="/keranjang/{{$k->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
				      	<a href="/keranjang/{{$k->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin Mau DiHapus? ') ">Hapus</a>
				      </td>
				    </tr>
				  </tbody>
				@endforeach

				</table>

@endsection
