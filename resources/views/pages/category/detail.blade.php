@extends('layouts.mk')

@section('title')
Jasa Desain | Singgah  
@endsection

@section('styles')
<!-- toast CSS -->
<link href="{{ asset('material/plugins/toast-master/css/jquery.toast.css') }}" rel="stylesheet">
@endsection

@section('content')
<!-- breadcrumb start -->
<div class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="page-title">
                    <h2>Kategori</h2></div>
            </div>
            <div class="col-sm-6">
                <nav aria-label="breadcrumb" class="theme-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Beranda</a></li>
                        <li class="breadcrumb-item" aria-current="page">Kategori</li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $category->name }}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb end -->


<!-- section start -->
<section class="section-b-space ratio_asos">
    <div class="collection-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-3 collection-filter">
                    <!-- side-bar colleps block stat -->
                    <div class="collection-filter-block">
                        <!-- price filter start here -->
                        <div class="collection-collapse-block border-0 open">
                            <h3 class="collapse-block-title">Harga</h3>
                            <div class="collection-collapse-block-content">
                                <div class="collection-brand-filter">
                                    <div class="custom-control custom-checkbox collection-filter-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="hundred">
                                        <label class="custom-control-label" for="hundred">RP 10.000 - RP 30.000</label>
                                    </div>
                                    <div class="custom-control custom-checkbox collection-filter-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="twohundred">
                                        <label class="custom-control-label" for="twohundred">RP 30.000 - RP 50.000</label>
                                    </div>
                                    <div class="custom-control custom-checkbox collection-filter-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="threehundred">
                                        <label class="custom-control-label" for="threehundred">RP 50.000 - RP 100.000</label>
                                    </div>
                                    <div class="custom-control custom-checkbox collection-filter-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="fourhundred">
                                        <label class="custom-control-label" for="fourhundred">RP 100.000 - RP 300.000</label>
                                    </div>
                                    <div class="custom-control custom-checkbox collection-filter-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="fourhundredabove">
                                        <label class="custom-control-label" for="fourhundredabove">> RP 300.000</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- silde-bar colleps block end here -->
                    <!-- side-bar single product slider start -->
                    <div class="theme-card">
                        <h5 class="title-border">Produk Lain</h5>
                        <div class="offer-slider slide-1">
                            <div>
                                @foreach ($randomProducts as $row)
                                    <div class="media">
                                        <a href=""><img class="img-fluid blur-up lazyload" src="{{ asset('uploads/' . $row->productImage[0]->img_path) }}" alt=""></a>
                                        <div class="media-body align-self-center">
                                            <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div><a href="product-page(no-sidebar).html"><h6>{{ $row->name }}</h6></a>
                                            <h4>{{ $row->priceDisplay }}</h4></div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <!-- side-bar single product slider end -->
                    <!-- side-bar banner start here -->
                    <div class="collection-sidebar-banner">
                        <a href="#"><img src="{{ asset('mk/images/side-banner.png') }}" class="img-fluid blur-up lazyload" alt=""></a>
                    </div>
                    <!-- side-bar banner end here -->
                </div>
                <div class="collection-content col">
                    <div class="page-main-content">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="top-banner-wrapper">
                                    <a href="#"><img src="{{ asset('uploads/sliders/slider-5.png') }}" class="img-fluid blur-up lazyload" alt=""></a>
                                    <div class="top-banner-content small-section">
                                        <h4>{{ $category->name }}</h4>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                    </div>
                                </div>
                                <div class="collection-product-wrapper">
                                    <div class="product-top-filter">
                                        <div class="row">
                                            <div class="col-xl-12">
                                                <div class="filter-main-btn"><span class="filter-btn btn btn-theme"><i class="fa fa-filter" aria-hidden="true"></i> Filter</span></div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="product-filter-content">
                                                    <div class="search-count">
                                                        <h5>Menampilkan 1-24 dari 10 Produk</h5></div>
                                                    <div class="collection-view">
                                                        <ul>
                                                            <li><i class="fa fa-th grid-layout-view"></i></li>
                                                            <li><i class="fa fa-list-ul list-layout-view"></i></li>
                                                        </ul>
                                                    </div>
                                                    <div class="collection-grid-view">
                                                        <ul>
                                                            <li><img src="../assets/images/icon/2.png" alt="" class="product-2-layout-view"></li>
                                                            <li><img src="../assets/images/icon/3.png" alt="" class="product-3-layout-view"></li>
                                                            <li><img src="../assets/images/icon/4.png" alt="" class="product-4-layout-view"></li>
                                                            <li><img src="../assets/images/icon/6.png" alt="" class="product-6-layout-view"></li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-page-per-view">
                                                        <select>
                                                            <option value="High to low">24 Produk Per Halaman</option>
                                                            <option value="Low to High">50 Produk Per Halaman</option>
                                                            <option value="Low to High">100 Produk Per Halaman</option>
                                                        </select>
                                                    </div>
                                                    <div class="product-page-filter">
                                                        <select>
                                                            <option value="High to low">Urutkan</option>
                                                            <option value="Low to High">50 Produk</option>
                                                            <option value="Low to High">100 Produk</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-wrapper-grid">
                                        <div class="row">
                                            @foreach ($category->product as $row)
                                            <div class="col-xl-3 col-md-6 col-grid-box">
                                                <div class="product-box">
                                                    <div class="img-wrapper">
                                                        <div class="front">
                                                            <a href="{{ route('product.detail', [$category, $row->name]) }}"><img src="{{ asset('uploads/' . $row->productImage[0]->img_path) }}" class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                                        </div>
                                                        <div class="back">
                                                            <a href="{{ route('product.detail', [$category, $row->name]) }}"><img src="{{ asset('uploads/' . $row->productImage[1]->img_path) }}" class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                                        </div>
                                                        <div class="cart-info cart-wrap">
                                                            <button class="add-shopping-cart-button" data-product={{ $row->slug }}>
                                                                <i class="ti-shopping-cart" ></i>
                                                            </button> 
                                                        </div>
                                                    </div>
                                                    <div class="product-detail">
                                                        <div>
                                                            <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div><a href="product-page(no-sidebar).html"><h6>{{ $row->name }}</h6></a>
                                                            <p>{{ $row->description }}</p>
                                                            <h4>{{ $row->priceDisplay }}</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="product-pagination">
                                        <div class="theme-paggination-block">
                                            <div class="row">
                                                <div class="col-xl-6 col-md-6 col-sm-12">
                                                    <nav aria-label="Page navigation">
                                                        <ul class="pagination">
                                                            <li class="page-item"><a class="page-link" href="#" aria-label="Previous"><span aria-hidden="true"><i class="fa fa-chevron-left" aria-hidden="true"></i></span> <span class="sr-only">Previous</span></a></li>
                                                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                            <li class="page-item"><a class="page-link" href="#" aria-label="Next"><span aria-hidden="true"><i class="fa fa-chevron-right" aria-hidden="true"></i></span> <span class="sr-only">Next</span></a></li>
                                                        </ul>
                                                    </nav>
                                                </div>
                                                <div class="col-xl-6 col-md-6 col-sm-12">
                                                    <div class="product-search-count-bottom">
                                                        <h5>Showing Products 1-24 of 10 Result</h5></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- section End -->
@endsection

@section('scripts')
<script src="{{ asset('material/plugins/toast-master/js/jquery.toast.js') }}"></script>
<script src="{{ asset('material/js/toastr.js') }}"></script>

<script>
$(document).ready(function() {
    $('.add-shopping-cart-button').click(function(){
        var APP_URL = {!! json_encode(url('/')) !!}

        var product_slug = $(this).attr('data-product');
        console.log(product_slug);

        var url =  APP_URL + "/keranjang/tambah/" + product_slug;

        $.ajax
        ({ 
            url: url,
            type: 'post',
            success: function(result)
            {
                console.log(result);
                $.toast({
                    heading: result['heading'],
                    text: result['message'],
                    position: 'bottom-right',
                    bgColor: result['bg-color'],
                    loaderBg: '#ffa250',
                    icon: result['alert-type'],
                    hideAfter: 3500,
                    stack: 6
                });

            }
        });
    });
});
</script>
@endsection