@extends('layouts.app')

@section('title')
Jasa Desain | Singgah  
@endsection

@section('extracss')
<!-- toast CSS -->
<link href="{{ asset('material/plugins/toast-master/css/jquery.toast.css') }}" rel="stylesheet">
@endsection

@section('content')

<div class="oxy-section">
    <div class="oxy-section__content">
        @include('partials.sliders.homepage', ['sliders' => $slider])
    </div>
</div>

@include('partials.sections.banners3x1')

<div class="oxy-section">
    <div class="oxy-section__content">
        <div class="mdl-grid mdl-grid--no-fullwidth">
            <div class="mdl-cell mdl-cell--12-col  oxy-animation" data-os-animation="fadeIn" data-os-animation-delay="0.1s">
                <h2 class="mdl-typography--display-1 mdl-typography--text-center mdl-typography--font-light oxy-margin-top-40  oxy-margin-bottom-20">
                    Latest Products
                </h2>

                <div class="oxy-divider oxy-divider--center  oxy-animation" data-os-animation="fadeIn" data-os-animation-delay="0.2s">
                     <div class="oxy-divider__border"></div>
                </div>
            </div>
        </div>

        @include('partials.sections.products4x2', ['products' => $latestProducts])
    </div>
</div>

@include('partials.sections.shop-banners')

<!-- 
<div class="oxy-section oxy-margin-bottom-40">
    <div class="oxy-section__content">
        <div class="mdl-grid mdl-grid--no-fullwidth">
            <div class="mdl-cell mdl-cell--12-col  oxy-animation" data-os-animation="fadeIn" data-os-animation-delay="0.1s">
                <h2 class="mdl-typography--display-1 mdl-typography--text-center mdl-typography--font-light oxy-margin-top-40  oxy-margin-bottom-20">
                    Hot Products
                </h2>

                <div class="oxy-divider oxy-divider--center  oxy-animation" data-os-animation="fadeIn" data-os-animation-delay="0.2s">
                     <div class="oxy-divider__border"></div>
                </div>
            </div>
        </div>

        {% include "partials/sections/products-3x2.html" %}
    </div>
</div>

<div class="oxy-section">
    <div class="oxy-section__background oxy-section__background--bottom-align oxy-background-parallax">
        <img src="assets/images/backgrounds/bg9-notinclude.jpg" alt="section background">
    </div>
    <div class="oxy-section__overlay"></div>
    <div class="oxy-section__content">

        <div class="mdl-grid mdl-grid--no-fullwidth">
            <div class="mdl-cell mdl-cell--12-col  oxy-animation" data-os-animation="fadeIn" data-os-animation-delay="0.1s">
                <h2 class="oxy-color-light mdl-typography--display-1 mdl-typography--font-thin oxy-margin-top-80 oxy-margin-bottom-20"> Never Miss An Offer</h2>
            </div>
        </div>
        {% include "partials/sections/shop-signup.html" %}
    </div>
</div>


{% include "partials/sections/featured-product.html" %}

{% include "partials/sections/store-locator.html" %}

<div class="oxy-section">
    <div class="oxy-section__content">
        <div class="mdl-grid mdl-grid--no-fullwidth">
            <div class="mdl-cell mdl-cell--12-col">
                <h2 class="mdl-typography--display-1 mdl-typography--text-center mdl-typography--font-light oxy-margin-top-40  oxy-margin-bottom-20 oxy-animation" data-os-animation="fadeIn" data-os-animation-delay="0.1s">
                    Featured Products
                </h2>

                <div class="oxy-divider oxy-divider--center oxy-animation" data-os-animation="fadeIn" data-os-animation-delay="0.1s">
                     <div class="oxy-divider__border"></div>
                </div>
            </div>
        </div>

        {% include "partials/sections/products-6x1.html" %}
    </div>
</div>

{% include "partials/services.html" %}

