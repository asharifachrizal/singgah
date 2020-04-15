@extends('layouts.client-base')



@section('breadcumb')
<section id="page-title" class="page-title-parallax page-title-dark" style="background-image: url('{{ asset('canvas/images/parallax/8.jpg') }}'); background-size: cover; padding: 120px 0;" data-bottom-top="background-position:0px 0px;" data-top-bottom="background-position:0px -300px;">

    <div class="container clearfix">
        <h1>Order</h1>
        <span>Make your order here.</span>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Product</a></li>
            <li class="breadcrumb-item active" aria-current="page">Order</li>
        </ol>
    </div>

</section>
@endsection

@section('content')
<div class="content-wrap">

    <div class="container clearfix">
        
            <div class="col-lg-12 text-center">
                <h2>Order Information</h2>
                <h4>Choose category for your product</h4>
            </div>
            <div class="feature-box fbox-center fbox-effect nobottomborder" >
                <div class="fbox-icon">
                    <i class="icon-box"></i>
                </div>
                <h3>Desain Produksi</h3>
            </div>
    
            <div class="">
                <form class="row center my-auto">
                    
                    <div class="col-lg-12 category-form form-group">
                        <label for="exampleFormControlSelect1">Select category</label>
                        <select class="form-control " id="exampleFormControlSelect1">
                            <option>Banner</option>
                            <option>Baliho</option>
                            <option>Poster</option>
                        </select>
                    </div>
                </form>
            </div>
        
        
    </div>
</div>

@endsection