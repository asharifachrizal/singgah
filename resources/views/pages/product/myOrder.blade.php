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
                                    <div class="slide" data-thumb="{{ asset('canvas/images/shop/thumbs/dress/3.jpg') }}"><a href="{{ asset('canvas/images/shop/dress/3.jpg') }}" title="Pink Printed Dress - Front View" data-lightbox="gallery-item"><img src="{{ asset('canvas/images/shop/dress/3.jpg') }}" alt="Pink Printed Dress"></a></div>
                                    <div class="slide" data-thumb="{{ asset('canvas/images/shop/thumbs/dress/3-1.jpg') }}"><a href="{{ asset('canvas/images/shop/dress/3-1.jpg') }}" title="Pink Printed Dress - Side View" data-lightbox="gallery-item"><img src="{{ asset('canvas/images/shop/dress/3-1.jpg') }}" alt="Pink Printed Dress"></a></div>
                                    <div class="slide" data-thumb="{{ asset('canvas/images/shop/thumbs/dress/3-2.jpg') }}"><a href="{{ asset('canvas/images/shop/dress/3-2.jpg') }}" title="Pink Printed Dress - Back View" data-lightbox="gallery-item"><img src="{{ asset('canvas/images/shop/dress/3-2.jpg') }}" alt="Pink Printed Dress"></a></div>
                                </div>
                            </div>') }}
                        </div>
                        <div class="sale-flash">Sale!</div>
                    </div><!-- Product Single - Gallery End -->

                </div>

                <div class="col_two_fifth product-desc">
                    <div class="form-widget">

                        <div class="form-result"></div>

                        <div class="row">
                            <div class="col-lg-12">
                                <form class="row" id="event-registration" action="include/form.php" method="post" enctype="multipart/form-data">
                                    <div class="form-process"></div>
                                    {{-- gua gk paham if nya ini gua buatin daftar if nya --}}
                                    {{-- Untuk produk berikut, tab jenis produk di hidden saja

                                        DESAIN PRODUKSI:
                                        booklet
                                        brosur
                                        roll-banner/x-banner
                                        kartu nama
                                        sampul dokumen
                                        presentasi
                                        iklan koran

                                        DESAIN NON-PRODUKSI:
                                        infografis
                                        konten promosi
                                        konten broadcast

                                        VIDEO:
                                        editing offline
                                        motion graphic
                                        animation

                                         --}}
                                    <div class="col-12 form-group">
                                        <label for="jenis-produk">Jenis Produk:</label>
                                        <select class="form-control required" name="orientation" id="jenis-produk">
                                                {{-- opsi untuk desain produksi:poster --}}
                                                <option value="landscape">Landscape</option>
                                                <option value="potrait">Potrait</option>

                                                {{-- opsi untuk desain produksi:banner/baliho --}}
                                                <option value="horizontal">Horizontal</option>
                                                <option value="vertikal">Vertikal</option>

                                                {{-- opsi untuk desain non-produksi:konten IG --}}
                                                <option value="feeds">Feeds</option>
                                                <option value="ig-story">IG Story</option>

                                                {{-- opsi untuk desain video:bumper --}}
                                                <option value="short-bumper">Short Bumper (max. 15 secs)</option>
                                                <option value="long-bumper">Long Bumper ( > 15 secs)</option>
                                        </select>
                                    </div>
                                    <div class="col-6 form-group">
                                        <label for="kuatiti-produk">Kuantiti:</label><br>
                                        <input type="number" name="kuatiti-produk" id="quantity" class="form-control required" value="" placeholder="minimal 1" min="1">
                                    </div>
                                    <div class="col-6 form-group">
                                        <label for="ukuran-rasio-produk">Ukuran/rasio:</label><br>
                                        <input type="text" name="ukuran-rasio-produk" id="size" class="form-control required" value="" placeholder="ukuran produk">
                                    </div>
                                    <div class="col-12 form-group">
                                        <label for="tone-produk">Tone</label>
                                        <textarea class="form-control required" id="tone-produk" name="tone" rows="3" placeholder="warna, font-style, color grading"></textarea>
                                    </div>

                                    {{-- Untuk produk berikut, tab design style di hidden saja
                                        
                                        SEMUA JENIS VIDEO

                                        --}}
                                    <div class="col-12 form-group">
                                        <label for="design-style-produk">Design Style</label>
                                        <textarea class="form-control required" id="style" name="style" rows="3" placeholder="contoh: simple, elegant, animation, etc."></textarea>
                                    </div>
                                    <div class="col-12 form-group">
                                        <label for="target-audience-produk">Target Audience:</label><br>
                                        <input type="text" name="target-audience-produk" id="target_audience" class="form-control required" value="" placeholder="anak-anak-dewasa / 4-6">
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
                                        <input type="text" name="output-produk" id="output" class="form-control required" value="" placeholder="format file">
                                    </div>
                                    <div class="col-12 form-group">
                                        <label for="standart-pattern-produk">Standart Pattern</label>
                                        <textarea class="form-control required" id="pattern" name="standart-pattern-produk" rows="3" placeholder="standart pattern yang diinginkan"></textarea>
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