@extends('frontend.layouts.app')
@section('content')
<!-- Main Wrapper-->
<main class="wrapper">
    <!-- Page Header -->
    <div class="wptb-page-heading">
        <div class="wptb-item--inner" style="background-image: url('{{ asset('frontend') }}/assets/img/background/page-header-bg-4.jpg');">
            <div class="wptb-item-layer wptb-item-layer-one">
                <img src="{{ asset('frontend') }}/assets/img/more/circle.png" alt="img">
            </div>
            <h2 class="wptb-item--title">About Us</h2>
        </div>
    </div>

    <!-- About Hamim -->
    <section class="wptb-about-one bg-image-2" style="background-image: url('{{ asset('frontend') }}/assets/img/more/texture.png');">
        <div class="container">
            <div class="wptb-image-single mr-bottom-90 wow fadeInUp">
                <div class="wptb-item--inner">
                    <div class="wptb-item--image">
                        <img src="{{ asset('frontend') }}/assets/img/background/bg-6.jpg" alt="img">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-8">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="wptb-image-single wow fadeInUp">
                                <div class="wptb-item--inner">
                                    <div class="wptb-item--image">
                                        <img src="{{ asset('frontend') }}/assets/img/more/1.jpg" alt="img">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 ps-md-0 mt-5">
                            <div class="wptb-about--text">
                                <p class="wptb-about--text-one mb-4">Hamim photography Agency runs wide and deep. Across many markets, geographies & typologies, our team members</p>
                                <p>The talent at Hamim runs wide range of services. Across many markets, geographies & typologies, our team members are some of the finest people of  photographers in the industry wide and deep. From Across many markets, geographies & boundaries. Hire Hamim in your event.</p>
                            </div>
                        </div>
                    </div>

                    <div class="row wptb-about-funfact">
                        <div class="col-md-6 mb-4 mb-md-0">
                            <div class="wptb-counter1 style1 pd-right-60 wow skewIn">
                                <div class="wptb-item--inner">
                                    <div class="wptb-item--holder d-flex align-items-center">
                                        <div class="wptb-item--value"><span class="odometer" data-count="100"></span><span class="suffix">%</span></div>
                                        <div class="wptb-item--text">Customer Satisfaction</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="wptb-counter1 style1 pd-right-60 wow skewIn">
                                <div class="wptb-item--inner">
                                    <div class="wptb-item--holder d-flex align-items-center">
                                        <div class="wptb-item--value flex-shrink-0"><span class="odometer" data-count="350"></span><span class="suffix">+</span></div>
                                        <div class="wptb-item--text">Photography Session</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 ps-xl-5 mt-5 mt-xl-0 d-none d-xl-block">
                    <div class="wptb-image-single wow fadeInUp">
                        <div class="wptb-item--inner">
                            <div class="wptb-item--image">
                                <img src="{{ asset('frontend') }}/assets/img/more/2.jpg" alt="img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="wptb-item-layer wptb-item-layer-one">
                <img src="{{ asset('frontend') }}/assets/img/more/light-1.png" alt="img">
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section class="wptb-faq-one bg-image pb-0" style="background-image: url('{{ asset('frontend') }}/assets/img/background/bg-8.jpg');">
        <div class="container">

            <div class="row">
                <div class="col-lg-6">
                    <div class="wptb-heading">
                        <div class="wptb-item--inner">
                            <h1 class="wptb-item--title mb-lg-0">Why Choose Us</h1>
                        </div>
                    </div>

                    <div class="wptb-accordion wptb-accordion2 wow fadeInUp">
                        <div class="wptb--item active">
                            <h6 class="wptb-item-title"><span>Hamim Missions</span> <i class="plus bi bi-plus"></i> <i class="minus bi bi-dash"></i></h6>
                            <div class="wptb-item--content">
                                Our business consulting programs helps to break the performance of your business down into customers and product groups so you know exactly which customers or product groups are working.
                            </div>
                        </div>

                        <div class="wptb--item">
                            <h6 class="wptb-item-title"><span>Hamim Photography Features</span> <i class="plus bi bi-plus"></i> <i class="minus bi bi-dash"></i></h6>
                            <div class="wptb-item--content">
                                Our business consulting programs helps to break the performance of your business down into customers and product groups so you know exactly which customers or product groups are working.
                            </div>
                        </div>

                        <div class="wptb--item">
                            <h6 class="wptb-item-title"><span>Why We are Best Photographers</span> <i class="plus bi bi-plus"></i> <i class="minus bi bi-dash"></i></h6>
                            <div class="wptb-item--content">
                                Our business consulting programs helps to break the performance of your business down into customers and product groups so you know exactly which customers or product groups are working.
                            </div>
                        </div>
                    </div>

                    <div class="wptb-agency-experience--item text-white">
                        <span>15+</span> Years Experience
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="wptb-image-single wow fadeInUp">
                        <div class="wptb-item--inner">
                            <div class="wptb-item--image">
                                <img src="{{ asset('frontend') }}/assets/img/more/3.png" alt="img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Text Marquee -->
    <div class="wptb-marquee pd-top-80">
        <div class="wptb-text-marquee1 wptb-slide-to-left">
            <div class="wptb-item--container">
                <div class="wptb-item--inner">
                    <h4 class="wptb-item--text">
                        <span class="wptb-text-backdrop">Hamim</span>
                        <span class="wptb-item-layer both-version position-relative">
                            <img src="{{ asset('frontend') }}/assets/img/more/star.png" alt="img">
                            <img src="{{ asset('frontend') }}/assets/img/more/star-dark.png" alt="img">
                        </span>
                    </h4>
                    <h4 class="wptb-item--text text-outline">
                        <span class="wptb-text-backdrop">Photography</span>
                        <span class="wptb-item-layer both-version position-relative">
                            <img src="{{ asset('frontend') }}/assets/img/more/star.png" alt="img">
                            <img src="{{ asset('frontend') }}/assets/img/more/star-dark.png" alt="img">
                        </span>
                    </h4>
                    <h4 class="wptb-item--text">
                        <span class="wptb-text-backdrop">Studio</span>
                        <span class="wptb-item-layer both-version position-relative">
                            <img src="{{ asset('frontend') }}/assets/img/more/star.png" alt="img">
                            <img src="{{ asset('frontend') }}/assets/img/more/star-dark.png" alt="img">
                        </span>
                    </h4>
                    <h4 class="wptb-item--text text-outline">
                        <span class="wptb-text-backdrop">Agency</span>
                        <span class="wptb-item-layer both-version position-relative">
                            <img src="{{ asset('frontend') }}/assets/img/more/star.png" alt="img">
                            <img src="{{ asset('frontend') }}/assets/img/more/star-dark.png" alt="img">
                        </span>
                    </h4>
                    <h4 class="wptb-item--text">
                        <span class="wptb-text-backdrop">Hamim</span>
                        <span class="wptb-item-layer both-version position-relative">
                            <img src="{{ asset('frontend') }}/assets/img/more/star.png" alt="img">
                            <img src="{{ asset('frontend') }}/assets/img/more/star-dark.png" alt="img">
                        </span>
                    </h4>
                </div>

                <div class="wptb-item--inner">
                    <h4 class="wptb-item--text text-outline">
                        <span class="wptb-text-backdrop">Photography</span>
                        <span class="wptb-item-layer both-version position-relative">
                            <img src="{{ asset('frontend') }}/assets/img/more/star.png" alt="img">
                            <img src="{{ asset('frontend') }}/assets/img/more/star-dark.png" alt="img">
                        </span>
                    </h4>
                    <h4 class="wptb-item--text">
                        <span class="wptb-text-backdrop">Studio</span>
                        <span class="wptb-item-layer both-version position-relative">
                            <img src="{{ asset('frontend') }}/assets/img/more/star.png" alt="img">
                            <img src="{{ asset('frontend') }}/assets/img/more/star-dark.png" alt="img">
                        </span>
                    </h4>
                    <h4 class="wptb-item--text text-outline">
                        <span class="wptb-text-backdrop">Agency</span>
                        <span class="wptb-item-layer both-version position-relative">
                            <img src="{{ asset('frontend') }}/assets/img/more/star.png" alt="img">
                            <img src="{{ asset('frontend') }}/assets/img/more/star-dark.png" alt="img">
                        </span>
                    </h4>
                    <h4 class="wptb-item--text">
                        <span class="wptb-text-backdrop">Hamim</span>
                        <span class="wptb-item-layer both-version position-relative">
                            <img src="{{ asset('frontend') }}/assets/img/more/star.png" alt="img">
                            <img src="{{ asset('frontend') }}/assets/img/more/star-dark.png" alt="img">
                        </span>
                    </h4>
                    <h4 class="wptb-item--text text-outline">
                        <span class="wptb-text-backdrop">Photography</span>
                        <span class="wptb-item-layer both-version position-relative">
                            <img src="{{ asset('frontend') }}/assets/img/more/star.png" alt="img">
                            <img src="{{ asset('frontend') }}/assets/img/more/star-dark.png" alt="img">
                        </span>
                    </h4>
                </div>
            </div>
        </div>
    </div>

    <!-- BG Video -->
    <div class="container">
        <div class="wptb-video-player1 wow zoomIn" style="background-image: url('{{ asset('frontend') }}/assets/img/background/bg-7.jpg');">
            <div class="wptb-item--inner">
                <div class="wptb-item--holder">
                    <div class="wptb-item--video-button">
                        <a class="btn" data-fancybox href="https://www.youtube.com/watch?v=SF4aHwxHtZ0">
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

    <!-- Team -->
    <section class="wptb-team-one pd-top-90">
        <div class="container">
            <div class="wptb-heading">
                <div class="wptb-item--inner">
                    <div class="row">
                        <div class="col-lg-6">
                            <h6 class="wptb-item--subtitle"> Our Team</h6>
                            <h1 class="wptb-item--title mb-lg-0">Our Core Team of<br>
                                <span>Photographers</span></h1>
                        </div>

                        <div class="col-lg-6">
                            <p class="wptb-item--description">we’re deeply passionate <span>catch your lovely memories in cameras</span>
                                and Convey your love for every moment of life as a whole.</p>
                            

                            <!-- Swiper Navigation -->
                            <div class="wptb-swiper-navigation style1">                      
                                <div class="wptb-swiper-arrow swiper-button-prev"></div>
                                <div class="wptb-swiper-arrow swiper-button-next"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-container swiper-team">
                <div class="swiper-wrapper">                            
                    <!-- Team Block -->
                    <div class="swiper-slide">
                        <div class="wptb-team-grid1">
                            <div class="wptb-item--inner">
                                <div class="wptb-item--image">
                                    <img src="{{ asset('frontend') }}/assets/img/team/1.jpg" alt="img">
                                </div>

                                <div class="wptb-item--holder">
                                    <div class="wptb-item--meta">
                                        <h5 class="wptb-item--title">Maxim Alexhander</h5>
                                        <p class="wptb-item--position">CEO, Hamim Agency</p>
                                    </div>
                                    <div class="wptb-item--social">
                                        <a href="#">FB</a>
                                        <a href="#">IG</a>
                                        <a href="#">YT</a>
                                        <a href="#">DR</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Team Block -->
                    <div class="swiper-slide">
                        <div class="wptb-team-grid1">
                            <div class="wptb-item--inner">
                                <div class="wptb-item--image">
                                    <img src="{{ asset('frontend') }}/assets/img/team/2.jpg" alt="img">
                                </div>

                                <div class="wptb-item--holder">
                                    <div class="wptb-item--meta">
                                        <h5 class="wptb-item--title">Nelson Jameson</h5>
                                        <p class="wptb-item--position">Photographer</p>
                                    </div>
                                    <div class="wptb-item--social">
                                        <a href="#">FB</a>
                                        <a href="#">IG</a>
                                        <a href="#">YT</a>
                                        <a href="#">DR</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Team Block -->
                    <div class="swiper-slide">
                        <div class="wptb-team-grid1">
                            <div class="wptb-item--inner">
                                <div class="wptb-item--image">
                                    <img src="{{ asset('frontend') }}/assets/img/team/3.jpg" alt="img">
                                </div>

                                <div class="wptb-item--holder">
                                    <div class="wptb-item--meta">
                                        <h5 class="wptb-item--title">Ellie Duncan</h5>
                                        <p class="wptb-item--position">Photographer</p>
                                    </div>
                                    <div class="wptb-item--social">
                                        <a href="#">FB</a>
                                        <a href="#">IG</a>
                                        <a href="#">YT</a>
                                        <a href="#">DR</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Team Block -->
                    <div class="swiper-slide">
                        <div class="wptb-team-grid1">
                            <div class="wptb-item--inner">
                                <div class="wptb-item--image">
                                    <img src="{{ asset('frontend') }}/assets/img/team/4.jpg" alt="img">
                                </div>

                                <div class="wptb-item--holder">
                                    <div class="wptb-item--meta">
                                        <h5 class="wptb-item--title">Harold Earls</h5>
                                        <p class="wptb-item--position">Photographer</p>
                                    </div>
                                    <div class="wptb-item--social">
                                        <a href="#">FB</a>
                                        <a href="#">IG</a>
                                        <a href="#">YT</a>
                                        <a href="#">DR</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Team Block -->
                    <div class="swiper-slide">
                        <div class="wptb-team-grid1">
                            <div class="wptb-item--inner">
                                <div class="wptb-item--image">
                                    <img src="{{ asset('frontend') }}/assets/img/team/5.jpg" alt="img">
                                </div>

                                <div class="wptb-item--holder">
                                    <div class="wptb-item--meta">
                                        <h5 class="wptb-item--title">Nelson Jameson</h5>
                                        <p class="wptb-item--position">Photographer</p>
                                    </div>
                                    <div class="wptb-item--social">
                                        <a href="#">FB</a>
                                        <a href="#">IG</a>
                                        <a href="#">YT</a>
                                        <a href="#">DR</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Team Block -->
                    <div class="swiper-slide">
                        <div class="wptb-team-grid1">
                            <div class="wptb-item--inner">
                                <div class="wptb-item--image">
                                    <img src="{{ asset('frontend') }}/assets/img/team/6.jpg" alt="img">
                                </div>

                                <div class="wptb-item--holder">
                                    <div class="wptb-item--meta">
                                        <h5 class="wptb-item--title">Ellie Duncan</h5>
                                        <p class="wptb-item--position">Photographer</p>
                                    </div>
                                    <div class="wptb-item--social">
                                        <a href="#">FB</a>
                                        <a href="#">IG</a>
                                        <a href="#">YT</a>
                                        <a href="#">DR</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Team Block -->
                    <div class="swiper-slide">
                        <div class="wptb-team-grid1">
                            <div class="wptb-item--inner">
                                <div class="wptb-item--image">
                                    <img src="{{ asset('frontend') }}/assets/img/team/4.jpg" alt="img">
                                </div>

                                <div class="wptb-item--holder">
                                    <div class="wptb-item--meta">
                                        <h5 class="wptb-item--title">Harold Earls</h5>
                                        <p class="wptb-item--position">Photographer</p>
                                    </div>
                                    <div class="wptb-item--social">
                                        <a href="#">FB</a>
                                        <a href="#">IG</a>
                                        <a href="#">YT</a>
                                        <a href="#">DR</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonial -->
    <section class="wptb-testimonial-one testimonial-colored bg-image" style="background-image: url('{{ asset('frontend') }}/assets/img/background/bg-2.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="swiper-container swiper-testimonial">    
                        <!-- swiper slides -->
                        <div class="swiper-wrapper">
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

                                            <p class="wptb-item--description"> “I have an amazing photography session with team
                                                Hamim photography agency, highly recommended.
                                                They have amazing atmosphere in their studio. Iw’d
                                                love to visit again”</p>
                                            <div class="wptb-item--meta">
                                                <div class="wptb-item--image">
                                                    <img src="{{ asset('frontend') }}/assets/img/testimonial/1.jpg" alt="img">
                                                </div>
                                                <div class="wptb-item--meta-left">
                                                    <h4 class="wptb-item--title">Rachel Jackson</h4>
                                                    <h6 class="wptb-item--designation">New York</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

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

                                            <p class="wptb-item--description"> “I have an amazing photography session with team
                                                Hamim photography agency, highly recommended.
                                                They have amazing atmosphere in their studio. Iw’d
                                                love to visit again”</p>
                                            <div class="wptb-item--meta">
                                                <div class="wptb-item--image">
                                                    <img src="{{ asset('frontend') }}/assets/img/testimonial/2.jpg" alt="img">
                                                </div>
                                                <div class="wptb-item--meta-left">
                                                    <h4 class="wptb-item--title">Helen Jordan</h4>
                                                    <h6 class="wptb-item--designation">Chicago</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

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

                                            <p class="wptb-item--description"> “I have an amazing photography session with team
                                                Hamim photography agency, highly recommended.
                                                They have amazing atmosphere in their studio. Iw’d
                                                love to visit again”</p>
                                            <div class="wptb-item--meta">
                                                <div class="wptb-item--image">
                                                    <img src="{{ asset('frontend') }}/assets/img/testimonial/3.jpg" alt="img">
                                                </div>
                                                <div class="wptb-item--meta-left">
                                                    <h4 class="wptb-item--title">Helen Jordan</h4>
                                                    <h6 class="wptb-item--designation">New York</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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

    <!-- Awards -->
    <section class="bg-dark-200 pd-bottom-80">
        <div class="container">
            <div class="wptb-heading">
                <div class="wptb-item--inner">
                    <div class="row">
                        <div class="col-lg-6">
                            <h6 class="wptb-item--subtitle">Our Awards</h6>
                            <h1 class="wptb-item--title mb-0">Our Photography<br>
                                <span>Awards</span></h1>
                        </div>

                        <div class="col-lg-6">
                            <p class="wptb-item--description">we’re deeply passionate <span>catch your lovely memories in cameras</span>
                                and Convey your love for every moment of life as a whole.</p>
                        </div>
                    </div>
                </div>
            </div>

            <ol class="wptb-award-list">
                <li class="wptb-item">
                    <div class="wptb-item--inner">
                        <div class="wptb-item--holder">
                            <a href="project-details.html">Photography Team of the Year 2023</a>
                        </div>
                        <div class="wptb-item--image">
                            <img src="{{ asset('frontend') }}/assets/img/more/4.jpg" alt="img">
                            <div class="wptb-item--button">
                                <a href="project-details.html" class="btn">View</a>
                            </div>
                        </div>
                    </div>
                </li>

                <li class="wptb-item active highlight">
                    <div class="wptb-item--inner">
                        <div class="wptb-item--holder">
                            <a href="project-details.html">Best Wedding Photographer 2022</a>
                        </div>
                        <div class="wptb-item--image">
                            <img src="{{ asset('frontend') }}/assets/img/more/5.jpg" alt="img">
                            <div class="wptb-item--button">
                                <a href="project-details.html" class="btn">View</a>
                            </div>
                        </div>
                    </div>
                </li>

                <li class="wptb-item">
                    <div class="wptb-item--inner">
                        <div class="wptb-item--holder">
                            <a href="project-details.html">Photography Team of the Year 2019</a>
                        </div>
                        <div class="wptb-item--image">
                            <img src="{{ asset('frontend') }}/assets/img/more/6.jpg" alt="img">
                            <div class="wptb-item--button">
                                <a href="project-details.html" class="btn">View</a>
                            </div>
                        </div>
                    </div>
                </li>
            </ol>
        </div>
    </section>
</main>
@endsection
