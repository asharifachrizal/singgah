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
                    <h2>Keranjang</h2></div>
            </div>
            <div class="col-sm-6">
                <nav aria-label="breadcrumb" class="theme-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Beranda</a></li>
                        <li class="breadcrumb-item active">Keranjang</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb End -->

<!--section start-->
<section class="cart-section section-b-space">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <table class="table cart-table table-responsive-xs">
                    <thead>
                    <tr class="table-head">
                        <th scope="col">Produk</th>
                        <th scope="col">Nama Item</th>
                        {{-- <th scope="col">Harga</th> --}}
                        <th scope="col">Qty</th>
                        <th scope="col">Aksi</th>
                        {{-- <th scope="col">Total</th> --}}
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($carts as $row)
                            <tr>
                                <td>
                                    <a href="#"><img src="{{ asset('uploads/' . $row->product->productImage->where('type', '1')->first()->img_path) }}" alt=""></a>
                                </td>
                                <td><a href="#">{{ $row->product->name }}</a>
                                    <div class="mobile-cart-content row">
                                        <div class="col-xs-3">
                                            <div class="qty-box">
                                                <div class="input-group">
                                                    <input type="text" name="quantity" class="form-control input-number" value="1">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-3">
                                            <h2 class="td-color">{{ $row->product->priceDisplay }}</h2></div>
                                        <div class="col-xs-3">
                                            <h2 class="td-color"><a href="#" class="icon"><i class="ti-close"></i></a></h2></div>
                                    </div>
                                </td>
                                {{-- <td>
                                    <h2>{{ $row->product->priceDisplay }}</h2></td> --}}
                                <td>
                                    <div class="qty-box">
                                        <div class="input-group">
                                            <input type="number" name="quantity" class="form-control input-number" value="1">
                                        </div>
                                    </div>
                                </td>
                                <td><a href="#" class="icon"><i class="ti-close"></i></a></td>
                                {{-- <td>
                                    <h2 class="td-color">{{ $row->price_subtotal_display }}</h2></td> --}}
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <table class="table cart-table table-responsive-md">
                    <tfoot>
                    <tr>
                        {{-- <td>Total :</td> --}}
                        <td>
                            {{-- <h2>Rp. 45K</h2> --}}
                        </td>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>
        <div class="row cart-buttons">
            <div class="col-6"><a href="{{ route('category') }}" class="btn btn-solid">Kembali Belanja</a></div>
            <div class="col-6"><a href="#" class="btn btn-solid">Send Order</a></div>
        </div>
    </div>
</section>
<!--section end-->

@endsection
