@extends('frontend.layouts.app')
@section('content')
<main class="wrapper">
    <!-- Slider Section -->
    <section class="wptb-slider style2">
        <div class="swiper-container wptb-swiper-slider-two">    
            <!-- swiper slides -->
            <div class="swiper-wrapper">
                <!-- Slide Item -->
                <div class="swiper-slide">
                    <div class="wptb-slider--item">
                        <div class="wptb-slider--image" style="background-image: url('{{ asset('frontend') }}/assets/img/slider/4.jpg');"></div>
                        <div class="wptb-slider--inner">
                            <!-- Layer Image -->
                            <div class="wptb-item-layer wptb-item-layer-one">
                                <img src="{{ asset('frontend') }}/assets/img/slider/layer-3.png" alt="img">
                            </div>
                            <div class="wptb-heading">
                                <div class="wptb-item--inner">
                                    <h1 class="wptb-item--title">Arif Mahmud Jason</h1>
                                    <h6 class="wptb-item--subtitle">Branding</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Slide Item -->

                <!-- Slide Item -->
                <div class="swiper-slide">
                    <div class="wptb-slider--item">
                        <div class="wptb-slider--image" style="background-image: url('{{ asset('frontend') }}/assets/img/slider/5.jpg');"></div>
                        <div class="wptb-slider--inner">
                            <!-- Layer Image -->
                            <div class="wptb-item-layer wptb-item-layer-one">
                                <img src="{{ asset('frontend') }}/assets/img/slider/layer-3.png" alt="img">
                            </div>
                            <div class="wptb-heading">
                                <div class="wptb-item--inner">
                                    <h1 class="wptb-item--title">Natasha Watson</h1>
                                    <h6 class="wptb-item--subtitle">Model</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Slide Item -->

                <!-- Slide Item -->
                <div class="swiper-slide">
                    <div class="wptb-slider--item">
                        <div class="wptb-slider--image" style="background-image: url('{{ asset('frontend') }}/assets/img/slider/6.jpg');"></div>
                        <div class="wptb-slider--inner">
                            <!-- Layer Image -->
                            <div class="wptb-item-layer wptb-item-layer-one">
                                <img src="{{ asset('frontend') }}/assets/img/slider/layer-3.png" alt="img">
                            </div>
                            <div class="wptb-heading">
                                <div class="wptb-item--inner">
                                    <h1 class="wptb-item--title">David Gill</h1>
                                    <h6 class="wptb-item--subtitle">Photographer</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
                    <li><a href="https://www.facebook.com/">FB</a></li>
                    <li><a href="https://www.instagram.com/">IG</a></li>
                    <li><a href="https://www.youtube.com/">YT</a></li>
                    <li><a href="https://www.dribbble.com/">DR</a></li>
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
                        <div class="grid-item col-md-4">
                            <div class="wptb-item--inner">
                                <div class="wptb-item--image">
                                    <img src="{{ asset('frontend') }}/assets/img/projects/4/1.jpg" alt="img">
                                    <a class="wptb-item--link" href="project-details.html"><i class="bi bi-chevron-right"></i></a>
                                </div>

                                <div class="wptb-item--holder">
                                    <div class="wptb-item--meta">
                                        <h4><a href="project-details.html">Bright Boho Sunshine</a></h4>
                                        <p>By Jonathon Willson</p>
                                    </div>
                                </div>
                            </div>
                        </div> 
                                                
                        <div class="grid-item col-md-4"> 
                            <div class="wptb-item--inner">
                                <div class="wptb-item--image">
                                    <img src="{{ asset('frontend') }}/assets/img/projects/4/2.jpg" alt="img">
                                    <a class="wptb-item--link" href="project-details.html"><i class="bi bi-chevron-right"></i></a>
                                </div>

                                <div class="wptb-item--holder">
                                    <div class="wptb-item--meta">
                                        <h4><a href="project-details.html">California Fall Collection 2023</a></h4>
                                        <p>By Jonathon Willson</p>
                                    </div>
                                </div>
                            </div>
                        </div> 

                        <div class="grid-item col-md-4"> 
                            <div class="wptb-item--inner">
                                <div class="wptb-item--image">
                                    <img src="{{ asset('frontend') }}/assets/img/projects/4/3.jpg" alt="img">
                                    <a class="wptb-item--link" href="project-details.html"><i class="bi bi-chevron-right"></i></a>
                                </div>

                                <div class="wptb-item--holder">
                                    <div class="wptb-item--meta">
                                        <h4><a href="project-details.html">Brown girl next door</a></h4>
                                        <p>By Jonathon Willson</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="grid-item col-md-4"> 
                            <div class="wptb-item--inner">
                                <div class="wptb-item--image">
                                    <img src="{{ asset('frontend') }}/assets/img/projects/4/6.jpg" alt="img">
                                    <a class="wptb-item--link" href="project-details.html"><i class="bi bi-chevron-right"></i></a>
                                </div>

                                <div class="wptb-item--holder">
                                    <div class="wptb-item--meta">
                                        <h4><a href="project-details.html">Sunflower Boho girl</a></h4>
                                        <p>By Jonathon Willson</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="wptb-item--button text-center mt-5">
                <a class="btn btn-two text-uppercase" href="project-general.html">
                    <span class="btn-wrap">
                        <span class="text-first">See All Projects</span>
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
                            <h1 class="wptb-item--title lg mb-5">20 Amazing <br> <span class="text-outline">Photographers</span></h1>
                            <p class="wptb-item--description">The talent at Arif Mahmud runs wide range of services. Across many markets, geographies & typologies, our team members are some of the finest people of photographers in the industry wide and deep. From Across many markets, geographies & boundaries.</p>
                            
                            <div class="wptb-agency-experience--item">
                                <span>15+</span> Years Experience
                            </div>
                        </div>

                        <div class="wptb-image-single d-none d-xl-block wow fadeInUp">
                            <div class="wptb-item--inner">
                                <div class="wptb-item--image">
                                    <img src="{{ asset('frontend') }}/assets/img/more/3.png" alt="img">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 ps-lg-5 mt-5">
                    <div class="wptb-counter1 style1 mr-bottom-100 wow skewIn">
                        <div class="wptb-item--inner">
                            <div class="wptb-item--holder d-flex align-items-center">
                                <div class="wptb-item--value"><span class="odometer" data-count="50"></span><span class="suffix">+</span></div>
                                <div class="wptb-item--text">Professional Cameras</div>
                            </div>
                        </div>
                    </div>

                    <div class="wptb-counter1 style1 mr-bottom-100 wow skewIn">
                        <div class="wptb-item--inner">
                            <div class="wptb-item--holder d-flex align-items-center">
                                <div class="wptb-item--value"><span class="odometer" data-count="90"></span><span class="suffix">+</span></div>
                                <div class="wptb-item--text">Photography Props</div>
                            </div>
                        </div>
                    </div>

                    <div class="wptb-counter1 style1 wow skewIn">
                        <div class="wptb-item--inner">
                            <div class="wptb-item--holder d-flex align-items-center">
                                <div class="wptb-item--value"><span class="odometer" data-count="300"></span><span class="suffix"></span></div>
                                <div class="wptb-item--text">Events Covered</div>
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
                                                Arif Mahmud photography agency, highly recommended.
                                                They have amazing atmosphere in their studio. Iw’d
                                                love to visit again”</p>
                                            <div class="wptb-item--meta">
                                                <div class="wptb-item--image">
                                                    <img src="{{ asset('frontend') }}/assets/img/testimonial/4.jpg" alt="img">
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
                                                Arif Mahmud photography agency, highly recommended.
                                                They have amazing atmosphere in their studio. Iw’d
                                                love to visit again”</p>
                                            <div class="wptb-item--meta">
                                                <div class="wptb-item--image">
                                                    <img src="{{ asset('frontend') }}/assets/img/testimonial/5.jpg" alt="img">
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
                                                Arif Mahmud photography agency, highly recommended.
                                                They have amazing atmosphere in their studio. Iw’d
                                                love to visit again”</p>
                                            <div class="wptb-item--meta">
                                                <div class="wptb-item--image">
                                                    <img src="{{ asset('frontend') }}/assets/img/testimonial/6.jpg" alt="img">
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

     <!-- Albums -->
     <section class="wptb-album-one">
        <div class="wptb-project--inner">
            <div class="wptb-heading">
                <div class="wptb-item--inner text-center">
                    <h6 class="wptb-item--subtitle"><span>01//</span> Photo Albums</h6>
                    <h1 class="wptb-item--title">Collection of photos <span>All of Our</span> <br> Best Works</h1>
                </div>
            </div>

            <div class="swiper-container swiper-gallery-two has-radius">
                <div class="swiper-wrapper">                            
                    <!-- Item -->
                    <div class="swiper-slide">
                        <div class="grid-item">
                            <div class="wptb-item--inner">
                                <div class="wptb-item--image">
                                    <img src="{{ asset('frontend') }}/assets/img/projects/gallery/1.jpg" alt="img">
                                    <a class="wptb-item--link" href="project-details.html"><i class="bi bi-chevron-right"></i></a>
                                </div>

                                <div class="wptb-item--holder">
                                    <div class="wptb-item--meta">
                                        <h4><a href="project-details.html">Bright Boho Sunshine</a></h4>
                                        <p>By Jonathon Willson</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Item -->
                    <div class="swiper-slide">
                        <div class="grid-item">
                            <div class="wptb-item--inner">
                                <div class="wptb-item--image">
                                    <img src="{{ asset('frontend') }}/assets/img/projects/gallery/2.jpg" alt="img">
                                    <a class="wptb-item--link" href="project-details.html"><i class="bi bi-chevron-right"></i></a>
                                </div>

                                <div class="wptb-item--holder">
                                    <div class="wptb-item--meta">
                                        <h4><a href="project-details.html">California Fall Collection 2023</a></h4>
                                        <p>By Jonathon Willson</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Item -->
                    <div class="swiper-slide">
                        <div class="grid-item">
                            <div class="wptb-item--inner">
                                <div class="wptb-item--image">
                                    <img src="{{ asset('frontend') }}/assets/img/projects/gallery/3.jpg" alt="img">
                                    <a class="wptb-item--link" href="project-details.html"><i class="bi bi-chevron-right"></i></a>
                                </div>

                                <div class="wptb-item--holder">
                                    <div class="wptb-item--meta">
                                        <h4><a href="project-details.html">Brown girl next door</a></h4>
                                        <p>By Jonathon Willson</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Item -->
                    <div class="swiper-slide">
                        <div class="grid-item">
                            <div class="wptb-item--inner">
                                <div class="wptb-item--image">
                                    <img src="{{ asset('frontend') }}/assets/img/projects/gallery/4.jpg" alt="img">
                                    <a class="wptb-item--link" href="project-details.html"><i class="bi bi-chevron-right"></i></a>
                                </div>

                                <div class="wptb-item--holder">
                                    <div class="wptb-item--meta">
                                        <h4><a href="project-details.html">Fashion next stage</a></h4>
                                        <p>By Jonathon Willson</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Item -->
                    <div class="swiper-slide">
                        <div class="grid-item">
                            <div class="wptb-item--inner">
                                <div class="wptb-item--image">
                                    <img src="{{ asset('frontend') }}/assets/img/projects/gallery/5.jpg" alt="img">
                                    <a class="wptb-item--link" href="project-details.html"><i class="bi bi-chevron-right"></i></a>
                                </div>

                                <div class="wptb-item--holder">
                                    <div class="wptb-item--meta">
                                        <h4><a href="project-details.html">Jenifer in green</a></h4>
                                        <p>By Jonathon Willson</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
                <div class="wptb-item--inner">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <h6 class="wptb-item--subtitle"><span>04 //</span> Latest News</h6>
                            <h1 class="wptb-item--title mb-0">Our Photography<br>
                                <span>Related Blog</span></h1>
                        </div>

                        <div class="col-lg-6">
                            <p class="wptb-item--description">we’re deeply passionate <span>catch your lovely memories in cameras</span>
                                and Convey your love for every moment of life as a whole.</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="wptb-blog--inner">    
                <div class="row">
                    <div class="col-lg-4 col-sm-6">
                        <div class="wptb-blog-grid1 active highlight wow fadeInLeft">
                            <div class="wptb-item--inner">
                                <div class="wptb-item--image">
                                    <a href="blog-details.html" class="wptb-item-link"><img src="{{ asset('frontend') }}/assets/img/blog/1.jpg" alt="img"></a>
                                </div>
                                <div class="wptb-item--holder">
                                    <div class="wptb-item--date">25 Sep 2023</div>
                                    <h4 class="wptb-item--title"><a href="blog-details.html">Beginners guide to start your photography journey</a></h4>
                                    
                                    <div class="wptb-item--meta">
                                        <div class="wptb-item--author">By <a href="#">Ashton William</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6">
                        <div class="wptb-blog-grid1 wow fadeInLeft">
                            <div class="wptb-item--inner">
                                <div class="wptb-item--image">
                                    <a href="blog-details.html" class="wptb-item-link"><img src="{{ asset('frontend') }}/assets/img/blog/2.jpg" alt="img"></a>
                                </div>
                                <div class="wptb-item--holder">
                                    <div class="wptb-item--date">22 Sep 2023</div>
                                    <h4 class="wptb-item--title"><a href="blog-details.html">Twenty photography tips to
                                        make photos amazing</a></h4>
                                    
                                    <div class="wptb-item--meta">
                                        <div class="wptb-item--author">By <a href="#">Olivia Rose</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6">
                        <div class="wptb-blog-grid1 wow fadeInLeft">
                            <div class="wptb-item--inner">
                                <div class="wptb-item--image">
                                    <a href="blog-details.html" class="wptb-item-link"><img src="{{ asset('frontend') }}/assets/img/blog/3.jpg" alt="img"></a>
                                </div>
                                <div class="wptb-item--holder">
                                    <div class="wptb-item--date">22 Sep 2023</div>
                                    <h4 class="wptb-item--title"><a href="blog-details.html">What Norway is best spots
                                        For Photography</a></h4>
                                    
                                    <div class="wptb-item--meta">
                                        <div class="wptb-item--author">By <a href="#">Justin Burke</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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

    <!-- Instagram -->
    <div class="wptb-instagram--gallery">
        <div class="wptb-item--inner d-flex align-items-center justify-content-center flex-wrap flex-md-nowrap">
            <div class="wptb-item">
                <div class="wptb-item--image">
                    <img src="{{ asset('frontend') }}/assets/img/instagram/1.jpg" alt="img">
                </div>
            </div>

            <div class="wptb-item">
                <div class="wptb-item--image">
                    <img src="{{ asset('frontend') }}/assets/img/instagram/2.jpg" alt="img">
                </div>
            </div>

            <div class="wptb-item">
                <div class="wptb-item--image">
                    <img src="{{ asset('frontend') }}/assets/img/instagram/3.jpg" alt="img">
                </div>
            </div>

            <div class="wptb-item">
                <div class="wptb-item--image">
                    <img src="{{ asset('frontend') }}/assets/img/instagram/4.jpg" alt="img">
                </div>
            </div>

            <div class="wptb-item">
                <div class="wptb-item--image">
                    <img src="{{ asset('frontend') }}/assets/img/instagram/5.jpg" alt="img">
                </div>
            </div>
        </div>
        <div class="wptb-item--button">
            <a class="btn btn-two" href="#">
                <span class="btn-wrap">
                    <span class="text-first">Follow Us on Instagram</span>
                    <span class="text-second"> <i class="bi bi-instagram"></i> <i class="bi bi-instagram"></i> </span>
                </span>
            </a>
        </div>
    </div>
</main>
@endsection


