@extends('layouts.mk')

@section('title')
Jasa Desain | Singgah  
@endsection

@section('content')

<!-- breadcrumb start -->
<div class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="page-title">
                    <h2>Promo</h2></div>
            </div>
            <div class="col-sm-6">
                <nav aria-label="breadcrumb" class="theme-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Beranda</a></li>
                        <li class="breadcrumb-item active">Promo</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb End -->

<!--section start-->
<!-- two banner -->
<section class="pb-0 ratio2_1">
    <div class="container">
        <div class="row partition2">
            <div class="col-md-6">
                <a href="#">
                    <div class="collection-banner p-right text-center">
                        <div class="img-part">
                            <img src="{{ asset('uploads/sub-banners/sub-banner-1.png') }}" class="img-fluid blur-up lazyload bg-img" alt="">
                        </div>
                        <div class="contain-banner">
                            <div>
                                <h4>save 30%</h4>
                                <h2>Buku</h2>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6">
                <a href="#">
                    <div class="collection-banner p-right text-center">
                        <div class="img-part">
                            <img src="{{ asset('uploads/sub-banners/sub-banner-2.png') }}" class="img-fluid blur-up lazyload bg-img" alt="">
                        </div>
                        <div class="contain-banner">
                            <div>
                                <h4>save 60%</h4>
                                <h2>Desain</h2>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- two banner -->

<!-- three banner -->
<section class="banner-goggles ratio2_1">
    <div class="container">
        <div class="row partition3">
            <div class="col-md-4">
                <a href="#">
                    <div class="collection-banner p-right text-right">
                        <div class="img-part">
                            <img src="{{ asset('uploads/sub-banners/sub-banner-3.png') }}" class="img-fluid blur-up lazyload bg-img" alt="">
                        </div>
                        <div class="contain-banner banner-3">
                            <div>
                                <h4>10% off</h4>
                                <h2>Book Cover</h2>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="#">
                    <div class="collection-banner p-right text-right">
                        <div class="img-part">
                            <img src="{{ asset('uploads/sub-banners/sub-banner-2.png') }}" class="img-fluid blur-up lazyload bg-img" alt="">
                        </div>
                        <div class="contain-banner banner-3">
                            <div>
                                <h4>10% off</h4>
                                <h2>Instagram Video</h2>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="#">
                    <div class="collection-banner p-right text-right">
                        <div class="img-part">
                            <img src="{{ asset('uploads/sub-banners/sub-banner-1.png') }}" class="img-fluid blur-up lazyload bg-img" alt="">
                        </div>
                        <div class="contain-banner banner-3">
                            <div>
                                <h4>50% off</h4>
                                <h2>best deal</h2>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- three banner -->

<!--section end-->

@endsection