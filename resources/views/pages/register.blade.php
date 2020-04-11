
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
                    <form class="theme-form" method="POST" action="{{ route('register.store') }}">
                        <div class="form-row">
                            <div class="col-md-6">
                                <label for="email">Full Name</label>
                                <input type="text" class="form-control" id="fname" placeholder="Full Name" name="full_name" required="">
                            </div>
                            <div class="col-md-6">
                                <label for="email">email</label>
                                <input type="text" class="form-control" id="email" placeholder="Email" name="email" required="">
                            </div>
                        </div>
                        <div class="form-row">
                                <label for="email">Address</label>
                                <input type="text" class="form-control" id="fname" name="address" placeholder="JL...."
                                    required="">
                        </div>
                        <div class="form-row">
                            <div class="col-md-6">
                                <label for="email">City</label>
                                <input type="text" class="form-control" id="fname" name="city" placeholder="Bandung"
                                    required="">
                            </div>
                            <div class="col-md-6">
                                <label for="email">Phone Number</label>
                                <input type="text" class="form-control" id="email" name="phone_number" placeholder="08xxxx" required="">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label><strong>Password</strong> <span class="text-danger">*</span></label>
                                    <input type="password" name="password" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label><strong>Konfirmasi Password</strong> <span class="text-danger">*</span></label>
                                    <input type="password" name="password-confirmation" class="form-control">
                                </div>
                            </div>
                            <div class="form-action">
                                <button type="submit"  class="btn btn-solid">create Account</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Register End-->
@endsection

