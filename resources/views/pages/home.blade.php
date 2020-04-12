@extends('layouts.client-base')

@section('breadcumb')
<section id="slider" class="slider-element slider-parallax swiper_wrapper full-screen clearfix">

    <div class="slider-parallax-inner">
        <div class="swiper-container swiper-parent">
            <div class="swiper-wrapper">
                <div class="swiper-slide dark" style="background-image: url('{{ asset('canvas/images/slider/swiper/1.jpg') }}');">
                    <div class="container clearfix">
                        <div class="slider-caption slider-caption-center">
                            <h2 data-animate="fadeInUp">Welcome to Canvas</h2>
                            <p class="d-none d-sm-block" data-animate="fadeInUp" data-delay="200">Create just what you need for your Perfect Website. Choose from a wide range of Elements &amp; simply put them on our Canvas.</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide" style="background-image: url('{{ asset('canvas/images/slider/swiper/5.jpg') }}'); background-position: center top;">
                    <div class="container clearfix">
                        <div class="slider-caption">
                            <h2 data-animate="fadeInUp">Great Performance</h2>
                            <p class="d-none d-sm-block" data-animate="fadeInUp" data-delay="200">You'll be surprised to see the Final Results of your Creation &amp; would crave for more.</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide" style="background-image: url('{{ asset('canvas/images/slider/swiper/3.jpg') }}'); background-position: center top;">
                    <div class="container clearfix">
                        <div class="slider-caption">
                            <h2 data-animate="fadeInUp">Great Performance</h2>
                            <p class="d-none d-sm-block" data-animate="fadeInUp" data-delay="200">You'll be surprised to see the Final Results of your Creation &amp; would crave for more.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-arrow-left"><i class="icon-angle-left"></i></div>
            <div class="slider-arrow-right"><i class="icon-angle-right"></i></div>
            <div class="slide-number"><div class="slide-number-current"></div><span>/</span><div class="slide-number-total"></div></div>
        </div>
    </div>

</section>
@endsection

@section('content')
<div class="content-wrap">

    <div class="container clearfix">
        <div class="row clearfix">

            <div class="col-xl-5">
                <div class="heading-block topmargin">
                    <h1>Welcome to Canvas.<br>MultiPurpose Template.</h1>
                </div>
                <p class="lead">Create a website that you are gonna be proud of. Be it Business, Portfolio, Agency, Photography, eCommerce &amp; much more.</p>
            </div>

            <div class="col-xl-7">

                <div style="position: relative; margin-bottom: -60px;" class="ohidden" data-height-xl="426" data-height-lg="567" data-height-md="470" data-height-sm="287" data-height-xs="183">
                    <img src="{{ asset('canvas/images/services/demon.png') }}" style="position: absolute; top: 0; left: 0;" data-animate="fadeInUp" data-delay="100" alt="Chrome">
                    {{-- <img src="images/services/main-fmobile.png" style="position: absolute; top: 0; left: 0;" data-animate="fadeInUp" data-delay="400" alt="iPad"> --}}
                </div>

            </div>

        </div>
        <div class="section nobottommargin">
            <div class="container clear-bottommargin clearfix">
    
                <div class="row topmargin-sm clearfix">
    
                    <div class="col-lg-4 bottommargin">
                        <i class="i-plain color i-large icon-line2-screen-desktop inline-block" style="margin-bottom: 15px;"></i>
                        <div class="heading-block nobottomborder" style="margin-bottom: 15px;">
                            <span class="before-heading">Scalable on Devices.</span>
                            <h4>Responsive &amp; Retina</h4>
                        </div>
                        <p>Employment respond committed meaningful fight against oppression social challenges rural legal aid governance. Meaningful work, implementation, process cooperation, campaign inspire.</p>
                    </div>
    
                    <div class="col-lg-4 bottommargin">
                        <i class="i-plain color i-large icon-line2-energy inline-block" style="margin-bottom: 15px;"></i>
                        <div class="heading-block nobottomborder" style="margin-bottom: 15px;">
                            <span class="before-heading">Smartly Coded &amp; Maintained.</span>
                            <h4>Powerful Performance</h4>
                        </div>
                        <p>Medecins du Monde Jane Addams reduce child mortality challenges Ford Foundation. Diversification shifting landscape advocate pathway to a better life rights international. Assessment.</p>
                    </div>
    
                    <div class="col-lg-4 bottommargin">
                        <i class="i-plain color i-large icon-line2-equalizer inline-block" style="margin-bottom: 15px;"></i>
                        <div class="heading-block nobottomborder" style="margin-bottom: 15px;">
                            <span class="before-heading">Flexible &amp; Customizable.</span>
                            <h4>Truly Multi-Purpose</h4>
                        </div>
                        <p>Democracy inspire breakthroughs, Rosa Parks; inspiration raise awareness natural resources. Governance impact; transformative donation philanthropy, respect reproductive.</p>
                    </div>
    
                </div>
    
            </div>
        </div>
    
        <div class="section parallax" style="background-image: url('images/parallax/3.jpg'); padding: 100px 0;" data-bottom-top="background-position:0px 100px;" data-top-bottom="background-position:0px -100px;">
            <div class="heading-block center nobottomborder nobottommargin">
                <h2>"Everything is designed, but some things are designed well."</h2>
            </div>
        </div>
    
        <div class="col_full nobottommargin clearfix">
    
            <div class="col_one_fourth">
                <div class="feature-box fbox-center fbox-bg fbox-plain">
                    <div class="fbox-icon">
                        <a href="#"><i class="icon-map-marker2"></i></a>
                    </div>
                    <h3>Our Headquarters<span class="subtitle">Melbourne, Australia</span></h3>
                </div>
            </div>
    
            <div class="col_one_fourth">
                <div class="feature-box fbox-center fbox-bg fbox-plain">
                    <div class="fbox-icon">
                        <a href="#"><i class="icon-phone3"></i></a>
                    </div>
                    <h3>Speak to Us<span class="subtitle">(123) 456 7890</span></h3>
                </div>
            </div>
    
            <div class="col_one_fourth">
                <div class="feature-box fbox-center fbox-bg fbox-plain">
                    <div class="fbox-icon">
                        <a href="#"><i class="icon-skype2"></i></a>
                    </div>
                    <h3>Make a Video Call<span class="subtitle">CanvasOnSkype</span></h3>
                </div>
            </div>
    
            <div class="col_one_fourth col_last">
                <div class="feature-box fbox-center fbox-bg fbox-plain">
                    <div class="fbox-icon">
                        <a href="#"><i class="icon-twitter2"></i></a>
                    </div>
                    <h3>Follow on Twitter<span class="subtitle">2.3M Followers</span></h3>
                </div>
            </div>
    
        </div><!-- Contact Info End -->
    </div>

    
</div>
@endsection