<header class="mdl-layout__header mdl-layout__header--waterfall oxy-layout__header oxy-layout__header--transparent">
    <!-- Top row, always visible -->
    <div class="mdl-layout__header-row">
        <!-- Title -->
        <a class="mdl-layout-title" href="{{ route('home') }}">
            <img src="{{ asset('fab/images/logo.png') }}" alt="FAB!">
        </a>
        <div class="mdl-layout-spacer"></div>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable mdl-textfield--floating-label mdl-textfield--align-right">
            <label class="mdl-button mdl-js-button mdl-button--icon" for="waterfall-exp">
                <i class="material-icons">search</i>
            </label>
            <div class="mdl-textfield__expandable-holder">
                <input class="mdl-textfield__input" type="text" name="sample" id="waterfall-exp" />
            </div>
        </div>
    </div>
    <!-- Bottom row, not visible on scroll -->
    <div class="mdl-layout__header-row">
        <div class="mdl-layout-spacer"></div>
        <!-- Navigation -->
        <nav class="mdl-navigation mdl-layout--large-screen-only">
            <a class="mdl-navigation__link" href="{{ route('product') }}">BELANJA</a>
            <a class="mdl-navigation__link" href="{{ route('cart') }}">KERANJANG</a>
            @if(Sentinel::check())
                <a class="mdl-navigation__link" href="#">AKUN ( {{ Sentinel::getUser()->email }} )</a>    
                <form action="{{ route('postLogout') }}" method="POST" id="logout-form">
                <a class="mdl-navigation__link" href="#" onclick="document.getElementById('logout-form').submit()"><i class="fa fa-share"></i> </a> 
                </form>
            @else
                <a class="mdl-navigation__link" href="{{ route('login') }}">AKUN </a>
            @endif
        </nav>
    </div>
</header>