<div class="oxy-section oxy-margin-bottom-40">
    <div class="oxy-section__content">
        <div class="mdl-grid mdl-grid--no-fullwidth">
            <div class="mdl-cell mdl-cell--12-col  oxy-animation" data-os-animation="fadeIn" data-os-animation-delay="0.1s">
                <h2 class="mdl-typography--display-1 mdl-typography--text-center mdl-typography--font-light oxy-margin-top-40  oxy-margin-bottom-20">
                    Reviews
                </h2>

                <div class="oxy-divider oxy-divider--center  oxy-animation" data-os-animation="fadeIn" data-os-animation-delay="0.2s">
                     <div class="oxy-divider__border"></div>
                </div>
            </div>
        </div>

        {% include "partials/sections/reviews-3x2.html" %}
    </div>
</div>

<div class="oxy-section">
    <div class="oxy-section__background oxy-section__background--bottom-align oxy-background-parallax">
        <img src="assets/images/backgrounds/bg8-notinclude.jpg" alt="section background">
    </div>
    <div class="oxy-section__overlay"></div>
    <div class="oxy-section__content">

        <div class="mdl-grid mdl-grid--no-fullwidth">
            <div class="mdl-cell mdl-cell--12-col  oxy-animation" data-os-animation="fadeIn" data-os-animation-delay="0.1s">
                <h2 class="oxy-color-light mdl-typography--display-1 mdl-typography--font-thin oxy-margin-top-80 oxy-margin-bottom-20 mdl-typography--text-center"> Get 10% off on your first order </h2>
            </div>
        </div>
        {% include "partials/sections/shop-discount.html" %}
    </div>
</div>

<div class="oxy-section oxy-margin-bottom-40">
    <div class="oxy-section__content">
        <div class="mdl-grid mdl-grid--no-fullwidth">
            <div class="mdl-cell mdl-cell--12-col  oxy-animation" data-os-animation="fadeIn" data-os-animation-delay="0.1s">
                <h2 class="mdl-typography--display-1 mdl-typography--text-center mdl-typography--font-light oxy-margin-top-40  oxy-margin-bottom-20">
                    Latest News
                </h2>

                <div class="oxy-divider oxy-divider--center  oxy-animation" data-os-animation="fadeIn" data-os-animation-delay="0.2s">
                     <div class="oxy-divider__border"></div>
                </div>
            </div>
        </div>

        {% include "partials/sections/posts-3x1.html" %}
    </div>
</div> -->


@endsection

@section('extrajs')
<script src="{{ asset('fab/js/revolution-extensions/revolution.extension.actions.min.js') }}"></script>
<script src="{{ asset('fab/js/revolution-extensions/revolution.extension.carousel.min.js') }}"></script>
<script src="{{ asset('fab/js/revolution-extensions/revolution.extension.kenburn.min.js') }}"></script>
<script src="{{ asset('fab/js/revolution-extensions/revolution.extension.layeranimation.min.js') }}"></script>
<script src="{{ asset('fab/js/revolution-extensions/revolution.extension.migration.min.js') }}"></script>
<script src="{{ asset('fab/js/revolution-extensions/revolution.extension.navigation.min.js') }}"></script>
<script src="{{ asset('fab/js/revolution-extensions/revolution.extension.parallax.min.js') }}"></script>
<script src="{{ asset('fab/js/revolution-extensions/revolution.extension.slideanims.min.js') }}"></script>
<script src="{{ asset('fab/js/revolution-extensions/revolution.extension.video.min.js') }}"></script>

<script src="{{ asset('material/plugins/toast-master/js/jquery.toast.js') }}"></script>
<script src="{{ asset('material/js/toastr.js') }}"></script>
<script>
$(document).ready(function() {
    $('.add-shopping-cart-button').click(function(){

        var product_id = $(this).parent().data('id');

        $.ajax
        ({ 
            url: "{{ route('cart.additem', 'masterpiece') }}",
            type: 'post',
            success: function(result)
            {
                $('#buttonCartBadge').attr("data-badge", "3");
                $.toast({
                    heading: 'Berhasil',
                    text: 'Item berhasil ditambahkan ke keranjang.',
                    position: 'top-right',
                    bgColor: '#FF5056',
                    loaderBg: '#ffa250',
                    icon: 'success',
                    hideAfter: 3500,
                    stack: 6
                });
            }
        });
    });
});
</script>
@endsection