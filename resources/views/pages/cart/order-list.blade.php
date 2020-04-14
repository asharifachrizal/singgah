@extends('layouts.client-base')

@section('title')
@endsection

@section('breadcumb')
<section id="page-title" class="page-title-parallax page-title-dark" style="background-image: url('{{ asset('canvas/images/parallax/8.jpg') }}'); background-size: cover; padding: 120px 0;" data-bottom-top="background-position:0px 0px;" data-top-bottom="background-position:0px -300px;">

    <div class="container clearfix">
        <h1>My Order</h1>
        
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">List</a></li>
            
        </ol>
    </div>

</section>
@endsection

@section('content')
<div class="content-wrap">
    <div class="container clearfix">
        <div class="table-responsive">
            <table class="table cart">
                <thead>
                    <tr>                        
                        
                        <th class="cart-product-name">Order Id</th>                                                
                        <th class="cart-product-name">Status</th>                        
                        <th class="cart-product-name">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="cart_item">
                        
                        <td class="cart-product-name">
                            <a>13456</a>
                        </td>                        
                        
                        <td class="cart-product-name">
                            <a>Status</a>
                        </td>                        
                        
                        <td class="cart-product-name">
                            <a href="{{ route('order.detail')}}" class="add" title="See Detail"><i class="icon-eye"></i></a>                            
                        </td>
                        
                    </tr>
                    
                    
                    
                </tbody>

            </table>
        </div>

       
    </div>
</div>
@endsection