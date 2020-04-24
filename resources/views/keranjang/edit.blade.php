@extends('layouts.master2')

@section('content2')

				<br><br>
				<h4>Edit Data Paket</h4>
					<form action="/keranjang/{{$keranjang->id}}/update" method="POST">
						{{csrf_field()}}
					  <div class="form-group">
					  		<label for="paket">Pilih Paket</label>
						    <select name="paket" class="form-control" id="exampleFormControlSelect1">
						      <option disabled selected>- Pilih Paket -</option>
						     @foreach($paket as $p)
						      <option value="{{$p->id}}">{{$p->nama_paket}}</option>
						     @endforeach
						    </select>
					  	</div>

					  <div class="form-group">
					    <label for="exampleFormControlInput1">Harga</label>
					    <input name="harga" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Harga" value="{{$p->harga}}" disabled>
					  </div>
						
					  <div class="form-group">
					    <label for="exampleFormControlInput1">Jumlah</label>
					    <input name="qty" type="number" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Jumlah" value="{{$keranjang->qty}}">
					  </div>

					  <div class="form-group">
					    <label for="exampleFormControlInput1">Keterangan</label>
					    <input name="keterangan" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Keterangan" value="{{$keranjang->keterangan}}">
					  </div>

					  <div class="form-group">
					    <label for="exampleFormControlInput1">Total Harga</label>
					    <input name="total_harga" type="number" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Total Harga" value="" disabled>
					  </div>
						
					  <button type="submit" class="btn btn-primary">Update</button>
					  <a href="/keranjang" class="btn btn-warning">Batal</a>
					  
					</form>

@endsection