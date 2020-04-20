@extends('layouts.client-base')

@section('title')
@endsection

@section('breadcumb')
<section id="page-title" class="page-title-parallax page-title-dark" style="background-image: url('{{ asset('canvas/images/parallax/8.jpg') }}'); background-size: cover; padding: 120px 0;" data-bottom-top="background-position:0px 0px;" data-top-bottom="background-position:0px -300px;">

    <div class="container clearfix">
        <h1>Order</h1>
        {{-- nama kategori/produk di span yang di comment--}}
        {{-- <span>Make your order here.</span> --}}
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Product</a></li>
            <li class="breadcrumb-item active" aria-current="page">Order</li>
        </ol>
    </div>

</section>
@endsection

@section('content')
<div class="content-wrap">
    <div class="container clearfix">
        <div class="single-product">
            <div class="product">

                <div class="col_two_fifth">

                    <!-- Product Single - Gallery
                    ============================================= -->
                    <div class="product-image">
                        <div class="fslider" data-pagi="false" data-arrows="false" data-thumbs="true">
                            <div class="flexslider">
                                <div class="slider-wrap" data-lightbox="gallery">
                                    <div class="slide" ><img src="{{ asset('singgah/products/product-1.jpg') }}" alt="Pink Printed Dress"></div>                                    
                                </div>
                            </div>
                        </div>
                        <!-- <div class="sale-flash">Sale!</div> -->
                    </div><!-- Product Single - Gallery End -->

                </div>

                <div class="col_two_fifth product-desc">
                    <div class="form-widget">

                        <div class="form-result"></div>

                        <div class="row">
                            <div class="col-lg-12">
                                <form class="row" id="event-registration" action="{{ route('cart.additem')}}" method="post" enctype="multipart/form-data">
                                    <input type="hidden" name="id" value="{{Sentinel::getUser()->id }}">
                                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                                    <input type="hidden" name="namaproduk" value="{{ $product->value }}">
                                    <div class="form-process"></div>
                                    <div class="col-12 form-group">
                                        <label for="jenis-produk">Jenis Produk:</label>
                                        <select disabled class="form-control required" name="orientation" id="jenis-produk">
                                                {{-- opsi untuk desain produksi:poster --}}
                                                @if ($product->id == 3)
                                                <option value="landscape">Landscape</option>
                                                <option value="potrait">Potrait</option>
                                                @elseif ($product->id == 5)
                                                {{-- opsi untuk desain produksi:banner/baliho --}}
                                                <option value="horizontal">Horizontal/Spanduk</option>
                                                <option value="vertikal">Vertikal/Rontek</option>
                                                @elseif ($product->id == 6)
                                                {{-- opsi untuk desain produksi:banner/baliho --}}
                                                <option value="horizontal">Horizontal</option>
                                                <option value="vertikal">Vertikal</option>
                                                @elseif ($product->id == 11)
                                                {{-- opsi untuk desain non-produksi:konten IG --}}
                                                <option value="feeds">Feeds</option>
                                                <option value="ig-story">IG Story</option>
                                                @elseif ($product->id == 16)
                                                {{-- opsi untuk desain video:bumper --}}
                                                <option value="short-bumper">Short Bumper (max. 15 secs)</option>
                                                <option value="long-bumper">Long Bumper ( > 15 secs)</option>
                                                @else
                                                <option value="-" >{{$product->value}}</option>
                                                @endif
                                        </select>
                                    </div>
                                    <div class="col-6 form-group">
                                        <label for="kuatiti-produk">Kuantiti:</label><br>
                                        <input type="number" name="quantity" id="quantity" class="form-control required" value="" placeholder="minimal 1" min="1">
                                    </div>
                                    @if ($product->category->id == 3)
                                    <div class="col-6 form-group">
                                        <label for="ukuran-rasio-produk">Duration</label><br>
                                        <input type="text" name="duration" id="duration" class="form-control required" value="" placeholder="ukuran produk">
                                    </div>
                                    @else
                                    <div class="col-6 form-group">
                                        <label for="ukuran-rasio-produk">Ukuran/rasio:</label><br>
                                        <input type="text" name="size" id="size" class="form-control required" value="" placeholder="ukuran produk">
                                    </div>

                                    @endif
                                    <div class="col-12 form-group">
                                        <label for="tone-produk">Tone</label>
                                        <textarea class="form-control required" id="tone-produk" name="tone" rows="3" placeholder="warna, font-style, color grading"></textarea>
                                    </div>
                                    @if ($product->category->id == 3)
                                    @else
                                    <div class="col-12 form-group">
                                        <label for="design-style-produk">Design Style</label>
                                        <textarea class="form-control required" id="style" name="style" rows="3" placeholder="contoh: simple, elegant, animation, etc."></textarea>
                                    </div>
                                    @endif
                                    <div class="col-12 form-group">
                                        <label for="target-audience-produk">Target Audience:</label><br>
                                        <input type="text" name="target_audience" id="target_audience" class="form-control required" value="" placeholder="anak-anak-dewasa / 4-6">
                                    </div>
                                    <div class="col-12 form-group">
                                        <label for="obj-brief-produk">Objective Brief</label>
                                        <textarea class="form-control required" id="obj-brief-produk" name="brief" rows="3" placeholder="Brief detail produk"></textarea>
                                    </div>
                                    <div class="col-6 form-group">
                                        <label for="deadline-produk">Deadline:</label><br>
                                        <select class="form-control required" name="deadline" id="deadline-produk">
                                                <option value="segera">Segera</option>
                                                <option value="normal">Nomral</option>
                                        </select>
                                    </div>
                                    <div class="col-6 form-group">
                                        <label for="output-produk">Output:</label><br>
                                        <input type="text" name="output" id="output" class="form-control required" value="" placeholder="format file">
                                    </div>
                                    <div class="col-12 form-group">
                                        <label for="standart-pattern-produk">Standart Pattern</label>
                                        <textarea class="form-control required" id="pattern" name="pattern" rows="3" placeholder="standart pattern yang diinginkan"></textarea>
                                    </div>
                                    <div class="col-12 hidden">
                                        <input type="text" id="event-registration-botcheck" name="event-registration-botcheck" value="" />
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" name="event-registration-submit" class="btn btn-secondary">Make Order</button>
                                    </div>

                                    <input type="hidden" name="prefix" value="event-registration-">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
