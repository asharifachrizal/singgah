@extends('layouts.client-base')

@section('breadcumb')
<section id="slider" class="slider-element slider-parallax swiper_wrapper full-screen clearfix">

    <div class="slider-parallax-inner">
        <div class="swiper-container swiper-parent">
            <div class="swiper-wrapper">
                <div class="swiper-slide dark" style="background-image: url('{{ asset('singgah/bg3.jpg') }}');">
                    <div class="container clearfix">
                        <div class="slider-caption slider-caption-center">
                            <h2 data-animate="fadeInUp">Welcome to Singgah</h2>
                            <p class="d-none d-sm-block" data-animate="fadeInUp" data-delay="200">We Create just what you need for your Perfect Product.</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide" style="background-image: url('{{ asset('canvas/images/slider/swiper/5.jpg') }}'); background-position: center top;">
                    <div class="container clearfix">
                        <div class="slider-caption">
                            <h2 data-animate="fadeInUp">Creative Designer</h2>
                            <p class="d-none d-sm-block" data-animate="fadeInUp" data-delay="200">We hire only Creative Designer.</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide" style="background-image: url('{{ asset('canvas/images/slider/swiper/3.jpg') }}'); background-position: center top;">
                    <div class="container clearfix">
                        <div class="slider-caption">
                            <h2 data-animate="fadeInUp">Great Result</h2>
                            <p class="d-none d-sm-block" data-animate="fadeInUp" data-delay="200">You'll be surprised to see the Final Results of our Creation &amp; would crave for more.</p>
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
                    <h1>Welcome to Singgah Chamber.<br>Branding Agency</h1>
                </div>
                <p class="lead">Create a design that you are gonna be proud of. Be it Poster, Video, Photography &amp; much more.</p>
            </div>

            <div class="col-xl-7">

                <div style="position: relative; margin-bottom: -60px;" class="ohidden" data-height-xl="426" data-height-lg="567" data-height-md="470" data-height-sm="287" data-height-xs="183">
                    <img src="{{ asset('singgah/logos/logo-0.png') }}" style="position: absolute; top: 0; left: 0;" data-animate="fadeInUp" data-delay="100" alt="Chrome">
                    {{-- <img src="images/services/main-fmobile.png" style="position: absolute; top: 0; left: 0;" data-animate="fadeInUp" data-delay="400" alt="iPad"> --}}
                </div>

            </div>

        </div>

        
            <!-- Our Works
            ============================================= -->
            <div class="section nobg nobottommargin clearfix">
                <div class="container clearfix">
                    <div class="heading-block center noborder" data-heading="O">
                        <h3 class="nott ls0">Our Portofolio</h3>
                    </div>

                    <!-- Portfolio Filter
                    ============================================= -->
                    <ul class="portfolio-filter style-2 center clearfix" data-container="#portfolio">

                        <li class="activeFilter"><a href="#" data-filter="*">Show All</a></li>
                        <li><a href="#" data-filter=".pf-poster">Poster</a></li>
                        <li><a href="#" data-filter=".pf-x">X - Banner</a></li>
                        <li><a href="#" data-filter=".pf-fig">Feed Instagram</a></li>
                        <li><a href="#" data-filter=".pf-koran">Iklan Koran</a></li>
                        <li><a href="#" data-filter=".pf-cover">Book Cover</a></li>
                        

                    </ul><!-- #portfolio-filter end -->
                </div>

                <!-- Portfolio Items
                ============================================= -->
                <div id="portfolio" class="portfolio grid-container portfolio-nomargin clearfix">

                    <article class="portfolio-item pf-media pf-poster">
                        <div class="portfolio-poster">
                            <a >
                                <img src="{{ asset('singgah/portofolios/portofolio-1.jpg')}}" alt="Open Imagination">
                            </a>
                            <div class="portfolio-overlay">
                                <div class="portfolio-desc">
                                    <h3><a >Open Imagination</a></h3>
                                    <span><a >Media</a>, <a >Icons</a></span>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="portfolio-item pf-media pf-poster">
                        <div class="portfolio-poster">
                            <a >
                                <img src="{{ asset('singgah/portofolios/portofolio-2.jpg')}}" alt="Open Imagination">
                            </a>
                            <div class="portfolio-overlay">
                                <div class="portfolio-desc">
                                    <h3><a >Open Imagination</a></h3>
                                    <span><a >Media</a>, <a >Icons</a></span>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="portfolio-item pf-media pf-fig">
                        <div class="portfolio-fig">
                            <a >
                                <img src="{{ asset('singgah/portofolios/portofolio-3.jpg')}}" alt="Open Imagination">
                            </a>
                            <div class="portfolio-overlay">
                                <div class="portfolio-desc">
                                    <h3><a >Open Imagination</a></h3>
                                    <span><a >Media</a>, <a >Icons</a></span>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="portfolio-item pf-media pf-koran">
                        <div class="portfolio-koran">
                            <a >
                                <img src="{{ asset('singgah/portofolios/portofolio-4.jpg')}}" alt="Open Imagination">
                            </a>
                            <div class="portfolio-overlay">
                                <div class="portfolio-desc">
                                    <h3><a >Open Imagination</a></h3>
                                    <span><a >Media</a>, <a >Icons</a></span>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="portfolio-item pf-media pf-x">
                        <div class="portfolio-x">
                            <a >
                                <img src="{{ asset('singgah/portofolios/portofolio-5.jpg')}}" alt="Open Imagination">
                            </a>
                            <div class="portfolio-overlay">
                                <div class="portfolio-desc">
                                    <h3><a >Open Imagination</a></h3>
                                    <span><a >Media</a>, <a >Icons</a></span>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="portfolio-item pf-media pf-book">
                        <div class="portfolio-x">
                            <a >
                                <img src="{{ asset('singgah/portofolios/portofolio-6.jpg')}}" alt="Open Imagination">
                            </a>
                            <div class="portfolio-overlay">
                                <div class="portfolio-desc">
                                    <h3><a >Open Imagination</a></h3>
                                    <span><a >Media</a>, <a >Icons</a></span>
                                </div>
                            </div>
                        </div>
                    </article>

                                    

                </div>
                <!-- #portfolio end -->            


            </div>

        <div class="divider"><i class="icon-="></i></div>
        <h3>Our Happy Clients</h3>

        <div class="row clearfix">
            <div id="oc-clients" class="owl-carousel image-carousel carousel-widget" data-margin="20" data-nav="false" data-pagi="true" data-items-xs="2" data-items-sm="3" data-items-md="4" data-items-lg="5" data-items-xl="6">

                <div class="oc-item"><a href="#"><img src="{{ asset('canvas/images/clients/1.png')}}" alt="Clients"></a></div>
                <div class="oc-item"><a href="#"><img src="{{ asset('canvas/images/clients/2.png')}}" alt="Clients"></a></div>
                <div class="oc-item"><a href="#"><img src="{{ asset('canvas/images/clients/3.png')}}" alt="Clients"></a></div>
                <div class="oc-item"><a href="#"><img src="{{ asset('canvas/images/clients/4.png')}}" alt="Clients"></a></div>
                <div class="oc-item"><a href="#"><img src="{{ asset('canvas/images/clients/5.png')}}" alt="Clients"></a></div>
                <div class="oc-item"><a href="#"><img src="{{ asset('canvas/images/clients/6.png')}}" alt="Clients"></a></div>
                <div class="oc-item"><a href="#"><img src="{{ asset('canvas/images/clients/7.png')}}" alt="Clients"></a></div>
                <div class="oc-item"><a href="#"><img src="{{ asset('canvas/images/clients/8.png')}}" alt="Clients"></a></div>
                <div class="oc-item"><a href="#"><img src="{{ asset('canvas/images/clients/9.png')}}" alt="Clients"></a></div>
                <div class="oc-item"><a href="#"><img src="{{ asset('canvas/images/clients/10.png')}}" alt="Clients"></a></div>

            </div>
        </div>

    
        <div class="section parallax" style="background-image: url('images/parallax/3.jpg'); padding: 100px 0;" data-bottom-top="background-position:0px 100px;" data-top-bottom="background-position:0px -100px;">
            <div class="heading-block center nobottomborder nobottommargin">
                <h2>"Everything is designed, but some things are designed well."</h2>
            </div>
        </div>
    
        <div class="col_full nobottommargin clearfix">
    
            <div class="col_one_fourth">
                <div class="feature-box fbox-center fbox-bg fbox-plain" style="box-shadow: 8px 7px 20px -15px black;">
                    <div class="fbox-icon">
                        <a ><i class="icon-map-marker2"></i></a>
                    </div>
                    <h3>Our Headquarters<span class="subtitle">Jakarta, Indonesia</span></h3>
                </div>
            </div>
    
            <div class="col_one_fourth">
                <div class="feature-box fbox-center fbox-bg fbox-plain" style="box-shadow: 8px 7px 20px -15px black;">
                    <div class="fbox-icon">
                        <a ><i class="icon-phone3"></i></a>
                    </div>
                    <h3>Speak to Us<span class="subtitle">(62) 0123456789</span></h3>
                </div>
            </div>
    
            <div class="col_one_fourth">
                <div class="feature-box fbox-center fbox-bg fbox-plain" style="box-shadow: 8px 7px 20px -15px black;">
                    <div class="fbox-icon">
                        <a ><i class="icon-instagram"></i></a>
                    </div>
                    <h3>Instagram<span class="subtitle">@singgah</span></h3>
                </div>
            </div>
    
            <div class="col_one_fourth col_last">
                <div class="feature-box fbox-center fbox-bg fbox-plain" style="box-shadow: 8px 7px 20px -15px black;">
                    <div class="fbox-icon">
                        <a ><i class="icon-twitter2"></i></a>
                    </div>
                    <h3>Follow on Twitter<span class="subtitle">@singgah</span></h3>
                </div>
            </div>
    
        </div><!-- Contact Info End -->
    </div>

    
</div>
@endsection