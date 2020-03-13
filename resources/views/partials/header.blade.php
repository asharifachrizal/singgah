<!-- header start -->
<header class="header-2">
    <div class="mobile-fix-option"></div>
    <div class="top-header top-header-darkSinggah">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="header-contact">
                        <ul>
                            <li>Selamat datang di www.singgah.com</li>
                            <li><i class="fa fa-phone" aria-hidden="true"></i>Hubungi kami: 14045</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 text-right">
                    <ul class="header-dropdown">
                        @if(Sentinel::check())
                        <li class="mobile-wishlist"><a href="{{ route('user.setting') }}"><i class="fa fa-user" aria-hidden="true"></i> {{ Sentinel::getUser()->first_name }}</a></li>
                        <li class="mobile-wishlist"><a href="#" onclick="document.getElementById('logout-form').submit()"><i class="fa fa-sign-out-alt" aria-hidden="true"></i> Logout</a></li>
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
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="main-menu border-section border-top-0">
                    <div class="brand-logo layout2-logo">
                        <a href="{{ route('home') }}"><img src="{{ asset('mk/images/icon/logo/singgahLogo.png') }}" class="img-fluid blur-up lazyload" alt=""></a>
                    </div>
                    <div class="menu-right pull-right">
                        <div class="icon-nav">
                            <ul>
                                <li class="onhover-div mobile-search">
                                    <div><img src="{{ asset('mk/images/icon/search.png') }}" onclick="openSearch()" class="img-fluid blur-up lazyload" alt=""> <i class="ti-search" onclick="openSearch()"></i></div>
                                    <div id="search-overlay" class="search-overlay">
                                        <div><span class="closebtn" onclick="closeSearch()" title="Close Overlay">×</span>
                                            <div class="overlay-content">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-xl-12">
                                                            <form>
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Search a Product">
                                                                </div>
                                                                <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="onhover-div mobile-cart">
                                    <div>
                                        <a href="{{ route('cart') }}">
                                            <img src="{{ asset('mk/images/icon/cart.png') }}" class="img-fluid blur-up lazyload" alt=""> 
                                            <i class="ti-shopping-cart"></i>
                                        </a>
                                    </div>
                                </li>
                                <li class="onhover-div mobile-cart">
                                    <div>
                                        <a href="#">
                                            <img src="{{ asset('mk/images/icon/setting.png') }}" class="img-fluid blur-up lazyload" alt=""> 
                                            <i class="ti-shopping-cart"></i>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="main-nav-center">
                    <nav id="main-nav">
                        <div class="toggle-nav"><i class="fa fa-bars sidebar-bar"></i></div>
                        <!-- Sample menu definition -->
                        <ul id="main-menu" class="sm pixelstrap sm-horizontal">
                            <li>
                                <div class="mobile-back text-right">Kembali<i class="fa fa-angle-right pl-2" aria-hidden="true"></i></div>
                            </li>
                            <!-- <li>
                                <a href="#">Belanja</a>
                                <ul>
                                    @foreach ($data['headerCategories'] as $row)
                                        <li><a href="{{ route('category.detail', $row->slug) }}">{{ $row->name }}</a></li>
                                    @endforeach
                                </ul>
                            </li> -->
                            <li>
                                <a href="{{ route('cart') }}">Keranjang</a>
                            </li>
                            <li>
                                <a href="{{ route('promo') }}">Promo</a>
                            </li>
                            <li>
                                <a href="{{ route('faq') }}">FAQ</a>
                            </li>
                            <li>
                                <a href="{{ route('aboutUs') }}">Tentang Kami</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header end -->