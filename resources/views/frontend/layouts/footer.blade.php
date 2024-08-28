<!-- Footer -->
<footer class="footer style1 bg-image-2" style="background-image: url('{{ asset('frontend') }}/assets/img/background/bg-5.png');">
    <div class="footer-top">
        <div class="container">
            <div class="footer--inner">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-6 mb-5 mb-md-0">
                        <div class="footer-widget">
                            <div class="footer-nav">
                                <ul>
                                    <li class="menu-item"><a href="{{ route('about.us') }}">About Us</a></li>
                                    <li class="menu-item"><a href="{{ route('terms.condition') }}">Terms And Conditions</a></li>
                                    <li class="menu-item"><a href="{{ route('privacy.policy') }}">Privacy Policy</a></li>

                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 mb-5 mb-md-0 order-1 order-md-0">
                        <div class="footer-widget text-center">
                            <div class="logo mr-bottom-55">
                                <a href="{{ url('/') }}" class="">
                                    @if($setting->first()->white_logo != null)
                                        <img width="30%" src="{{ asset('uploads/setting') }}/{{ $setting->first()->white_logo }}" alt="logo">
                                    @else
                                        <img width="30%" src="{{ asset('uploads/setting') }}/{{ $setting->first()->black_logo }}" alt="logo" >
                                    @endif
                                </a>
                            </div>

                            {{-- <h6 class="widget-title">Sign up for all the latest <br> news and offers </h6>
                            <form class="newsletter-form" method="post">
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="Enter your email" required>
                                </div>
                                <button type="submit" class="btn btn-two">
                                    <span class="btn-wrap">
                                        <span class="text-first">Subscribe</span>
                                        <span class="text-second"><i class="bi bi-arrow-up-right"></i> <i class="bi bi-arrow-up-right"></i></span>
                                    </span>
                                </button>
                            </form> --}}
                            <div class="text-center">
                                @if($setting->first()->about != null)
                                    <p class="text-white">{{Str::limit( $setting->first()->about, 110, '...') }}</p>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 mb-5 mb-md-0">
                        <div class="footer-widget text-md-end">
                            <div class="footer-nav">
                                <ul>
                                    <li class="menu-item"><a href="{{ route('our.videos') }}">Videos</a></li>
                                    <li class="menu-item"><a href="{{ route('gallery') }}">Gallery</a></li>
                                    <li class="menu-item"><a href="{{ route('contect') }}">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Bottom Part -->
    <div class="footer-bottom">
        <div class="container">
            <div class="footer-bottom-inner">
                <div class="copyright">
                    @if($setting->first()->footer != null)
                        <p><a href="{{ $setting->first()->footer }}">{{ $setting->first()->footer }}</a>, All Rights Reserved</p>
                    @endif
                </div>
                <div class="social-box style-oval">
                    <ul>
                        @if ($setting->first()->fb_link)
                            <li><a href="{{ $setting->first()->fb_link }}" class="bi bi-facebook"></a></li>
                        @endif
                        @if ($setting->first()->youtube_link)
                            <li><a href="{{ $setting->first()->youtube_link }}" class="bi bi-youtube"></a></li>
                        @endif
                        @if ($setting->first()->insta_link)
                            <li><a href="{{ $setting->first()->insta_link }}" class="bi bi-instagram"></a></li>
                        @endif
                        @if ($setting->first()->linkind_link)
                            <li><a href="{{ $setting->first()->linkind_link }}" class="bi bi-linkedin"></a></li>
                        @endif
                        @if ($setting->first()->tweeter_link)
                            <li><a href="{{ $setting->first()->tweeter_link }}" class="bi bi-twitter"></a></li>
                        @endif
                        
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>