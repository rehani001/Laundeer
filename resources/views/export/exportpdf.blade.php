<table class="table table-bordered" style="border:1px solid #ddd">
	<thead>
		<tr>
			<th>No</th>
			<th>Kode Invoice</th>
			<th>Member</th>
			<th>Tanggal</th>
			<th>Batas Waktu</th>
			<th>Tanggal Bayar</th>
			<th>Biaya Tambahan</th>
			<th>Diskon</th>
			<th>Pajak</th>
			<th>Status</th>
			<th>Pembayaran</th>
		</tr>
	</thead>
	<tbody>
		<?php $no =1;?>
		@foreach ($transaksi as $t)
		<tr>
			<td>{{$no++}}</td>
			<td>{{$t->kode_invoice}}</td>
			<td>{{$t->member->nama}}</td>
			<td>{{$t->tgl}}</td>
			<td>{{$t->batas_waktu}}</td>
			<td>{{$t->tgl_bayar}}</td>
			<td>{{$t->biaya_tambahan}}</td>
			<td>{{$t->diskon}}</td>
			<td>{{$t->pajak}}</td>
			<td>{{$t->status}}</td>
			<td>{{$t->pembayaran}}</td>
		</tr>
	</tbody>
		@endforeach
</table>