@extends('layouts.master2')

@section('content2')

	<section class="hero-section">
        <div class="hero__slider owl-carousel">
            
            <div class="hero__item set-bg" data-setbg="{{asset('asset/img/hero/hero-1.jpg')}}">

				<br><br>
				<h4>Edit Data Member</h4>
					<form action="/member/{{$member->id}}/update" method="POST">
						{{csrf_field()}}
					  <div class="form-group">
					    <label for="exampleFormControlInput1">Nama Member</label>
					    <input name="nama" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Nama Member" value="{{$member->nama}}">
					  </div>

					  <div class="form-group">
					    <label for="exampleFormControlInput1">Alamat</label>
					    <input name="alamat" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Alamat" value="{{$member->alamat}}">
					  </div>
						
					  <div class="form-group">
					    <label for="exampleFormControlSelect2">Jenis Kelamin</label>
					    <select class="form-control" id="exampleFormControlSelect2" name="jenis_kelamin">
					      <option>Pilih Jenis Kelamin</option>
					      <option value="L" @if($member->jenis_kelamin == 'L') selected @endif> Laki-Laki</option>
					      <option value="P" @if($member->jenis_kelamin == 'P') selected @endif> Perempuan</option>
					    </select>
					  </div>

					  <div class="form-group">
					    <label for="exampleFormControlInput1">Telepon</label>
					    <input name="tlp" type="number" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Harga" value="{{$member->tlp}}">
					  </div>
						
					  <button type="submit" class="btn btn-primary">Update</button>
					  <a href="/member" class="btn btn-warning">Batal</a>
					  
					</form>

			</div>
	    </div>
	</section>
@endsection