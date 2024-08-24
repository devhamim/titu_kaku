<!-- Main Header -->
<header class="header color-fixed">
    <!-- Lower Bar -->
    <div class="header-inner">
        <div class="container-fluid pe-0">
            <div class="d-flex align-items-center justify-content-between">
                <!-- Left Part -->
                <div class="header_left_part d-flex align-items-center">
                    <div class="logo">
                        <a href="{{ url('/')}}" class="light_logo">
                            <img src="{{ asset('frontend/assets/img/logo.png') }}" alt="logo">
                        </a>
                        <a href="{{ url('/')}}" class="dark_logo">
                            <img src="{{ asset('frontend/assets/img/logo.png') }}" alt="logo">
                        </a>
                    </div>
                </div>

                <!-- Center Part -->
                <div class="header_center_part d-none d-xl-block">
                    <div class="mainnav">
                        <ul class="main-menu">
                            <li class="menu-item">
                                <a href="{{ url('/') }}">Home</a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ route('gallery') }}">Gallery</a>
                            </li>  
                            <li class="menu-item">
                                <a href="{{ route('about.us') }}">About Us</a>
                            </li>
                            <li class="menu-item ">
                                <a href="{{ route('contect') }}">Contact</a>
                            </li>                         
                            <li class="menu-item">
                                <a href="{{ route('blogs') }}">Blog</a>
                            </li> 
                        </ul>
                    </div>
                </div>

                <!-- Right Part -->
                <div class="header_right_part d-flex align-items-center">
                    <div class="aside_open wptb-element">
                        <div class="aside-open--inner">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>

                    <div class="header_search wptb-element">
                        <a href="#" class="modal_search_icon" data-bs-toggle="modal" data-bs-target="#modalSearch"><i class="bi bi-search"></i></a>
                    </div>

                    <button type="button" class="mr_menu_toggle wptb-element d-xl-none">
                        <i class="bi bi-list"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- End Main Header -->		

<!-- Mobile Responsive Menu -->
<div class="mr_menu" data-lenis-prevent>
    <button type="button" class="mr_menu_close"><i class="bi bi-x-lg"></i></button>
    <div class="logo"></div> <!-- Keep this div empty. Logo will come here by JavaScript -->
    
    <h6>Menu</h6>
    <div class="mr_navmenu"></div> <!-- Keep this div empty. Menu will come here by JavaScript -->

    <h6>Contact Us</h6>
    <div class="wptb-icon-box1 style2">
        <div class="wptb-item--inner flex-start">
            <div class="wptb-item--icon"><i class="bi bi-envelope"></i></div>
            <div class="wptb-item--holder">
                <p class="wptb-item--description"><a href="mailto:kimocare@gmail.com">kimocare@gmail.com</a></p>
            </div>
        </div>
    </div>

    <div class="wptb-icon-box1 style2">
        <div class="wptb-item--inner flex-start">
            <div class="wptb-item--icon"><i class="bi bi-geo-alt"></i></div>
            <div class="wptb-item--holder">
                <p class="wptb-item--description"><a href="contact-1.html">28 Street, New York, USA</a></p>
            </div>
        </div>
    </div>

    <div class="wptb-icon-box1 style2">
        <div class="wptb-item--inner flex-start">
            <div class="wptb-item--icon"><i class="bi bi-envelope"></i></div>
            <div class="wptb-item--holder">
                <p class="wptb-item--description"><a href="tel:+98765432122811">(+987) 654 321 228 11</a></p>
            </div>
        </div>
    </div>

    <h6>Find Our Page</h6>
    <div class="social-box">
        <ul>
            <li><a href="https://www.facebook.com/"><i class="bi bi-facebook"></i></a></li>
            <li><a href="https://www.instagram.com/"><i class="bi bi-instagram"></i></a></li>
            <li><a href="https://www.linkedin.com/"><i class="bi bi-linkedin"></i></a></li>
            <li><a href="https://www.behance.com/"><i class="bi bi-behance"></i></a></li>
            <li><a href="https://www.youtube.com/"><i class="bi bi-youtube"></i></a></li>
        </ul>
    </div>
</div>

