@extends('layouts.cms-base')
@section('cmscontent')
<!-- Bread crumb and right sidebar toggle -->
<div class="row page-titles">
    <div class="col-md-5 col-8 align-self-center">
        <h3 class="text-themecolor m-b-0 m-t-0">Dashboard</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
    </div>   
</div>
<!-- End Bread crumb and right sidebar toggle -->  
                
<!-- ============================================================== -->
<!-- Start Page Content -->
<!-- ============================================================== -->
<div class="row">
    <!-- Column -->
    <div class="col-lg-3 col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="d-flex flex-row">
                    <div class="round round-lg align-self-center round-info"><i class="ti-wallet"></i></div>
                    <div class="m-l-10 align-self-center">
                        <h3 class="m-b-0 font-light">{{$totalRevenue}}</h3>
                        <h5 class="text-muted m-b-0">Total Revenue</h5></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Column -->
    <!-- Column -->
    <div class="col-lg-3 col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="d-flex flex-row">
                    <div class="round round-lg align-self-center round-warning"><i class="mdi mdi-cellphone-link"></i></div>
                    <div class="m-l-10 align-self-center">
                        <h3 class="m-b-0 font-lgiht">{{$totalUsers}}</h3>
                        <h5 class="text-muted m-b-0">Customer Registered</h5></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Column -->
    <!-- Column -->
    <!-- <div class="col-lg-3 col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="d-flex flex-row">
                    <div class="round round-lg align-self-center round-primary"><i class="mdi mdi-cart-outline"></i></div>
                    <div class="m-l-10 align-self-center">
                        <h3 class="m-b-0 font-lgiht">195</h3>
                        <h5 class="text-muted m-b-0">Ordered Product</h5></div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Column -->
    <!-- Column -->
    <!-- <div class="col-lg-3 col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="d-flex flex-row">
                    <div class="round round-lg align-self-center round-danger"><i class="mdi mdi-bullseye"></i></div>
                    <div class="m-l-10 align-self-center">
                        <h3 class="m-b-0 font-lgiht">$687</h3>
                        <h5 class="text-muted m-b-0">Ad. Expense</h5></div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Column -->
</div>
<!-- ============================================================== -->
<!-- End PAge Content -->
<!-- ============================================================== -->

@endsection




        