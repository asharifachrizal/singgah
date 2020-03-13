<!-- footer -->
<footer class="footer-light">
    <div class="light-layout">
        <div class="container">
            <section class="small-section border-section border-top-0">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="subscribe">
                            <div>
                                <h4>LEBIH DEKAT DENGAN KAMI!</h4>
                                <p>Langganan untuk update produk-produk terbari dari kami.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <form  class="form-inline subscribe-form auth-form needs-validation" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form"
                              >
                            <div class="form-group mx-sm-3">
                                <input type="text" class="form-control" name="EMAIL" id="mce-EMAIL" placeholder="Masukkan email anda" required="required">
                            </div>
                            <button type="submit" class="btn btn-solid" id="mc-submit">Langganan</button>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <section class="section-b-space light-layout">
        <div class="container">
            <div class="row footer-theme partition-f">
                <div class="col-lg-4 col-md-6">
                    <div class="footer-title footer-mobile-title">
                        <h4>about</h4>
                    </div>
                    <div class="footer-contant">
                        <div class="footer-logo"><img src="{{ asset('mk/images/icon/logo/singgahLogo.png') }}" alt=""></div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
                        <div class="footer-social">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col offset-xl-1">
                    <div class="sub-title">
                        <div class="footer-title">
                            <h4>LAYANAN</h4>
                        </div>
                        <div class="footer-contant">
                            <ul>
                                <li><a href="{{ route('faq') }}">FAQ</a></li>
                                <li><a href="{{ route('promo') }}">Promo</a></li>
                                <!-- <li><a href="#">Status Order</a></li> -->
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="sub-title">
                        <div class="footer-title">
                            <h4>Tentang Kami</h4>
                        </div>
                        <div class="footer-contant">
                            <ul>
                                <li><a href="{{ route('aboutUs') }}">Profil Perusahaan</a></li>
                                <li><a>Kebijakan Privasi</a></li>
                                <li><a>Hubungi Kami</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="sub-title">
                        <div class="footer-title">
                            <h4>Alamat</h4>
                        </div>
                        <div class="footer-contant">
                            <ul class="contact-list">
                                <li><i class="fa fa-map-marker"></i>Singgah, Jl. Raya Kenangan No. 20, Jakarta Selatan</li>
                                <li><i class="fa fa-phone"></i>Hubungi Kami: <br>021 - 555 - 8889</li>
                                <li><i class="fa fa-envelope-o"></i>Email Us: <br><a href="#">support@singgah.com</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="sub-footer">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-md-6 col-sm-12">
                    <div class="footer-end">
                        <p><i class="fa fa-copyright" aria-hidden="true"></i> 2020 Visiprop</p>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6 col-sm-12">
                    <div class="payment-card-bottom">
                        <ul>
                            <li>
                                <a href="#"><img src="{{ asset('mk/images/icon/visa.png') }}" alt=""></a>
                            </li>
                            <li>
                                <a href="#"><img src="{{ asset('mk/images/icon/mastercard.png') }}" alt=""></a>
                            </li>
                            <li>
                                <a href="#"><img src="{{ asset('mk/images/icon/paypal.png') }}" alt=""></a>
                            </li>
                            <li>
                                <a href="#"><img src="{{ asset('mk/images/icon/american-express.png') }}" alt=""></a>
                            </li>
                            <li>
                                <a href="#"><img src="{{ asset('mk/images/icon/discover.png') }}" alt=""></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer end -->