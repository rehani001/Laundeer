	<nav class="navbar navbar-light" style="background-color: #100851;">
		<h1><a class="navbar-brand" href="/dashboard" style="font-size: 30px; color: #fff">Laundeer</a></h1>
	  	
	@if(auth()->user()->role == 'admin')
	  	<ul class="nav justify-content-end">
	  	  <li class="nav-item">
		    <a class="nav-link active text-white" href="/owner" tabindex="-1" aria-disabled="true">Data Owner</a>
		  </li>
		  <li class="nav-item">
		    <a class="nav-link active text-white" href="/kasir" tabindex="-1" aria-disabled="true">Data Kasir</a>
		  </li>
		  <li class="nav-item">
		    <a class="nav-link active text-white" href="/outlet" tabindex="-1" aria-disabled="true">Data Outlet</a>
		  </li>
		  <li class="nav-item">
		    <a class="nav-link active text-white" href="/paket" tabindex="-1" aria-disabled="true">Data Paket</a>
		  </li>
		  <li class="nav-item">
		    <a class="nav-link active text-white" href="/member" tabindex="-1" aria-disabled="true">Data Member</a>
		  </li>
		  <li class="nav-item">
		    <a class="nav-link active text-white" href="/logout" tabindex="-1" aria-disabled="true">Logout</a>
		  </li>
		</ul>
	@endif

	@if(auth()->user()->role == 'kasir')
		<ul class="nav justify-content-end">
		  <li class="nav-item">
		    <a class="nav-link active text-white" href="/pilihpaket" tabindex="-1" aria-disabled="true">Pilih Paket</a>
		  </li>
		  <li class="nav-item">
		    <a class="nav-link active text-white" href="/keranjang" tabindex="-1" aria-disabled="true">Keranjang</a>
		  </li>
		  <li class="nav-item">
		    <a class="nav-link active text-white" href="/transaksi" tabindex="-1" aria-disabled="true">Transaksi</a>
		  </li>
		  <li class="nav-item">
		    <a class="nav-link active text-white" href="/member" tabindex="-1" aria-disabled="true">Data Member</a>
		  </li>
		  <li class="nav-item">
		    <a class="nav-link active text-white" href="/logout" tabindex="-1" aria-disabled="true">Logout</a>
		  </li>
		</ul>
	@endif

	@if(auth()->user()->role == 'owner')
		<ul class="nav justify-content-end">
		  <li class="nav-item">
		    <a class="nav-link active text-white" href="/dashboard" tabindex="-1" aria-disabled="true">Dashboard</a>
		  </li>
		  <li class="nav-item">
		    <a class="nav-link active text-white" href="/datatransaksi" tabindex="-1" aria-disabled="true">Data Transaksi</a>
		  </li>
		  <li class="nav-item">
		    <a class="nav-link active text-white" href="/logout" tabindex="-1" aria-disabled="true">Logout</a>
		  </li>
		</ul>
	@endif
	</nav>