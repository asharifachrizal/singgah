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
                    @foreach ($carts as $key=>$row)
                    <tr class="cart_item">
                        <td class="cart-product-name">
                            <a >{{$key+1}}</a>
                        </td>

                        <td class="cart-product-name">
                            <a >{{$row->product->value}}</a>
                        </td>

                        <td class="cart-product-name">
                            <a>{{$row->product->category->name}}</a>
                        </td>

                        <td class="cart-product-name">
                            @if($row->price)
                                <a>{{$row->price}}</a>
                            @else
                                <a>-</a>
                            @endif
                        </td>

                        <td class="cart-product-subtotal">
                            <!-- <a href="#" class="add" title="Edit this item"><i class="icon-pencil"></i></a>
                            <a href="#" class="remove" title="Remove this item"><i class="icon-trash2"></i></a> -->
                        </td>
                    </tr>
                    @endforeach

                </tbody>

            </table>
        </div>

         <!-- Invoice -->
        @if($carts[0]->invoice->status > 0)         
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-body printableArea">
                        <h3>
                            <b>INVOICE </b> 
                            @if($carts[0]->invoice->status == 1)  
                                <b class="text-info">SENT</b> 
                            @elseif($carts[0]->invoice->status == 2)
                                <b class="text-success">PAID</b> 
                            @elseif($carts[0]->invoice->status == 3)
                                <b class="text-danger">REJECTED</b> 
                            @endif
                            <span class="pull-right">#{{$carts[0]->invoice->id}}</span>
                        </h3>
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="pull-left">
                                    <address>
                                        <h3> &nbsp;<b class="text-info">Singgah</b></h3>
                                        <p class="text-muted m-l-5">Jalan Kemang 23,
                                            <br/> Mampang,
                                            <br/> Jakarta,
                                            <br/> Indonesia</p>
                                    </address>
                                </div>
                                <div class="pull-right text-right">
                                    <address>
                                        <h3>To,</h3>
                                        <h4 class="font-bold">{{ $carts[0]->user->full_name}},</h4>
                                        <p class="text-muted m-l-30">{{ $carts[0]->user->email}},
                                            <br/> {{ $carts[0]->user->address}},
                                            <br/> {{ $carts[0]->user->city}},
                                            <br/> {{ $carts[0]->user->phone_number}}</p>
                                            <p class="m-t-30"><b>Invoice Date :</b> <i class="fa fa-calendar"></i> {{$carts[0]->invoice->updated_at}}</p>
                                            <!-- <p><b>Due Date :</b> <i class="fa fa-calendar"></i> 25th Jan 2017</p> -->
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
                                        @foreach ($carts as $key=>$row)
                                            <tr>
                                                <td class="text-center">{{$key + 1}}</td>
                                                <td>{{$row->product->value}}</td>
                                                <td class="text-right">{{$row->quantity}} </td>
                                                <td class="text-right"> {{$row->price}} </td>
                                                @php                                                                                                                                                            
                                                    $price = $row->price * $row->quantity;                                                    
                                                @endphp
                                                <td class="text-right"> {{$price}} </td>
                                            </tr>
                                        @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="pull-right m-t-30 text-right">
                                    <!-- <p>Sub - Total amount: $13,848</p>
                                    <p>vat (10%) : $138 </p> -->
                                    <hr>                                    
                                    @php   
                                        $totalPrice = 0;
                                        foreach ($carts as &$row) {                                                                                                                                                         
                                            $totalPrice += $row->price * $row->quantity;                                                    
                                        }
                                    @endphp

                                    <h3><b>Total :</b> Rp. {{$totalPrice}}</h3>
                                </div>
                                <div class="clearfix"></div>
                                <hr>
                                <div class="text-right">
                                    @if($carts[0]->invoice->status == 1)
                                    <form action="{{ route('invoice.reject', $carts[0]->invoice->id)}}" method="post">
                                        <input hidden type="text" value="{{$carts[0]->invoice->id}}" name="invoice_id">                                
                                        <button class="btn btn-danger" type="submit"> Reject Invoice </button>
                                        <button class="btn btn-info" type="submit"> Proceed to Checkout </button>
                                    </form>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @else
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-body printableArea">
                        <h3 center><b>WAITING INVOICE</b></h3>                        
                    </div>
                </div>
            </div>
        @endif
    </div>
</div>


@endsection
