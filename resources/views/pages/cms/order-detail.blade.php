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

<!-- ============================================================== -->
<!-- Start Page Content -->
<!-- ============================================================== -->
<form >
    @foreach ($carts as $index => $row)
    <input type="hidden" id="totalCartsItem" value="{{ $carts->count() }}" >
    <input type="hidden" id="itemsId_{{$index}}" value="{{ $row->id }}" >
    <input type="hidden" name="user_id" value="{{$row->user_id}}">
    <input type="hidden" name="cart_id[]" value="{{$row->id}}">
    <input type="hidden" id="invoice_id" value="{{$row->invoice->id}}">
    <div class="card">
        <div class="card-header">
            {{$row->product->value}}
            <div class="card-actions">
                <a class="" data-action="collapse"><i class="ti-plus"></i></a>
                <!-- <a class="btn-minimize" data-action="expand"><i class="mdi mdi-arrow-expand"></i></a>
                <a class="btn-close" data-action="close"><i class="ti-close"></i></a> -->
            </div>
        </div>
        <div class="card-body collapse">
            <h4 class="card-title">Special title treatment</h4>
            <div class="row">
                <div class="col-md-12 ">
                    <div class="form-group">
                        <label>Deadline</label>
                        <input type="text" class="form-control" disabled value="{{$row->deadline}}">
                    </div>    
                    <div class="form-group">
                        <label>Quantity</label>
                        <input type="number" class="form-control" disabled value="{{$row->quantity}}">
                    </div>  
                    @if($row->product->id == 3 || $row->product->id == 5 || $row->product->id == 7 )                
                    <div class="form-group">
                        <label>Orientation</label>
                        <input type="text" class="form-control" disabled value="{{$row->orientation}}">
                    </div>                
                    @endif  
                    @if($row->product->id > 0 && $row->product->id < 16 )                                  
                    <div class="form-group">
                        <label>Size/Ration</label>
                        <input type="text" class="form-control" disabled value="{{$row->size}}">
                    </div>                    
                    @endif
                    @if($row->product->id >= 18)                
                    <div class="form-group">
                        <label>Duration</label>
                        <input type="text" class="form-control" disabled value="{{$row->duration}}">
                    </div>                
                    @endif                                                                                              
                    <label>Target Audience</label>                                  
                    <ul class="list-group">
                        @foreach (json_decode($row->targetAudience) as $audience)                                                        
                            <li class="list-group-item">{{$audience->value}}</li>
                        @endforeach                        
                    </ul>
                    <br>                
                    @if($row->product->id <= 15)                   
                    <label>Design Style</label>                                  
                    <ul class="list-group">
                        @foreach (json_decode($row->style) as $style)                                                        
                            <li class="list-group-item">{{$style->value}}</li>
                        @endforeach                        
                    </ul>
                    <br>                
                    @endif                                                                            
                    <label>Font</label>                                  
                    <ul class="list-group">
                        @foreach (json_decode($row->font) as $font)                                                        
                            <li class="list-group-item">{{$font->value}}</li>
                        @endforeach                        
                    </ul>
                    <br>                               
                    <div class="form-group">
                        <label>Color </label>  
                        <br>
                        @foreach (json_decode($row->color) as $color)
                            <!-- <input type="text" class="form-control" disabled value="{{$color->value}}"> -->
                            <span class="badge badge-primary"  style="background-color: {{$color->value}};color:white">{{$color->value}}</span>
                        @endforeach
                    </div>                                                                                  
                    <div class="form-group">
                        <label>Output File Type </label>  
                        <br>
                        @foreach (json_decode($row->outputType) as $output)                                                        
                            <span class="label label-light-inverse">{{$output->value}}</span>                                                        
                        @endforeach
                    </div>    
                    @if($row->briefURL->count() > 0)
                    <div class="form-group">
                        <label>Brief URL </label>                                              
                        <input type="text" class="form-control" disabled value="{{$row->briefURL[0]->value}}">                            
                    </div>    
                    
                    @endif
                    <label>Brief Files</label>    
                    @foreach (json_decode($row->briefFile) as $file)
                    <div class="form-group">
                        <div class="input-group bootstrap-touchspin">
                            <input disabled value="{{$file->value}}" style="background-color: white;"  type="text"  data-bts-button-down-class="btn btn-secondary btn-outline" data-bts-button-up-class="btn btn-secondary btn-outline" class="form-control" style="display: block;">
                            <div class="input-group-append bootstrap-touchspin-postfix" style="display: none;">
                                <span class="input-group-text"></span>
                            </div>
                            <div class="input-group-append" >
                                <a style="background-color: #0f4ba4;"  class="btn btn-primary bootstrap-touchspin-up" type="button" href="/download/brief/{{$file->value}}" target="_BLANK"> 
                                    <i class="mdi mdi-download"></i>
                                </a>
                            </div>
                        </div>
                    </div>     
                    @endforeach  
                    <br>                                       
                </div>
               
                               
                
            </div>
            <!--/row-->                                                                                            
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Price</label>
                        @if($row->invoice->status == 0)
                            <input type="number" class="form-control" id="price_cart_id_{{$index}}" value="{{$row->price}}">
                        @else
                            <input disabled type="number" class="form-control" id="price_cart_id_{{$index}}" value="{{$row->price}}">
                        @endif
                    </div>
                </div>
            </div>
            <!--/row-->
        </div>
    </div>
    @endforeach
    <div class="card">
        <div class="card-body">            
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Output File (GDrive URL)</label>
                        <input type="text" class="form-control" id="outputURL" placeholder="www.example.com" value="{{$carts[0]->invoice->outputURL}}">
                        <span style="color:red" id="helper-outputUrl" hidden>
                            <small>Unsupported format, Please input link url into field!</small>
                        </span>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Invoice Id</label>
                        <input type="text" class="form-control" id="code" value="{{$carts[0]->invoice->code}}">
                    </div>
                </div>
            </div>
            <!--/row-->
        </div>
    </div>
</form>
    <button onclick="doPost()" class="btn waves-effect waves-light btn-info">Save Prices and Output File URL</button>

    <button onclick="window.location.href = '/cms/order/invoice/{{$row->invoice->id}}'" type="button" class="btn waves-effect waves-light btn-info">See Detail Invoice</button>    



<!-- ============================================================== -->
<!-- End PAge Content -->
<!-- ============================================================== -->

<script>

    function doDownload(data) {
        
    }

    var counterCarts = document.getElementById('totalCartsItem').value
    function doPost() {
        let checkingOutput_Url = $("#outputURL").val()
        if(checkingOutput_Url) {
            let tempOutput_Url = checkingOutput_Url.split(".")
            if(tempOutput_Url.length > 2) {
                var invoice_id = document.getElementById('invoice_id').value
                let DataPrices = []
                for (let index = 0; index < counterCarts; index++) {
                    DataPrices.push({
                        cart_id: document.getElementById('itemsId_'+index).value,
                        price: document.getElementById('price_cart_id_'+index).value
                    })
                }
                $.ajax({
                        type: 'POST',
                        url: '/cms/order/modify/'+invoice_id,
                        data: {
                            prices: DataPrices,
                            outputURL:  document.getElementById('outputURL').value,
                            code:  document.getElementById('code').value
                        },
                        success: function(data) {
                            // console.log(data)
                            window.location.reload()
                        },
                        error: function(data) {
                                // alert('error')
                            console.log(data)
                        }
                });

            } else {
                $("#helper-outputUrl").removeAttr("hidden")
            }
        } 
    }

</script>

@endsection






