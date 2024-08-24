@extends('frontend.layouts.app')
@section('content')
        
<!-- Main Wrapper-->
<main class="wrapper">
    <!-- Page Header -->
    <div class="wptb-page-heading">
        <div class="wptb-item--inner" style="background-image: url('{{ asset('frontend') }}/assets/img/background/page-header-bg-8.jpg');">
            <div class="wptb-item-layer wptb-item-layer-one">
                <img src="{{ asset('frontend') }}/assets/img/more/circle.png" alt="img">
            </div>
            <h2 class="wptb-item--title ">Our Projects</h2>
        </div>
    </div>

    <!-- Our Services -->
    <section>
        <div class="container">
            <div class="wptb-project--inner">
                <div class="wptb-heading">
                    <div class="wptb-item--inner text-center">
                        <h6 class="wptb-item--subtitle"><span>01//</span> Our Portfolio</h6>
                        <h1 class="wptb-item--title"> Kimono captures <span>All of Your</span> <br>
                            beautiful memories</h1>
                    </div>
                </div>

                <div class="effect-fly">
                    <div class="grid grid-3 gutter-30 clearfix"> 
                        <div class="grid-sizer"></div>                          
                        <div class="grid-item">
                            <div class="wptb-item--inner">
                                <div class="wptb-item--image">
                                    <img src="{{ asset('frontend') }}/assets/img/projects/3/1.jpg" alt="img">
                                </div>

                                <div class="wptb-item--holder">
                                    <div class="wptb-item--meta">
                                        <h4><a href="project-details.html">Bright Boho Sunshine</a></h4>
                                        <p>By Jonathon Willson</p>
                                    </div>
                                </div>
                            </div>
                        </div> 
                                                    
                        <div class="grid-item"> 
                            <div class="wptb-item--inner">
                                <div class="wptb-item--image">
                                    <img src="{{ asset('frontend') }}/assets/img/projects/3/2.jpg" alt="img">
                                </div>

                                <div class="wptb-item--holder">
                                    <div class="wptb-item--meta">
                                        <h4><a href="project-details.html">California Fall Collection 2023</a></h4>
                                        <p>By Jonathon Willson</p>
                                    </div>
                                </div>
                            </div>
                        </div> 

                        <div class="grid-item"> 
                            <div class="wptb-item--inner">
                                <div class="wptb-item--image">
                                    <img src="{{ asset('frontend') }}/assets/img/projects/3/3.jpg" alt="img">
                                </div>

                                <div class="wptb-item--holder">
                                    <div class="wptb-item--meta">
                                        <h4><a href="project-details.html">Brown girl next door</a></h4>
                                        <p>By Jonathon Willson</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="grid-item"> 
                            <div class="wptb-item--inner">
                                <div class="wptb-item--image">
                                    <img src="{{ asset('frontend') }}/assets/img/projects/3/4.jpg" alt="img">
                                </div>

                                <div class="wptb-item--holder">
                                    <div class="wptb-item--meta">
                                        <h4><a href="project-details.html">Fashion next stage</a></h4>
                                        <p>By Jonathon Willson</p>
                                    </div>
                                </div>
                            </div>
                        </div>  

                        <div class="grid-item"> 
                            <div class="wptb-item--inner">
                                <div class="wptb-item--image">
                                    <img src="{{ asset('frontend') }}/assets/img/projects/3/5.jpg" alt="img">
                                </div>

                                <div class="wptb-item--holder">
                                    <div class="wptb-item--meta">
                                        <h4><a href="project-details.html">Jenifer in green</a></h4>
                                        <p>By Jonathon Willson</p>
                                    </div>
                                </div>
                            </div>
                        </div>  

                        <div class="grid-item"> 
                            <div class="wptb-item--inner">
                                <div class="wptb-item--image">
                                    <img src="{{ asset('frontend') }}/assets/img/projects/3/6.jpg" alt="img">
                                </div>

                                <div class="wptb-item--holder">
                                    <div class="wptb-item--meta">
                                        <h4><a href="project-details.html">Sunflower Boho girl</a></h4>
                                        <p>By Jonathon Willson</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="grid-item"> 
                            <div class="wptb-item--inner">
                                <div class="wptb-item--image">
                                    <img src="{{ asset('frontend') }}/assets/img/projects/3/7.jpg" alt="img">
                                </div>

                                <div class="wptb-item--holder">
                                    <div class="wptb-item--meta">
                                        <h4><a href="project-details.html">Iceland girl</a></h4>
                                        <p>By Jonathon Willson</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="grid-item"> 
                            <div class="wptb-item--inner">
                                <div class="wptb-item--image">
                                    <img src="{{ asset('frontend') }}/assets/img/projects/3/8.jpg" alt="img">
                                </div>

                                <div class="wptb-item--holder">
                                    <div class="wptb-item--meta">
                                        <h4><a href="project-details.html">Summer sadness</a></h4>
                                        <p>By Jonathon Willson</p>
                                    </div>
                                </div>
                            </div>
                        </div>   

                        <div class="grid-item"> 
                            <div class="wptb-item--inner">
                                <div class="wptb-item--image">
                                    <img src="{{ asset('frontend') }}/assets/img/projects/3/9.jpg" alt="img">
                                </div>

                                <div class="wptb-item--holder">
                                    <div class="wptb-item--meta">
                                        <h4><a href="project-details.html">Festive mode one</a></h4>
                                        <p>By Jonathon Willson</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="wptb-pagination-wrap text-center">
                <ul class="pagination">
                    <li><a class="disabled page-number previous" href="#"><i class="bi bi-chevron-left"></i></a></li>
                    <li><span class="page-number current">1</span></li>
                    <li><a class="page-number" href="#">2</a></li>
                    <li><a class="page-number" href="#">3</a></li>
                    <li>.....</li>
                    <li><a class="page-number" href="#">9</a></li>
                    <li><a class="page-number next" href="#"><i class="bi bi-chevron-right"></i></a></li>
                </ul>
            </div>
        </div>
    </section>

</main>
@endsection