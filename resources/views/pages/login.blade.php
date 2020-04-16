
@extends('layouts.client-base')


@section('breadcumb')
<section id="page-title" class="page-title-parallax page-title-dark" style="background-image: url('{{ asset('canvas/images/parallax/7.jpg') }}'); background-size: cover; padding: 120px 0;" data-bottom-top="background-position:0px 0px;" data-top-bottom="background-position:0px -300px;">
    <div class="container clearfix">
        <h1>Login</h1>
        <!-- <span>Login. </span> -->
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Login</a></li>
            <li class="breadcrumb-item active" aria-current="page">Login</li>
        </ol>
    </div>
</section>
@endsection

@section('content')

<!--section start-->

<div class="content-wrap">

    <div class="container clearfix">

        <div class="accordion accordion-lg divcenter nobottommargin clearfix" style="max-width: 550px;">

            <div class="acctitle"><i class="acc-closed icon-lock3"></i><i class="acc-open icon-unlock"></i>Login to your Account</div>
            <div class="acc_content clearfix">
                <form class="nobottommargin" id="loginform" method="POST" action="{{ route('postLogin') }}">
                    <div class="col_full">
                        <label for="login-form-username">Email:</label>
                        <input type="text" id="login-form-username" name="email" value="" class="form-control" />
                    </div>

                    <div class="col_full">
                        <label for="login-form-password">Password:</label>
                        <input type="password" id="login-form-password" name="password" value="" class="form-control" />
                    </div>

                    <div class="col_full nobottommargin">
                        <button class="button button-3d button-black nomargin" value="login">Login</button>
                        <!-- <a href="#" class="fright">Forgot Password?</a> -->
                    </div>
                </form>
            </div>

            <div class="acctitle"><i class="acc-closed icon-user4"></i><i class="acc-open icon-ok-sign"></i>New Signup? Register for an Account</div>
            <div class="acc_content clearfix">
                <form id="register-form" name="register-form" class="nobottommargin" id="myForm" action="{{ route('register.store') }}" method="post">
                    <div class="col_full">
                        <label for="register-form-name">Email:</label>
                        <input type="text" id="register-form-name" name="email" value="" class="form-control" />
                    </div>
                    
                    <div class="col_full">
                        <label for="register-form-password">Choose Password:</label>
                        <input type="password" id="register-form-password" name="password" value="" class="form-control" />
                    </div>

                    <div class="col_full">
                        <label for="register-form-name">Full Name:</label>
                        <input type="text" id="register-form-name" name="full_name" value="" class="form-control" />
                    </div>

                    <div class="col_full">
                        <label for="register-form-name">Address:</label>
                        <input type="text" id="register-form-name" name="address" value="" class="form-control" />
                    </div>

                    <div class="col_full">
                        <label for="register-form-name">City:</label>
                        <input type="text" id="register-form-name" name="city" value="" class="form-control" />
                    </div>

                    <div class="col_full">
                        <label for="register-form-name">Phone Number:</label>
                        <input type="text" id="register-form-name" name="phone_number" value="" class="form-control" />
                    </div>

                    <div class="col_full nobottommargin">
                        <button class="button button-3d button-black nomargin" onclick="myFunction()" value="register">Register Now</button>
                    </div>
                </form>
            </div>

        </div>

    </div>

</div>

<!-- <div class="container">
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
</div> -->

<!--Section ends-->
@endsection

@section('script')
<script>
    function myFunction() {
        document.getElementById("myForm").submit();
    }
</script>
@endsection
