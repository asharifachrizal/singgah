@extends('layouts.client-base')

@section('title')
Singgah | Produk
@endsection


@section('breadcumb')
<div class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="page-title">
                    <h2>Product</h2>
                </div>
            </div>
            <div class="col-sm-6">
                <nav aria-label="breadcrumb" class="theme-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Product</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
@endsection


@section('content')

<!-- Category -->
<div class="container ">
    <div class="margin-bottom">
        <div class="title1 section-t-space">
                <h4>SINGGAH ART</h4>
                <h2 class="title-inner1">Produk Desain</h2>
        </div>
        <section class="p-0 ratio2_1">
            <div class="container-fluid">
                <div class="row">
                    @foreach($categories as $row)
                    <div class="col-sm-4 border-padding">
                        <div class="category-banner">
                            <div>
                                <img src="{{ asset('uploads/sub-banners/hero-block-3-mobile.jpg') }}" class="img-fluid blur-up lazyload bg-img" alt="">
                            </div>
                            <div class="category-box">
                                <a href="{{ route('product.select', [$row->slug, $row->id])}}">
                                    <h2>{{$row->name}}</h2>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    {{-- <div class="col-sm-4 border-padding">
                        <div class="category-banner">
                            <div>
                                <img src="{{ asset('uploads/sub-banners/hero-block-3-mobile.jpg') }}" class="img-fluid blur-up lazyload bg-img" alt="">
                            </div>
                            <div class="category-box">
                            <a href="{{ route('product.select', [$row->slug == 'desain-non-produksi', $row->id == 2])}}">
                                    <h2>non-produksi</h2>
                                </a>
                            </div>
                        </div>
                    </div> --}}
                    {{-- <div class="col-sm-4 border-padding">
                        <div class="category-banner">
                            <div>
                                <img src="{{ asset('uploads/sub-banners/hero-block-3-mobile.jpg') }}" class="img-fluid blur-up lazyload bg-img" alt="">
                            </div>
                            <div class="category-box">
                            <a href="{{ route('product.select', [$row->slug == 'video', $row->id == 3])}}">
                                    <h2>video</h2>
                                </a>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </section>
    </div>
</div>

<!-- Category end -->



{{-- <div class="category-bg ratio_square">
    <div class="container-fluid p-0">
        <div class="row order-section">
            @foreach ($categories as $key => $row)
                <div class="col-sm-4 p-0">
                    <a href="#" class="image-block">
                        <img alt="" src="{{ asset('mk/images/cat1.jpg') }}" class="img-fluid blur-up lazyload bg-img">
                    </a>
                </div>
                <div class="col-sm-4 p-0">
                    <div class="contain-block even">
                        <div>
                            <h6>kategori</h6>
                            <a href="#">
                                <h2>{{ $row->name }}</h2>
                            </a><a href="#" class="btn btn-solid category-btn">telusuri</a>
                            <a href="#">
                                <h6><span>belanja sekarang</span></h6>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div> --}}
@endsection
