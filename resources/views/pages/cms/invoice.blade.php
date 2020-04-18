@extends('layouts.cms-base')
@section('cmscontent')
<!-- Bread crumb and right sidebar toggle -->
<div class="row page-titles">
    <div class="col-md-5 col-8 align-self-center">
        <h3 class="text-themecolor m-b-0 m-t-0">Order</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Order</a></li>
            <li class="breadcrumb-item active">Detail</li>
        </ol>
    </div>
</div>
<!-- End Bread crumb and right sidebar toggle -->

<!-- Start Invoice Content -->
<div class="row">
    <div class="col-md-12">
        <div class="card card-body printableArea">
            <h3><b>INVOICE</b> <span class="pull-right">#{{$invoice->no_order}}</span></h3>
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
                            <h4 class="font-bold">{{$invoice->cart->user->full_name}},</h4>
                            <p class="text-muted m-l-30">{{$invoice->cart->user->email}},
                                <br/> {{$invoice->cart->user->address}},
                                <br/> {{$invoice->cart->user->city}},
                                <br/> {{$invoice->cart->user->phone_number}}</p>
                            <p class="m-t-30"><b>Invoice Date :</b> <i class="fa fa-calendar"></i> {{date("d F Y")}}</p>
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
                                @foreach ($invoices as $key=>$row)
                                <tr>
                                    <td class="text-center">{{$key+1}}</td>
                                    <td>{{$row->cart->product_name}}</td>
                                    <td class="text-right">{{$row->cart->quantity}}</td>
                                    <td class="text-right">{{$row->price}}</td>
                                    <td class="text-right">
                                        {{
                                           
                                        }}
                                    </td>
                                </tr>
                                @endforeach
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
                        <button class="btn btn-info" type="submit"> Save </button>
                        <button class="btn btn-danger" type="submit"> Send Invoice to Customer </button>
                        <!-- <button id="print" class="btn btn-default btn-outline" type="button"> <span><i class="fa fa-print"></i> Print</span> </button> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Invoice Content -->
@endsection






