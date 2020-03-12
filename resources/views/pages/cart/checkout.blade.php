@extends('layouts.mk')

@section('title')
Jasa Desain | Singgah  
@endsection

@section('content')

<!-- breadcrumb start -->
<div class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="page-title">
                    <h2>Pembayaran</h2></div>
            </div>
            <div class="col-sm-6">
                <nav aria-label="breadcrumb" class="theme-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Beranda</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Pembayaran</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb End -->


<!-- section start -->
<section class="section-b-space">
    <div class="container">
        <div class="checkout-page">
            <div class="checkout-form">
                <form>
                    <div class="row">
                        <div class="col-lg-6 col-sm-12 col-xs-12">
                            <div class="checkout-title">
                                <h3>Detail Pembayaran</h3></div>
                            <div class="row check-out">
                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <div class="field-label">Nama Lengkap</div>
                                    <input type="text" name="field-name" value="" placeholder="">
                                </div>
                                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                    <div class="field-label">Nomor Hp</div>
                                    <input type="text" name="field-name" value="" placeholder="">
                                </div>
                                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                    <div class="field-label">Email</div>
                                    <input type="text" name="field-name" value="" placeholder="">
                                </div>
                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <div class="field-label">Alamat</div>
                                    <input type="text" name="field-name" value="" placeholder="Street address">
                                </div>
                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <div class="field-label">Kota</div>
                                    <input type="text" name="field-name" value="" placeholder="">
                                </div>
                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <div class="field-label">Negara</div>
                                    <select>
                                        <option>Indonesia</option>
                                        <option>South Africa</option>
                                        <option>United State</option>
                                        <option>Australia</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-12 col-sm-6 col-xs-12">
                                    <div class="field-label">Kode Pos</div>
                                    <input type="text" name="field-name" value="" placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12 col-xs-12">
                            <div class="checkout-details">
                                <div class="order-box">
                                    <div class="title-box">
                                        <div>Produk <span>Total</span></div>
                                    </div>
                                    <ul class="qty">
                                        @foreach ($carts as $row)
                                        <li>{{ $row->product->name }} × {{ $row->quantity}} <span>{{ $row->product->priceDisplay }}</span></li>
                                        @endforeach
                                    </ul>
                                    {{-- <ul class="sub-total">
                                        <li>Subtotal <span class="count">Rp. 105K</span></li>
                                        <li>Pengiriman
                                            <div class="shipping">
                                                <div class="shopping-option">
                                                    <input type="checkbox" name="free-shipping" id="free-shipping">
                                                    <label for="free-shipping">Gratis</label>
                                                </div>
                                                <div class="shopping-option">
                                                    <input type="checkbox" name="local-pickup" id="local-pickup">
                                                    <label for="local-pickup">Local Pickup</label>
                                                </div>
                                            </div>
                                        </li>
                                    </ul> --}}
                                    <ul class="total">
                                        <li>Total <span class="count">Rp 90K</span></li>
                                    </ul>
                                </div>
                                <div class="payment-box">
                                    <div class="upper-box">
                                        <div class="payment-options">
                                            <ul>
                                                <li>
                                                    <div class="radio-option">
                                                        <input type="radio" name="payment-group" id="payment-2">
                                                        <label for="payment-2">Cash On Delivery<span class="small-text">Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</span></label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="radio-option paypal">
                                                        <input type="radio" name="payment-group" id="payment-3">
                                                        <label for="payment-3">Transfer<span class="image"><img src="{{ asset('mk/images/paypal.png') }}" alt=""></span></label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="text-right"><a href="#" class="btn-solid btn">Buat Pembayaran</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- section end -->

@endsection