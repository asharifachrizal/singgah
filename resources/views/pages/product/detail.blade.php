@extends('layouts.mk')

@section('title')
Jasa Desain | Singgah
@endsection

@section('styles')
<!-- toast CSS -->
<link href="{{ asset('material/plugins/toast-master/css/jquery.toast.css') }}" rel="stylesheet">
@endsection

@section('content')

<!-- breadcrumb start -->
<div class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="page-title">
                    <h2>Produk</h2></div>
            </div>
            <div class="col-sm-6">
                <nav aria-label="breadcrumb" class="theme-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Beranda</a></li>
                        <li class="breadcrumb-item" aria-current="page">Produk</li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $product->name }}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb End -->


<!-- section start -->
<section>
    <div class="collection-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-1 col-sm-2 col-xs-12">
                    <div class="row">
                        <div class="col-12 p-0">
                            <div class="slider-right-nav">
                                @foreach ($product->productImage as $row)
                                    <div><img src="{{ asset('uploads/' . $row->img_path) }}" alt="" class="img-fluid blur-up lazyload"></div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-sm-10 col-xs-12 order-up">
                    <div class="product-right-slick">
                        @foreach ($product->productImage as $row)
                            <div><img src="{{ asset('uploads/' . $row->img_path) }}" alt="" class="img-fluid blur-up lazyload image_zoom_cls-0"></div>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-6 rtl-text">
                    <div class="product-right">
                        <h2>{{ $product->name }}</h2>
                        {{-- <h4><del>{{ $product->priceBeforeDisplay }}</del><span>diskon 55%</span></h4>
                        <h3>{{ $product->priceDisplay }}</h3> --}}
                        {{-- <ul class="color-variant">
                            <li class="bg-light0"></li>
                            <li class="bg-light1"></li>
                            <li class="bg-light2"></li>
                        </ul> --}}
                        <div class="product-description border-product">
                            <h6 class="product-title">quantity</h6>
                            <div class="qty-box">
                                <div class="input-group"><span class="input-group-prepend"><button type="button" class="btn quantity-left-minus" data-type="minus" data-field=""><i class="ti-angle-left"></i></button> </span>
                                    <input type="text" name="quantity" class="form-control input-number" value="1"> <span class="input-group-prepend"><button type="button" class="btn quantity-right-plus" data-type="plus" data-field=""><i class="ti-angle-right"></i></button></span></div>
                            </div>
                            <br>
                            @if($product->category_id == 3)
                            <h6 class="product-title">duration</h6>
                            <div class="qty-box">
                                <div class="input-group1">
                                    <input type="time" name="duration" class="form-control input-number" > </div>
                            </div>
                            @else
                            <h6 class="product-title">ratio</h6>
                            <div class="qty-box">
                                <div class="input-group1">
                                    <input type="number" name="ratio1" > X <input type="number" name="ratio2" > </div>
                            </div>
                            @endif
                            <br>
                            @if($product->name == "Poster")
                            <h6 class="product-title">Jenis</h6>
                            <div class="qty-box">
                                <select class="form-control" id="sel1">
                                    <option>Landscape</option>
                                    <option>Potrait</option>
                                </select>
                            </div>
                            @elseif($product->name == "Banner")
                            <h6 class="product-title">Jenis</h6>
                            <div class="qty-box">
                                <select class="form-control" id="sel1">
                                    <option>Horizontal/Spanduk</option>
                                    <option>Vertikal/Rontek</option>
                                </select>
                            </div>
                            @elseif($product->name == "Baliho")
                            <h6 class="product-title">Jenis</h6>
                            <div class="qty-box">
                                <select class="form-control" id="sel1">
                                    <option>Vertical</option>
                                    <option>Horizontal</option>
                                </select>
                            </div>
                            @elseif($product->name == "Konten IG")
                            <h6 class="product-title">Jenis</h6>
                            <div class="qty-box">
                                <select class="form-control" id="sel1">
                                    <option>Feeds</option>
                                    <option>IG Story</option>
                                </select>
                            </div>
                            @elseif($product->name == "Bumper")
                            <h6 class="product-title">Jenis</h6>
                            <div class="qty-box">
                                <select class="form-control" id="sel1">
                                    <option>Short Bumper (max 15sec)</option>
                                    <option>Long Bumper (>15sec)</option>
                                </select>
                            </div>
                            @endif
                            <h6 class="product-title">Tone</h6>
                            <div class="qty-box">
                                <div class="input-group"><span class="input-group-prepend"><button type="button" class="btn quantity-left-minus" data-type="minus" data-field=""><i class="ti-angle-left"></i></button> </span>
                                    <input type="text" name="quantity" class="form-control input-number" value="1"> <span class="input-group-prepend"><button type="button" class="btn quantity-right-plus" data-type="plus" data-field=""><i class="ti-angle-right"></i></button></span></div>
                            </div>
                        </div>
                        <div class="product-buttons">
                            <a href="#" data-toggle="modal" data-target="#addtocart" class="btn btn-solid add-shopping-cart-button" data-product={{ $product->slug }}>Tambah ke Keranjang</a>
                            <a href="{{ route('cart.checkout') }}" class="btn btn-solid">Beli Sekarang</a>
                        </div>
                        <div class="border-product">
                            <h6 class="product-title">Deskripsi</h6>
                            <p>Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt, explicabo. Nemo enim ipsam voluptatem,</p>
                        </div>
                        <div class="border-product">
                            <h6 class="product-title">Bagikan</h6>
                            <div class="product-icon">
                                <ul class="product-social">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                </ul>
                                <form class="d-inline-block">
                                    <button class="wishlist-btn"><i class="fa fa-heart"></i><span class="title-font">Tambahkan ke WishList</span></button>
                                </form>
                            </div>
                        </div>
                        {{-- <div class="border-product">
                            <h6 class="product-title">Time Reminder</h6>
                            <div class="timer">
                                <p id="demo"><span>25 <span class="padding-l">:</span> <span class="timer-cal">Days</span> </span><span>22 <span class="padding-l">:</span> <span class="timer-cal">Hrs</span> </span><span>13 <span class="padding-l">:</span> <span class="timer-cal">Min</span> </span><span>57 <span class="timer-cal">Sec</span></span>
                                </p>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Section ends -->


<!-- product-tab starts -->
<section class="tab-product m-0">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <ul class="nav nav-tabs nav-material" id="top-tab" role="tablist">
                    <li class="nav-item"><a class="nav-link active" id="top-home-tab" data-toggle="tab" href="#top-home" role="tab" aria-selected="true">Detil</a>
                        <div class="material-border"></div>
                    </li>
                    <li class="nav-item"><a class="nav-link" id="review-top-tab" data-toggle="tab" href="#top-review" role="tab" aria-selected="false">Tulis Komentar</a>
                        <div class="material-border"></div>
                    </li>
                </ul>
                <div class="tab-content nav-material" id="top-tabContent">
                    <div class="tab-pane fade show active" id="top-home" role="tabpanel" aria-labelledby="top-home-tab">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    </div>
                    <div class="tab-pane fade" id="top-review" role="tabpanel" aria-labelledby="review-top-tab">
                        <form class="theme-form">
                            <div class="form-row">
                                <div class="col-md-12">
                                    <div class="media">
                                        <label>Rating</label>
                                        <div class="media-body ml-3">
                                            <div class="rating three-star"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" id="name" placeholder="Enter Your name" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control" id="email" placeholder="Email" required>
                                </div>
                                <div class="col-md-12">
                                    <label for="review">Review Title</label>
                                    <input type="text" class="form-control" id="review" placeholder="Enter your Review Subjects" required>
                                </div>
                                <div class="col-md-12">
                                    <label for="review">Review Title</label>
                                    <textarea class="form-control" placeholder="Wrire Your Testimonial Here" id="exampleFormControlTextarea1" rows="6"></textarea>
                                </div>
                                <div class="col-md-12">
                                    <button class="btn btn-solid" type="submit">Submit YOur Review</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- product-tab ends -->


<!-- product section start -->
<section class="section-b-space ratio_asos">
    <div class="container">
        <div class="row">
            <div class="col-12 product-related">
                <h2>Produk Lainnya</h2></div>
        </div>
        <div class="row search-product">
            @foreach ($relatedProducts as $row)
            <div class="col-xl-2 col-md-4 col-sm-6">
                <div class="product-box">
                    <div class="img-wrapper">
                        <div class="front">
                            <a href="{{ route('product.detail', [$row->category->slug, $row->slug]) }}"><img src="{{ asset('uploads/' . $row->productImage[0]->img_path) }}" class="img-fluid blur-up lazyload bg-img" alt=""></a>
                        </div>
                        <div class="back">
                            <a href="{{ route('product.detail', [$row->category->slug, $row->slug]) }}"><img src="{{ asset('uploads/' . $row->productImage[1]->img_path) }}" class="img-fluid blur-up lazyload bg-img" alt=""></a>
                        </div>
                        <div class="cart-info cart-wrap">
                            <button data-toggle="modal" data-target="#addtocart"  title="Add to cart"><i class="ti-shopping-cart" ></i></button> <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a> <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare"><i class="ti-reload" aria-hidden="true"></i></a></div>
                    </div>
                    <div class="product-detail">
                        <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div><a href="product-page(no-sidebar).html"><h6>{{ $row->name }}</h6></a>
                        <h4>{{ $row->priceBefore }}</h4>
                        {{-- <ul class="color-variant">
                            <li class="bg-light0"></li>
                            <li class="bg-light1"></li>
                            <li class="bg-light2"></li>
                        </ul> --}}
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>
<!-- product section end -->

@endsection

@section('scripts')
<script src="{{ asset('material/plugins/toast-master/js/jquery.toast.js') }}"></script>
<script src="{{ asset('material/js/toastr.js') }}"></script>
<script>
    $(document).ready(function() {
        $('.add-shopping-cart-button').click(function(){
            var APP_URL = {!! json_encode(url('/')) !!}

            var product_slug = $(this).attr('data-product');
            console.log(product_slug);

            var url =  APP_URL + "/keranjang/tambah/" + product_slug;

            $.ajax
            ({
                url: url,
                type: 'post',
                success: function(result)
                {
                    $.toast({
                        heading: result['heading'],
                        text: result['message'],
                        position: 'bottom-right',
                        bgColor: result['bg-color'],
                        loaderBg: '#ffa250',
                        icon: result['alert-type'],
                        hideAfter: 3500,
                        stack: 6
                    });
                }
            });
        });
    });
    </script>
    @endsection
