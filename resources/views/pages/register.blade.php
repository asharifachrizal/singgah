
@extends('layouts.mk')

@section('title')
Jasa Desain | Singgah
@endsection

@section('content')
<!-- breadcrumb -->
<div class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="page-title">
                    <h2>Register</h2></div>
            </div>
            <div class="col-sm-6">
                <nav aria-label="breadcrumb" class="theme-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Beranda</a></li>
                        <li class="breadcrumb-item active">Register</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb End -->
<!-- Register -->
<section class="register-page section-b-space">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3>create account</h3>
                <div class="theme-card">
                    <form class="theme-form">
                        <div class="form-row">
                            <div class="col-md-6">
                                <label for="email">Name</label>
                                <input type="text" class="form-control" id="fname" placeholder="Name"
                                    required="">
                            </div>
                            <div class="col-md-6">
                                <label for="review">Gender</label>
                                <div class="form-check">
                                    <label class="custom-control custom-radio">
                                        <input class="custom-control-input" value="M" name="gender" type="radio">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description"> <i class="fa fa-male"></i> Laki-Laki</span>
                                    </label>
                                    <label class="custom-control custom-radio">
                                        <input class="custom-control-input" value="F" name="gender" type="radio">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description"> <i class="fa fa-female"></i> Perempuan</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6">
                                <label for="email">email</label>
                                <input type="text" class="form-control" id="email" placeholder="Email" required="">
                            </div>
                            <div class="col-md-6">
                                <label for="review">Password</label>
                                <input type="password" class="form-control" id="review"
                                    placeholder="Enter your password" required="">
                            </div><a href="#" class="btn btn-solid">create Account</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Register End-->
@endsection

