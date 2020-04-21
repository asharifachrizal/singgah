<header id="header" class="full-header">

    <div id="header-wrap">

        <div class="container clearfix">

            <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

            <!-- Logo
            ============================================= -->
            <div id="logo">
                <a href="{{ route('home') }}" class="standard-logo" data-dark-logo="{{ asset('singgah/logos/logo-1.png') }}"><img src="{{ asset('singgah/logos/logo-1.png') }}" alt="Singgah Logo"></a>
                <a href="{{ route('home') }}" class="retina-logo" data-dark-logo="{{ asset('singgah/logos/logo-1.png') }}"><img src="{{ asset('singgah/logos/logo-1.png') }}" alt="Singgah Logo"></a>
            </div><!-- #logo end -->

            <!-- Primary Navigation
            ============================================= -->
            <nav id="primary-menu">

                <ul>
                    <li><a href="{{ route('home') }}"><div>Home</div></a></li>
                    <li><a href="{{ route('product') }}"><div>Product</div></a></li>
                    <li><a href="{{ route('aboutUs') }}"><div>About Us</div></a></li>
                    <li><a href="{{ route('faq') }}"><div>FAQ</div></a></li>
                    @if(Sentinel::check())
                        <li class="mobile-wishlist"><a href="{{ route('profile')}}"><i class="fa fa-user" aria-hidden="true"></i>{{ Sentinel::getUser()->full_name }}</a></li>
                        <li class="mobile-wishlist"><a href="#" onclick="document.getElementById('logout-form').submit()"><i class="fa fa-sign-out-alt" aria-hidden="true"></i> Logout</a></li>
                    @else
                        <li><a href="{{ route('login') }}"><div>Login</div></a></li>
                    @endif
                    
                <form action="{{ route('postLogout') }}" method="POST" id="logout-form">
                </form>
                </ul>


                <!-- Top Cart
                ============================================= -->
                <div id="top-cart">
                    
                    <a href="{{ route('cartUser')}}" ><i class="icon-shopping-cart"></i>
                        <span id="total-cart"></span>
                    </a>
                    
                </div><!-- #top-cart end -->

            </nav><!-- #primary-menu end -->

        </div>

    </div>

</header><!-- #header end -->
<script>
    window.onload = function() {
        $.ajax({
                type: 'GET',
                url: '/listcart',
                success: function(data) {
                    let totalCart = data.carts.length
                    if(totalCart != 0) {
                        document.getElementById('total-cart').style.display = "block";
                        document.getElementById('total-cart').innerHTML = totalCart
                    } else {
                        document.getElementById('total-cart').style.display = "none";
                    }
                },
                error: function(data) {
                    console.log(data)
                }
        });
    };
</script>