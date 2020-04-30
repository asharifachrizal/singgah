<style>
    /* 
    ##Device = Desktops
    ##Screen = 1281px to higher resolution desktops
    */

    @media (min-width: 1281px) {
        #table-inv-header {
            margin-left: 4%;
            font-size: 12pt;
            color: #0f4ca4;
        }
        #right-header #h1-header{
            font-size: 54px;
        }

        #right-header #h6-header {
            font-size: 18px;
        }
        #space-content-inv {
            min-height: 270px;
            width: 98%;
        }
    
    
    }

    /* 
    ##Device = Laptops, Desktops
    ##Screen = B/w 1025px to 1280px
    */

    @media (min-width: 1025px) and (max-width: 1280px) {
        #table-inv-header {
            margin-left: 4%;
            font-size: 12pt;
            color: #0f4ca4;
        }
        #right-header #h1-header {
            font-size: 54px;
        }
        #right-header #h6-header {
            font-size: 18pt;
        }
        #space-content-inv {
            min-height: 270px;
            width: 98%;
        }
    }

    /* 
    ##Device = Tablets, Ipads (portrait)
    ##Screen = B/w 768px to 1024px
    */

    @media (min-width: 768px) and (max-width: 1024px) {
        #table-inv-header {
            margin-left: 4%;
            font-size: 9pt;
            color: #0f4ca4;
        }

        #right-header #h1-header {
            font-size: 24px;
        }

        #right-header #h6-header {
            font-size: 9pt;
        }
        #space-content-inv {
            min-height: 270px;
            width: 98%;
        }
    
    }

    /* 
    ##Device = Tablets, Ipads (landscape)
    ##Screen = B/w 768px to 1024px
    */

    @media (min-width: 768px) and (max-width: 1024px) and (orientation: landscape) {
        #table-inv-header {
            margin-left: 4%;
            font-size: 9pt;
            color: #0f4ca4;
        }
        #right-header #h1-header{
            font-size: 24px;
        }

        #right-header #h6-header {
            font-size: 9pt;
        }

        #space-content-inv {
            min-height: 270px;
            width: 98%;
        }
   
    
    }

    /* 
    ##Device = Low Resolution Tablets, Mobiles (Landscape)
    ##Screen = B/w 481px to 767px
    */

    @media (min-width: 481px) and (max-width: 767px) {
        #table-inv-header {
            margin-left: 3%;
            font-size: 5pt;
            color: #0f4ca4;
        }
        #right-header #h1-header {
            font-size: 16px;
        }

        #right-header #h6-header {
            font-size: 6px;
        }

        #space-content-inv {
            min-height: 140px;
            width: 90%;
        }
  
    
    }

    /* 
    ##Device = Most of the Smartphones Mobiles (Portrait)
    ##Screen = B/w 320px to 479px
    */

    @media (min-width: 320px) and (max-width: 480px) {
        #table-inv-header {
            margin-left: 0%;
            font-size: 4pt;
            color: #0f4ca4;
        }
        #right-header #h1-header {
            font-size: 16px;
        }

        #right-header #h6-header {
            font-size: 6px;
        }

        #space-content-inv {
            min-height: 140px;
            width: 90%;
        }
    
    }
