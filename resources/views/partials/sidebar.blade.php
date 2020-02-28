<div class="mdl-card mdl-shadow--2dp oxy-widget">
    <div class="mdl-card__title oxy-widget__title mdl-card--border">
        <h3 class="mdl-card__title-text">
            Kategori
        </h3>
    </div>
    <div class="mdl-card__supporting-text oxy-widget__content">
        <ul class="oxy-list">
            @foreach ($categories as $row)
                <li class="oxy-list__item">
                    <div class="oxy-list__item-text">
                        <a href="shop.html" class="oxy-list__title">
                            {{ $row->name }} ({{ $row->product->count() }})
                        </a>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</div>

<div class="mdl-card mdl-shadow--2dp oxy-widget">
    <div class="mdl-card__title oxy-widget__title mdl-card--border">
        <h3 class="mdl-card__title-text">
            Pencarian Produk
        </h3>
    </div>
    <div class="mdl-card__supporting-text oxy-widget__content">
        <form action="#">
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input class="mdl-textfield__input" type="text" id="product_search" />
                <label class="mdl-textfield__label" for="product_search">Masukkan kata kunci...</label>
            </div>
            <div class="mdl-typography--text-right">
                <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--primary">
                    Cari
                </button>
            </div>
        </form>
    </div>
</div>

<div class="mdl-card mdl-shadow--2dp oxy-widget">
    <div class="mdl-card__title oxy-widget__title mdl-card--border">
        <h3 class="mdl-card__title-text">
            Filter Harga
        </h3>
    </div>
    <div class="mdl-card__supporting-text oxy-widget__content">
        <form action="#">
            <!-- Default Slider -->
            <input class="mdl-slider mdl-js-slider" type="range" min="0" max="100" value="30" tabindex="0"/>
            <div class="mdl-grid mdl-grid--no-spacing oxy-margin-top-20">
                <div class="mdl-cell mdl-cell--6-col mdl-cell--4-col-tablet mdl-cell--4-phone mdl-cell--middle">
                    <span>Harga: Rp 10.000 - Rp 50.000</span>
                </div>
                <div class="mdl-cell mdl-cell--6-col mdl-cell--4-col-tablet mdl-cell--4-phone mdl-cell--middle mdl-typography--text-right">
                    <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--raised mdl-button--colored">
                        Cari
                    </button>
                </div>
            </div>

        </form>

    </div>
</div>