<header class="header-tools marketplace">
    <div class="mobile-fix-option"></div>
    <div class="top-header">
        <div class="container-fluid custom-container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="header-contact">
                        <ul>

                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 text-right">
                    <ul class="header-dropdown">
                        <!-- <li class="mobile-wishlist"><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a> -->
                        </li>
                        @if(Sentinel::check())
                        <li class="onhover-dropdown mobile-account"> <i class="fa fa-user" aria-hidden="true"></i>
                            {{ Sentinel::getUser()->full_name }}
                            <ul class="onhover-show-div">
                                <li><a href="{{ route('login')}}" data-lng="en">Login</a></li>
                                <li><a href="#" onclick="document.getElementById('logout-form').submit()" data-lng="es">Logout</a></li>
                                <li class="mobile-wishlist"><a href="{{ route('user.setting') }}">Setting</a></li>
                            </ul>
                        </li>
                        @else
                        <li class="mobile-wishlist"><a href="{{ route('login') }}"><i class="fa fa-sign-in-alt" aria-hidden="true"></i> Login</a></li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <form action="{{ route('postLogout') }}" method="POST" id="logout-form">
    </form>
    <div class="container-fluid custom-container">
        <div class="row">
            <div class="col-sm-12">
                <div class="main-menu">
                    <div class="menu-left">
                        <div class="brand-logo">
                            <a href="{{ route('home') }}"><img src="{{ asset('mk/images/dashboard/singgahLogo.png') }}"
                                    class="img-fluid blur-up lazyload" alt=""></a>
                        </div>
                    </div>
                    <div class="menu-right pull-right">
                        <div>
                            <nav id="main-nav">
                                <div class="toggle-nav"><i class="fa fa-bars sidebar-bar"></i></div>
                                <ul id="main-menu" class="sm pixelstrap sm-horizontal">
                                    <li>
                                        <div class="mobile-back text-right">Back<i class="fa fa-angle-right pl-2"
                                                aria-hidden="true"></i></div>
                                    </li>
                                    <li>
                                        <a href="{{ route('product') }}">product</a>
                                        <ul>
                                            <li>
                                                <a href="#">new demos <span class="new-tag">new</span></a>
                                                <ul>
                                                    <li><a target="_blank"
                                                            href="marketplace-demo.html">marketplace</a></li>
                                                    <li><a target="_blank" href="tools.html">tools</a></li>
                                                    <li><a target="_blank" href="game.html">game</a></li>
                                                    <li><a target="_blank" href="gym-product.html">gym</a></li>
                                                    <li><a target="_blank" href="marijuana.html">marijuana</a></li>
                                                    <li><a target="_blank" href="left_sidebar-demo.html">left
                                                            sidebar</a></li>
                                                    <li><a target="_blank" href="jewellery.html">jewellery</a></li>
                                                    <li><a target="_blank" href="pets.html">pets</a></li>
                                                    <li><a target="_blank" href="metro.html">metro</a></li>
                                                    <li><a target="_blank" href="video-slider.html">video slider</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#">clothing</a>
                                                <ul>
                                                    <li><a target="_blank" href="index.html">fashion 1</a></li>
                                                    <li><a target="_blank" href="fashion-2.html">fashion 2</a></li>
                                                    <li><a target="_blank" href="fashion-3.html">fashion 3</a></li>
                                                    <li><a target="_blank" href="kids.html">kids</a></li>
                                                </ul>
                                            </li>
                                            <li><a target="_blank" href="watch.html">watch</a></li>
                                            <li><a target="_blank" href="shoes.html">shoes</a></li>
                                            <li>
                                                <a href="#">electronics</a>
                                                <ul>
                                                    <li><a target="_blank" href="electronic-1.html">electronic 1</a>
                                                    </li>
                                                    <li><a target="_blank" href="electronic-2.html">electronic 2</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a target="_blank" href="bags.html">bags</a></li>
                                            <li><a target="_blank" href="nursery.html">nursery</a></li>
                                            <li><a target="_blank" href="flower.html">flower</a></li>
                                            <li><a target="_blank" href="vegetables.html">vegetable</a></li>
                                            <li><a target="_blank" href="beauty.html">beauty</a></li>
                                            <li><a target="_blank" href="light.html">light</a></li>
                                            <li><a target="_blank" href="furniture.html">furniture</a></li>
                                            <li><a target="_blank" href="goggles.html">googles</a></li>
                                            <li>
                                                <a href="#">basics</a>
                                                <ul>
                                                    <li><a target="_blank" href="lookbook-demo.html">lookbook</a>
                                                    </li>
                                                    <li><a target="_blank" href="instagram-shop.html">instagram</a>
                                                    </li>
                                                    <li><a target="_blank" href="video.html">video</a></li>
                                                    <li><a target="_blank" href="parallax.html">parallax</a></li>
                                                    <li><a target="_blank" href="full-page.html">full page</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="{{ route('aboutUs') }}">about us</a>
                                        <ul>
                                            <li><a href="category-page.html">left sidebar</a></li>
                                            <li><a href="category-page(right).html">right sidebar</a></li>
                                            <li><a href="category-page(no-sidebar).html">no sidebar</a></li>
                                            <li><a href="category-page(sidebar-popup).html">sidebar popup</a></li>
                                            <li><a href="category-page(metro).html">metro <span
                                                        class="new-tag">new</span></a></li>
                                            <li><a href="category-page(full-width).html">full width <span
                                                        class="new-tag">new</span></a></li>
                                            <li><a href="category-page(infinite-scroll).html">infinite scroll</a>
                                            </li>
                                            <li><a href=category-page(3-grid).html>3 grid</a></li>
                                            <li><a href="category-page(6-grid).html">6 grid</a></li>
                                            <li><a href="category-page(list-view).html">list view</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="{{ route('faq') }}">faq</a>
                                        <ul>
                                            <li>
                                                <a href="#">sidebar</a>
                                                <ul>
                                                    <li><a href="product-page.html">left sidebar</a></li>
                                                    <li><a href="product-page(right-sidebar).html">right sidebar</a>
                                                    </li>
                                                    <li><a href="product-page(no-sidebar).html">no sidebar</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#">thumbnail image</a>
                                                <ul>
                                                    <li><a href="product-page(left-image).html">left image</a></li>
                                                    <li><a href="product-page(right-image).html">right image</a>
                                                    </li>
                                                    <li><a href="product-page(image-outside).html">image outside
                                                            <span class="new-tag">new</span></a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#">3 column</a>
                                                <ul>
                                                    <li><a href="product-page(3-col-left).html">thumbnail left</a>
                                                    </li>
                                                    <li><a href="product-page(3-col-right).html">thumbnail right</a>
                                                    </li>
                                                    <li><a href="product-page(3-column).html">thubnail bottom</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="product-page(4-image).html">4 image <span
                                                        class="new-tag">new</span></a></li>
                                            <li><a href="product-page(sticky).html">sticky</a></li>
                                            <li><a href="product-page(accordian).html">accordian</a></li>
                                            <li><a href="product-page(bundle).html">bundle<span
                                                        class="new-tag">new</span></a></li>
                                            <li><a href="product-page(image-swatch).html">image swatch <span
                                                        class="new-tag">new</span></a></li>
                                            <li><a href="product-page(vertical-tab).html">vertical tab</a></li>
                                        </ul>
                                    </li>

                                </ul>
                            </nav>
                        </div>
                        <div>
                            <div class="icon-nav">
                                <ul>

                                    <li class="onhover-div mobile-cart">
                                        <div><img src="{{ asset('mk/images/icon/cart.png') }}"
                                                class="img-fluid blur-up lazyload" alt=""> <i
                                                class="ti-shopping-cart"></i></div>
                                        <ul class="show-div shopping-cart">
                                            <li>
                                                <div class="media">
                                                    <a href="#"><img class="mr-3"
                                                            src="../assets/images/fashion/product/1.jpg"
                                                            alt="Generic placeholder image"></a>
                                                    <div class="media-body">
                                                        <a href="#">
                                                            <h4>item name</h4>
                                                        </a>
                                                        <h4><span>1 x $ 299.00</span></h4>
                                                    </div>
                                                </div>
                                                <div class="close-circle"><a href="#"><i class="fa fa-times"
                                                            aria-hidden="true"></i></a></div>
                                            </li>
                                            <li>
                                                <div class="media">
                                                    <a href="#"><img class="mr-3"
                                                            src="../assets/images/fashion/product/2.jpg"
                                                            alt="Generic placeholder image"></a>
                                                    <div class="media-body">
                                                        <a href="#">
                                                            <h4>item name</h4>
                                                        </a>
                                                        <h4><span>1 x $ 299.00</span></h4>
                                                    </div>
                                                </div>
                                                <div class="close-circle"><a href="#"><i class="fa fa-times"
                                                            aria-hidden="true"></i></a></div>
                                            </li>
                                            <li>
                                                <div class="total">
                                                    <h5>subtotal : <span>$299.00</span></h5>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="buttons"><a href="cart.html" class="view-cart">view
                                                        cart</a> <a href="#" class="checkout">checkout</a></div>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
