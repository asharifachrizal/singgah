@extends('layouts.client-base')


@section('title')
@endsection

@section('breadcumb')
<section id="page-title" class="page-title-parallax page-title-dark" style="background-image: url('{{ asset('canvas/images/parallax/8.jpg') }}'); background-size: cover; padding: 120px 0;" data-bottom-top="background-position:0px 0px;" data-top-bottom="background-position:0px -300px;">

    <div class="container clearfix">
        <h1>Cart</h1>

        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Cart</a></li>

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
                        <th class="cart-product-subtotal">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($carts as $key=>$row)
                    <tr class="cart_item">
                        <td class="cart-product-name">
                            <a >{{$key+1}}</a>
                        </td>

                        <td class="cart-product-name">
                            <a >{{$row->product->value}}</a>
                        </td>

                        <td class="#">
                            <a>{{$row->product->category->name}}</a>
                        </td>
                            <input type="hidden" name="id_cart" value="{{$row->id}}">
                        <td class="cart-product-subtotal">
                            <!-- <a href="#" class="add" title="Edit this item"><i class="icon-pencil"></i></a> -->
                            <a href="{{route('cart.delete',$row->id)}}" class="remove" title="Remove this item"><i class="icon-trash2"></i></a>
                        </td>
                    </tr>
                    @endforeach

                    @if (count($carts) > 0)
                    <tr class="cart_item">
                        <td colspan="6">
                            <div class="row clearfix">
                                <div class="col-lg-12 col-12 nopadding">
                                    <!-- <a href="shop.html" class="button button-3d notopmargin fright">Proceed to Checkout</a> -->
                                    <a href="#" onclick="$('#submitBtn').click()" class="button button-3d nomargin fright">Request Invoice</a>
                                </div>
                                <form action="{{ route('tambahOrder', Sentinel::getUser()->id) }}" method="POST" id="addOrder">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Brief Url</label>
                                        <input required type="text" name="brief" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Brief URL">
                                        <small id="emailHelp" class="form-text text-muted">Put Your brief on GDrive, and copy your brief link here!</small>
                                    </div>   
                                    <input type="submit" id="submitBtn" hidden>                        
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
