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
                <div class="col-md-6 ">
                    <div class="form-group">
                        <label>Deadline</label>
                        <input type="text" class="form-control" disabled value="{{$row->deadline}}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Quantity</label>
                        <input type="number" class="form-control"  disabled value="{{$row->quantity}}">
                    </div>
                </div>
            </div>
            <!--/row-->
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Size/Ration</label>
                        <input type="text" class="form-control" disabled value="{{$row->size}}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Orientation</label>
                        <input type="text" class="form-control" disabled value="{{$row->orientation}}">
                    </div>
                </div>
            </div>
            <!--/row-->
            <div class="row">
                {{-- <div class="col-md-6">
                    <div class="form-group">
                    <div class="card">
                        <div class="card-header">
                            Color
                            <div class="card-actions">
                                <a class="" data-action="collapse"><i class="ti-plus"></i></a>
                            </div>
                        </div>
                        <div class="card-body collapse">
                            <!-- <h4 class="card-title">Special title treatment</h4> -->
                            <p class="card-text">#FFFFFF</p>
                            <p class="card-text">#FFFFFF</p>
                            <p class="card-text">#FFFFFF</p>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                    <div class="card">
                        <div class="card-header">
                            Color Grading
                            <div class="card-actions">
                                <a class="" data-action="collapse"><i class="ti-plus"></i></a>
                            </div>
                        </div>
                        <div class="card-body collapse">
                            <p class="card-text">#FFFFFF</p>
                            <p class="card-text">#FFFFFF</p>
                            <p class="card-text">#FFFFFF</p>

                        </div>
                    </div>
                    </div>
                </div> --}}               
            </div>

            <div class="row">
                {{-- <div class="col-md-6">
                    <div class="form-group">
                    <div class="card">
                        <div class="card-header">
                            Font Style
                            <div class="card-actions">
                                <a class="" data-action="collapse"><i class="ti-plus"></i></a>
                            </div>
                        </div>
                        <div class="card-body collapse">
                            <!-- <h4 class="card-title">Special title treatment</h4> -->
                            <p class="card-text">Arial</p>
                        </div>
                    </div>
                    </div>
                </div> --}}
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Design Style</label>
                        <input type="text" class="form-control" disabled value="{{$row->style}}">
                    </div>
                </div>
                {{-- <div class="col-md-6">
                    <div class="form-group">
                    <div class="card">
                        <div class="card-header">
                            Target Audience
                            <div class="card-actions">
                                <a class="" data-action="collapse"><i class="ti-plus"></i></a>
                            </div>
                        </div>
                        <div class="card-body collapse">
                            <p class="card-text">Anak Muda</p>

                        </div>
                    </div>
                    </div>
                </div> --}}
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Target Audience</label>
                        <input type="text" class="form-control" disabled value="{{$row->target_audience}}">
                    </div>
                </div>
            </div>
            <div class="row">
                {{-- <div class="col-md-6">
                    <div class="form-group">
                    <div class="card">
                        <div class="card-header">
                            Output File URL
                            <div class="card-actions">
                                <a class="" data-action="collapse"><i class="ti-plus"></i></a>
                            </div>
                        </div>
                        <div class="card-body collapse">
                            <!-- <h4 class="card-title">Special title treatment</h4> -->
                            <p class="card-text">JPEG, PNG</p>
                        </div>
                    </div>
                    </div>
                </div> --}}
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Output File</label>
                        <input type="text" class="form-control" disabled value="{{$row->output}}">
                    </div>
                </div>
                {{-- <div class="col-md-6">
                    <div class="form-group">
                    <div class="card">
                        <div class="card-header">
                            Pattern/Reference
                            <div class="card-actions">
                                <a class="" data-action="collapse"><i class="ti-plus"></i></a>
                            </div>
                        </div>
                        <div class="card-body collapse">
                            <p class="card-text">BUMN</p>
                            <p class="card-text">Poster Game</p>

                        </div>
                    </div>
                    </div>
                </div> --}}
                
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
                <div class="col-md-12 ">
                    <div class="form-group">
                        <label>Brief From Client</label>
                        <input type="text" class="form-control" name="brief" disabled value="{{$carts[0]->invoice->briefURL}}">
                        <input type="hidden" class="form-control" name="brief"  value="{{$carts[0]->invoice->briefURL}}">
                    </div>
                </div>
            </div>
            <!--/row-->
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
        for (let index = 0; index < 2; index++) {
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






