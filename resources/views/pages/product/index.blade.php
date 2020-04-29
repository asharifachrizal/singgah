@extends('layouts.client-base')



@section('breadcumb')
<section id="page-title" class="page-title-parallax page-title-dark" style="background-image: url('{{ asset('canvas/images/parallax/8.jpg') }}'); background-size: cover; padding: 120px 0;" data-bottom-top="background-position:0px 0px;" data-top-bottom="background-position:0px -300px;">
    <div class="container clearfix">
        <h1>Product</h1>
        <span>Find what you want here. </span>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Product</li>
        </ol>
    </div>
</section>
@endsection

@section('content')
<section id="section-services" class="page-section topmargin-lg">

    <div class="heading-block center bottommargin-lg">
        <h2>Product Category</h2>
        <span>List of some Category.</span>
    </div>

    <div class="container clearfix">

        <div class="col_one_third">
            <div class="feature-box fbox-center fbox-effect nobottomborder" data-animate="fadeIn">
                <div class="fbox-icon">
                    <a href="{{ route('product.select', ['desain-produksi', 1])}}"><i class="icon-box"></i></a>
                </div>
                <h3>Desain Produksi</h3>
                <!-- <p>Powerful Layout with Responsive functionality that can be adapted to any screen size.</p> -->
            </div>
        </div>

        <div class="col_one_third">
            <div class="feature-box fbox-center fbox-effect nobottomborder" data-animate="fadeIn" data-delay="200">
                <div class="fbox-icon">
                    <a href="{{ route('product.select', ['desain-non-produksi', 2])}}"><i class="icon-news"></i></a>
                </div>
                <h3>Desain Digital</h3>
                <!-- <p>Looks beautiful &amp; ultra-sharp on Retina Displays with Retina Icons, Fonts &amp; Images.</p> -->
            </div>
        </div>

        <div class="col_one_third col_last">
            <div class="feature-box fbox-center fbox-effect nobottomborder" data-animate="fadeIn" data-delay="400">
                <div class="fbox-icon">
                    <a href="{{ route('product.select', ['video', 3])}}"><i class="icon-video1"></i></a>
                </div>
                <h3>Video Editing</h3>
                <!-- <p>Optimized code that are completely customizable and deliver unmatched fast performance.</p> -->
            </div>
        </div>



    </div>

    <div class="divider divider-short divider-center topmargin-lg"><i class="icon-star3"></i></div>

</section>
@endsection
