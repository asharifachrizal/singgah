<link href="{{ asset('material/plugins/jquery-asColorPicker-master/css/asColorPicker.css') }}" rel="stylesheet">
<style>
    .asColorPicker-wrap{
        width: 92%;
    }
</style>
@extends('layouts.client-base')

@section('title')
@endsection

@section('breadcumb')
<section id="page-title" class="page-title-parallax page-title-dark" style="background-image: url('{{ asset('canvas/images/parallax/8.jpg') }}'); background-size: cover; padding: 120px 0;" data-bottom-top="background-position:0px 0px;" data-top-bottom="background-position:0px -300px;">

    <div class="container clearfix">
        <h1>Order</h1>
        {{-- nama kategori/produk di span yang di comment--}}
        {{-- <span>Make your order here.</span> --}}
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Product</a></li>
            <li class="breadcrumb-item active" aria-current="page">Order</li>
        </ol>
    </div>

</section>
@endsection

@section('content')
<div class="content-wrap">
    <div class="container clearfix">
        <div class="single-product">
            <div class="product">

                <div class="col_two_fifth">

                    <!-- Product Single - Gallery
                    ============================================= -->
                    <div class="product-image">
                        <div class="fslider" data-pagi="false" data-arrows="false" data-thumbs="true">
                            <div class="flexslider">
                                <div class="slider-wrap" data-lightbox="gallery">
                                    <div class="slide" ><img src="{{ asset('singgah/products/product-1.jpg') }}" alt="Pink Printed Dress"></div>                                    
                                </div>
                            </div>
                        </div>
                        <!-- <div class="sale-flash">Sale!</div> -->
                    </div><!-- Product Single - Gallery End -->

                </div>

                <div class="col_two_fifth product-desc">
                    <div class="form-widget">

                        <div class="form-result"></div>

                        <div class="row">
                            <div class="col-lg-12">
                                <form class="row" id="event-registration"   enctype="multipart/form-data">
                                    <input type="hidden" name="id" value="{{Sentinel::getUser()->id }}">
                                    <input type="hidden" name="product_id" value="{{ $product->id }}">                                    
                                    <div class="form-process"></div>
                                    <div class="col-12 form-group">
                                        <label for="jenis-produk">PRODUCT</label>
                                        <select disabled class="form-control required" >
                                                <option value="{{$product->value}}">{{$product->value}}</option>                                                
                                        </select>
                                    </div>
                                    <div class="col-6 form-group">
                                        <label for="kuantitas-produk">Qty</label><br>
                                        <input required type="number" name="quantity" id="quantity" class="form-control required" value="1" placeholder="minimal 1" min="1">
                                    </div>
                                    
                                    <div class="col-6 form-group">
                                        <label for="deadline-produk">Orientasi:</label><br>                                        
                                        <select required class="form-control required" name="orientation" id="orientation" onchange="orientationSelected(this.value)">
                                            <option value="pilih" selected disabled>PILIH</option>
                                            <option value="landscape">Landscape</option>
                                            <option value="horizontal">Horizontal</option>                                                
                                        </select>
                                    </div> 
                                    
                                    @if($product->id > 0 && $product->id < 16 )                                
                                    <div class="col-6 form-group">
                                        <label for="ukuran-rasio-produk">Ukuran/rasio:</label><br>
                                        <input type="text" required name="size" id="size" class="form-control required" value="" placeholder="1280 x 870">
                                    </div>  
                                    @endif  
                                    @if($product->id >= 18)       
                                    <div class="col-6 form-group">
                                        <label for="ukuran-rasio-produk">Durasi</label><br>
                                        <input type="text" required name="duration" id="duration" class="form-control required" value="" placeholder="120 Detik">
                                    </div>    
                                    @endif 
                                    <div class="col-12 form-group">
                                        <label for="target-audience-produk">Target Audience</label><br>
                                        <div class="row" id="inputAudience-Warp">
                                            <div class="col-lg-12 col-md-12" id="warpAudience_0">
                                                <div class="input-group bootstrap-touchspin">
                                                    <input id="indexAudience_0"  type="text" placeholder="anak-anak-dewasa / Umur 24-30" data-bts-button-down-class="btn btn-secondary btn-outline" data-bts-button-up-class="btn btn-secondary btn-outline" class="form-control" style="display: block;">
                                                    <div class="input-group-append bootstrap-touchspin-postfix" style="display: none;">
                                                        <span class="input-group-text"></span>
                                                    </div>
                                                    <div class="input-group-append" id="spliceAudience_0" hidden="true">
                                                        <button class="btn btn-danger bootstrap-touchspin-up" type="button" onclick="spliceAudience(0)">-</button>
                                                    </div>
                                                    <div class="input-group-append">
                                                        <button class="btn btn-primary bootstrap-touchspin-up" type="button" onclick="addMoreAudience()">+</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>   
                                    @if($product->id <= 15)                                                                                                                                                                             
                                    <div class="col-12 form-group">
                                        <label for="design-style-produk">Design Style</label>
                                        <div class="row" id="inputStyle-Warp">
                                            <div class="col-lg-12 col-md-12" id="warpStyle_0">
                                                <div class="input-group bootstrap-touchspin">
                                                    <input id="indexStyle_0"  type="text" placeholder="Example: simple, elegant, animation, etc." data-bts-button-down-class="btn btn-secondary btn-outline" data-bts-button-up-class="btn btn-secondary btn-outline" class="form-control" style="display: block;">
                                                    <div class="input-group-append bootstrap-touchspin-postfix" style="display: none;">
                                                        <span class="input-group-text"></span>
                                                    </div>
                                                    <div class="input-group-append" id="spliceStyle_0" hidden="true">
                                                        <button class="btn btn-danger bootstrap-touchspin-up" type="button" onclick="spliceStyle(0)">-</button>
                                                    </div>
                                                    <div class="input-group-append">
                                                        <button class="btn btn-primary bootstrap-touchspin-up" type="button" onclick="addMoreStyle()">+</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <input type="text" required name="style" id="style" class="form-control required" value="" >                                         -->
                                    </div> 
                                    @endif                                    
                                    <div class="col-12 form-group">
                                        <label for="design-style-produk">Warna</label><br>
                                        <span>
                                            <small>Format: HEX, RGB, dan RGBA</small>
                                        </span>
                                        <div class="row" id="inputColor-Warp"> 
                                            <div class="col-lg-12 col-md-12" id="warpColor_0" >
                                                <input type="color" id="colorPicker_0" value="#acacec" hidden onchange="changeColor_Picker(this.value, 0)">
                                                <div class="input-group bootstrap-touchspin">
                                                    <div class="input-group-prepend">
                                                        <button id="btnPicker_0" onclick="openColorPicker(0)" class="btn btn-secondary btn-outline bootstrap-touchspin-down" type="button" style="background-color: #acacec; width: 40px;"> </button>
                                                    </div>
                                                    <div class="input-group-prepend bootstrap-touchspin-prefix" style="display: none;">
                                                        <span class="input-group-text"></span>
                                                    </div>
                                                    <input id="indexColor_0" onchange="changeColor_Input(this.value, 0)" type="text" value="#acacec" name="tch3" data-bts-button-down-class="btn btn-secondary btn-outline" data-bts-button-up-class="btn btn-secondary btn-outline" class="form-control" style="display: block;">
                                                    <div class="input-group-append bootstrap-touchspin-postfix" style="display: none;">
                                                        <span class="input-group-text"></span>
                                                    </div>
                                                    <div class="input-group-append" id="spliceColor_0" hidden="true">
                                                        <button class="btn btn-danger bootstrap-touchspin-up" type="button" onclick="spliceColor(0)">-</button>
                                                    </div>
                                                    <div class="input-group-append">
                                                        <button class="btn btn-primary bootstrap-touchspin-up" type="button" onclick="addMoreColor()">+</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 form-group">
                                        <label for="design-style-produk">Font</label>
                                        <input type="text" required name="font" id="font" class="form-control required" value="" placeholder="Arial, Calibri">
                                    </div>                                    
                                    <div class="col-6 form-group">
                                        <label for="output-produk">Output File Type:</label><br>
                                        <input type="text" required name="output" id="output" class="form-control required" value="" placeholder=".PSD , .PNG, .MP4">
                                    </div>                                                                                                            
                                    <div class="col-6 form-group">
                                        <label for="deadline-produk">Deadline:</label><br>
                                        <select class="form-control required" name="deadline" id="deadline" onchange="deadlineSelected(this.value)">
                                            <option value="pilih" selected disabled>PILIH</option>
                                            <option value="segera">Segera</option>
                                            <option value="normal">Nomral</option>
                                        </select>
                                    </div>
                                    <div class="col-12 hidden">
                                        <input type="text" id="event-registration-botcheck" name="event-registration-botcheck" value="" />
                                    </div>
                                    <div class="col-12">
                                        <button onclick="submition()" name="event-registration-submit" class="btn btn-secondary">Make Order</button>
                                    </div>

                                    <input type="hidden" name="prefix" value="event-registration-">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<a hidden id="toast-launcher" href="#" class="btn btn-success" data-notify-type="success" 
    data-notify-msg="<i class=icon-ok-sign></i> Add to Cart Successfully!" 
    onclick="SEMICOLON.widget.notifications(this); return false;">Show Success
