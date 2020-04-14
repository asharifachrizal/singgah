@extends('layouts.client-base')

@section('styles')
<style>
    .file-caption.icon-visible .file-caption-name {
        font-family: 'Lato', sans-serif;
        color: #666;
    }
    
    .form-widget { position: relative; }
    
    #checkout-same-as-billing {
        position: absolute;
        top: 10px;
        left: auto;
        right: 0;
        z-index: 5;
    }
</style>
@endsection

@section('title')
Singgah | Order
@endsection

@section('breadcumb')
<section id="page-title" class="page-title-parallax page-title-dark" style="background-image: url('{{ asset('canvas/images/parallax/8.jpg') }}'); background-size: cover; padding: 120px 0;" data-bottom-top="background-position:0px 0px;" data-top-bottom="background-position:0px -300px;">

    <div class="container clearfix">
        <h1>Order</h1>
        <span>Make your order here.</span>
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

        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Order Information</h2>
                <h4>{nama-kategori-product}</h4>
            </div>
            <div class="col-lg-6">
                <div class="feature-box media-box">
                    <div class="fbox-media">
                        <img src="{{ asset('canvas/images/services/1.jpg') }}" alt="Why choose Us?">
                    </div>
                    <div class="fbox-desc">
                        <h3>Why choose Us.<span class="subtitle">Because we are Reliable.</span></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi rem, facilis nobis voluptatum est voluptatem accusamus molestiae eaque perspiciatis mollitia.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="form-widget">

                    <div class="form-result"></div>
                    <div class="center"></div>
                    <form class="row" id="checkout-form" action="include/form.php" method="post" enctype="multipart/form-data">
                        
                        <div class="form-process"></div>
        
                        <div class="col-lg-12">
                            <div class="row checkout-form-billing">
                                
                                {{-- <div class="row"></div> --}}
                                <div class="col-12 form-group">
                                    <label for="nama-produk">Product:</label>
                                    <select class="form-control required" name="nama-produk" id="nama-produk">
                                            <option value="brosur">Brosur</option>
                                            <option value="poster">Poster</option>
                                            <option value="banner">Banner</option>
                                            <option value="baliho">Baliho</option>
                                            <option value="kartu-nama">Kartu Nama</option>
                                    </select>
                                    
                                </div>
                                {{-- <div class="col-12 form-group">
                                    <label>Email:</label>
                                    <input type="email" name="checkout-form-billing-email" id="checkout-form-billing-email" class="form-control required" value="" placeholder="user@company.com">
                                </div> --}}
                                <div class="col-12 form-group">
                                    <label for="jenis-produk">Jenis Produk:</label>
                                    <select class="form-control required" name="jenis-produk" id="jenis-produk">
                                            <option value="landscape">Landscape</option>
                                            <option value="potrait">Potrait</option>
                                            <option value="horizontal">Horizontal</option>
                                            <option value="vertikal">Vertikal</option>
                                    </select>
                                </div>
                                <div class="col-6 form-group">
                                    <label for="kuatiti-produk">Kuantiti:</label><br>
                                    <input type="number" name="kuatiti-produk" id="kuatiti-produk" class="form-control required" value="" placeholder="minimal 1" min="1">
                                </div>
                                <div class="col-6 form-group">
                                    <label for="ukuran-rasio-produk">Ukuran/rasio:</label><br>
                                    <input type="text" name="ukuran-rasio-produk" id="ukuran-rasio-produk" class="form-control required" value="" placeholder="ukuran produk">
                                </div>
                                <div class="col-12 form-group">
                                    <label for="tone-produk">Tone</label>
                                    <textarea class="form-control required" id="tone-produk" name="tone-produk" rows="3" placeholder="warna, font-style, color grading"></textarea>
                                </div>
                                <div class="col-12 form-group">
                                    <label for="design-style-produk">Design Style</label>
                                    <textarea class="form-control required" id="design-style-produk" name="design-style-produk" rows="3" placeholder="contoh: simple, elegant, animation, etc."></textarea>
                                </div>
                                <div class="col-12 form-group">
                                    <label for="target-audience-produk">Target Audience:</label><br>
                                    <input type="text" name="target-audience-produk" id="target-audience-produk" class="form-control required" value="" placeholder="anak-anak-dewasa / 4-6">
                                </div>
                                <div class="col-12 form-group">
                                    <label for="obj-brief-produk">Objective Brief</label>
                                    <textarea class="form-control required" id="obj-brief-produk" name="obj-brief-produk" rows="3" placeholder="Brief detail produk"></textarea>
                                </div>
                                <div class="col-6 form-group">
                                    <label for="deadline-produk">Deadline:</label><br>
                                    <select class="form-control required" name="deadline-produk" id="deadline-produk">
                                            <option value="segera">Segera</option>
                                            <option value="normal">Nomral</option>
                                    </select>
                                </div>
                                <div class="col-6 form-group">
                                    <label for="output-produk">Output:</label><br>
                                    <input type="text" name="output-produk" id="output-produk" class="form-control required" value="" placeholder="format file">
                                </div>
                                <div class="col-12 form-group">
                                    <label for="standart-pattern-produk">Standart Pattern</label>
                                    <textarea class="form-control required" id="standart-pattern-produk" name="standart-pattern-produk" rows="3" placeholder="standart pattern yang diinginkan"></textarea>
                                </div>
        
        
                                
                                {{-- <div class="col-12 form-group">
                                    <button type="submit" name="checkout-form-submit" class="btn btn-lg btn-secondary">Checkout</button>
                                </div> --}}
                            </div>
                        </div>
                        <div class="col-lg-12 form-group">
                            <div class="hidden">
                                <input type="text" id="checkout-form-botcheck" name="checkout-form-botcheck" value="" />
                            </div>
                            <div class="form-group">
                                <button type="submit" name="checkout-form-submit" class="btn btn-lg btn-secondary">Checkout</button>
                            </div>
                            <input type="hidden" name="prefix" value="checkout-form-">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
    </div>
</div>
@endsection

@section('scripts')
<script>
    var checkboxSame = $('#checkout-same-as-billing input[type=checkbox]');

    function sameAsBilling() {
        if( checkboxSame.is(':checked') ) {
            jQuery('.checkout-form-shipping').find(':input').prop('disabled', true);
        } else {
            jQuery('.checkout-form-shipping').find(':input').prop('disabled', false);
        }
    }

    jQuery(document).ready( function(){
        sameAsBilling();

        checkboxSame.on('change', function(){
            sameAsBilling();
        });

        jQuery('.checkout-form-billing').find(':input').on('change', function(){
            var billing		= $(this).attr('id'),
                billingVal	= $(this).val(),
                shipping	= billing.replace('billing', 'shipping'),
                shippingEl	= $('#' + shipping);

                if( shippingEl.length > 0 ) {
                    shippingEl.val( billingVal );
                }
        });
    });
</script>
@endsection