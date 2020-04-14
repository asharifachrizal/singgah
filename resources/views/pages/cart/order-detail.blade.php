@extends('layouts.client-base')


@section('title')
@endsection

@section('breadcumb')
<section id="page-title" class="page-title-parallax page-title-dark" style="background-image: url('{{ asset('canvas/images/parallax/8.jpg') }}'); background-size: cover; padding: 120px 0;" data-bottom-top="background-position:0px 0px;" data-top-bottom="background-position:0px -300px;">

    <div class="container clearfix">
        <h1>Order</h1>
        
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Order</a></li>
            <li class="breadcrumb-item"><a href="#">Order</a></li>
            
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
                        <th class="cart-product-remove">No.</th>
                        <th class="cart-product-thumbnail">Produk</th>
                        <th class="cart-product-name">Category</th>                                                
                        <th class="cart-product-name">Price</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="cart_item">
                        
                        <td class="cart-product-name">
                            <a >1</a>
                        </td>

                        <td class="cart-product-name">
                            <a >Poster</a>
                        </td>

                        <td class="cart-product-name">
                            <a>Non-Production</a>
                        </td>  
                        
                        <td class="cart-product-name">
                            <a>Rp. 50,000</a>
                        </td>  

                        <td class="cart-product-subtotal">
                            <!-- <a href="#" class="add" title="Edit this item"><i class="icon-pencil"></i></a>
                            <a href="#" class="remove" title="Remove this item"><i class="icon-trash2"></i></a> -->
                        </td>
                    </tr>
                    
                    
                </tbody>

            </table>
        </div>

         <!-- Invoice -->
         <div class="row">
            <div class="col-md-12">
                <div class="card card-body printableArea">
                    <h3><b>INVOICE</b> <span class="pull-right">#5669626</span></h3>
                    <hr>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="pull-left">
                                <address>
                                    <h3> &nbsp;<b class="text-danger">Singgah</b></h3>
                                    <p class="text-muted m-l-5">E 104, Dharti-2,
                                        <br/> Nr' Viswakarma Temple,
                                        <br/> Talaja Road,
                                        <br/> Bhavnagar - 364002</p>
                                </address>
                            </div>
                            <div class="pull-right text-right">
                                <address>
                                    <h3>To,</h3>
                                    <h4 class="font-bold">Customer,</h4>
                                    <p class="text-muted m-l-30">customer@email.com,
                                        <br/> address,
                                        <br/> city,
                                        <br/> +62 123465798</p>
                                    <p class="m-t-30"><b>Invoice Date :</b> <i class="fa fa-calendar"></i> 23rd Jan 2017</p>
                                    <p><b>Due Date :</b> <i class="fa fa-calendar"></i> 25th Jan 2017</p>
                                </address>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="table-responsive m-t-40" style="clear: both;">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th class="text-center">#</th>
                                            <th>Description</th>
                                            <th class="text-right">Quantity</th>
                                            <th class="text-right">Unit Cost</th>
                                            <th class="text-right">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center">1</td>
                                            <td>Milk Powder</td>
                                            <td class="text-right">2 </td>
                                            <td class="text-right"> $24 </td>
                                            <td class="text-right"> $48 </td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="pull-right m-t-30 text-right">
                                <p>Sub - Total amount: $13,848</p>
                                <p>vat (10%) : $138 </p>
                                <hr>
                                <h3><b>Total :</b> $13,986</h3>
                            </div>
                            <div class="clearfix"></div>
                            <hr>
                            <div class="text-right">
                                <button class="btn btn-danger" type="submit"> Reject Invoice </button>
                                <button class="btn btn-info" type="submit"> Proceed to Checkout </button>                        
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection