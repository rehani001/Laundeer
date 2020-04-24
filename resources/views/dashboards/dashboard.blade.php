@extends('layouts.master')

@section('content')

<!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

     <!-- Hero Section Begin -->
    <section class="hero-section">
        <div class="hero__slider owl-carousel">
            <div class="hero__item set-bg" data-setbg="{{asset('asset/img/hero/hero-1.jpg')}}">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero__text">
                                <h5>Selamat Datang</h5>
                                <h2>Laundeer<br /> Website Laundry <br> #Satu DiIndonesia</h2>
                                @if(auth()->user()->role != 'admin')
                                <a href="#" class="primary-btn">Get Started Now</a>
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="hero__img">
                                <img src="{{asset('asset/img/hero/hero-right.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
    <!-- Hero Section End -->

@endsection