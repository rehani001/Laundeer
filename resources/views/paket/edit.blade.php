@extends('layouts.master2')

@section('content2')

				<br><br>
				<h4>Edit Data Paket</h4>
					<form action="/paket/{{$paket->id}}/update" method="POST">
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
					      <option>Pilih Jenis</option>
					      <option value="Kiloan" @if($paket->jenis == 'Kiloan') selected @endif> Kiloan</option>
					      <option value="Selimut" @if($paket->jenis == 'Selimut') selected @endif> Selimut</option>
					      <option value="Bed_cover" @if($paket->jenis == 'Bed_cover') selected @endif> Bed Cover</option>
					      <option value="Kaos" @if($paket->jenis == 'Kaos') selected @endif> Kaos</option>
					      <option value="Lain" @if($paket->jenis == 'Lain') selected @endif> Lain</option>
					    </select>
					  </div>
						
					  <div class="form-group">
					    <label for="exampleFormControlInput1">Nama Paket</label>
					    <input name="nama_paket" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Nama Paket" value="{{$paket->nama_paket}}">
					  </div>

					  <div class="form-group">
					    <label for="exampleFormControlInput1">Harga</label>
					    <input name="harga" type="number" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Harga" value="{{$paket->harga}}">
					  </div>
						
					  <button type="submit" class="btn btn-primary">Update</button>
					  <a href="/paket" class="btn btn-warning">Batal</a>
					  
					</form>

@endsection