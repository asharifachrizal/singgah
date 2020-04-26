@extends('layouts.mk')


@section('content')

<!-- breadcrumb start -->
<div class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="page-title">
                    <h2>Produk</h2></div>
            </div>
            <div class="col-sm-6">
                <nav aria-label="breadcrumb" class="theme-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Beranda</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Produk</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb End -->


<!-- Produksi  -->
<div class="title1 section-t-space">
    <h4>Catalog</h4>
    <h2 class="title-inner1">Desain Produksi</h2>
</div>
<!--section start-->
<section class="collection section-b-space ratio_square ">
    <div class="container">
        <div class="row partition-collection">
            {{-- @foreach ($productNames as $row)
            <div class="col-lg-2 col-md-4">
                <div class="collection-block">
                    <div>
                        <img src="../mk/images/collection/1.jpg" class="img-fluid blur-up lazyload bg-img" alt="">
                    </div>
                </div>
            </div>
            @endforeach --}}
            <div class="product-dropdown-body">
                <div class="digital-add needs-validation">
                    <form method="POST" action="{{ route('product.detail')}}">
                        <div class="form-group">

                            <!-- <label class="col-form-label"><span>*</span>Produk</label> -->
                            <select name="product-list" class="custom-select" required="" >
                                {{-- style="box-shadow: 7px 6px 15px -10px black" --}}
                                @foreach ($products as $row)
                                <option value="{{$row->id}}">{{$row->name}}</option>
                                @endforeach
                            </select>

                        </div>
                        <div class="form-group-product">
                            <a href="" class="btn btn-primary" onclick="parentNode.submit(">Next Step</a>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</section>
    <!--Section ends-->
<!-- Production end -->


@endsection