<div class="aside_info_wrapper" data-lenis-prevent>
    <button class="aside_close">Close <i class="bi bi-x-lg"></i></button>

    <div class="aside_logo logo">
        <a href="{{ url('/')}}" class="light_logo">
            <img src="{{ asset('frontend/assets/img/logo.png') }}" alt="logo">
        </a>
        <a href="{{ url('/')}}" class="dark_logo">
            <img src="{{ asset('frontend/assets/img/logo.png') }}" alt="logo">
        </a>
    </div>

    <div class="aside_info_inner">

        <h6>// Instagram</h6>
        <div class="insta-logo">
            <i class="bi bi-instagram"></i> studio_kimono
        </div>
        <div class="wptb-instagram--gallery">
            <div class="wptb-item--inner d-flex align-items-center justify-content-center flex-wrap">
                <div class="wptb-item">
                    <div class="wptb-item--image">
                        <img src="{{ asset('frontend') }}/assets/img/instagram/6.jpg" alt="img">
                    </div>
                </div>

                <div class="wptb-item">
                    <div class="wptb-item--image">
                        <img src="{{ asset('frontend') }}/assets/img/instagram/7.jpg" alt="img">
                    </div>
                </div>

                <div class="wptb-item">
                    <div class="wptb-item--image">
                        <img src="{{ asset('frontend') }}/assets/img/instagram/8.jpg" alt="img">
                    </div>
                </div>

                <div class="wptb-item">
                    <div class="wptb-item--image">
                        <img src="{{ asset('frontend') }}/assets/img/instagram/9.jpg" alt="img">
                    </div>
                </div>

                <div class="wptb-item">
                    <div class="wptb-item--image">
                        <img src="{{ asset('frontend') }}/assets/img/instagram/10.jpg" alt="img">
                    </div>
                </div>
                
                <div class="wptb-item">
                    <div class="wptb-item--image">
                        <img src="{{ asset('frontend') }}/assets/img/instagram/11.jpg" alt="img">
                    </div>
                </div>
            </div>
        </div>


        <div class="wptb-icon-box1 style2">
            <div class="wptb-item--inner flex-start">
                <div class="wptb-item--icon"><i class="bi bi-envelope"></i></div>
                <div class="wptb-item--holder">
                    <p class="wptb-item--description"><a href="mailto:kimocare@gmail.com">kimocare@gmail.com</a></p>
                </div>
            </div>
        </div>

        <div class="wptb-icon-box1 style2">
            <div class="wptb-item--inner flex-start">
                <div class="wptb-item--icon"><i class="bi bi-geo-alt"></i></div>
                <div class="wptb-item--holder">
                    <p class="wptb-item--description"><a href="contact-1.html">28 Street, New York, USA</a></p>
                </div>
            </div>
        </div>

        <div class="wptb-icon-box1 style2">
            <div class="wptb-item--inner flex-start">
                <div class="wptb-item--icon"><i class="bi bi-envelope"></i></div>
                <div class="wptb-item--holder">
                    <p class="wptb-item--description"><a href="tel:+98765432122811">(+987) 654 321 228 11</a></p>
                </div>
            </div>
        </div>

        <h6>// Follow Us</h6>
        <div class="social-box style-square">
            <ul>
                <li><a href="https://www.facebook.com/"><i class="bi bi-facebook"></i></a></li>
                <li><a href="https://www.instagram.com/"><i class="bi bi-instagram"></i></a></li>
                <li><a href="https://www.linkedin.com/"><i class="bi bi-linkedin"></i></a></li>
                <li><a href="https://www.behance.com/"><i class="bi bi-behance"></i></a></li>
                <li><a href="https://www.youtube.com/"><i class="bi bi-youtube"></i></a></li>
            </ul>
        </div>
    </div>
</div>

<!-- Modal Search -->
<div class="search-modal">
    <div class="modal fade" id="modalSearch">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="search_overlay">
                    <form class="credential-form" method="post">
                        <div class="form-group">
                            <input type="text" name="search" class="keyword form-control" placeholder="Search Here">
                        </div>
                        <button type="submit" class="btn-search">
                            <span class="text-first"> <i class="bi bi-arrow-right"></i> </span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>