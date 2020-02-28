@extends('layouts.app')

@section('title')
Jasa Desain | Singgah  
@endsection

@section('content')
<div class="oxy-section">
    <div class="oxy-section__background oxy-background-parallax">
        <img src="{{ asset('fab/images/backgrounds/bg9-notinclude.jpg') }}" alt="section background">
    </div>
    <div class="oxy-section__overlay oxy-section__overlay--gradient-from-top-30"></div>
    <div class="oxy-section__content">
        <div class="mdl-grid mdl-grid--no-fullwidth">
         <h1 class="oxy-color-light mdl-typography--display-1 mdl-typography--font-thin oxy-margin-top-150 oxy-margin-bottom-100">Summer Collection</h1>
        </div>
    </div>
</div>

<div class="oxy-section">
    <div class="oxy-section__content">
        <div class="mdl-grid mdl-grid--no-fullwidth oxy-margin-top-40 oxy-margin-bottom-30">
            @include('partials.product-filters')
        </div>

        <div class="mdl-grid mdl-grid--no-fullwidth">
            <div class="mdl-cell mdl-cell--3-col mdl-cell--8-col-tablet mdl-cell--4-col-phone mdl-cell--2-order-tablet mdl-cell--2-order-phone">
                @include('partials.sidebar', ['categories' => $categories])
            </div>
            <div class="mdl-grid mdl-cell mdl-cell--top mdl-cell--9-col mdl-cell--8-col-tablet mdl-cell--4-col-phone">
                @foreach ($products as $row)
                    <div class="mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--4-col-phone oxy-animation" data-os-animation="fadeIn" data-os-animation-delay="0.1s">
                        <!-- new card -->
                        <div class="mdl-card mdl-shadow--2dp oxy-card-product">
                            <div class="mdl-card__media oxy-card-product__media">
                                <a href="{{ route('product.detail', $row->slug) }}">
                                    <img alt="some product" class="oxy-card-product__image" src="{{ asset('storage/' . $row->productImage->where('type', '1')->first()->img_path) }}" />
                                    <img alt="some product" class="oxy-card-product__image" src="{{ asset('storage/' . $row->productImage->where('type', '1')->first()->img_path) }}" />
                                </a>
                                <div class="mdl-card__title oxy-card-product__title">
                                    <h3 class="mdl-card__title-text oxy-card-product__title-text">
                                        <a href="{{ route('product.detail', $row->slug) }}" class="mdl-typography--font-light">{{ $row->name }}</a>
                                    </h3>
                                    <span class="mdl-typography--text-uppercase mdl-typography--font-bold oxy-card-product__tags">
                                        {{ $row->category->name }}
                                    </span>
                                </div>
                                <div class="oxy-card-product__badge oxy-product-badge">
                                    Sale
                                </div>
                            </div>
                            <div class="mdl-card__actions oxy-card-product-actions">
                                <strong class="mdl-typography--headline oxy-product-price">
                                    <del>
                                        <span>{{ $row->price_before_display }}</span>
                                    </del>
                                    <ins>
                                        <span>{{ $row->price_display }}</span>
                                    </ins>
                                </strong>
                                <button class="oxy-button-add-product oxy-js-button-add-product mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
                                    <i class="material-icons">add_shopping_cart</i>
                                </button>
                            </div>
                        </div>
                    </div>
                @endforeach

                <div class="oxy-full-width">
                    @include('partials.pagination')
                </div>
            </div>
        </div>
    </div>
</div>

@include('partials.sections.shop-banners')

@endsection