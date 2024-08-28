@extends('frontend.layouts.app')
@section('content')
<main class="wrapper">
    <!-- Slider Section -->
    <section class="wptb-slider style2">
        <div class="swiper-container wptb-swiper-slider-two">    
            <!-- swiper slides -->
            <div class="swiper-wrapper">
                <!-- Slide Item -->
                @foreach ($banners as $sl=>$banner)
                    <div class="swiper-slide">
                        <div class="wptb-slider--item">
                            <div class="wptb-slider--image" style="background-image: url('{{asset('uploads/banner')}}/{{ $banner->image }}');"></div>
                            <div class="wptb-slider--inner">
                                <!-- Layer Image -->
                                <div class="wptb-item-layer wptb-item-layer-one">
                                    <img src="{{ asset('frontend') }}/assets/img/slider/layer-3.png" alt="img">
                                </div>
                                <div class="wptb-heading">
                                    <div class="wptb-item--inner">
                                        <h1 class="wptb-item--title">{{ $banner->link }}</h1>
                                        {{-- <h6 class="wptb-item--subtitle"></h6> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                
                <!-- End Slide Item -->
            </div>
        </div>

        <!-- Left Pane -->
        <div class="wptb-left-pane justify-content-center">
            <div class="logo">
                <h6>Our Works</h6>
            </div>
        </div>

        <!-- Right Pane -->
        <div class="wptb-right-pane">
            <div class="social-box style-oval">
                <ul>
                    @if ($setting->first()->fb_link)
                            <li><a href="{{ $setting->first()->fb_link }}">FB</a></li>
                        @endif
                        @if ($setting->first()->youtube_link)
                            <li><a href="{{ $setting->first()->youtube_link }}">YT</a></li>
                        @endif
                        @if ($setting->first()->insta_link)
                            <li><a href="{{ $setting->first()->insta_link }}">IG</a></li>
                        @endif
                        @if ($setting->first()->linkind_link)
                            <li><a href="{{ $setting->first()->linkind_link }}">IN</a></li>
                        @endif
                        @if ($setting->first()->tweeter_link)
                            <li><a href="{{ $setting->first()->tweeter_link }}">TW</a></li>
                        @endif
                </ul>
            </div>
        </div>

        <!-- Bottom Pane -->
        <div class="wptb-bottom-pane justify-content-center">
            <!-- pagination dots -->
            <div class="wptb-swiper-dots style2">
                <div class="swiper-pagination"></div>
            </div>

            <!-- Swiper Navigation -->
            <div class="wptb-swiper-navigation style3">                      
                <div class="wptb-swiper-arrow swiper-button-prev"></div>
                <div class="wptb-swiper-arrow swiper-button-next"></div>
            </div>
        </div>
        
    </section>
    <!-- Our Portfolio -->
    <section class="wptb-project">
        <div class="container">
            <div class="effect-gradient has-radius">
                <div class="grid gutter-10 clearfix"> 
                    <div class="grid-sizer"></div>                          
                    <div class="row"> 
                        @foreach ($categorys->take(9) as $category)
                            <div class="grid-item col-md-4">
                                <div class="wptb-item--inner">
                                    <div class="wptb-item--image">
                                        <img src="{{asset('uploads/category')}}/{{ $category->image }}" alt="img">
                                       
                                    </div>
                                    <div class="wptb-item--holder">
                                        <div class="wptb-item--meta">
                                            <h4><a>{{Str::limit($category->name, '25', '')}}</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        @endforeach                   
                    </div>
                </div>
            </div>

            <div class="wptb-item--button text-center mt-5">
                <a class="btn btn-two text-uppercase" href="{{ route('gallery') }}">
                    <span class="btn-wrap">
                        <span class="text-first">See All Gallery</span>
                        <span class="text-second"> <i class="bi bi-arrow-up-right"></i> <i class="bi bi-arrow-up-right"></i> </span>
                    </span>
                </a>
            </div>
        </div>
    </section>

    <!-- Agency Experience -->
    <section class="wptb-agency-experience bg-image pb-xl-0" style="background-image: url('{{ asset('frontend') }}/assets/img/background/bg-13.jpg');">
        <div class="container">

            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="wptb-heading">
                        <div class="wptb-item--inner">
                            <h1 class="wptb-item--title lg mb-5">{{ $experience->title }} <br> <span class="text-outline">{{ $experience->subtitle }}</span></h1>
                            <p class="wptb-item--description">{{ $experience->description }}</p>
                            
                            <div class="wptb-agency-experience--item">
                                <span>{{ $experience->experience }}</span> Years Experience
                            </div>
                        </div>

                        <div class="wptb-image-single d-none d-xl-block wow fadeInUp">
                            <div class="wptb-item--inner">
                                <div class="wptb-item--image">
                                    <img src="{{ asset('uploads/experience') }}/{{ $experience->image }}" alt="img">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 ps-lg-5 mt-5">
                    <div class="wptb-counter1 style1 mr-bottom-100 wow skewIn">
                        <div class="wptb-item--inner">
                            <div class="wptb-item--holder d-flex align-items-center">
                                <div class="wptb-item--value"><span class="odometer" data-count="{{ $experience->list_one_number }}"></span><span class="suffix">+</span></div>
                                <div class="wptb-item--text">{{ $experience->list_one }}</div>
                            </div>
                        </div>
                    </div>

                    <div class="wptb-counter1 style1 mr-bottom-100 wow skewIn">
                        <div class="wptb-item--inner">
                            <div class="wptb-item--holder d-flex align-items-center">
                                <div class="wptb-item--value"><span class="odometer" data-count="{{ $experience->list_two_number }}"></span><span class="suffix">+</span></div>
                                <div class="wptb-item--text">{{ $experience->list_two }}</div>
                            </div>
                        </div>
                    </div>

                    <div class="wptb-counter1 style1 wow skewIn">
                        <div class="wptb-item--inner">
                            <div class="wptb-item--holder d-flex align-items-center">
                                <div class="wptb-item--value"><span class="odometer" data-count="{{ $experience->list_three_number }}"></span><span class="suffix"></span></div>
                                <div class="wptb-item--text">{{ $experience->list_three }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonial -->
    <section class="wptb-testimonial-one testimonial-colored bg-image" style="background-image: url('{{ asset('frontend') }}/assets/img/background/bg-16.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="swiper-container swiper-testimonial">    
                        <!-- swiper slides -->
                        <div class="swiper-wrapper">
                            @foreach ($clients as $client)
                                <div class="swiper-slide">
                                    <div class="wptb-testimonial1">
                                        <div class="wptb-item--inner">
                                            <div class="wptb-item--holder">
                                                <div class="d-flex align-items-center justify-content-between mr-bottom-25">
                                                    <div class="wptb-item--meta-rating">
                                                        <i class="bi bi-star-fill"></i>
                                                        <i class="bi bi-star-fill"></i>
                                                        <i class="bi bi-star-fill"></i>
                                                        <i class="bi bi-star-fill"></i>
                                                        <i class="bi bi-star-fill"></i>
                                                    </div>
                                                    
                                                    <div class="wptb-item--icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="57" height="45" viewBox="0 0 57 45" fill="none">
                                                            <path d="M51.5137 38.5537C56.8209 32.7938 56.2866 25.3969 56.2697 25.3125V2.8125C56.2697 2.06658 55.9734 1.35121 55.4459 0.823763C54.9185 0.296317 54.2031 0 53.4572 0H36.5822C33.48 0 30.9572 2.52281 30.9572 5.625V25.3125C30.9572 26.0584 31.2535 26.7738 31.781 27.3012C32.3084 27.8287 33.0238 28.125 33.7697 28.125H42.4266C42.3671 29.5155 41.9517 30.8674 41.22 32.0513C39.7913 34.3041 37.0997 35.8425 33.2156 36.6188L30.9572 37.0688V45H33.7697C41.5969 45 47.5678 42.8316 51.5137 38.5537ZM20.5566 38.5537C25.8666 32.7938 25.3294 25.3969 25.3125 25.3125V2.8125C25.3125 2.06658 25.0162 1.35121 24.4887 0.823763C23.9613 0.296317 23.2459 0 22.5 0H5.625C2.52281 0 0 2.52281 0 5.625V25.3125C0 26.0584 0.296316 26.7738 0.823762 27.3012C1.35121 27.8287 2.06658 28.125 2.8125 28.125H11.4694C11.41 29.5155 10.9945 30.8674 10.2628 32.0513C8.83406 34.3041 6.1425 35.8425 2.25844 36.6188L0 37.0688V45H2.8125C10.6397 45 16.6106 42.8316 20.5566 38.5537Z" fill="#D70006"/>
                                                        </svg>
                                                    </div>
                                                </div>

                                                <p class="wptb-item--description">
                                                    {{ $client->description }}</p>
                                                <div class="wptb-item--meta">
                                                    <div class="wptb-item--image">
                                                        <img src="{{ asset('uploads/client') }}/{{ $client->image }}" alt="img">
                                                    </div>
                                                    <div class="wptb-item--meta-left">
                                                        <h4 class="wptb-item--title">{{ $client->name }}</h4>
                                                        <h6 class="wptb-item--designation">{{ $client->address }}</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <!-- Swiper Navigation -->
                        <div class="wptb-swiper-navigation style1">                      
                            <div class="wptb-swiper-arrow swiper-button-prev"></div>
                            <div class="wptb-swiper-arrow swiper-button-next"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

     <!-- Albums -->
     <section class="wptb-album-one">
        <div class="wptb-project--inner">
            <div class="wptb-heading">
                <div class="wptb-item--inner text-center">
                    <h6 class="wptb-item--subtitle"> Photo Albums</h6>
                    <h1 class="wptb-item--title">Collection of photos <span>All of Our</span> <br> Best Works</h1>
                </div>
            </div>

            <div class="swiper-container swiper-gallery-two has-radius">
                <div class="swiper-wrapper">                            
                    <!-- Item -->
                    @foreach ($reviews as $review)
                        <div class="swiper-slide">
                            <div class="grid-item">
                                <div class="wptb-item--inner">
                                    <div class="wptb-item--image">
                                        <img src="{{ asset('uploads/review') }}/{{ $review->image }}" alt="img">
                                        
                                    </div>

                                    <div class="wptb-item--holder">
                                        <div class="wptb-item--meta">
                                            <h4><a>{{ $review->title }}</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Swiper Navigation -->
                <div class="wptb-swiper-navigation style2">                      
                    <div class="wptb-swiper-arrow swiper-button-prev"></div>
                    <div class="wptb-swiper-arrow swiper-button-next"></div>
                </div>
            </div>

            <div class="shadow-heading">
                <h1 class="wptb-item--title">Portfolio</h1>
            </div>
        </div>
    </section>

    <!-- Blog Grid -->
    <section class="wptb-blog-grid-one pb-0">
        <div class="container">
            <div class="wptb-heading">
                <div class="wptb-item--inner text-center">
                    <h6 class="wptb-item--subtitle"> Latest Storie</h6>
                    <h1 class="wptb-item--title">Collection of photos <span>All of Our</span> <br> Best Works</h1>
                </div>
            </div>
            
            <div class="wptb-blog--inner">    
                <div class="row">
                    @foreach ($stores as $store)
                        <div class="col-lg-4 col-sm-6">
                            <div class="wptb-blog-grid1 active highlight wow fadeInLeft">
                                <div class="wptb-item--inner">
                                    <div class="wptb-item--image">
                                        <a href="{{ route('stories.details',$store->slug ) }}" class="wptb-item-link"><img src="{{ asset('uploads/storie') }}/{{ $store->image }}" alt="img"></a>
                                    </div>
                                    <div class="wptb-item--holder">
                                        <div class="wptb-item--date mt-3">{{ $store->created_at->format('d M Y') }}</div>
                                        <h4 class="wptb-item--title"><a href="{{ route('stories.details',$store->slug ) }}">{{ $store->title }}</a></h4>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

        <!-- BG Video -->
        <div class="container">
            <div class="wptb-video-player1 wow zoomIn" style="background-image: url('{{ asset('uploads/videos') }}/{{ $videos->image }}');">
                <div class="wptb-item--inner">
                    <div class="wptb-item--holder">
                        <div class="wptb-item--video-button">
                            <a class="btn" data-fancybox href="{{ $videos->videolink }}">
                                <span class="text-second"> <i class="bi bi-play-fill"></i> </span>
                                <span class="line-video-animation line-video-1"></span> 
                                <span class="line-video-animation line-video-2"></span> 
                                <span class="line-video-animation line-video-3"></span>
                            </a>
                            
                        </div>
                    </div>
                </div>
                <div class="wptb-item-layer wptb-item-layer-one">
                    <img src="{{ asset('frontend') }}/assets/img/more/light-3.png" alt="img">
                </div>
            </div>
        </div>
    
        <div class="divider-line-hr mr-top-100"></div>

    <!-- Instagram -->
    <div class="wptb-instagram--gallery">
        <div class="wptb-item--inner d-flex align-items-center justify-content-center flex-wrap flex-md-nowrap">
            @foreach ($footer_image as $footer)
                <div class="wptb-item">
                    <div class="wptb-item--image">
                        <img src="{{ asset('uploads/review') }}/{{ $footer->image }}" alt="img">
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</main>
@endsection


