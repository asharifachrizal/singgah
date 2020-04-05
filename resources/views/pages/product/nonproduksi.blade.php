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
                    <h2>Produk</h2></div>
            </div>
            <div class="col-sm-6">
                <nav aria-label="breadcrumb" class="theme-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Beranda</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Produk</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb End -->


<!-- Non Production -->
<section class="section-b-space p-t-0 ratio_asos">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="theme-tab">
                    <ul class="tabs tab-title">
                        <h2 class="title-inner1">Desain Non Produksi</h2>
                        {{-- <li class="current"><a href="tab-4">Terbaru</a></li> --}}
                        <!-- <li class=""><a href="tab-5">Terkini</a></li>
                        <li class=""><a href="tab-6">Terpopuler</a></li> -->
                    </ul>
                    <div class="tab-content-cls">
                        <div id="tab-4" class="tab-content active default">
                            <div class="no-slider row">
                                @foreach ($products as $row)
                                    <div class="product-box">
                                        <div class="img-wrapper">
                                            <div class="lable-block"><span class="lable3">new</span> <span class="lable4">on sale</span></div>
                                            <div class="front">
                                                <a href="{{ route('product.detail', [$row->category->slug, $row->slug]) }}">
                                                    <img src="{{ asset('uploads/'. $row->productImage[0]->img_path) }}" class="img-fluid blur-up lazyload bg-img" alt="">
                                                </a>
                                            </div>
                                            <div class="back">
                                                <a href="{{ route('product.detail', [$row->category->slug, $row->slug]) }}">
                                                    <img src="{{ asset('uploads/'. $row->productImage[1]->img_path) }}" class="img-fluid blur-up lazyload bg-img" alt="">
                                                </a>
                                            </div>
                                            <div class="cart-info cart-wrap">
                                                <button class="add-shopping-cart-button" data-product={{ $row->slug }}>
                                                    <i class="ti-shopping-cart" ></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="product-detail">
                                            <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                            <a href="{{ route('product.detail', [$row->category->slug, $row->slug]) }}">
                                                <h6>{{ $row->name }}</h6>
                                            </a>
                                            <h4>{{ $row->priceDisplay }} <del>{{ $row->priceBeforeDisplay }}</del></h4>
                                            <ul class="color-variant">
                                                <li class="bg-light0"></li>
                                                <li class="bg-light1"></li>
                                                <li class="bg-light2"></li>
                                            </ul>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Non Production end -->


@endsection
