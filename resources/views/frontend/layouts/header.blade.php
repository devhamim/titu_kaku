<!-- Main Header -->
<header class="header color-fixed">
    <!-- Lower Bar -->
    <div class="header-inner">
        <div class="container-fluid pe-0">
            <div class="d-flex align-items-center justify-content-between">
                <!-- Left Part -->
                <div class="header_left_part d-flex align-items-center">
                    <div class="logo">

                        <a href="{{ url('/') }}" class="headerlogo">
                            @if($setting->first()->white_logo != null)
                                <img src="{{ asset('uploads/setting') }}/{{ $setting->first()->white_logo }}" alt="logo">
                            @else
                                <img src="{{ asset('uploads/setting') }}/{{ $setting->first()->black_logo }}" alt="logo" >
                            @endif
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
                                <a href="{{ route('albums') }}">Album</a>
                            </li> 
                            <li class="menu-item">
                                <a href="{{ route('our.stories') }}">Stories</a>
                            </li> 
                            <li class="menu-item">
                                <a href="{{ route('our.videos') }}">Videos</a>
                            </li> 
                            <li class="menu-item">
                                <a href="{{ route('gallery') }}">Gallery</a>
                            </li>  
                            <li class="menu-item">
                                <a href="{{ route('about.us') }}">About Us</a>
                            </li>
                            <li class="menu-item ">
                                <a href="{{ route('contect') }}">Enquire</a>
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
                    @if($setting->first()->email != null)
                        <p class="wptb-item--description"><a href="mailto:{{ $setting->first()->email }}">{{ $setting->first()->email }}</a></p>
                    @endif
                    
            </div>
        </div>
    </div>

    <div class="wptb-icon-box1 style2">
        <div class="wptb-item--inner flex-start">
            <div class="wptb-item--icon"><i class="bi bi-geo-alt"></i></div>
            <div class="wptb-item--holder">
                @if($setting->first()->address != null)
                    <p class="wptb-item--description"><a>{{ $setting->first()->address }}</a></p>
                @endif
                
            </div>
        </div>
    </div>

    <div class="wptb-icon-box1 style2">
        <div class="wptb-item--inner flex-start">
            <div class="wptb-item--icon"><i class="bi bi-envelope"></i></div>
            <div class="wptb-item--holder">
                @if($setting->first()->number_one != null)
                    <p class="wptb-item--description"><a href="tel:{{ $setting->first()->number_one }}">{{ $setting->first()->number_one }}</a></p>
                @endif
            </div>
        </div>
    </div>

    <h6>Find Our Page</h6>
    <div class="social-box">
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

<div class="aside_info_wrapper" data-lenis-prevent>
    <button class="aside_close">Close <i class="bi bi-x-lg"></i></button>

    <div class="aside_logo logo">
        @if($setting->first()->white_logo != null)
            <a href="{{ url('/')}}" class="light_logo">
                <img src="{{ asset('uploads/setting') }}/{{ $setting->first()->white_logo }}" alt="logo">
            </a>
        @else
            <a href="{{ url('/')}}" class="dark_logo">
                <img src="{{ asset('uploads/setting') }}/{{ $setting->first()->black_logo }}" alt="logo">
            </a>
        @endif
    </div>

    <div class="aside_info_inner">
        @if($setting->first()->name != null)
            <h6>// {{ $setting->first()->name }}</h6>
        @endif
        <div class="wptb-icon-box1 style2">
            <div class="wptb-item--inner flex-start">
                <div class="wptb-item--icon"><i class="bi bi-envelope"></i></div>
                <div class="wptb-item--holder">
                    @if($setting->first()->email != null)
                        <p class="wptb-item--description"><a href="mailto:{{ $setting->first()->email }}">{{ $setting->first()->email }}</a></p>
                    @endif
                </div>
            </div>
        </div>

        <div class="wptb-icon-box1 style2">
            <div class="wptb-item--inner flex-start">
                <div class="wptb-item--icon"><i class="bi bi-geo-alt"></i></div>
                <div class="wptb-item--holder" style="text-align: left">
                    @if($setting->first()->address != null)
                        <p class="wptb-item--description"><a>{{ $setting->first()->address }}</a></p>
                    @endif
                </div>
            </div>
        </div>

        <div class="wptb-icon-box1 style2">
            <div class="wptb-item--inner flex-start">
                <div class="wptb-item--icon"><i class="bi bi-envelope"></i></div>
                <div class="wptb-item--holder">
                    @if($setting->first()->number_one != null)
                        <p class="wptb-item--description"><a href="tel:{{ $setting->first()->number_one }}">{{ $setting->first()->number_one }}</a></p>
                    @endif
                </div>
            </div>
        </div>

        <h6>// Follow Us</h6>
        <div class="social-box style-square">
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
