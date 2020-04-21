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
                            <h4 class="font-bold">{{$carts[0]->invoice->user->full_name}},</h4>
                            <p class="text-muted m-l-30">{{$carts[0]->invoice->user->email}},
                                <br/> {{$carts[0]->invoice->user->address}},
                                <br/> {{$carts[0]->invoice->user->city}},
                                <br/> {{$carts[0]->invoice->user->phone_number}}</p>
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
    </div>
</div>
<!-- End Invoice Content -->
@endsection






