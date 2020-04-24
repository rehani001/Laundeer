@extends('layouts.master2')

@section('content2')

	<section class="hero-section">
        <div class="hero__slider owl-carousel">

			<div class="hero__item set-bg" data-setbg="{{asset('asset/img/hero/hero-1.jpg')}}">

			<br><br>
			<h4>Edit Data Outlet</h4>
				<form action="/outlet/{{$outlet->id}}/update" method="POST">
					{{csrf_field()}}
				  <div class="form-group">
				    <label for="exampleFormControlInput1">Nama Outlet</label>
				    <input name="nama" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Nama Outlet" value="{{$outlet->nama}}">
				  </div>

				  <div class="form-group">
				    <label for="exampleFormControlInput1">Alamat</label>
				    <input name="alamat" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Alamat" value="{{$outlet->alamat}}">
				  </div>
					
				  <div class="form-group">
				    <label for="exampleFormControlInput1">Telepon</label>
				    <input name="tlp" type="number" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Harga" value="{{$outlet->tlp}}">
				  </div>
					
				  <button type="submit" class="btn btn-primary">Update</button>
				  <a href="/outlet" class="btn btn-warning">Batal</a>
				  
				</form>
				
			</div>
	    </div>
	</section>
@endsection