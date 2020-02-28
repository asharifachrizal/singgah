<footer class="mdl-mega-footer oxy-color-primary">
    <div class="mdl-mega-footer--middle-section">
        <div class="mdl-mega-footer--drop-down-section">
            <input class="mdl-mega-footer--heading-checkbox" type="checkbox" checked>
            <h1 class="mdl-mega-footer--heading">Tentang Kami</h1>
            <div class="mdl-mega-footer__widget">
                <p>
                    Lorem ipsum dolor sit amet adipisicing elit. Numquam corrupti in quam vel deleniti recusandae fugit. Eaque totam beatae autem, veritatis quasi suscipit?
                </p>
                <p>
                    An emphasis on consectetur actions makes core functionality immediately apparent laboriosam.
                </p>
            </div>
            <div class="mdl-mega-footer__widget">
                <i class="fa fa-cc-mastercard"></i>
                &nbsp;
                <i class="fa fa-cc-visa"></i>
                &nbsp;
                <i class="fa fa-cc-amex"></i>
                &nbsp;
                <i class="fa fa-cc-diners-club"></i>
                &nbsp;
                <i class="fa fa-cc-paypal"></i>
                &nbsp;
                <i class="fa fa-cc-jcb"></i>
            </div>
        </div>

        <div class="mdl-mega-footer--drop-down-section">
            <input class="mdl-mega-footer--heading-checkbox" type="checkbox" checked>
            <h1 class="mdl-mega-footer--heading">Jam Pelayanan</h1>
            <ul class="mdl-mega-footer--link-list mdl-mega-footer--link-list--bordered">
                <li>Senin <span class="oxy-inline-block oxy-float-right oxy-margin-right-40"> 10:00 - 20:00</span></li>
                <li>Selasa  <span class="oxy-inline-block oxy-float-right oxy-margin-right-40"> 12:00 - 21:00</span></li>
                <li>Rabu <span class="oxy-inline-block oxy-float-right oxy-margin-right-40"> 10:00 - 20:00</span></li>
                <li>Kamis  <span class="oxy-inline-block oxy-float-right oxy-margin-right-40"> 09:00 - 20:00</span></li>
                <li>Jum'at <span class="oxy-inline-block oxy-float-right oxy-margin-right-40"> 08:00 - 18:00</span></li>
                <li>Sabtu  <span class="oxy-inline-block oxy-float-right oxy-margin-right-40"> 12:00 - 20:00</span></li>
            </ul>
        </div>

        <div class="mdl-mega-footer--drop-down-section">
            <input class="mdl-mega-footer--heading-checkbox" type="checkbox" checked>
            <h1 class="mdl-mega-footer--heading">Produk Kami</h1>
            <div class="mdl-mega-footer__widget">
                @foreach ($data['footerProducts'] as $row)
                    <a href="single-product.html">
                        <img width="60" class="oxy-margin-bottom-10 oxy-margin-right-10" src="{{ asset('storage/' . $row->productImage->where('type', '1')->first()->img_path) }}" alt="product thumbnail">
                    </a>
                @endforeach
                
            </div>
        </div>
        <div class="mdl-mega-footer--drop-down-section">
            <input class="mdl-mega-footer--heading-checkbox" type="checkbox" checked>
            <h1 class="mdl-mega-footer--heading">Alamat</h1>
            <div class="mdl-mega-footer__widget">
                {{-- <p>
                    Contact us any time, we would love to hear from you.
                </p> --}}
                <p>
                    Nama Kantor
                    <br>
                    Jl. Kenangan No. 79 &amp; 80
                    <br>
                    Jakarta Selatan, Indonesia
                    <br/>
                    (021) 599 033
                    <br>
                </p>
                <p>
                    <a href="#">contohalamatwebsite.com</a>
                    <br>
                    info@contohalamatwebsite.com
                </p>
                <p>
                    <a href="#" class="mdl-button mdl-js-button mdl-button--icon">
                        <i class="fa fa-facebook"></i>
                    </a>
                    <a href="#" class="mdl-button mdl-js-button mdl-button--icon">
                        <i class="fa fa-twitter" ></i>
                    </a>
                    <a href="#" class="mdl-button mdl-js-button mdl-button--icon">
                        <i class="fa fa-flickr" ></i>
                    </a>
                    <a href="#" class="mdl-button mdl-js-button mdl-button--icon">
                        <i class="fa fa-linkedin" ></i>
                    </a>
                </p>
            </div>
        </div>
    </div>

    {{-- <div class="mdl-mega-footer--bottom-section">
        <div class="mdl-logo">Fab</div>
        <ul class="mdl-mega-footer--link-list">
            <li><a href="page-card.html">Conditions</a></li>
            <li><a href="page-card.html">Help</a></li>
            <li><a href="page-card.html">Privacy</a></li>
            <li><a href="page-card.html">Terms</a></li>
        </ul>
    </div> --}}
</footer>