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
                                        <label for="jenis-produk">Jenis Produk:</label>
                                        <select disabled class="form-control required" >
                                                <option value="{{$product->value}}">{{$product->value}}</option>                                                
                                        </select>
                                    </div>
                                    <div class="col-6 form-group">
                                        <label for="kuatiti-produk">Kuantiti:</label><br>
                                        <input required type="number" name="quantity" id="quantity" class="form-control required" value="1" placeholder="minimal 1" min="1">
                                    </div>
                                    @if($product->id == 3 || $product->id == 5 || $product->id == 7 )
                                    <div class="col-6 form-group">
                                        <label for="deadline-produk">Orientasi:</label><br>                                        
                                        <select required class="form-control required" name="orientation" id="orientation" onchange="orientationSelected(this.value)">
                                            <option value="pilih" selected disabled>PILIH</option>
                                            <option value="landscape">Landscape</option>
                                            <option value="horizontal">Horizontal</option>                                                
                                        </select>
                                    </div> 
                                    @else
                                        <select hidden required class="form-control required" name="orientation_" id="orientation_" onchange="orientationSelected(this.value)">
                                            <option value="null" selected disabled></option>                                            
                                        </select>
                                    @endif  
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
                                        <label for="target-audience-produk">Target Audience:</label><br>
                                        <input type="text" required name="target_audience" id="target_audience" class="form-control required" value="" placeholder="anak-anak-dewasa / Umur 24-30">
                                    </div>   
                                    @if($product->id <= 15)                                                                                                                                                                             
                                    <div class="col-12 form-group">
                                        <label for="design-style-produk">Design Style</label>
                                        <input type="text" required name="style" id="style" class="form-control required" value="" placeholder="contoh: simple, elegant, animation, etc.">                                        
                                    </div> 
                                    @endif                                    
                                    <div class="col-12 form-group">
                                        <label for="design-style-produk">Warna</label>
                                        <input type="text" required name="color" id="color" class="form-control required" value="" placeholder="Merah, Kuning">
                                    </div>
                                    <div class="col-12 form-group">
                                        <label for="design-style-produk">Grading Warna</label>
                                        <input type="text" required name="color_grading" id="color_grading" class="form-control required" value="" placeholder="Merah dan Putih">
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
                                    

                                    <div class="col-lg-12 bottommargin">
                                        <label>Select Multiple Items:</label><br>
                                        <div class="file-input file-input-new"><div class="file-preview ">
                                            <button type="button" class="close fileinput-remove" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>    
                                            <div class="file-drop-disabled">
                                                <div class="file-preview-thumbnails">
                                            </div>
                                            <div class="clearfix"></div>    <div class="file-preview-status text-center text-success"></div>
                                            <div class="kv-fileinput-error file-error-message" style="display: none;"></div>
                                            </div>
                                        </div>
                                        <div class="kv-upload-progress kv-hidden" style="display: none;"><div class="progress">
                                            <div class="progress-bar bg-success progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width:0%;">
                                                0%
                                            </div>
                                        </div></div><div class="clearfix"></div>
                                        <div class="input-group file-caption-main">
                                        <div class="file-caption form-control kv-fileinput-caption" tabindex="500">
                                        <span class="file-caption-icon"></span>
                                        <input class="file-caption-name" onkeydown="return false;" onpaste="return false;" placeholder="Select files...">
                                        </div>
                                        <div class="input-group-btn input-group-append">
                                            <button type="button" tabindex="500" title="Clear selected files" class="btn btn-default btn-secondary fileinput-remove fileinput-remove-button"><i class="glyphicon glyphicon-trash"></i>  <span class="d-none d-sm-inline-block">Remove</span></button>
                                            <button type="button" tabindex="500" title="Abort ongoing upload" class="btn btn-default btn-secondary kv-hidden fileinput-cancel fileinput-cancel-button"><i class="glyphicon glyphicon-ban-circle"></i>  <span class="d-none d-sm-inline-block">Cancel</span></button>
                                            
                                            <div tabindex="500" class="btn btn-primary btn-file"><i class="glyphicon glyphicon-folder-open"></i>&nbsp;  <span class="d-none d-sm-inline-block">Browse …</span><input id="input-3" name="input2[]" type="file" class="file" multiple="" data-show-upload="false" data-show-caption="true" data-show-preview="true"></div>
                                            </div>
                                        </div></div>
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

<script >
    $(document).ready(function() {
        $("#input-5").fileinput({showCaption: false});

        $("#input-6").fileinput({
            showUpload: false,
            maxFileCount: 10,
            mainClass: "input-group-lg",
            showCaption: true
        });

        $("#input-8").fileinput({
            mainClass: "input-group-md",
            showUpload: true,
            previewFileType: "image",
            browseClass: "btn btn-success",
            browseLabel: "Pick Image",
            browseIcon: "<i class=\"icon-picture\"></i> ",
            removeClass: "btn btn-danger",
            removeLabel: "Delete",
            removeIcon: "<i class=\"icon-trash\"></i> ",
            uploadClass: "btn btn-info",
            uploadLabel: "Upload",
            uploadIcon: "<i class=\"icon-upload\"></i> "
        });

        $("#input-9").fileinput({
            previewFileType: "text",
            allowedFileExtensions: ["txt", "md", "ini", "text"],
            previewClass: "bg-warning",
            browseClass: "btn btn-primary",
            removeClass: "btn btn-secondary",
            uploadClass: "btn btn-secondary",
        });

        $("#input-10").fileinput({
            showUpload: false,
            layoutTemplates: {
                main1: "{preview}\n" +
                "<div class=\'input-group {class}\'>\n" +
                "   <div class=\'input-group-append\'>\n" +
                "       {browse}\n" +
                "       {upload}\n" +
                "       {remove}\n" +
                "   </div>\n" +
                "   {caption}\n" +
                "</div>"
            }
        });

        $("#input-11").fileinput({
            maxFileCount: 10,
            allowedFileTypes: ["image", "video"]
        });

        $("#input-12").fileinput({
            showPreview: false,
            allowedFileExtensions: ["zip", "rar", "gz", "tgz"],
            elErrorContainer: "#errorBlock"
        });
    });

</script>


<script>
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
        var color = $("input[name=color]").val();
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
