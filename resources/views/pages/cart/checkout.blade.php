@extends('layouts.app')

@section('title')
Jasa Desain | Singgah  
@endsection

@section('content')

<div class="oxy-section">
    <div class="oxy-section__background oxy-background-parallax">
        <img src="{{ asset('fab/images/backgrounds/bg26-notinclude.jpg') }}" alt="section background">
    </div>
    <div class="oxy-section__overlay oxy-section__overlay--gradient-from-top-30"></div>
    <div class="oxy-section__content">
        <div class="mdl-grid mdl-grid--no-fullwidth">
         <h1 class="oxy-color-light mdl-typography--display-1 mdl-typography--font-thin oxy-margin-top-100 oxy-margin-bottom-100 ">Checkout</h1>
        </div>
    </div>
</div>

<div class="oxy-section">
    <div class="oxy-section__content">
        <form action="#">
            <div class="mdl-grid mdl-grid--no-fullwidth oxy-margin-top-40 ">
                <div class="mdl-grid mdl-cell mdl-cell--7-col mdl-cell--6-col-tablet mdl-cell--4-col-phone oxy-margin-bottom-40">
                    <h2 class="mdl-cell mdl-cell--12-col mdl-cell--8-col-tablet mdl-cell--4-col-phone mdl-typography--headline  mdl-typography--font-light oxy-margin-bottom-0 oxy-margin-top-20">
                        Detail Pemesanan
                    </h2>

                    @include('partials.checkout-address')

                    {{-- <div id="create-account-details" class="mdl-cell mdl-cell--12-col">
                        <p class="mdl-typography--body-2">Create an account by entering a password below. If you are a returning customer please login at the top of the page.</p>
                        <div class="mdl-textfield mdl-textfield--full-width mdl-textfield--floating-label mdl-js-textfield">
                            <label class="mdl-textfield__label" for="email">Account Password</label>
                            <input class="mdl-textfield__input" type="password" id="password" />
                        </div>
                    </div>

                    <div class="mdl-cell mdl-cell--12-col mdl-cell--4-col-tablet mdl-cell-4-col-phone">
                        <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="shipping-address-check">
                          <input type="checkbox" id="shipping-address-check" class="mdl-checkbox__input"/>
                          <span class="mdl-checkbox__label">Different shipping Address</span>
                        </label>
                    </div>

                    <div id="shipping-address-details" class="mdl-cell mdl-cell--12-col">
                        {% include "partials/checkout-address.html" %}
                    </div> --}}
                </div>
                <div class="mdl-grid mdl-cell mdl-cell--1-col"></div>
                <div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet mdl-cell--4-col-phone">
                    <div class="mdl-card mdl-card mdl-shadow--2dp oxy-card-order oxy-margin-bottom-40">
                        <div class="mdl-card__title">
                            <h2 class="mdl-card__title-text">Pesanan Anda</h2>
                        </div>

                        <div class="oxy-card-order__summary oxy-data-table">
                            <table class="mdl-data-table mdl-js-data-table oxy-full-width oxy-card-order__summary-table">
                                <thead>
                                    <tr>
                                        <th>Produk</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($carts as $row)
                                    <tr>
                                        <td>{{ $row->product->name }} <strong>x {{ $row->quantity }}</strong></td>
                                        <td>{{ $row->price_subtotal_display }}</td>
                                    </tr>
                                    @endforeach
                                    
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td>Subtotal</td>
                                        <td>Rp. {{ number_format($totalCart, 0, ',', '.') }}</td>
                                    </tr>
                                    <tr>
                                        <td>Pengiriman</td>
                                        <td>Rp. 15.000</td>
                                    </tr>
                                    <tr>
                                        <td>Total</td>
                                        <td>Rp. {{ number_format($totalCart+15000, 0, ',', '.') }}</td>
                                    </tr>
                                </tfoot>
                            </table>

                            <div class="mdl-card__supporting-text">
                                <h2 class="mdl-typography--title mdl-typography--font-light">Metode Pembayaran</h2>
                                <p>
                                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="bank-transfer">
                                        <input type="radio" id="bank-transfer" class="mdl-radio__button" name="options" value="bank-transfer" checked />
                                        <span class="mdl-radio__label">Bank Transfer</span>
                                    </label>
                                </p>
                                <p>
                                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="credit-card">
                                        <input type="radio" id="credit-card" class="mdl-radio__button" name="options" value="credit-card"/>
                                        <span class="mdl-radio__label">Credit Card</span>
                                    </label>
                                </p>
                                <p>
                                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="pay-pal">
                                        <input type="radio" id="pay-pal" class="mdl-radio__button" name="options" value="pay-pal" />
                                        <span class="mdl-radio__label">PayPal</span>
                                    </label>
                                </p>
                            </div>
                        </div>
                        <div class="mdl-card__actions mdl-card--border mdl-typography--text-right">
                            <a class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored" href="{{ route('comingsoon') }}">
                              Pembayaran
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

@include('partials.sections.shop-signup')

@endsection