<link href="{{ asset('material/plugins/jquery-asColorPicker-master/css/asColorPicker.css') }}" rel="stylesheet">
<link href="{{ asset('libs/select2/select2.min.css') }}" rel="stylesheet">
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
                                    <div class="col-4 form-group">
                                        <label for="kuantitas-produk">Qty</label><br>
                                        <input required type="number" name="quantity" id="quantity" class="form-control required" value="1" placeholder="minimal 1" min="1">
                                    </div>
                                    
                                    <!-- <div class="col-12 form-group">
                                        <label for="deadline-produk">Orientation:</label><br>                                        
                                        <select required class="form-control required" name="orientation" id="orientation" onchange="orientationSelected(this.value)">
                                            <option value="pilih" selected disabled>SELECT</option>
                                            <option value="landscape">Landscape</option>
                                            <option value="Portrait">Portrait</option>                                                
                                        </select>
                                    </div>  -->
                                    
                                                                    
                                    <div class="col-4 form-group">
                                        <label for="ukuran-rasio-produk" >Width:</label><br>
                                        <input type="number" required name="size" id="sizeW" class="form-control required" value="" placeholder="1280">
                                    </div>  
                                    <div class="col-4 form-group">
                                        <label for="ukuran-rasio-produk" >Height:</label><br>
                                        <input type="number" required name="size" id="sizeH" class="form-control required" value="" placeholder="870">
                                    </div>  

                                    @if($product->id >= 16)       
                                    <div class="col-12 form-group">
                                        <label for="ukuran-rasio-produk">Duration</label><br>
                                        <input type="text" required name="duration" id="duration" class="form-control required" value="" placeholder="120 Sec">
                                    </div>    
                                    @endif 
                                    <div class="col-12 form-group">
                                        <label for="target-audience-produk">Target Audience</label><br>
                                        <div class="row" id="inputAudience-Warp">
                                            <div class="col-lg-12 col-md-12" id="warpAudience_0">
                                                <div class="input-group bootstrap-touchspin">
                                                    <input id="indexAudience_0"  type="text" placeholder="Child / Adult / Age 24-30" data-bts-button-down-class="btn btn-secondary btn-outline" data-bts-button-up-class="btn btn-secondary btn-outline" class="form-control" style="display: block;">
                                                    <div class="input-group-append bootstrap-touchspin-postfix" style="display: none;">
                                                        <span class="input-group-text"></span>
                                                    </div>
                                                    <div class="input-group-append">
                                                        <button hidden id="spliceAudience_0" class="btn btn-danger bootstrap-touchspin-up" type="button" onclick="spliceAudience(0)">-</button>
                                                        <button id="plusAudience_0" class="btn btn-primary bootstrap-touchspin-up" type="button" onclick="addMoreAudience()">+</button>
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
                                                    <div class="input-group-append">
                                                        <button hidden id="spliceStyle_0" class="btn btn-danger bootstrap-touchspin-up" type="button" onclick="spliceStyle(0)">-</button>
                                                        <button id="plusStyle_0" class="btn btn-primary bootstrap-touchspin-up" type="button" onclick="addMoreStyle()">+</button>
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
                                            <small>Format: HEX, RGB, and RGBA</small>
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
                                                    <div class="input-group-append">
                                                        <button hidden id="spliceColor_0" class="btn btn-danger bootstrap-touchspin-up" type="button" onclick="spliceColor(0)">-</button>
                                                        <button id="plusColor_0" class="btn btn-primary bootstrap-touchspin-up" type="button" onclick="addMoreColor()">+</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 form-group">
                                        <label for="design-style-produk">Font</label>
                                        <div class="row" id="inputFont-Warp">
                                            <div class="col-lg-12 col-md-12" id="warpFont_0">
                                                <div class="input-group bootstrap-touchspin">
                                                    <input id="indexFont_0"  type="text" placeholder="Arial, Calibri" data-bts-button-down-class="btn btn-secondary btn-outline" data-bts-button-up-class="btn btn-secondary btn-outline" class="form-control" style="display: block;">
                                                    <div class="input-group-append bootstrap-touchspin-postfix" style="display: none;">
                                                        <span class="input-group-text"></span>
                                                    </div>
                                                    <div class="input-group-append">
                                                        <button hidden id="spliceFont_0" class="btn btn-danger bootstrap-touchspin-up" type="button" onclick="spliceFont(0)">-</button>
                                                        <button id="plusFont_0" class="btn btn-primary bootstrap-touchspin-up" type="button" onclick="addMoreFont()">+</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <input type="text" required name="font" id="font" class="form-control required" value="" placeholder="Arial, Calibri"> -->
                                    </div>

                                    <div class="col-12 form-group">
                                        <label for="design-style-produk">Link Brief</label>
                                        <div class="row" >
                                            <div class="col-lg-12 col-md-12" >
                                                <div class="input-group bootstrap-touchspin">
                                                    <input id="linkBrief"  type="text" placeholder="Link Brief" data-bts-button-down-class="btn btn-secondary btn-outline" data-bts-button-up-class="btn btn-secondary btn-outline" class="form-control" style="display: block;">
                                                    <div class="input-group-append bootstrap-touchspin-postfix" style="display: none;">
                                                        <span class="input-group-text"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <input type="text" required name="font" id="font" class="form-control required" value="" placeholder="Arial, Calibri"> -->
                                    </div>
                                    
                                    <div class="col-12 form-group">
                                        <label for="design-style-produk">Upload Brief</label><br>
                                        <span>
                                            <small>File Format: .doc, .docx or .pdf</small>
                                        </span>
                                        <div class="row" id="inputBrief-Warp">
                                            <div class="col-lg-12 col-md-12" id="warpBrief_0" >
                                                <input type="file" id="inputBrief_Hidden_0" hidden oninput="briefUploadStage(this.files, 0)">
                                                <div class="input-group bootstrap-touchspin">
                                                    <input disabled id="indexBrief_0" style="background-color: white;"  type="text" placeholder="No file choosen" data-bts-button-down-class="btn btn-secondary btn-outline" data-bts-button-up-class="btn btn-secondary btn-outline" class="form-control" style="display: block;">
                                                    <div class="input-group-append bootstrap-touchspin-postfix" style="display: none;">
                                                        <span class="input-group-text"></span>
                                                    </div>
                                                    <div class="input-group-append">
                                                        <button class="btn btn-success  bootstrap-touchspin-up" type="button" onclick="openBrowseFile(0)" >
                                                            <i class="fa fa-upload"></i> Choose File
                                                        </button>
                                                    </div>
                                                    <div class="input-group-append" >
                                                        <button id="plusBrief_0" class="btn btn-primary bootstrap-touchspin-up" type="button" onclick="addMoreBrief()"> + </button>
                                                        <button id="spliceBrief_0" class="btn btn-danger bootstrap-touchspin-up" type="button" hidden onclick="spliceBrief(0)"> - </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <input type="text" required name="font" id="font" class="form-control required" value="" placeholder="Arial, Calibri"> -->
                                    </div>     

                                    <div class="col-12 form-group">
                                        <label for="output-produk">Output File Type:</label><br>
                                        <select id="select2-output" class="form-control select2 select2-hidden-accessible" multiple data-placeholder="SELECT OUTPUT" style="width: 100%;"  tabindex="-1" aria-hidden="true">
                                            
                                            <option value=".psd">.PSD</option>
                                            <option value=".png">.PNG</option>
                                            <option value=".jpg">.JPG/ JPEG</option>
                                            <option value=".mp4">.MP4</option>
                                            <option value=".mkv">.MKV</option>
                                            <option value=".mov">.MOV</option>
                                        </select>
                                        <!-- <input type="text" required name="output" id="output" class="form-control required" value="" placeholder=".PSD , .PNG, .MP4"> -->
                                    </div>                                                                                                            
                                    <div class="col-12 form-group">
                                        <label for="deadline-produk">Deadline</label><br>
                                        <select class="form-control required" name="deadline" id="deadline" onchange="deadlineSelected(this.value)">
                                            <option value="pilih" selected disabled>SELECT DEADLINE</option>
                                            <option value="immediately">Immediately</option>
                                            <option value="normal">Normal</option>
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

