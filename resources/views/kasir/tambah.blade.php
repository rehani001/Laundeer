@extends('layouts.master2')

@section('content2')

			<br><br><br>
				<h4>Tambah Data Kasir</h4>
				<form action="/postkasir" method="POST">
					{{csrf_field()}}
				  <div class="form-group"> 
				    <label for="exampleFormControlInput1">Nama</label>
				    <input type="text" name="nama" class="form-control" id="exampleFormControlInput1" placeholder="Masukan Nama Kasir" required>
				  </div>

				  <div class="form-group">
				    <label for="exampleFormControlInput1">Username</label>
				    <input type="text" name="username" class="form-control" id="exampleFormControlInput2" placeholder="Masukan Username" required>
				  </div>

				  <div class="form-group">
				    <label for="exampleFormControlInput1">Password</label>
				    <input type="password" name="password" class="form-control" id="exampleFormControlInput3" placeholder="Masukan Password" required>
				  </div>

				  <div class="form-group">
				    <label for="exampleFormControlSelect1">Outlet</label>
				    <select name="id_outlet" class="form-control" id="exampleFormControlSelect1">
				      <option disabled selected>Pilih Outlet</option>
				     @foreach($outlet as $o)
				      <option value="{{$o->id}}">{{$o->nama}}</option>
				     @endforeach
				    </select>
				  </div>
				
				  <button type="submit" class="btn btn-primary">Submit</button>
				  <a href="/kasir" class="btn btn-warning">Batal</a>
				</form>

@endsection