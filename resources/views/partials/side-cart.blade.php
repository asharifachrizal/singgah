<div class="mdl-layout__drawer mdl-layout__drawer--right oxy-product-cart">
    <span class="mdl-layout-title">Keranjang</span>
    <div class="oxy-layout__divider"></div>
    <div class="oxy-product-cart__body">
        <ul id="ulSideCart" class="oxy-list">
            <li class="oxy-list__item">
                <div class="oxy-list__item-text">
                    <a href="{{ route('product') }}" class="oxy-list__title">
                        Pilih Produk
                    </a>
                </div>
            </li>
        </ul>
        <div class="oxy-product-cart__actions">
            <div class="oxy-layout__divider"></div>
            <h3 class="oxy-product-cart__total">
                Subtotal: Rp. 127.500
            </h3>
            <div class="oxy-layout__divider"></div>
            <div class="mdl-grid">
                <div class="mdl-cell mdl-cell--6-col mdl-cell--4-col-tablet mdl-cell--2-col-phone">
                    <a href="cart.html" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--accent oxy-full-width">
                      Keranjang
                    </a>
                </div>
                <div class="mdl-cell mdl-cell--6-col mdl-cell--4-col-tablet mdl-cell--2-col-phone">
                    <a href="checkout.html" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--primary oxy-full-width">
                      Bayar
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="side-cart-obfuscator" class="mdl-layout__obfuscator"></div>