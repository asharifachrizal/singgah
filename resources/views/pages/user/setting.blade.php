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
                    <h2>Pengaturan</h2></div>
            </div>
            <div class="col-sm-6">
                <nav aria-label="breadcrumb" class="theme-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Beranda</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Pengaturan</li>
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
        <div class="row">
            <div class="col-lg-3">
                <div class="account-sidebar"><a class="popup-btn">Akun Saya</a></div>
                <div class="dashboard-left">
                    <div class="collection-mobile-back"><span class="filter-back"><i class="fa fa-angle-left" aria-hidden="true"></i> kembali</span></div>
                    <div class="block-content">
                        <ul>
                            <li class="active"><a href="#">Informasi Akun</a></li>
                            <li><a href="#">Alamat</a></li>
                            <li><a href="#">Pesanan Saya</a></li>
                            <li><a href="#">Langganan</a></li>
                            <li class="last"><a href="#">Logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="dashboard-right">
                    <div class="dashboard">
                        <div class="page-title">
                            <h2>Informasi Akun</h2></div>
                        <div class="box-account box-info">
                            <div class="box-head">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="box">
                                        <div class="box-title">
                                            <h3>Informas</h3><a href="#">Edit</a></div>
                                        <div class="box-content">
                                            <h6>MARK JECNO</h6>
                                            <h6>MARk-JECNO@gmail.com</h6>
                                            <h6><a href="#">Change Password</a></h6></div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="box">
                                        <div class="box-title">
                                            <h3>Newsletters</h3><a href="#">Edit</a></div>
                                        <div class="box-content">
                                            <p>You are currently not subscribed to any newsletter.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="box">
                                    <div class="box-title">
                                        <h3>Address Book</h3><a href="#">Manage Addresses</a></div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <h6>Default Billing Address</h6><address>You have not set a default billing address.<br><a href="#">Edit Address</a></address></div>
                                        <div class="col-sm-6">
                                            <h6>Default Shipping Address</h6><address>You have not set a default shipping address.<br><a href="#">Edit Address</a></address></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- section end -->
@endsection