<a hidden id="error-briefUpload" href="#" class="btn btn-danger" data-notify-type="error" 
    data-notify-msg="<i class=icon-info></i> This file type is not supported!" 
    onclick="SEMICOLON.widget.notifications(this); return false;">Show Success
</a>

<!-- START SCRIPT -->
<script src="{{ asset('canvas/js/jquery.js') }}"></script>
<script src="{{ asset('libs/select2/select2.min.js') }}"></script>
<script>
    $(".select2").select2()

    let outputs = []
    $('#select2-output').on('select2:select', function (e) {
        var data = e.params.data;
        outputs.push({value: data.id})
    });

    $('#select2-output').on('select2:unselect', function (e) {
        var data = e.params.data;
        outputs.splice(outputs.findIndex(_val => _val.value == data.id))
    });
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
                <div class="input-group-append">
                    <button hidden id="spliceColor_${xColor}" class="btn btn-danger bootstrap-touchspin-up" type="button" onclick="spliceColor(${xColor})">-</button>
                    <button id="plusColor_${xColor}" class="btn btn-primary bootstrap-touchspin-up" type="button" onclick="addMoreColor()">+</button>
                </div>
            </div>
        </div>`)

        if(counterWarp_Color.length == 1) {
            $(`#spliceColor_${counterWarp_Color[0]}`).removeAttr('hidden')
            $(`#plusColor_${counterWarp_Color[0]}`).attr('hidden', true)
        } else {
            $(`#spliceColor_${counterWarp_Color[ counterWarp_Color.findIndex(_Color => _Color == (xColor - 1)) ]}`).removeAttr('hidden')
            $(`#plusColor_${counterWarp_Color[ counterWarp_Color.findIndex(_Color => _Color == (xColor - 1)) ]}`).attr('hidden', true)
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
                <input id="indexAudience_${xAudience}"  type="text" placeholder="Child / Adult / Age 24-30" data-bts-button-down-class="btn btn-secondary btn-outline" data-bts-button-up-class="btn btn-secondary btn-outline" class="form-control" style="display: block;">
                <div class="input-group-append bootstrap-touchspin-postfix" style="display: none;">
                    <span class="input-group-text"></span>
                </div>
                <div class="input-group-append">
                    <button hidden id="spliceAudience_${xAudience}"  class="btn btn-danger bootstrap-touchspin-up" type="button" onclick="spliceAudience(${xAudience})">-</button>
                    <button id="plusAudience_${xAudience}" class="btn btn-primary bootstrap-touchspin-up" type="button" onclick="addMoreAudience()">+</button>
                </div>
            </div>
        </div>`)
        if(counterWarp_Audience.length == 1) {
            $(`#spliceAudience_${counterWarp_Audience[0]}`).removeAttr('hidden')
            $(`#plusAudience_${counterWarp_Audience[0]}`).attr('hidden', true)
        } else {
            $(`#spliceAudience_${counterWarp_Audience[ counterWarp_Audience.findIndex(_Audience => _Audience == (xAudience - 1)) ]}`).removeAttr('hidden')
            $(`#plusAudience_${counterWarp_Audience[ counterWarp_Audience.findIndex(_Audience => _Audience == (xAudience - 1)) ]}`).attr('hidden', true)
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

    // START FUNC DESIGN STYLE
    function addMoreStyle() {
        warpInput_Style.append(`
        <div class="col-lg-12 col-md-12" id="warpStyle_${xStyle}" style="margin-top: 10px">
            <div class="input-group bootstrap-touchspin">
                <input id="indexStyle_${xStyle}"  type="text" placeholder="Example: simple, elegant, animation, etc." data-bts-button-down-class="btn btn-secondary btn-outline" data-bts-button-up-class="btn btn-secondary btn-outline" class="form-control" style="display: block;">
                <div class="input-group-append bootstrap-touchspin-postfix" style="display: none;">
                    <span class="input-group-text"></span>
                </div>
                <div class="input-group-append">
                    <button hidden id="spliceStyle_${xStyle}" class="btn btn-danger bootstrap-touchspin-up" type="button" onclick="spliceStyle(${xStyle})">-</button>
                    <button id="plusStyle_${xStyle}" class="btn btn-primary bootstrap-touchspin-up" type="button" onclick="addMoreStyle()">+</button>
                </div>
            </div>
        </div>`)
        if(counterWarp_Style.length == 1) {
            $(`#spliceStyle_${counterWarp_Style[0]}`).removeAttr('hidden')
            $(`#plusStyle_${counterWarp_Style[0]}`).attr('hidden', true)
        } else {
            $(`#spliceStyle_${counterWarp_Style[ counterWarp_Style.findIndex(_Style => _Style == (xStyle - 1)) ]}`).removeAttr('hidden')
            $(`#plusStyle_${counterWarp_Style[ counterWarp_Style.findIndex(_Style => _Style == (xStyle - 1)) ]}`).attr('hidden', true)
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

    // VARIABLE FONT
    var xFont = 1 //INDEXING INPUT FONT
    var counterWarp_Font = [0] //INDEX STORAGE FONT
    var warpInput_Font = $("#inputFont-Warp") //WARP INPUT FONT

    // START FUNC FONT 
    function addMoreFont() {
        warpInput_Font.append(`
        <div class="col-lg-12 col-md-12" id="warpFont_${xFont}" style="margin-top: 10px">
            <div class="input-group bootstrap-touchspin">
                <input id="indexFont_${xFont}"  type="text" placeholder="Arial, Calibri" data-bts-button-down-class="btn btn-secondary btn-outline" data-bts-button-up-class="btn btn-secondary btn-outline" class="form-control" style="display: block;">
                <div class="input-group-append bootstrap-touchspin-postfix" style="display: none;">
                    <span class="input-group-text"></span>
                </div>
                <div class="input-group-append">
                    <button hidden id="spliceFont_${xFont}" class="btn btn-danger bootstrap-touchspin-up" type="button" onclick="spliceFont(${xFont})">-</button>
                    <button id="plusFont_${xFont}" class="btn btn-primary bootstrap-touchspin-up" type="button" onclick="addMoreFont()">+</button>
                </div>
            </div>
        </div>`)
        if(counterWarp_Font.length == 1) {
            $(`#spliceFont_${counterWarp_Font[0]}`).removeAttr('hidden')
            $(`#plusFont_${counterWarp_Font[0]}`).attr('hidden', true)
        } else {
            $(`#spliceFont_${counterWarp_Font[ counterWarp_Font.findIndex(_Font => _Font == (xFont - 1)) ]}`).removeAttr('hidden')
            $(`#plusFont_${counterWarp_Font[ counterWarp_Font.findIndex(_Font => _Font == (xFont - 1)) ]}`).attr('hidden', true)
        }
        counterWarp_Font.push(xFont)
        xFont++;
    }

    async function spliceFont( warpNumber ) {
        if(counterWarp_Font.length > 1) {
            $(`#warpFont_${warpNumber}`).remove()
            await counterWarp_Font.splice(counterWarp_Font.findIndex( _warpNumber => _warpNumber == warpNumber ), 1)
            if(counterWarp_Font.length == 1) {
                $(`#spliceFont_${counterWarp_Font[0]}`).attr("hidden", true);
            }
        }
    }
    // END FUNC FONT

    // START VARIABLE BRIEF
    // VARIABLE FONT
    var xBrief = 1 //INDEXING INPUT Brief
    var counterWarp_Brief = [0] //INDEX STORAGE Brief
    var warpInput_Brief = $("#inputBrief-Warp") //WARP INPUT Brief
    var _fileList = []
    // START FUNC BRIEF

    function addMoreBrief() {
        warpInput_Brief.append(`
            <div class="col-lg-12 col-md-12" id="warpBrief_${xBrief}" style="margin-top: 10px">
                <input type="file" id="inputBrief_Hidden_${xBrief}" hidden oninput="briefUploadStage(this.files, ${xBrief})">
                <div class="input-group bootstrap-touchspin">
                    <input disabled id="indexBrief_${xBrief}" style="background-color: white;"  type="text" placeholder="No file choosen" data-bts-button-down-class="btn btn-secondary btn-outline" data-bts-button-up-class="btn btn-secondary btn-outline" class="form-control" style="display: block;">
                    <div class="input-group-append bootstrap-touchspin-postfix" style="display: none;">
                        <span class="input-group-text"></span>
                    </div>
                    <div class="input-group-append">
                        <button class="btn btn-success  bootstrap-touchspin-up" type="button" onclick="openBrowseFile(${xBrief})">
                            <i class="fa fa-upload"></i> Choose File
                        </button>
                    </div>
                    <div class="input-group-append" >
                        <button id="plusBrief_${xBrief}" class="btn btn-primary bootstrap-touchspin-up" type="button" onclick="addMoreBrief()">+</button>
                        <button id="spliceBrief_${xBrief}" class="btn btn-danger bootstrap-touchspin-up" type="button" hidden onclick="spliceBrief(${xBrief})"> - </button>    
                    </div>
                </div>
            </div>`)
        if(counterWarp_Brief.length == 1) {
            $(`#spliceBrief_${counterWarp_Brief[0]}`).removeAttr('hidden')
            $(`#plusBrief_${counterWarp_Brief[0]}`).attr('hidden', true)
        } else {
            $(`#spliceBrief_${counterWarp_Brief[ counterWarp_Brief.findIndex(_brief => _brief == (xBrief - 1)) ]}`).removeAttr('hidden')
            $(`#plusBrief_${counterWarp_Brief[ counterWarp_Brief.findIndex(_brief => _brief == (xBrief - 1)) ]}`).attr('hidden', true)
        }
        counterWarp_Brief.push(xBrief)
        xBrief++;
    }

    function spliceBrief( warpNumber ) {
        if(counterWarp_Brief.length > 1) {
            $.ajax({
                type: 'POST',
                url: '/delete/file',
                data: {fileName: _fileList[_fileList.findIndex(_val => _val.warpNumber == warpNumber)].value},
                success: async function(dataSuccess){
                    if(dataSuccess.success) {
                        $(`#warpBrief_${warpNumber}`).remove()
                        await counterWarp_Brief.splice(counterWarp_Brief.findIndex( _warpNumber => _warpNumber == warpNumber ), 1)
                        await _fileList.splice(_fileList.findIndex(_item => _item.warpNumber == warpNumber), 1)
                        if(counterWarp_Brief.length == 1) {
                            $(`#spliceBrief_${counterWarp_Brief[0]}`).attr("hidden", true);
                            $(`#plusBrief_${counterWarp_Brief[0]}`).removeAttr('hidden')
                        }
                    } 
                },
                error: function(dataError) {
                    console.log(dataError)
                }
            });
            
        }
    }

    function openBrowseFile( warpNumber ) {
        $(`#inputBrief_Hidden_${warpNumber}`).click()
    }

    function briefUploadStage( value, warpNumber ) {
        let _formData = new FormData();
        if(value && value.length > 0) {
            let ext = value[0].name.split('.')
            if(ext && ext.length > 1 ) {
                if(ext[1] == "pdf" || ext[1] == "doc" || ext[1] == "docx") {
                    try {
                        _formData.append('file', value[0])
                        $.ajax({
                            type: 'POST',
                            url: '/upload/brief',
                            data: _formData,
                            processData: false,
                            contentType: false,
                            success: function(uploadSuccess){
                                if(_fileList.findIndex(_val => _val.warpNumber == warpNumber) > -1) {
                                    $.ajax({
                                        type: 'POST',
                                        url: '/delete/file',
                                        data: {fileName: _fileList[_fileList.findIndex(_val => _val.warpNumber == warpNumber)].value},
                                        success: async function(dataSuccess){
                                            if(dataSuccess.success) {
                                                _fileList[_fileList.findIndex(_val => _val.warpNumber == warpNumber)].value = uploadSuccess.file_name
                                                $(`#indexBrief_${warpNumber}`).val(value[0].name)
                                            } 
                                        },
                                        error: function(dataError) {
                                            console.log(dataError)
                                        }
                                    });
                                } else {
                                    _fileList.push({
                                        warpNumber: warpNumber,
                                        value: uploadSuccess.file_name
                                    })
                                    $(`#indexBrief_${warpNumber}`).val(value[0].name)
                                }
                            },
                            error: function(dataError) {
                                console.log(dataError)
                            }
                        });
                    } catch (_error) {
                        console.log(_error)
                    }
                } else {
                    $("#error-briefUpload").click()
                }
            } else {
                $("#error-briefUpload").click()
            }
        }
    }

    // END FUNC BRIEF
    var deadlines
    function deadlineSelected(data) {
        deadlines = data
    }
    

    function submition () {
        var id = $("input[name=id]").val();
        var product_id = $("input[name=product_id]").val();        
        var quantity = $("input[name=quantity]").val();        
        // SIZE
        var width = $("#sizeW").val()
        var height = $("#sizeH").val()
        var size = `${width}X${height}`

        var orientation 
        if (width > height) {
            orientation = "Landscape"
        } else if (width < height) {
            orientation = "Portrait"
        } else {
            orientation = ""
        }
        
        var duration = $("input[name=duration]").val();

        // TARGET AUDIENCE
        let audience = []
        let isAudience = false
        counterWarp_Audience.map(_counter => {
            if($(`#indexAudience_${_counter}`).val() || $(`#indexAudience_${_counter}`).val() ) {
                audience.push({
                    value: $(`#indexAudience_${_counter}`).val() 
                })
                isAudience = true
            }
        })

        // STYLES
        let style = []
        let isStyle = false
        counterWarp_Style.map(_counter => {
            if($(`#indexStyle_${_counter}`).val() || $(`#indexStyle_${_counter}`).val() ) {
                style.push({
                    value: $(`#indexStyle_${_counter}`).val() 
                })
                isStyle = true
            }
        })

        // COLOR
        let color = []
        let isColor = false
        counterWarp_Color.map(_counter => {
            if($(`#indexColor_${_counter}`).val() || $(`#indexColor_${_counter}`).val() ) {
                color.push({
                    value: $(`#indexColor_${_counter}`).val() 
                })
                isColor = true
            }
        })

        // FONT
        var font = []
        let isFont = false
        counterWarp_Font.map(_counter => {
            if($(`#indexFont_${_counter}`).val() || $(`#indexFont_${_counter}`).val() ) {
                font.push({
                    value: $(`#indexFont_${_counter}`).val() 
                })
                isFont = true
            }
        })

        var output = outputs
        var deadline = deadlines;        

        // BRIEF
        var briefUrl = $("#linkBrief").val()
        let briefFile = _fileList
        
        let dataWill_Post = {
            id: id,
            product_id: product_id,
            quantity: quantity,
            orientation: orientation,
            size: size,
            duration: duration,
            target_audience: audience,
            styles: style,
            color: color,
            font: font,
            output: output,
            deadline: deadline,
            briefUrl: briefUrl,
            briefFile: briefFile
        }
        console.log(dataWill_Post)
        

        if( deadline ){
            console.log('will post')
            $.ajax({
                    type: 'POST',
                    url: '/cart/add',
                    data: dataWill_Post,
                    success: function(data) {
                        console.log(data)
                        $("#toast-launcher").click()
                        // setTimeout(() => {
                        //     window.location.href = "/category"
                        // }, 1000);
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