</a>

<!-- START SCRIPT -->
<script src="{{ asset('canvas/js/jquery.js') }}"></script>
<script src="{{ asset('material/plugins/jquery-asColorPicker-master/libs/jquery-asColor.js') }}"></script>
<script src="{{ asset('material/plugins/jquery-asColorPicker-master/libs/jquery-asGradient.js') }}"></script>
<script src="{{ asset('material/plugins/jquery-asColorPicker-master/dist/jquery-asColorPicker.min.js') }}"></script>
<script>
    // VARIABLE COLOR PICKER
    var xColor = 1 //INDEXING COLOR
    var counterWarp_Color = [0] //INDEX STORAGE COLOR
    var warpInput_Color = $("#inputColor-Warp") //WARP INPUT COLOR PICKER
    
    // START FUNC COLOR PICKER
    /**
     * @params warpNumber: warp number
     */
    async function spliceColor( warpNumber ) {
        if(counterWarp_Color.length > 1) {
            $(`#warpColor_${warpNumber}`).remove()
            await counterWarp_Color.splice(counterWarp_Color.findIndex( _warpNumber => _warpNumber == warpNumber ), 1)
            if(counterWarp_Color.length == 1) {
                $(`#spliceColor_${counterWarp_Color[0]}`).attr("hidden", true);
            }
            console.log(counterWarp_Color)
        }
    }

    /**
     * @params warpNumber: number warp
     */
    function openColorPicker(warpNumber) {
        $(`#colorPicker_${warpNumber}`).click()
    }

    /**
     * @params warpNumber: number warp
     * @params data: input value
     */
    function changeColor_Picker(data, warpNumber) {
        $(`#indexColor_${warpNumber}`).val(data)
        $(`#btnPicker_${warpNumber}`).css('background-color', `${data}`)
    }

    /**
     * @params warpNumber: number warp
     * @params data: input value
     */
    function changeColor_Input( data, warpNumber ) {
        $(`#colorPicker_${warpNumber}`).val(data)
        $(`#btnPicker_${warpNumber}`).css('background-color', `${data}`)
    }

    function addMoreColor() {
        warpInput_Color.append(`
        <div class="col-lg-12 col-md-12" id="warpColor_${xColor}" style="margin-top: 10px">
            <input type="color" id="colorPicker_${xColor}" value="#acacec" hidden onchange="changeColor_Picker(this.value, ${xColor})">
            <div class="input-group bootstrap-touchspin">
                <div class="input-group-prepend">
                    <button id="btnPicker_${xColor}" onclick="openColorPicker(${xColor})" class="btn btn-secondary btn-outline bootstrap-touchspin-down" type="button" style="background-color: #acacec; width: 40px;"> </button>
                </div>
                <div class="input-group-prepend bootstrap-touchspin-prefix" style="display: none;">
                    <span class="input-group-text"></span>
                </div>
                <input id="indexColor_${xColor}" onchange="changeColor_Input(this.value, ${xColor})" type="text" value="#acacec" name="tch3" data-bts-button-down-class="btn btn-secondary btn-outline" data-bts-button-up-class="btn btn-secondary btn-outline" class="form-control" style="display: block;">
                <div class="input-group-append bootstrap-touchspin-postfix" style="display: none;">
                    <span class="input-group-text"></span>
                </div>
                <div class="input-group-append" id="spliceColor_${xColor}" >
                    <button class="btn btn-danger bootstrap-touchspin-up" type="button" onclick="spliceColor(${xColor})">-</button>
                </div>
                <div class="input-group-append">
                    <button class="btn btn-primary bootstrap-touchspin-up" type="button" onclick="addMoreColor()">+</button>
                </div>
            </div>
        </div>`)

        if(counterWarp_Color.length == 1) {
            $(`#spliceColor_${counterWarp_Color[0]}`).removeAttr('hidden')
        }
        counterWarp_Color.push(xColor)
        xColor++;
    }
    // END FUNC COLOR
    
    // VARIABLE AUDIENCE
    var xAudience = 1 //INDEXING INPUT AUDIENCE
    var counterWarp_Audience = [0] //INDEX STORAGE AUDIENCE
    var warpInput_Audience = $("#inputAudience-Warp") //WARP INPUT AUDIENCE

    // START FUNC AUDIENCE
    function addMoreAudience() {
        warpInput_Audience.append(`
        <div class="col-lg-12 col-md-12" id="warpAudience_${xAudience}" style="margin-top: 10px">
            <div class="input-group bootstrap-touchspin">
                <input id="indexAudience_${xAudience}"  type="text" placeholder="anak-anak-dewasa / Umur 24-30" data-bts-button-down-class="btn btn-secondary btn-outline" data-bts-button-up-class="btn btn-secondary btn-outline" class="form-control" style="display: block;">
                <div class="input-group-append bootstrap-touchspin-postfix" style="display: none;">
                    <span class="input-group-text"></span>
                </div>
                <div class="input-group-append" id="spliceAudience_${xAudience}" >
                    <button class="btn btn-danger bootstrap-touchspin-up" type="button" onclick="spliceAudience(${xAudience})">-</button>
                </div>
                <div class="input-group-append">
                    <button class="btn btn-primary bootstrap-touchspin-up" type="button" onclick="addMoreAudience()">+</button>
                </div>
            </div>
        </div>`)
        if(counterWarp_Audience.length == 1) {
            $(`#spliceAudience_${counterWarp_Audience[0]}`).removeAttr('hidden')
        }
        counterWarp_Audience.push(xAudience)
        xAudience++;
    }

    async function spliceAudience( warpNumber ) {
        if(counterWarp_Audience.length > 1) {
            $(`#warpAudience_${warpNumber}`).remove()
            await counterWarp_Audience.splice(counterWarp_Audience.findIndex( _warpNumber => _warpNumber == warpNumber ), 1)
            if(counterWarp_Audience.length == 1) {
                $(`#spliceAudience_${counterWarp_Audience[0]}`).attr("hidden", true);
            }
        }
    }
    // END FUNC AUDIENCE

    // VARIABLE DESIGN STYLE
    var xStyle = 1 //INDEXING INPUT DESIGN STYLE
    var counterWarp_Style = [0] //INDEX STORAGE DESIGN STYLE
    var warpInput_Style = $("#inputStyle-Warp") //WARP INPUT DESIGN STYLE

    // START FUNC STYLE
    function addMoreStyle() {
        warpInput_Style.append(`
        <div class="col-lg-12 col-md-12" id="warpStyle_${xStyle}" style="margin-top: 10px">
            <div class="input-group bootstrap-touchspin">
                <input id="indexStyle_${xStyle}"  type="text" placeholder="Example: simple, elegant, animation, etc." data-bts-button-down-class="btn btn-secondary btn-outline" data-bts-button-up-class="btn btn-secondary btn-outline" class="form-control" style="display: block;">
                <div class="input-group-append bootstrap-touchspin-postfix" style="display: none;">
                    <span class="input-group-text"></span>
                </div>
                <div class="input-group-append" id="spliceStyle_${xStyle}" >
                    <button class="btn btn-danger bootstrap-touchspin-up" type="button" onclick="spliceStyle(${xStyle})">-</button>
                </div>
                <div class="input-group-append">
                    <button class="btn btn-primary bootstrap-touchspin-up" type="button" onclick="addMoreStyle()">+</button>
                </div>
            </div>
        </div>`)
        if(counterWarp_Style.length == 1) {
            $(`#spliceStyle_${counterWarp_Style[0]}`).removeAttr('hidden')
        }
        counterWarp_Style.push(xStyle)
        xStyle++;
    }

    async function spliceStyle( warpNumber ) {
        if(counterWarp_Style.length > 1) {
            $(`#warpStyle_${warpNumber}`).remove()
            await counterWarp_Style.splice(counterWarp_Style.findIndex( _warpNumber => _warpNumber == warpNumber ), 1)
            if(counterWarp_Style.length == 1) {
                $(`#spliceStyle_${counterWarp_Style[0]}`).attr("hidden", true);
            }
        }
    }
    
    // END FUNC DESIGN STYLE

    var deadlines
    function deadlineSelected(data) {
        deadlines = data
        console.log('deadline ', data)
    }
    var orientations
    function orientationSelected(data){
        orientations = data
    }
    function submition () {
        console.log('orientation ', orientations)
        var id = $("input[name=id]").val();
        var product_id = $("input[name=product_id]").val();        
        var quantity = $("input[name=quantity]").val();        
        var orientation = orientations ? orientations : $("#orientation_").children("option:selected").val();
        var size = $("input[name=size]").val();
        var duration = $("input[name=duration]").val();
        var target_audience = $("input[name=target_audience]").val();                
        var style = $("input[name=style]").val();
        var color_grading = $("input[name=color_grading]").val();
        var font = $("input[name=font]").val();        
        var output = $("input[name=output]").val();        
        var deadline = deadlines;        
        var price = $("input[name=price]").val();
        

        if(orientation && deadline){
            console.log('will post')
            $.ajax({
                    type: 'POST',
                    url: '/cart/add',
                    data: {
                        id: id,
                        product_id: product_id,                    
                        quantity: quantity,
                        orientation: orientation,
                        size: size,
                        duration: duration,
                        target_audience: target_audience,
                        style: style,
                        color: color,
                        color_grading: color_grading,                
                        font: font,                        
                        deadline: deadline,       
                        output:output,                                     
                        price: price
                    },
                    success: function(data) {
                        $("#toast-launcher").click()
                        setTimeout(() => {
                            window.location.href = "/category"
                        }, 1000);
                    },
                    error: function(data) {
                        // alert('error')
                        console.log(data)
                    }

            });
        }
    }
</script>
@endsection
