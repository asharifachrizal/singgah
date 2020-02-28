<div class="rev_slider_wrapper fullwidthbanner-container">
    <div id="homepage-slider" class="rev_slider" data-version="5.0">
        <ul>
            @foreach ($slider as $row)
            <li data-title="{{ $row->title }}"
                data-index="{{ $row->title }}"
                data-thumb="{{ url($row->slider_path) }}"
                >

                <!-- MAIN IMAGE -->
                <img src="{{ url($row->slider_path) }}"
                    alt="{{ $row->title }}"
                    data-bgposition="center top"
                    data-kenburns="on"
                    data-duration="7000"
                    data-scalestart="100"
                    data-scaleend="110"
                    data-offsetstart="-50 100"
                    data-offsetend="100 -150"
                    data-bgfit="105"
                    data-bgfitend="100"
                    data-bgpositionend="center bottom">
                <!-- LAYERS -->

                <!-- LAYER NR. 1 -->
                <div class="tp-caption tp-resizeme mdl-typography--display-3 mdl-typography--font-thin oxy-color-light"
                    data-x="left"
                    data-hoffset="500"
                    data-y="top"
                    data-voffset="250"
                    data-transform_in="o:0;e:Power4.easeIn;"
                    data-transform_idle="o:1;s:1000;"
                    data-transform_out="o:0;s:500;e:Power4.easeOut;"
                    data-start="1000">
                    THIS IS FAB!
                </div>

                <!-- LAYER NR. 2 -->
                <div class="tp-caption tp-resizeme"
                    data-x="left"
                    data-y="top"
                    data-hoffset="500"
                    data-voffset="335"
                    data-start="1500"
                    data-transform_in="o:0;e:Power1.easeIn;"
                    data-transform_idle="o:1;s:500;"
                    data-transform_out="o:0;s:500;e:Power4.easeOut;"
                    style="height: 1px; width: 200px;background: #fff;">
                </div>

                <!-- LAYER NR. 3 -->
                <div class="tp-caption tp-resizeme mdl-typography--title mdl-typography--font-light oxy-color-light"
                    data-x="left"
                    data-y="top"
                    data-hoffset="500"
                    data-voffset="360"
                    data-start="2000"
                    data-transform_in="o:0;e:Power4.easeIn;"
                    data-transform_idle="o:1;s:600;"
                    data-transform_out="o:0;s:600;e:Power1.easeOut;">
                    <p style="font-size: 21px; line-height: 1.5">
                        All the latest trends and labels are available. <br>
                        Get ready for Autumn with our latest range of stylish clothing.<br>
                        <strong>Free Delivery</strong> on all items over $50 <br>
                    </p>
                </div>

                <!-- LAYER NR. 4 -->
                <div class="tp-caption tp-resizeme tp-caption-mdl-button mdl-button mdl-button--raised mdl-button--colored"
                    data-x="left"
                    data-y="top"
                    data-hoffset="500"
                    data-voffset="480"
                    data-start="3000"
                    data-transform_in="o:0;y:100;"
                    data-transform_idle="x:0;o:1;s:600;"
                    data-transform_out="o:0;s:800;e:Power1.easeOut;">
                    <a href="#" style="color: #fff;">Shop Womens</a>
                </div>
            </li>   
            @endforeach
        </ul>
    </div>
</div>
