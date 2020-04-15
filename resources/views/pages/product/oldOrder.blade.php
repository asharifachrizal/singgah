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
                                        <div class="slide" data-thumb="{{ asset('canvas/images/shop/thumbs/dress/3.jpg') }}"><a href="{{ asset('canvas/images/shop/dress/3.jpg') }}" title="Pink Printed Dress - Front View" data-lightbox="gallery-item"><img src="{{ asset('canvas/images/shop/dress/3.jpg') }}" alt="Pink Printed Dress"></a></div>
                                        <div class="slide" data-thumb="{{ asset('canvas/images/shop/thumbs/dress/3-1.jpg') }}"><a href="{{ asset('canvas/images/shop/dress/3-1.jpg') }}" title="Pink Printed Dress - Side View" data-lightbox="gallery-item"><img src="{{ asset('canvas/images/shop/dress/3-1.jpg') }}" alt="Pink Printed Dress"></a></div>
                                        <div class="slide" data-thumb="{{ asset('canvas/images/shop/thumbs/dress/3-2.jpg') }}"><a href="{{ asset('canvas/images/shop/dress/3-2.jpg') }}" title="Pink Printed Dress - Back View" data-lightbox="gallery-item"><img src="{{ asset('canvas/images/shop/dress/3-2.jpg') }}" alt="Pink Printed Dress"></a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="sale-flash">Sale!</div>
                        </div><!-- Product Single - Gallery End -->
    
                    </div>
    
                    <div class="col_three_fifth product-desc">
                        <form class="row" id="#" action="{{ route('cart.additem')}}" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="id" value="">
                            
                            <div class="col-12 form-group">
                                <label for="nama-produk">Product:</label>
                                <select class="form-control required" name="namaproduk" id="nama-produk">
                                        <option value="brosur">Brosur</option>
                                        <option value="poster">Poster</option>
                                        <option value="banner">Banner</option>
                                        <option value="baliho">Baliho</option>
                                        <option value="kartu-nama">Kartu Nama</option>
                                </select>
            
                            </div>
                                    
                            <div class="col-12 form-group">
                                <label for="jenis-produk">Jenis Produk:</label>
                                <select class="form-control required" name="orientation" id="jenis-produk">
                                        <option value="landscape">Landscape</option>
                                        <option value="potrait">Potrait</option>
                                        <option value="horizontal">Horizontal</option>
                                        <option value="vertikal">Vertikal</option>
                                </select>
                            </div>
                            <div class="col-6 form-group">
                                <label for="kuatiti-produk">Kuantiti:</label><br>
                                <input type="number" name="kuatiti-produk" id="quantity" class="form-control required" value="" placeholder="minimal 1" min="1">
                            </div>
                            <div class="col-6 form-group">
                                <label for="ukuran-rasio-produk">Ukuran/rasio:</label><br>
                                <input type="text" name="ukuran-rasio-produk" id="size" class="form-control required" value="" placeholder="ukuran produk">
                            </div>
                            <div class="col-12 form-group">
                                <label for="tone-produk">Tone</label>
                                <textarea class="form-control required" id="tone-produk" name="tone" rows="3" placeholder="warna, font-style, color grading"></textarea>
                            </div>
                            <div class="col-12 form-group">
                                <label for="design-style-produk">Design Style</label>
                                <textarea class="form-control required" id="style" name="style" rows="3" placeholder="contoh: simple, elegant, animation, etc."></textarea>
                            </div>
                            <div class="col-12 form-group">
                                <label for="target-audience-produk">Target Audience:</label><br>
                                <input type="text" name="target-audience-produk" id="target_audience" class="form-control required" value="" placeholder="anak-anak-dewasa / 4-6">
                            </div>
                            <div class="col-12 form-group">
                                <label for="obj-brief-produk">Objective Brief</label>
                                <textarea class="form-control required" id="obj-brief-produk" name="brief" rows="3" placeholder="Brief detail produk"></textarea>
                            </div>
                            <div class="col-6 form-group">
                                <label for="deadline-produk">Deadline:</label><br>
                                <select class="form-control required" name="deadline" id="deadline-produk">
                                        <option value="segera">Segera</option>
                                        <option value="normal">Nomral</option>
                                </select>
                            </div>
                            <div class="col-6 form-group">
                                <label for="output-produk">Output:</label><br>
                                <input type="text" name="output-produk" id="output" class="form-control required" value="" placeholder="format file">
                            </div>
                            <div class="col-12 form-group">
                                <label for="standart-pattern-produk">Standart Pattern</label>
                                <textarea class="form-control required" id="pattern" name="standart-pattern-produk" rows="3" placeholder="standart pattern yang diinginkan"></textarea>
                            </div>
                            <div class="col-12 form-group">
                                <button type="submit" class="btn btn-lg btn-secondary">Add to cart</button>
                            </div>
                        </form>
    
                        {{-- <div>
                            <!-- Product Single - Price
                            ============================================= -->
                            <div class="product-price"><del>$39.99</del> <ins>$24.99</ins></div><!-- Product Single - Price End -->
    
                            <!-- Product Single - Rating
                            ============================================= -->
                            <div class="product-rating">
                                <i class="icon-star3"></i>
                                <i class="icon-star3"></i>
                                <i class="icon-star3"></i>
                                <i class="icon-star-half-full"></i>
                                <i class="icon-star-empty"></i>
                            </div><!-- Product Single - Rating End -->
    
                            <div class="clear"></div>
                            <div class="line"></div>
    
                            <!-- Product Single - Quantity & Cart Button
                            ============================================= -->
                            <form class="cart nobottommargin clearfix" method="post" enctype='multipart/form-data'>
                                <div class="quantity clearfix">
                                    <input type="button" value="-" class="minus">
                                    <input type="text" step="1" min="1"  name="quantity" value="1" title="Qty" class="qty" size="4" />
                                    <input type="button" value="+" class="plus">
                                </div>
                                <button type="submit" class="add-to-cart button nomargin">Add to cart</button>
                            </form><!-- Product Single - Quantity & Cart Button End -->
    
                            <div class="clear"></div>
                            <div class="line"></div>
    
                            <!-- Product Single - Short Description
                            ============================================= -->
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero velit id eaque ex quae laboriosam nulla optio doloribus! Perspiciatis, libero, neque, perferendis at nisi optio dolor!</p>
                            <p>Perspiciatis ad eveniet ea quasi debitis quos laborum eum reprehenderit eaque explicabo assumenda rem modi.</p>
                            <ul class="iconlist">
                                <li><i class="icon-caret-right"></i> Dynamic Color Options</li>
                                <li><i class="icon-caret-right"></i> Lots of Size Options</li>
                                <li><i class="icon-caret-right"></i> 30-Day Return Policy</li>
                            </ul><!-- Product Single - Short Description End -->
    
                            <!-- Product Single - Meta
                            ============================================= -->
                            <div class="card product-meta">
                                <div class="card-body">
                                    <span itemprop="productID" class="sku_wrapper">SKU: <span class="sku">8465415</span></span>
                                    <span class="posted_in">Category: <a href="#" rel="tag">Dress</a>.</span>
                                    <span class="tagged_as">Tags: <a href="#" rel="tag">Pink</a>, <a href="#" rel="tag">Short</a>, <a href="#" rel="tag">Dress</a>, <a href="#" rel="tag">Printed</a>.</span>
                                </div>
                            </div><!-- Product Single - Meta End -->
    
                            <!-- Product Single - Share
                            ============================================= -->
                            <div class="si-share noborder clearfix">
                                <span>Share:</span>
                                <div>
                                    <a href="#" class="social-icon si-borderless si-facebook">
                                        <i class="icon-facebook"></i>
                                        <i class="icon-facebook"></i>
                                    </a>
                                    <a href="#" class="social-icon si-borderless si-twitter">
                                        <i class="icon-twitter"></i>
                                        <i class="icon-twitter"></i>
                                    </a>
                                    <a href="#" class="social-icon si-borderless si-pinterest">
                                        <i class="icon-pinterest"></i>
                                        <i class="icon-pinterest"></i>
                                    </a>
                                    <a href="#" class="social-icon si-borderless si-gplus">
                                        <i class="icon-gplus"></i>
                                        <i class="icon-gplus"></i>
                                    </a>
                                    <a href="#" class="social-icon si-borderless si-rss">
                                        <i class="icon-rss"></i>
                                        <i class="icon-rss"></i>
                                    </a>
                                    <a href="#" class="social-icon si-borderless si-email3">
                                        <i class="icon-email3"></i>
                                        <i class="icon-email3"></i>
                                    </a>
                                </div>
                            </div><!-- Product Single - Share End -->
                        </div> --}}
                        
                    </div>
    
                    
                </div>
            </div>
        </div>
    </div>