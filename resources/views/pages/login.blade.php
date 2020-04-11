
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
                    <h2>Akun</h2></div>
            </div>
            <div class="col-sm-6">
                <nav aria-label="breadcrumb" class="theme-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Beranda</a></li>
                        <li class="breadcrumb-item active">Akun</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb End -->


<!--section start-->
<section class="login-page section-b-space">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h3>Masuk</h3>
                <div class="theme-card">
                    <form class="theme-form" id="loginform" method="POST" action="{{ route('postLogin') }}">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" name="email" placeholder="Email" required="">
                        </div>
                        <div class="form-group">
                            <label for="review">Kata Sandi</label>
                            <input type="password" class="form-control" name="password" placeholder="Enter your password" required="">
                        </div>
                        <button type="submit" class="btn btn-solid">Masuk</button>
                    </form>
                </div>
            </div>
            <div class="col-lg-6 right-login">
                <h3>Pelanggan Baru?</h3>
                <div class="theme-card authentication-right">
                    <h6 class="title-font">Buat Akun</h6>
                    <p>Registrasi dengan mudah di toko kami dan dapatkan promo-promo dari produk kami. Gabung dan rasakan kemudahan bertransaksi. Dengan mendaftar, saya menyetujui syarat dan ketentuan serta kebijakan privasi.</p>
                    <br><br><br><br><br>
                    <a href="{{ route('register')}}" class="btn btn-solid">Buat Akun</a></div>
            </div>
        </div>
    </div>
</section>
<!--Section ends-->
@endsection
