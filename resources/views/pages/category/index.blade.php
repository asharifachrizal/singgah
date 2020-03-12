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

<!-- category 4 -->
<div class="category-bg ratio_square">
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
                            <h2>{{ $row->name }}</h2>
                            <a href="{{ route('category.detail', $row->slug) }}" class="btn btn-solid category-btn">telusuri</a>
                            <h6><span>belanja sekarang</span></h6>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection