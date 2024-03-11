@php
    $footer = App\Models\FooterSetting::all()->first();
@endphp
<footer class="footer-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="footer-wiget wow animate__zoomIn">
                    <div class="footer-wiget-log">
                        <!-- <a href="index.html"><img src="{{ asset('frontend') }}/assets/images/resource/footer-logo.png" alt=""></a> -->
                    </div>
                    <div class="footer-wiget-text">
                        <p>Feugiat a ligula rutrum luctus primis ultrice nteger congue magna at pretium purus a pretium
                            ligula rutrum and luctus risus</p>
                    </div>
                    <div class="footer-wiget-social">
                        <ul>
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-vimeo-v"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="footer-wiget wow animate__slideInDown">
                    <div class="footer-wiget-title">
                        <h4>Industry Sectors</h4>
                    </div>
                    <div class="footer-wiget-menu">
                        <ul>
                            <li><a href="#">Contact us</a></li>
                            <li><a href="#">How it Works</a></li>
                            <li><a href="#"> Office Create</a></li>
                            <li><a href="#">Residential Explore</a></li>
                            <li><a href="#">Terms & Services</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="footer-wiget-quick-contanct wow animate__slideInUp">
                    <div class="footer-wiget-title">
                        <h4>Get In Touch</h4>
                    </div>
                    <div class="footer-wiget-contact-menu">
                        <ul>
                            <li>{{ $footer->fullAddress ?? 'Valentin, Street Road 24, New York, USA - 67452' }}</li>
                            <li>{{ $footer->phone ?? '(+02) 574 - 328 - 30' }}</li>
                            <li>{{ $footer->email ?? 'example@gmail.com' }}</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
        <div class="row footer-line">

        </div>
    </div>
</footer>
