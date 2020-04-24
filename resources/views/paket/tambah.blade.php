@extends('layouts.master2')

@section('content2')

			<br><br><br>
				<h4>Tambah Data Paket</h4>
				<form action="/postpaket" method="POST">
					{{csrf_field()}}
				  <div class="form-group">
				


				    <label for="exampleFormControlSelect1">Outlet</label>
				    <select class="form-control" id="exampleFormControlSelect1" name="id_outlet">
				      <option selected>Pilih Outlet</option>
				    	@foreach($outlet as $o)
				      <option value="{{$o->id}}">{{$o->nama}}</option>
				      	@endforeach
				    </select>
				  </div>

				  <div class="form-group">
				    <label for="exampleFormControlSelect2">Jenis</label>
				    <select class="form-control" id="exampleFormControlSelect2" name="jenis">
				      <option selected>Pilih Jenis</option>
				      <option value="1">Kiloan</option>
				      <option value="2">Selimut</option>
				      <option value="3">Bed Cover</option>
				      <option value="4">Kaos</option>
				      <option value="5">Lain</option>
				    </select>
				  </div>

				  <div class="form-group">
				    <label for="exampleFormControlInput1">Nama Paket</label>
				    <input name="nama_paket" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Nama Paket">
				  </div>

				  <div class="form-group">
				    <label for="exampleFormControlInput1">Harga</label>
				    <input name="harga" type="number" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Harga">
				  </div>

				  <button type="submit" class="btn btn-primary">Submit</button>
				  
				</form>

@endsection