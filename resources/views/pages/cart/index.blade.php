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
         <h1 class="oxy-color-light mdl-typography--display-1 mdl-typography--font-thin oxy-margin-top-100 oxy-margin-bottom-100 ">Cart</h1>
        </div>
    </div>
</div>

<div class="oxy-section">
    <div class="oxy-section__content">

        <div class="mdl-grid mdl-grid--no-fullwidth oxy-margin-top-40 ">

            <div class="mdl-cell mdl-cell--12-col">
                <table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp oxy-full-width oxy-data-table oxy-data-table--center oxy-data-table--middle" >
                    <thead>
                        <tr>
                            <th> </th>
                            <th> </th>
                            <th>Produk</th>
                            <th>Harga</th>
                            <th>Jumlah</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($carts as $row)
                        <tr>
                            <td>
                                <a href="#" title="Remove this item" class="mdl-button mdl-js-button mdl-button--accent mdl-button--icon"><i class="material-icons">close</i></a>
                            </td>
                            <td>
                                <a href="#">
                                    <img width="60" height="60" src="{{ asset('storage/' . $row->product->productImage->where('type', '1')->first()->img_path) }}" alt="image">
                                </a>
                            </td>
                            <td>
                                <a href="#">{{ $row->product->name }}</a>
                            </td>
                            <td>
                                {{ $row->product->priceDisplay }}
                            </td>
                            <td>
                                <div class="oxy-quantity">
                                    <input type="button" value="-">
                                    <div class="mdl-textfield mdl-js-textfield">
                                        <input type="number" step="1" min="0" name="cart" value={{ $row->quantity }} title="Qty" class="mdl-textfield__input" id="q1">
                                        <label class="mdl-textfield__label" for="q1"></label>
                                    </div>
                                    <input type="button" value="+">
                                </div>
                            </td>
                            <td>
                                <strong>{{ $row->price_subtotal_display }}</strong>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div class="mdl-grid mdl-grid--no-fullwidth oxy-margin-bottom-20">
            <div class="mdl-cell mdl-cell--3-col mdl-cell--8-col-tablet mdl-cell--8-col-phone mdl-cell--middle" >
                {{-- <div class="mdl-textfield mdl-js-textfield mdl-textfield--full-width">
                    <input class="mdl-textfield__input" type="text" id="coupon"/>
                    <label class="mdl-textfield__label" for="coupon">Coupon Code</label>
                </div> --}}
            </div>
            <div class="mdl-cell mdl-cell--2-col mdl-cell--8-col-tablet mdl-cell--8-col-phone mdl-cell--middle">
                {{-- <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent oxy-full-width">
                  Apply Coupon
                </button> --}}
            </div>
            <div class="mdl-cell mdl-cell--3-col mdl-cell--8-col-tablet mdl-cell--8-col-phone mdl-cell--middle">
            </div>
            <div class="mdl-cell mdl-cell--2-col mdl-cell--4-col-tablet mdl-cell--4-col-phone mdl-cell--middle">
                <!-- Accent-colored raised button with ripple -->
                <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent oxy-full-width">
                  Update Keranjang
                </button>
            </div>
            <div class="mdl-cell mdl-cell--2-col mdl-cell--4-col-tablet mdl-cell--4-col-phone mdl-cell--middle">
                <!-- Accent-colored raised button with ripple -->
                <a class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--primary oxy-full-width" href="{{ route('cart.checkout') }}">
                  Pembayaran
                </a>
            </div>
        </div>

        <div class="mdl-grid mdl-grid--no-fullwidth oxy-margin-bottom-40">
            <div class="mdl-cell mdl-cell--8-col mdl-cell--8-col-tablet mdl-cell--8-col-phone mdl-cell--middle" >
            </div>
            <div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet mdl-cell--8-col-phone mdl-cell--middle" >
                <table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp oxy-full-width oxy-data-table oxy-data-table--center oxy-data-table--middle">
                    <thead>
                    <tr>
                        <th colspan=2>
                            Total Keranjang
                        </th>
                    </tr>
                    <tbody>
                        <tr>
                            <td class="mdl-data-table__cell--non-numeric">Subtotal Keranjang</td>
                            <td>Rp. {{ number_format($totalCart, 0, ',', '.') }}</td>
                        </tr>
                        <tr>
                            <td class="mdl-data-table__cell--non-numeric">Biaya Pengiriman
                            </td>
                            <td>Rp. 15.000</td>
                        </tr>
                        <tr>
                            <td class="mdl-data-table__cell--non-numeric">
                                <strong>Total</strong>
                            </td>
                            <td>
                                <strong>Rp. {{ number_format($totalCart+15000, 0, ',', '.') }}</strong>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@include('partials.sections.shop-signup')

@endsection