@extends('layouts.app')

@section('title')
Jasa Desain | Singgah  
@endsection

@section('content')

<div class="oxy-section">
    <div class="oxy-section__background oxy-background-parallax">
        <img src="{{ asset('fab/images/backgrounds/bg4-notinclude.jpg') }}" alt="section background" class="oxy-photo-blur-3">
    </div>
    <div class="oxy-section__overlay oxy-section__overlay--gradient-from-top-50"></div>
    <div class="oxy-section__content">
        <div class="mdl-grid mdl-grid--no-fullwidth">
            <div class="oxy-divider" style="height: 200px;"></div>
        </div>
    </div>
</div>

<div class="oxy-section">
    <div class="oxy-section__content">
        <div class="mdl-grid mdl-grid--no-fullwidth oxy-margin-top-40 oxy-margin-bottom-30">
            <div class="mdl-cell--middle mdl-cell mdl-cell--6-col mdl-cell--4-col-tablet mdl-cell--2-col-phone">
                <ol class="oxy-breadcrumb">
                    <li class="oxy-breadcrumb__item"><a href="shop.html">Beranda</a></li>
                    <li class="oxy-breadcrumb__item"><a href="shop.html">{{ $product->category->name }}</a></li>
                    <li class="oxy-breadcrumb__item"><span>{{ $product->name }}</span></li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="oxy-section">
    <div class="oxy-section__content">
        <div class="mdl-grid mdl-grid--no-fullwidth">
            <div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet mdl-cell--4-col-phone">

                <div class="oxy-product-slider">

                    <div class="oxy-product-badge">
                        Sale
                    </div>

                    <div class="flexslider oxy-product-slider__slides"
                        data-flex-animation="slide"
                        data-flex-controls="thumbnails"
                        data-flex-controlsalign="left"
                        data-flex-controlsposition="outside"
                        data-flex-directions="hide"
                        data-flex-directions-type="simple"
                        data-flex-duration="600"
                        data-flex-slideshow="true" data-flex-speed="7000" id="product-images">
                        <ul class="slides">
                            @foreach ($product->productImage as $rowItem)
                                <li data-thumb="{{ asset('storage/' . $rowItem->img_path) }}">
                                    <img alt="Top Fancy" src="{{ asset('storage/' . $rowItem->img_path) }}">
                                </li>
                            @endforeach
                        </ul>
                    </div>

                </div>

            </div>
            <div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet mdl-cell--4-col-phone oxy-product-details">
                <h1 class="mdl-typography--display-1 oxy-margin-top-0 oxy-margin-bottom-10">{{ $product->name }}</h1>
                <p class="mdl-typography--display-1 oxy-margin-0 oxy-margin-bottom-20 oxy-product-price">
                    <del>
                        <span>{{ $product->price_before_display }}</span>
                    </del>
                    <ins>
                        <span>{{ $product->priceDisplay }}</span>
                    </ins>
                </p>

                {{-- <a href="#product-reviews-tab" id="review-rating-tooltip" class="oxy-rating oxy-rating--big oxy-margin-bottom-20 oxy-display-inline-block" title="Rated 4.00 out of 5">
                    <span style="width:85%">
                        <strong class="oxy-rating__stars">4.00</strong> out of 5
                    </span>
                </a> --}}

                <div class="mdl-tooltip" for="review-rating-tooltip">
                    <span itemprop="reviewCount" class="count">1</span> customer review
                </div>

                {{-- <p class="mdl-typography--title mdl-typography--font-light oxy-typography-line-height-normal oxy-opacity-50">
                    Material Design Lite is a light-weight implementation of design, specifically crafted for the web. For more detailed guidelines and specifications for other platforms please refer to the Material Design site. Thats the spirit of material design. Get started now.
                </p> --}}
                <form class="oxy-margin-bottom-30">
                    <table class="oxy-product-details__options">
                        <tbody>
                            <tr>
                                <td><label for="color">Ukuran:</label></td>
                                <td>
                                    <div class="mdl-selectfield mdl-js-selectfield" tabindex="-1">
                                        <select name="orderby" class="mdl-selectfield__select">
                                            <option value="Small">S</option>
                                            <option value="Medium">M</option>
                                            <option value="Large">L</option>
                                            <option value="Large">XL</option>
                                        </select>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><label for="color">Warna:</label></td>
                                <td>
                                    <div class="mdl-selectfield mdl-js-selectfield" tabindex="-1">
                                        <select name="orderby" class="mdl-selectfield__select">
                                            <option value="Green">Biru</option>
                                            <option value="Red">Merah</option>
                                            <option value="Yellow">Hijau</option>
                                        </select>
                                    </div>
                                    {{-- <button class="oxy-display-block mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--primary">
                                        Clear selection
                                    </button> --}}
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="oxy-quantity">
                        <input type="button" value="-">
                        <div class="mdl-textfield mdl-js-textfield">
                            <input type="number" step="1" min="0" name="cart" value="1" title="Qty" class="mdl-textfield__input" id="q1">
                            <label class="mdl-textfield__label" for="q1"></label>
                        </div>
                        <input type="button" value="+">
                    </div>

                    <button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
                        Tambah ke Keranjang
                    </button>
                </form>

                <div class="mdl-grid">
                    <div class="mdl-cell mdl-cell--6-col mdl-cell mdl-cell--4-col-tablet mdl-cell mdl-cell--2-col-phone mdl-cell--middle">
                        <div class="oxy-product-details__meta">
                            <span>
                                Category:
                                <a href="#" rel="tag">{{ $product->category->name }}</a>
                            </span>
                        </div>
                    </div>
                    <div class="mdl-cell mdl-cell--6-col mdl-cell mdl-cell--4-col-tablet mdl-cell mdl-cell--2-col-phone mdl-cell--middle mdl-typography--text-right">
                        <button id="product-share"class="mdl-button mdl-js-button mdl-button--icon">
                            <i class="material-icons">share</i>
                        </button>
                        <ul class="mdl-menu mdl-menu--top-right mdl-js-menu mdl-js-ripple-effect" for="product-share">
                          <li class="mdl-menu__item">Share on facebook</li>
                          <li class="mdl-menu__item">Share on twitter</li>
                          <li class="mdl-menu__item">Share on google+</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="oxy-section">
    <div class="oxy-section__content">
        <div class="mdl-grid mdl-grid--no-fullwidth oxy-margin-top-40">
        <div class="mdl-cell mdl-cell--12-col">
            <div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
                <div class="mdl-tabs__tab-bar oxy-flex-justify-start">
                    <a href="#product-description-tab" class="mdl-tabs__tab is-active">Deskripsi</a>
                    <a href="#additional-info-tab" class="mdl-tabs__tab">Informasi Tambahan</a>
                </div>

                <div class="mdl-tabs__panel oxy-padding-top-20 oxy-padding-bottom-20 is-active" id="product-description-tab">
                    {{ $product->description }}. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi ratione, quo recusandae obcaecati eaque quae beatae voluptatibus odit delectus necessitatibus quisquam facere omnis. Sapiente, enim. Quam placeat qui quisquam deleniti. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro culpa maxime id! Provident unde commodi magnam odit voluptates in possimus impedit esse aliquid voluptas, porro exercitationem! Qui molestiae debitis molestias.
                </div>
                <div class="mdl-tabs__panel oxy-padding-top-20 oxy-padding-bottom-20" id="additional-info-tab">
                    <table class="mdl-data-table mdl-js-data-table oxy-full-width">
                        <tbody>
                            <tr>
                                <td class="mdl-data-table__cell--non-numeric"><strong>Ukuran</strong></td>
                                <td>Small, Medium, Large, XXL</td>
                            </tr>
                            <tr>
                                <td class="mdl-data-table__cell--non-numeric"><strong>Warna</strong></td>
                                <td>Biru, Merah, Hijau</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="oxy-section">
    <div class="oxy-section__content">
        <div class="mdl-grid mdl-grid--no-fullwidth">
            <div class="mdl-cell mdl-cell--12-col">
                <h2 class="mdl-typography--display-1 mdl-typography--text-center mdl-typography--font-light oxy-margin-top-40  oxy-margin-bottom-20">
                    Rekomendasi Produk
                </h2>

                <div class="oxy-divider oxy-divider--center">
                     <div class="oxy-divider__border"></div>
                </div>
            </div>
        </div>

        @include('partials.sections.products4x2', ['products' => $relatedProducts])
    </div>
</div>

@include('partials.sections.shop-banners')

@endsection
