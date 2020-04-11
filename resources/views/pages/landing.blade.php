@extends('layouts.mk-base')

@section('title')
Singgah
@endsection

@section('styles')

@section('breadcumb')
<!-- Home slider -->
<section class="p-0">
    <div class="slide-1 home-slider text-white">
        <div>
            <div class="home p-center text-center">
                <img src="{{ asset('mk/images/special/bg4.jpg') }}" alt="" class="bg-img blur-up lazyload">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="slider-contain ">
                                <div class="">
                                    <h4>save 10%</h4>
                                    <h1>Create your Project</h1><a href="#" class="btn btn-solid">shop now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="home p-center text-center">
                <img src="{{ asset('mk/images/special/bg5.jpg') }}" alt="" class="bg-img blur-up lazyload">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="slider-contain">
                                <div>
                                    <h4>save upto 10%</h4>
                                    <h1>make your design</h1><a href="#" class="btn btn-solid">shop now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Home slider end -->
@endsection

@section('content')

<!-- blog section -->
<section class="blog blog-bg section-b-space ratio2_3">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title3">
                    <h3 class="title-inner3">"Design adds value faster than it adds costs"</h2>
                    <h4>Joel Spolsky</h4>
                    <div class="line"></div>
                </div>
                <div class="slide-3 no-arrow">
                    <div class="col-md-12">
                        <a>
                            <div class="classic-effect___">
                                <div>
                                    <img src="{{ asset('mk/images/step-1.png')}}"
                                        class="img-fluid blur-up lazyload bg-img" alt="">
                                </div>
                                <span></span>
                            </div>
                        </a>
                        <div class="blog-details">
                            <h4>Order</h4>
                            <a>
                                <p>Order Our Service as You Need</p>
                            </a>
                            <!-- <hr class="style1">                             -->
                        </div>
                    </div>

                    <div class="col-md-12">
                        <a>
                            <div class="classic-effect___">
                                <div>
                                    <img src="{{ asset('mk/images/step-2.png')}}"
                                        class="img-fluid blur-up lazyload bg-img" alt="">
                                </div>
                                <span></span>
                            </div>
                        </a>
                        <div class="blog-details">
                            <h4>Invoice</h4>
                            <a>
                                <p>Request Invoice</p>
                            </a>
                            <!-- <hr class="style1">                             -->
                        </div>
                    </div>
                    <div class="col-md-12">
                        <a>
                            <div class="classic-effect___">
                                <div>
                                    <img src="{{ asset('mk/images/step-3.png')}}"
                                        class="img-fluid blur-up lazyload bg-img" alt="">
                                </div>
                                <span></span>
                            </div>
                        </a>
                        <div class="blog-details">
                            <h4>Production</h4>
                            <a>
                                <p>Let's Design Your Brand</p>
                            </a>
                            <!-- <hr class="style1">                             -->
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>
<!-- blog section end -->


<!-- Separator section -->
<!-- <section class="instagram ratio_square">
    
</section> -->
<!-- Separator section end -->

<!-- Parallax banner -->
<section class="p-0">
    <div class="full-banner parallax text-center p-right">
        <img src="{{ asset('mk/images/special/bg-btm-02.jpeg')}}" alt="" class="bg-img blur-up lazyload">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="banner-contain">
                        <h2>SINGGAH</h2>
                        <h3>Design Agency</h3>
                        <h4>Your Design Partner</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Parallax banner end -->

<!-- Gallery section -->
<section class="instagram ratio_square">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="title-borderless">Gallery</h2>
                <div class="slide-5 no-arrow slick-instagram">
                    <div>
                        <a >
                            <div class="instagram-box"><img src="{{ asset('mk/images/galleryItem.png')}}" class="bg-img"
                                    alt="Avatar" style="width:100%">
                                <div ><i  aria-hidden="true"></i></div>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a >
                            <div class="instagram-box"><img src="{{ asset('mk/images/galleryItem.png')}}" class="bg-img"
                                    alt="Avatar" style="width:100%">
                                <div ><i  aria-hidden="true"></i></div>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a >
                            <div class="instagram-box"><img src="{{ asset('mk/images/galleryItem.png')}}" class="bg-img"
                                    alt="Avatar" style="width:100%">
                                <div ><i  aria-hidden="true"></i></div>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a >
                            <div class="instagram-box"><img src="{{ asset('mk/images/galleryItem.png')}}" class="bg-img"
                                    alt="Avatar" style="width:100%">
                                <div ><i  aria-hidden="true"></i></div>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a >
                            <div class="instagram-box"><img src="{{ asset('mk/images/galleryItem.png')}}" class="bg-img"
                                    alt="Avatar" style="width:100%">
                                <div ><i  aria-hidden="true"></i></div>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a >
                            <div class="instagram-box"><img src="{{ asset('mk/images/galleryItem.png')}}" class="bg-img"
                                    alt="Avatar" style="width:100%">
                                <div ><i  aria-hidden="true"></i></div>
                            </div>
                        </a>
                    </div>
                    
                    
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Gallery section end -->

<!--  logo section -->
<section class="section-b-space">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="slide-6 no-arrow">
                    <div>
                        <div class="logo-block">
                            <a href="#"><img src="{{ asset('mk/images/logos/1.png') }}" alt=""></a>
                        </div>
                    </div>
                    <div>
                        <div class="logo-block">
                            <a href="#"><img src="{{ asset('mk/images/logos/2.png') }}" alt=""></a>
                        </div>
                    </div>
                    <div>
                        <div class="logo-block">
                            <a href="#"><img src="{{ asset('mk/images/logos/3.png') }}" alt=""></a>
                        </div>
                    </div>
                    <div>
                        <div class="logo-block">
                            <a href="#"><img src="{{ asset('mk/images/logos/4.png') }}" alt=""></a>
                        </div>
                    </div>
                    <div>
                        <div class="logo-block">
                            <a href="#"><img src="{{ asset('mk/images/logos/5.png') }}" alt=""></a>
                        </div>
                    </div>
                    <div>
                        <div class="logo-block">
                            <a href="#"><img src="{{ asset('mk/images/logos/6.png') }}" alt=""></a>
                        </div>
                    </div>
                    <div>
                        <div class="logo-block">
                            <a href="#"><img src="{{ asset('mk/images/logos/7.png') }}" alt=""></a>
                        </div>
                    </div>
                    <div>
                        <div class="logo-block">
                            <a href="#"><img src="{{ asset('mk/images/logos/8.png') }}" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--  logo section end-->
@endsection

@section('scripts')
@endsection