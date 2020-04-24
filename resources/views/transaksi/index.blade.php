@extends('layouts.master2')

@section('content2')

				@if(session('sukses'))
					<div class="alert alert-dark" role="alert">
					 {{session('sukses')}}
					</div>
				@endif

				<div class="row mt-lg-5">
					<div class="col-lg-9 mr-auto">
						<h4>Transaksi</h4>
					</div>
			 
					<div class="col">
						<a href="/transaksi/exportpdf" class="btn btn-success btn-sm">Generate Laporan</a>
					</div>

					<div class="col">
						@if(auth()->user()->role == 'kasir')
						<h5>Kasir - {{auth()->user()->nama}}</h5>
						@else(auth()->user()-role == 'owner')
						<h5>Owner - {{auth()->user()->nama}}</h5>
						@endif
					</div>
				</div>

				<table class="table table-hover">
	  			  <thead style="background-color: #100851; color: #fff;" align="center">
				    <tr align="center">
				      <th scope="col">No</th>
				      <th scope="col">Kode Invoice</th>
				      <th scope="col">Member</th>
				      <th scope="col">Tanggal</th>
				      <th scope="col">Batas Waktu</th>
				      <th scope="col">Tanggal Bayar</th>
				      <th scope="col">Biaya Tambahan</th>
				      <th scope="col">Diskon</th>
				      <th scope="col">Pajak</th>
				      <th scope="col">Status</th>
				      <th scope="col">Pembayaran</th>
				      @if(Auth::user()->role == 'kasir')
				      <th scope="col">Konfirmasi Status</th>
				      @endif
				    </tr>
				  </thead>
				<?php $no = 1; ?>
					@foreach($transaksi as $t)
					<tbody align="center">
					    <tr>
					      <td>{{$no++}}</td>
					      <td>{{$t->kode_invoice}}</td>
					      <td>{{$t->member->nama}}</td>
					      <td>{{$t->tgl}}</td>
					      <td>{{$t->batas_waktu}}</td>
					      <td>
					      	<!-- Semacam update otomatis yang sudah dideklarasikan oleh controller -->

					      	@if(auth()->user()->role != 'owner')

					      		@if($t->tgl_bayar == null)
					      		<form action="transaksi/dibayar/{{$t->id}}" method="POST">
					      			{{csrf_field()}}

					      			<button type="submit" class="btn btn-outline-info btn-sm" onclick="return confirm('Anda Yakin?')"> Bayar
					      			</button>
					      		</form>
					      		@else
					      		{{$t->tgl_bayar}}
					      		@endif
					      	@elseif(auth()->user()->role == 'owner')
					      		@if($t->tgl_bayar == null)
					      			<div class="text-center">-</div>
					      		@else
					      		{{$t->tgl_bayar}}
					      		@endif

					      	@endif
					      </td>

					      <td>
					      	@if(auth()->user()->role != 'owner')

					      		@if($t->dibayar == 'belum_dibayar' and $t->biaya_tambahan == null)
					      		<form action="/biaya_tambahan/{{$t->id}}" method="POST">
					      			{{csrf_field()}}

					      			<input type="text" class="form-control text-center" placeholder="" name="biaya_tambahan">
					      		</form>
					      		@elseif($t->dibayar == 'dibayar' and $t->biaya_tambahan == null)
					      		-
					      		@elseif($t->dibayar == 'dibayar' and $t->biaya_tambahan == !null)
					      		Rp.{{$t->biaya_tambahan}},00
					      		@elseif($t->dibayar == 'belum_dibayar' and $t->biaya_tambahan == !null)
					      		Rp.{{$t->biaya_tambahan}},00
					      		@endif

					      	@elseif(auth()->user()->role == 'owner')
					      		@if($t->biaya_tambahan == null)
					      			<div class="text-center">-</div>
					      		@elseif($t->biaya_tambahan == !null)
					      		Rp.{{$t->biaya_tambahan}},00
					      		@endif

					      	@endif
					      </td>

					      <td>
					      	@if(auth()->user()->role != 'owner')

					      		@if($t->dibayar == 'belum_dibayar' and $t->diskon == null)
					      		<form action="/diskon/{{$t->id}}" method="POST">
					      			{{csrf_field()}}

					      			<input type="text" class="form-control text-center" placeholder="" name="diskon">
					      		</form>
					      		@elseif($t->dibayar == 'dibayar' and $t->diskon == null)
					      		-
					      		@elseif($t->dibayar == 'dibayar' and $t->diskon == !null)
					      		Rp.{{$t->diskon}},00
					      		@elseif($t->dibayar == 'belum_dibayar' and $t->diskon == !null)
					      		Rp.{{$t->diskon}},00
					      		@endif

					      	@elseif(auth()->user()->role == 'owner')
					      		@if($t->diskon == null)
					      			<div class="text-center">-</div>
					      		@elseif($t->diskon == !null)
					      		Rp.{{$t->diskon}},00
					      		@endif

					      	@endif
					      </td>

					      <td>
					      	@if(auth()->user()->role != 'owner')

					      		@if($t->dibayar == 'belum_dibayar' and $t->pajak == null)
					      		<form action="/pajak/{{$t->id}}" method="POST">
					      			{{csrf_field()}}

					      			<input type="text" class="form-control text-center" placeholder="" name="pajak">
					      		</form>
					      		@elseif($t->dibayar == 'dibayar' and $t->pajak == null)
					      		-
					      		@elseif($t->dibayar == 'dibayar' and $t->pajak == !null)
					      		Rp.{{$t->pajak}},00
					      		@elseif($t->dibayar == 'belum_dibayar' and $t->pajak == !null)
					      		Rp.{{$t->pajak}},00
					      		@endif

					      	@elseif(auth()->user()->role == 'owner')
					      		@if($t->pajak == null)
					      			<div class="text-center">-</div>
					      		@elseif($t->pajak == !null)
					      		Rp.{{$t->pajak}},00
					      		@endif

					      	@endif
					      </td>
					      <td>{{$t->status}}</td>
					      <td>{{$t->dibayar}}</td>
					      <td>
					      	@if(auth()->user()-> role != 'owner')

					      		@if($t->status == 'baru')
					      		<form action="konfirmasi/selesai/{{$t->id}}" method="POST">
					      			{{csrf_field()}}

					      			<button type="submit" class="btn btn-primary btn-sm" onclick="return confirm('Anda Yakin ?')">Proses
					      			</button>
					      		</form>

					      		@elseif($t->status == 'proses')
					      		<form action="konfirmasi/selesai/{{$t->id}}/selesai" method="POST">
					      			{{csrf_field()}}

					      			<button type="submit" class="btn btn-outline-info btn-sm" onclick="return confirm('Anda Yakin ?')">Selesai
					      			</button>
					      		</form>

					      		@elseif($t->status == 'selesai' && $t->dibayar == 'dibayar')
					      		<form action="konfirmasi/selesai/{{$t->id}}/diambil" method="POST">
					      			{{csrf_field()}}

					      			<button type="submit" class="btn btn-primary btn-sm" onclick="return confirm('Anda Yakin?">Diambil
					      			</button>
					      		</form>

					      		@elseif($t->status == 'diambil')
						      		<button type="submit" class="btn btn-secondary btn-sm" onclick="return confirm('Anda Yakin ?" disabled>Sudah Diambil !
						      		</button>

									@elseif($t->status == 'selesai' && $t->dibayar = 'belum_dibayar')
									Bayar Dulu 
								@endif
							@endif
					      		
					      </td>
					    </tr>
					</tbody>
					@endforeach
				</table>

@endsection
