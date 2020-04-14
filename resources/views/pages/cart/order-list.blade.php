@extends('layouts.client-base')

@section('title')
@endsection

@section('breadcumb')
<section id="page-title" class="page-title-parallax page-title-dark" style="background-image: url('{{ asset('canvas/images/parallax/8.jpg') }}'); background-size: cover; padding: 120px 0;" data-bottom-top="background-position:0px 0px;" data-top-bottom="background-position:0px -300px;">

    <div class="container clearfix">
        <h1>Order List</h1>
        
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
                        <th class="cart-product-remove">&nbsp;</th>
                        
                        <th class="cart-product-thumbnail">Produk</th>
                        <th class="cart-product-name">Category</th>
                        
                        <th class="cart-product-quantity">Quantity</th>
                        <th class="cart-product-subtotal">Total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="cart_item">
                        <td class="cart-product">
                            <a href="#" class="remove" title="Remove this item"><i class="icon-trash2"></i></a>
                            <a href="#" class="update" title="Update this item" style="margin-left: 10px"><i class="icon-file21"></i></a>
                        </td>

                        <td class="cart-product-thumbnail">
                            <a href="#"><img width="64" height="64" src="{{ asset('canvas/images/shop/thumbs/small/shoes-2.jpg') }}" alt="Checked Canvas Shoes"></a>
                        </td>

                        <td class="cart-product-name">
                            <a href="#">Banner</a>
                        </td>

                        <td class="cart-product-quantity">
                            <div class="quantity clearfix">
                                <input type="button" value="-" class="minus">
                                <input type="text" name="quantity" value="2" class="qty" />
                                <input type="button" value="+" class="plus">
                            </div>
                        </td>

                        <td class="cart-product-subtotal">
                            <span class="amount">$39.98</span>
                        </td>
                    </tr>
                    <tr class="cart_item">
                        <td class="cart-product">
                            <a href="#" class="remove" title="Remove this item"><i class="icon-trash2"></i></a>
                            <a href="#" class="update" title="Update this item" style="margin-left: 10px"><i class="icon-file21"></i></a>
                        </td>

                        <td class="cart-product-thumbnail">
                            <a href="#"><img width="64" height="64" src="{{ asset('canvas/images/shop/thumbs/small/shoes-2.jpg') }}" alt="Checked Canvas Shoes"></a>
                        </td>

                        <td class="cart-product-name">
                            <a href="#">Baliho</a>
                        </td>

                        

                        <td class="cart-product-quantity">
                            <div class="quantity clearfix">
                                <input type="button" value="-" class="minus">
                                <input type="text" name="quantity" value="1" class="qty" />
                                <input type="button" value="+" class="plus">
                            </div>
                        </td>

                        <td class="cart-product-subtotal">
                            <span class="amount">$24.99</span>
                        </td>
                    </tr>
                    <tr class="cart_item">
                        <td class="cart-product">
                            <a href="#" class="remove" title="Remove this item"><i class="icon-trash2"></i></a>
                            <a href="#" class="update" title="Update this item" style="margin-left: 10px"><i class="icon-file21"></i></a>
                        </td>

                        <td class="cart-product-thumbnail">
                            <a href="#"><img width="64" height="64" src="{{ asset('canvas/images/shop/thumbs/small/shoes-2.jpg') }}" alt="Pink Printed Dress"></a>
                        </td>

                        <td class="cart-product-name">
                            <a href="#">Konten IG</a>
                        </td>

                        

                        <td class="cart-product-quantity">
                            <div class="quantity clearfix">
                                <input type="button" value="-" class="minus">
                                <input type="text" name="quantity" value="3" class="qty" />
                                <input type="button" value="+" class="plus">
                            </div>
                        </td>

                        <td class="cart-product-subtotal">
                            <span class="amount">$41.97</span>
                        </td>
                    </tr>
                    <tr class="cart_item">
                        <td colspan="6">
                            <div class="row clearfix">
                                
                                <div class="col-lg-12 col-12 nopadding">
                                    <a href="#" class="button button-3d nomargin fright">Update Cart</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>

            </table>
        </div>
    </div>
</div>
@endsection