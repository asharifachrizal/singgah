
@extends('layouts.mk-base')

@section('title')
Singgah | About Us  
@endsection

@section('content')

<!-- about section start -->
<section class="about-page section-b-space">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="banner-section"><img src="{{ asset('uploads/sliders/slider-5.png') }}" class="img-fluid blur-up lazyload" alt=""></div>
            </div>
            <div class="col-sm-12">
                <h4>Singgah Art</h4>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,</p>
                <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains.</p>
            </div>
        </div>
    </div>
</section>
<!-- about section end -->

<!--Testimonial start-->
<!--
<section class="testimonial small-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="slide-2 testimonial-slider no-arrow">
                    <div>
                        <div class="media">
                            <div class="text-center">
                                <img src="{{ asset('mk/images/bilhadGates.jpg') }}" alt="#">
                                <h5>Billhad Gates</h5>
                                <h6>CEO</h6>
                            </div>
                            <div class="media-body">
                                <p>you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings.</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="media">
                            <div class="text-center">
                                <img src="{{ asset('mk/images/misbah.jpg') }}" alt="#">
                                <h5>Misbah</h5>
                                <h6>CDO</h6>
                            </div>
                            <div class="media-body">
                                <p>you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings.</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="media">
                            <div class="text-center">
                                <img src="{{ asset('mk/images/avtar.jpg') }}" alt="#">
                                <h5>Mark Jecno</h5>
                                <h6>Designer</h6>
                            </div>
                            <div class="media-body">
                                <p>you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings.</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="media">
                            <div class="text-center">
                                <img src="{{ asset('mk/images/avtar.jpg') }}" alt="#">
                                <h5>Mark Jecno</h5>
                                <h6>Designer</h6>
                            </div>
                            <div class="media-body">
                                <p>you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings.</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="media">
                            <div class="text-center">
                                <img src="{{ asset('mk/images/avtar.jpg') }}" alt="#">
                                <h5>Mark Jecno</h5>
                                <h6>Designer</h6>
                            </div>
                            <div class="media-body">
                                <p>you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings.</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="media">
                            <div class="text-center">
                                <img src="{{ asset('mk/images/avtar.jpg') }}" alt="#">
                                <h5>Mark Jecno</h5>
                                <h6>Designer</h6>
                            </div>
                            <div class="media-body">
                                <p>you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
-->
<!--Testimonial ends-->


<!--Team start-->
<!--
<section id="team" class="team section-b-space ratio_asos">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2>Tim Kami</h2>
                <div class="team-4">
                    @for ($i = 0; $i < 6; $i++)
                        <div>
                            <div>
                                <img src="{{ asset('uploads/banners/featured-left.jpg') }}" class="img-fluid blur-up lazyload bg-img" alt="">
                            </div>
                            <h4>Bambang Pamungkas</h4>
                            <h6>CEO & Founder Singgah</h6>
                        </div>
                        <div>
                            <div>
                                <img src="{{ asset('uploads/banners/featured-right.jpg') }}" class="img-fluid blur-up lazyload bg-img" alt="">
                            </div>
                            <h4>Budi Sudarsono</h4>
                            <h6>CTO Singgah</h6>
                        </div>
                    @endfor
                </div>
            </div>
        </div>
    </div>
</section>
-->
<!--Team ends-->

@endsection