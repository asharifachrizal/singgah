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
                    <div class="form-group">
                        <label>Brief URL </label>                                              
                        <input type="text" class="form-control" disabled value="{{$row->briefURL[0]->value}}">                            
                    </div>    
                    <label>Brief File</label>                                  
                    <ul class="list-group">
                        @foreach (json_decode($row->briefFile) as $file)                                                        
                            <li class="list-group-item">{{$file->value}}</li>
                        @endforeach                        
                    </ul>
                    <br>
                    <button type="button" class="btn waves-effect waves-light btn-success">Download Files</button>
                    <br>     
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
                        <label>Output File</label>
                        <input type="text" class="form-control" id="outputURL" value="{{$carts[0]->invoice->outputURL}}">
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
    var counterCarts = document.getElementById('totalCartsItem').value
    function doPost() {
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
                    outputURL:  document.getElementById('outputURL').value
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
    }

</script>

@endsection






