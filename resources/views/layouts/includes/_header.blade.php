    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="header__info">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="header__info-left">
                            <ul>
                                <li><span class="icon_phone"></span> 089605156533</li>
                                <li><span class="fa fa-envelope"></span> rehanizaki4@gmail.com</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="header__logo">
                        <a href="/dashboard"><img src="{{asset('asset/img/logo.png')}}" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-9 col-md-9"><br>
                    <nav class="header__menu">
                        @if(auth()->user()->role == 'admin')
                            <ul class="nav justify-content-end">
                              <li class="nav-item">
                                <a class="nav-link active" href="/owner" tabindex="-1" aria-disabled="true">Data Owner</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link active" href="/kasir" tabindex="-1" aria-disabled="true">Data Kasir</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link active" href="/outlet" tabindex="-1" aria-disabled="true">Data Outlet</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link active" href="/paket" tabindex="-1" aria-disabled="true">Data Paket</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link active" href="/member" tabindex="-1" aria-disabled="true">Data Member</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link active" href="/logout" tabindex="-1" aria-disabled="true">Logout</a>
                              </li>
                            </ul>
                        @endif

                        @if(auth()->user()->role == 'kasir')
                            <ul class="nav justify-content-end">
                              <li class="nav-item">
                                <a class="nav-link active" href="/pilihpaket" tabindex="-1" aria-disabled="true">Pilih Paket</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link active" href="/keranjang" tabindex="-1" aria-disabled="true">Keranjang</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link active" href="/transaksi" tabindex="-1" aria-disabled="true">Transaksi</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link active" href="/member" tabindex="-1" aria-disabled="true">Data Member</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link active" href="/logout" tabindex="-1" aria-disabled="true">Logout</a>
                              </li>
                            </ul>
                        @endif

                        @if(auth()->user()->role == 'owner')
                            <ul class="nav justify-content-end">
                              <li class="nav-item">
                                <a class="nav-link active" href="/dashboard" tabindex="-1" aria-disabled="true">Dashboard</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link active" href="/datatransaksi" tabindex="-1" aria-disabled="true">Data Transaksi</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link active" href="/logout" tabindex="-1" aria-disabled="true">Logout</a>
                              </li>
                            </ul>
                        @endif
                    </nav>
                </div>
            </div>
            <div class="canvas__open">
                <span class="fa fa-bars"></span>
            </div>
        </div>
    </header>
    <!-- Header End -->
