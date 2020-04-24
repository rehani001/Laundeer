@extends('layouts.master2')

@section('content2')

	<section class="hero-section">
        <div class="hero__slider owl-carousel">
            
            <div class="hero__item set-bg" data-setbg="{{asset('asset/img/hero/hero-1.jpg')}}">

				<br><br><br>
					<h4>Tambah Data Member</h4>
					<form action="/postmember" method="POST">
						{{csrf_field()}}
					  <div class="form-group">
					    <label for="exampleFormControlInput1">Nama</label>
					    <input name="nama" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukan Nama">
					  </div>

					  <div class="form-group">
					    <label for="exampleFormControlInput1">Alamat</label>
					    <input name="alamat" type="text" class="form-control" id="exampleFormControlInput2" placeholder="Masukan Alamat">
					  </div>

					  <div class="form-group">
					    <label for="exampleFormControlSelect1">Jenis Kelamin</label>
					    <select class="form-control" id="exampleFormControlSelect1">
					      <option selected>Pilih Jenis Kelamin</option>
					      <option value="L">Laki-laki</option>
					      <option value="P">Perempuan</option>
					    </select>
					  </div>

					  <div class="form-group">
					    <label for="exampleFormControlInput1">Telepon</label>
					    <input name="tlp" type="number" class="form-control" id="exampleFormControlInput3" placeholder="Masukan Nomor Telepon">
					  </div>

					  <button type="submit" class="btn btn-primary">Submit</button>
					
					</form>

			</div>
	    </div>
	</section>

@endsection