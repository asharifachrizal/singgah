@extends('layouts.client-base')

@section('title')
Singgah | About Us
@endsection

@section('breadcumb')
<section id="page-title" class="page-title-parallax page-title-dark" style="background-image: url('{{ asset('canvas/images/parallax/8.jpg') }}'); background-size: cover; padding: 120px 0;" data-bottom-top="background-position:0px 0px;" data-top-bottom="background-position:0px -300px;">

    <div class="container clearfix">
        <h1>About Us</h1>
        <span>Get to know more about us.</span>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">About Us</li>
        </ol>
    </div>

</section>
@endsection

@section('content')
<div class="content-wrap">

    <div class="container clearfix">

        <div class="col_full">

            <div class="heading-block center nobottomborder">
                <h2>Sinngah Creative Environment</h2>
                <span>We value Work Ethics &amp; Environment as it helps in creating a Creative Thinktank</span>
            </div>

            <div class="fslider" data-pagi="false" data-animation="fade">
                <div class="flexslider">
                    <div class="slider-wrap">
                        <div class="slide"><a href="#"><img src="images/about/4.jpg" alt="About Image"></a></div>
                        <div class="slide"><a href="#"><img src="images/about/5.jpg" alt="About Image"></a></div>
                        <div class="slide"><a href="#"><img src="images/about/6.jpg" alt="About Image"></a></div>
                        <div class="slide"><a href="#"><img src="images/about/7.jpg" alt="About Image"></a></div>
                    </div>
                </div>
            </div>

        </div>

        <div class="container clearfix">

            <div class="col_one_third">

                <div class="heading-block fancy-title nobottomborder title-bottom-border">
                    <h4>Why choose <span>Us</span>.</h4>
                </div>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi quidem minus id omnis, nam expedita, ea fuga commodi voluptas iusto, hic autem deleniti dolores explicabo labore enim repellat earum perspiciatis.</p>

            </div>

            <div class="col_one_third">

                <div class="heading-block fancy-title nobottomborder title-bottom-border">
                    <h4>Our <span>Mission</span>.</h4>
                </div>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi quidem minus id omnis, nam expedita, ea fuga commodi voluptas iusto, hic autem deleniti dolores explicabo labore enim repellat earum perspiciatis.</p>

            </div>

            <div class="col_one_third col_last">

                <div class="heading-block fancy-title nobottomborder title-bottom-border">
                    <h4>What we <span>Do</span>.</h4>
                </div>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi quidem minus id omnis, nam expedita, ea fuga commodi voluptas iusto, hic autem deleniti dolores explicabo labore enim repellat earum perspiciatis.</p>

            </div>

        </div>

        <div class="clear"></div>

        <div class="promo promo-light bottommargin">
            <h3>Call us today at <span>+12.345.6789</span> or Email us at <span>email@gmail.com</span></h3>
            <span>We strive to provide Our Customers with Top Notch Support to make their Theme Experience Wonderful</span>
            <a href="#" class="button button-xlarge button-rounded">Order Now</a>
        </div>

        <div class="heading-block center">
            <h2>Canvas Thinktank</h2>
            <span>Our Team Members who have contributed immensely to our Growth</span>
        </div>

        <div class="row clearfix">

            <div class="col-lg-6 bottommargin">
                <div class="team team-list clearfix">
                    <div class="team-image">
                        <img src="{{ asset('canvas/images/team/3.jpg') }}" alt="John Doe">
                    </div>
                    <div class="team-desc">
                        <div class="team-title"><h4>John Doe</h4><span>CEO</span></div>
                        <div class="team-content">
                            <p>Carbon emissions reductions giving, legitimize amplify non-partisan Aga Khan. Policy dialogue assessment expert free-speech cornerstone disruptor freedom. Cesar Chavez empower.</p>
                        </div>
                        <a href="#" class="social-icon si-rounded si-small si-light si-facebook">
                            <i class="icon-facebook"></i>
                            <i class="icon-facebook"></i>
                        </a>
                        <a href="#" class="social-icon si-rounded si-small si-light si-twitter">
                            <i class="icon-twitter"></i>
                            <i class="icon-twitter"></i>
                        </a>
                        <a href="#" class="social-icon si-rounded si-small si-light si-gplus">
                            <i class="icon-gplus"></i>
                            <i class="icon-gplus"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 bottommargin">
                <div class="team team-list clearfix">
                    <div class="team-image">
                        <img src="{{ asset('canvas/images/team/2.jpg') }}" alt="Josh Clark">
                    </div>
                    <div class="team-desc">
                        <div class="team-title"><h4>Josh Clark</h4><span>Co-Founder</span></div>
                        <div class="team-content">
                            <p>Carbon emissions reductions giving, legitimize amplify non-partisan Aga Khan. Policy dialogue assessment expert free-speech cornerstone disruptor freedom. Cesar Chavez empower.</p>
                        </div>
                        <a href="#" class="social-icon si-rounded si-small si-light si-facebook">
                            <i class="icon-facebook"></i>
                            <i class="icon-facebook"></i>
                        </a>
                        <a href="#" class="social-icon si-rounded si-small si-light si-twitter">
                            <i class="icon-twitter"></i>
                            <i class="icon-twitter"></i>
                        </a>
                        <a href="#" class="social-icon si-rounded si-small si-light si-gplus">
                            <i class="icon-gplus"></i>
                            <i class="icon-gplus"></i>
                        </a>
                    </div>
                </div>
            </div>

            {{-- <div class="col-lg-6 bottommargin">
                <div class="team team-list clearfix">
                    <div class="team-image">
                        <img src="images/team/8.jpg" alt="Mary Jane">
                    </div>
                    <div class="team-desc">
                        <div class="team-title"><h4>Mary Jane</h4><span>Sales</span></div>
                        <div class="team-content">
                            <p>Carbon emissions reductions giving, legitimize amplify non-partisan Aga Khan. Policy dialogue assessment expert free-speech cornerstone disruptor freedom. Cesar Chavez empower.</p>
                        </div>
                        <a href="#" class="social-icon si-rounded si-small si-light si-facebook">
                            <i class="icon-facebook"></i>
                            <i class="icon-facebook"></i>
                        </a>
                        <a href="#" class="social-icon si-rounded si-small si-light si-twitter">
                            <i class="icon-twitter"></i>
                            <i class="icon-twitter"></i>
                        </a>
                        <a href="#" class="social-icon si-rounded si-small si-light si-gplus">
                            <i class="icon-gplus"></i>
                            <i class="icon-gplus"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 bottommargin">
                <div class="team team-list clearfix">
                    <div class="team-image">
                        <img src="images/team/4.jpg" alt="Nix Maxwell">
                    </div>
                    <div class="team-desc">
                        <div class="team-title"><h4>Nix Maxwell</h4><span>Support</span></div>
                        <div class="team-content">
                            <p>Carbon emissions reductions giving, legitimize amplify non-partisan Aga Khan. Policy dialogue assessment expert free-speech cornerstone disruptor freedom. Cesar Chavez empower.</p>
                        </div>
                        <a href="#" class="social-icon si-rounded si-small si-light si-facebook">
                            <i class="icon-facebook"></i>
                            <i class="icon-facebook"></i>
                        </a>
                        <a href="#" class="social-icon si-rounded si-small si-light si-twitter">
                            <i class="icon-twitter"></i>
                            <i class="icon-twitter"></i>
                        </a>
                        <a href="#" class="social-icon si-rounded si-small si-light si-gplus">
                            <i class="icon-gplus"></i>
                            <i class="icon-gplus"></i>
                        </a>
                    </div>
                </div>
            </div> --}}

        </div>

    </div>

    <div class="container clearfix">

        <div class="clear"></div>

        <div class="heading-block center">
            <h4>Our Clients</h4>
        </div>

        <ul class="clients-grid grid-6 nobottommargin clearfix">
            <li><a href="http://logofury.com/logo/enzo.html"><img src="{{ asset('canvas/images/clients/1.png') }}" alt="Clients"></a></li>
            <li><a href="http://logofury.com"><img src="{{ asset('canvas/images/clients/2.png') }}" alt="Clients"></a></li>
            <li><a href="http://logofaves.com/2014/03/grabbt/"><img src="{{ asset('canvas/images/clients/3.png') }}" alt="Clients"></a></li>
            <li><a href="http://logofaves.com/2014/01/ladera-granola/"><img src="{{ asset('canvas/images/clients/4.png') }}" alt="Clients"></a></li>
            <li><a href="http://logofaves.com/2014/02/hershel-farms/"><img src="{{ asset('canvas/images/clients/5.png') }}" alt="Clients"></a></li>
            <li><a href="http://logofury.com/logo/food-fight-radio.html"><img src="{{ asset('canvas/images/clients/6.png') }}" alt="Clients"></a></li>
            <li><a href="http://logofury.com"><img src="{{ asset('canvas/images/clients/7.png') }}" alt="Clients"></a></li>
            <li><a href="http://logofury.com/logo/up-travel.html"><img src="{{ asset('canvas/images/clients/8.png') }}" alt="Clients"></a></li>
            <li><a href="http://logofury.com/logo/caffi-bardi.html"><img src="{{ asset('canvas/images/clients/9.png') }}" alt="Clients"></a></li>
            <li><a href="http://logofury.com/logo/bignix-design.html"><img src="{{ asset('canvas/images/clients/10.png') }}" alt="Clients"></a></li>
            <li><a href="http://logofury.com/"><img src="{{ asset('canvas/images/clients/11.png') }}" alt="Clients"></a></li>
            <li><a href="http://logofury.com/"><img src="{{ asset('canvas/images/clients/12.png') }}" alt="Clients"></a></li>
        </ul>

    </div>

</div>
@endsection