</style>

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
        
        @if($carts[0]->invoice->status > 1)  
        <div class="row">
            <div class="col-md-12">
                <div class="card ">
                    <a href="{{ $carts[0]->invoice->outputURL}}" target="_blank" id="openResult" class="btn waves-effect waves-light btn-success">Open Result Files</a>                    
                </div>
            </div>
        </div>
        @endif

         <!-- Invoice -->
        @if($carts[0]->invoice->status > 0)                 
        <div class="row" >
            <div class="col-md-12">
                <div class="card card-body " id="printableArea">
                    <div class="row" style="color: #0f4ca4">
                        <div class="col-md-12 col-lg-12">
                            <div class="pull-rigth">
                                <table style="width: 100%">
                                    <tr>
                                        <td style="width: 60%; ">
                                            <img  src="/singgah/logos/logo-0p.png" alt="" style="width: 20%; ">
                                            <img src="/singgah/header-invoice-2.png" style="width: 60%; margin-left: 2%">
                                            <div class="pull-right" style="width: 75%; height: 1px; background-color: black;">
                                            </div>
                                        </td>
                                        <td  style="width: 40%">
                                            <div class="pull-right">
                                                <img class="pull-right" src="/singgah/header-invoice.png" alt="" style="width: 85%">
                                            </div>
                                        </td>
                                    </tr>
                                    
                                </table>
                            </div>
                            <div class="col-md-12 col-lg-12">
                                <table style="width: 100%; " >
                                    <tr>
                                        <td style="width: 50%; ">
                                            <div style="margin-top: 15px;">
                                                <table id="table-inv-header">
                                                    <tr>
                                                        <td>Client</td>
                                                        <td> :</td>
                                                        <td> {{ $carts[0]->user->full_name }} </td>
                                                    </tr>                                            
                                                    <tr>
                                                        <td>Contact</td>
                                                        <td> :</td>
                                                        <td> {{ $carts[0]->user->phone_number }} </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Address</td>
                                                        <td> :</td>
                                                        <td> {{ $carts[0]->user->address }} </td>                                                                                                                
                                                    </tr>
                                                    
                                                </table>
                                            </div>
                                        </td>
                                        <td style="width: 50%; ">
                                            @if($carts[0]->invoice->status == 1)                                                  
                                                <span class="label label-warning pull-right">WAITING PAYMENT</span> 
                                            @elseif($carts[0]->invoice->status == 2)                                                  
                                                <span class="label label-green pull-right">PAID</span>                                             
                                            @else
                                                <span class="label label-danger pull-right">CANCELED</span>                                               
                                            @endif
                                            <div style="width: 100%; " id="right-header" class="pull-right">
                                                <strong id="h1-header" class="pull-right" style="color: #0f4ca4">
                                                    <b class="pull-right">INVOICE</b>                                                    
                                                    <br>
                                                    <strong id="h6-header" class="pull-right" style="color: #0f4ca4">
                                                        #{{ $carts[0]->invoice->code }} <br><small class="pull-right">{{ $carts[0]->invoice->created_at }}</small>
                                                    </strong>    
                                                </strong>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-12 col-lg-12">
                            <div style="margin-left: 10px; margin-right: 10px; background-color: #ffffff;" id="space-content-inv" >
                                <div class="col-md-12">
                                    <div class="table-responsive m-t-40" style="clear: both;">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">No</th>
                                                    <th>Product</th>
                                                    <th class="text-right">Quantity</th>
                                                    <th class="text-right">Unit Cost</th>
                                                    <th class="text-right">Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($carts as $index => $row)
                                                <tr>
                                                    <td class="text-center">{{ $index + 1 }}</td>
                                                    <td>{{ $row->product->value }}</td>
                                                    <td class="text-right">{{ $row->quantity }} </td>
                                                    <td class="text-right"> {{ $row->price }} </td>
                                                    <td class="text-right"> {{ $row->price * $row->quantity  }} </td>
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
                                    
                                    
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="col-md-12 col-lg-12">
                        </div>
                        <div class="col-md-12 col-lg-12">
                            <img src="/singgah/footer-inv-01.jpeg" alt="" style="width: 100%; margin-top: 20px;">
                        </div>
                    </div>
                    
                    
                </div>
                
                <div class="text-right">
                    @if($carts[0]->invoice->status == 1)
                    <form action="{{ route('invoice.reject', $carts[0]->invoice->id)}}" method="post">
                        <input hidden type="text" value="{{$carts[0]->invoice->id}}" name="invoice_id">                                
                        <button class="btn btn-danger" type="submit"> Cancel Invoice </button>
                        <!-- <button class="btn btn-info" type="submit"> Proceed to Checkout </button> -->
                        
                    </form>
                    @endif
                    <!-- <button onclick="doPrint()" id="print" class="btn btn-default btn-outline" type="button"> <span><i class="fa fa-print"></i> Print</span> </button> -->
                </div>
                
            </div>
        </div>
        @else
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-body ">
                        <h3 center><b>WAITING INVOICE</b></h3>                        
                    </div>
                </div>
            </div>
        @endif
    </div>
</div>

<script src="{{ asset('canvas/js/jquery.js') }}"></script>
<script src="{{ asset('material/js/jquery.PrintArea.js') }}" type="text/JavaScript"></script>
<script>

    

    function doPrint(){
        var mode = 'iframe'; //popup
        var close = mode == "popup";
        var options = {
            mode: mode,
            popClose: close
        };
        $("#printableArea").printArea(options);
    }

</script>

@endsection


