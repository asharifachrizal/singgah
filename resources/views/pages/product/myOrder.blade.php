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
                                        <select disabled class="form-control required" name="orientation" id="jenis-produk">
                                                <option value="landscape">{{$product->value}}</option>                                                
                                        </select>
                                    </div>
                                    <div class="col-6 form-group">
                                        <label for="kuatiti-produk">Kuantiti:</label><br>
                                        <input required type="number" name="quantity" id="quantity" class="form-control required" value="1" placeholder="minimal 1" min="1">
                                    </div>
                                    <div class="col-6 form-group">
                                        <label for="deadline-produk">Orientasi:</label><br>
                                        <select required class="form-control required" name="orientation" onchange="orientationSelected(this.value)">
                                            <option value="pilih" selected disabled>PILIH</option>
                                            <option value="landscape">Landscape</option>
                                            <option value="horizontal">Horizontal</option>                                                
                                        </select>
                                    </div>                                    
                                    <div class="col-6 form-group">
                                        <label for="ukuran-rasio-produk">Ukuran/rasio:</label><br>
                                        <input type="text" required name="size" id="size" class="form-control required" value="" placeholder="1280 x 870">
                                    </div>  
                                    <div class="col-6 form-group">
                                        <label for="ukuran-rasio-produk">Durasi</label><br>
                                        <input type="text" required name="duration" id="duration" class="form-control required" value="" placeholder="120 Detik">
                                    </div>    
                                    <div class="col-12 form-group">
                                        <label for="target-audience-produk">Target Audience:</label><br>
                                        <input type="text" required name="target_audience" id="target_audience" class="form-control required" value="" placeholder="anak-anak-dewasa / Umur 24-30">
                                    </div>                                                                                                                                                                              
                                    <div class="col-12 form-group">
                                        <label for="design-style-produk">Design Style</label>
                                        <textarea class="form-control required" id="style" name="style" rows="3" placeholder="contoh: simple, elegant, animation, etc."></textarea>
                                    </div>                                    
                                    <div class="col-12 form-group">
                                        <label for="design-style-produk">Warna</label>
                                        <input type="text" required name="color" id="target_audience" class="form-control required" value="" placeholder="Merah, Kuning">
                                    </div>
                                    <div class="col-12 form-group">
                                        <label for="design-style-produk">Grading Warna</label>
                                        <input type="text" required name="color_grading" id="target_audience" class="form-control required" value="" placeholder="Merah dan Putih">
                                    </div>                                    
                                    <div class="col-12 form-group">
                                        <label for="design-style-produk">Font</label>
                                        <input type="text" required name="font" id="target_audience" class="form-control required" value="" placeholder="Arial, Calibri">
                                    </div>                                    
                                    <div class="col-6 form-group">
                                        <label for="output-produk">Output File Type:</label><br>
                                        <input type="text" required name="output" id="output" class="form-control required" value="" placeholder=".PSD , .PNG, .JPEG">
                                    </div>                                                                                                            
                                    <div class="col-6 form-group">
                                        <label for="deadline-produk">Deadline:</label><br>
                                        <select class="form-control required" name="deadline" id="deadline-produk" onchange="deadlineSelected(this.value)">
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
        var orientation = orientations;
        var size = $("input[name=size]").val();
        var duration = $("input[name=duration]").val();
        var target_audience = $("input[name=target_audience]").val();                
        var style = $("input[name=style]").val();
        var color = $("input[name=color]").val();
        var color_grading = $("input[name=color_grading]").val();
        var font = $("input[name=font]").val();
        var output = $("input[name=output]").val();        
        var deadline = deadlines;
        var brief_url = $("input[name=brief_url]").val();
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
                        output: output,
                        deadline: deadline,                    
                        brief_url: brief_url,
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
