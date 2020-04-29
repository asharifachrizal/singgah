<link href="{{ asset('material/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
<!-- Custom CSS -->
<link href="{{ asset('material/css/style.css') }}" rel="stylesheet">
<!--Morris CSS -->
<link href="{{ asset('material/plugins/morrisjs/morris.css') }}" rel="stylesheet">
<!-- You can change the theme colors from here -->
<link href="{{ asset('material/css/colors/blue.css') }}" id="theme" rel="stylesheet">
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


@extends('layouts.cms-base')
@section('cmscontent')
<!-- Bread crumb and right sidebar toggle -->
<div class="row page-titles">
    <div class="col-md-5 col-8 align-self-center">
        <h3 class="text-themecolor m-b-0 m-t-0">Invoice</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Invoice</a></li>
            <li class="breadcrumb-item active">Detail</li>
        </ol>
    </div>
</div>
<!-- End Bread crumb and right sidebar toggle -->

<!-- Start Invoice Content -->
<div class="row" >
    <div class="col-md-12">
        <div class="card card-body printableArea">
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
                                        </table>
                                    </div>
                                </td>
                                <td style="width: 50%; ">
                                    <div style="width: 100%; " id="right-header" class="pull-right">
                                        <strong id="h1-header" class="pull-right" style="color: #0f4ca4">
                                            <b class="pull-right">INVOICE</b>
                                            <br>
                                            <strong id="h6-header" class="pull-right" style="color: #0f4ca4">
                                               #{{ $carts[0]->invoice->id }} <br><small class="pull-right">{{ $carts[0]->invoice->created_at }}</small>
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
                            <div class="text-right">                                
                                @if($carts[0]->invoice->status == 0)                
                                    <form action="{{ route('cms.invoice.update', $carts[0]->invoice->id)}}" method="post">
                                        <input hidden type="text" value="{{$carts[0]->invoice->id}}" name="invoice_id">
                                        <button class="btn btn-danger" type="submit"> Send Invoice to Customer </button>    
                                    </form>
                                        <span class="sl-date">You Can't Change Price after Send Invoice to Customer</span>
                                @endif
                            </div>
                            
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
    </div>
</div>
<!-- End Invoice Content -->
@endsection






