<div class="mdl-grid mdl-grid--no-fullwidth">
    @foreach ($products as $row)
    <div class="mdl-cell mdl-cell--3-col mdl-cell--2-col-tablet mdl-cell--4-col-phone oxy-margin-bottom-40 oxy-animation" data-os-animation="fadeIn" data-os-animation-delay="0.1s">
        <!-- new card -->
        <div class="mdl-card mdl-shadow--2dp oxy-card-product">
            <div class="mdl-card__media oxy-card-product__media">
                <a href="{{ route('product.detail', $row->slug) }}">
                    @foreach($row->productImage as $rowItem)
                    <img alt="some product" class="oxy-card-product__image" src="{{ asset('storage/' . $rowItem->img_path) }}" />
                    @endforeach
                </a>
                <div class="mdl-card__title oxy-card-product__title">
                    <h3 class="mdl-card__title-text oxy-card-product__title-text">
                        <a href="{{ route('product.detail', $row->slug) }}" class="mdl-typography--font-light">{{ $row->name }}</a>
                    </h3>
                    <span class="mdl-typography--text-uppercase mdl-typography--font-bold oxy-card-product__tags">
                        <a href="shop.html" rel="tag">{{ $row->category->name }}</a>
                    </span>
                </div>
                <div class="oxy-card-product__badge oxy-product-badge">
                    Sale
                </div>
            </div>
            <div class="mdl-card__actions oxy-card-product-actions">
                <strong class="mdl-typography--headline oxy-product-price">
                    <del>
                        <span>{{ $row->price_before_display }}</span>
                    </del>
                    <ins>
                        <span>{{ $row->price_display }}</span>
                    </ins>
                </strong>
                <a class="add-shopping-cart-button mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect" data-slug="{{ $row->slug }}">
                    <i class="material-icons">add_shopping_cart</i>
                </a>
            </div>
        </div>
    </div>
    @endforeach
</div>