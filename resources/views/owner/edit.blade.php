@extends('layouts.master2')

@section('content2')
<br><br><br>
	<h4>Edit Data Owner</h4>
	<form action="/owner/{{$owner->id}}/update" method="POST">
		{{csrf_field()}}
	  <div class="form-group"> 
	    <label for="exampleFormControlInput1">Nama</label>
	    <input type="text" name="nama" class="form-control" id="exampleFormControlInput1" placeholder="Masukan Nama Kasir" required value="{{$owner->nama}}">
	  </div>

	  <div class="form-group">
	    <label for="exampleFormControlInput1">Username</label>
	    <input type="text" name="username" class="form-control" id="exampleFormControlInput2" placeholder="Masukan Username" required value="{{$owner->username}}">
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
	
	  <button type="submit" class="btn btn-primary">Update</button>
	  <a href="/kasir" class="btn btn-warning">Batal</a>
	</form>

@endsection