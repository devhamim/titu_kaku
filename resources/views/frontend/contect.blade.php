
@extends('frontend.layouts.app')
@section('content')
<!-- Main Wrapper-->
<main class="wrapper">
    <!-- Page Header -->
    <div class="wptb-page-heading">
        <div class="wptb-item--inner" style="background-image: url('{{ asset('frontend') }}/assets/img/background/page-header-bg-14.jpg');">
            <div class="wptb-item-layer wptb-item-layer-one">
                <img src="{{ asset('frontend') }}/assets/img/more/circle.png" alt="img">
            </div>
            <h2 class="wptb-item--title ">Contact Us</h2>
        </div>
    </div>

    <!-- Google Map -->
    <div class="gmapbox wow fadeInUp">
        @if($setting->first()->google_map != null)
            {!! $setting->first()->google_map !!}
        @endif
    </div>

    <!-- Contact -->
    <section class="wptb-contact-form bg-image-5" style="background-image: url('{{ asset('frontend') }}/assets/img/background/bg-9.jpg');">
        <div class="container">
            <div class="wptb-form--wrapper no-bg">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="wptb-heading">
                            <div class="wptb-item--inner">
                                <h6 class="wptb-item--subtitle"> Contact Us</h6>
                                <h1 class="wptb-item--title"> Feel Free To Ask Us <span>Anything</span></h1>
                            </div>
                        </div>
                        <div class="widget">
                            <div class="wptb-office">
                                <div class="wptb-item--inner">
                                    <div class="wptb-item--subtitle">
                                        Call Us For Query
                                    </div>
                                    <h5 class="wptb-item--title">
                                        @if($setting->first()->number_one != null)
                                            <a href="tel:{{ $setting->first()->number_one }}">{{ $setting->first()->number_one }}</a>
                                        @endif
                                    </h5>
                                </div>
                            </div>
    
                            <div class="wptb-office">
                                <div class="wptb-item--inner">
                                    <div class="wptb-item--subtitle">
                                        SEND US EMAIL
                                    </div>
                                    <h5 class="wptb-item--title">
                                        @if($setting->first()->email != null)
                                            <a href="mailto:{{ $setting->first()->email }}">{{ $setting->first()->email }}</a>
                                         @endif
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-7">
                        @if(session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif
                        <form class="wptb-form" action="{{ route('message.store') }}" method="post">
                            @csrf
                            <div class="wptb-form--inner">        
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 mb-4">
                                        <div class="form-group">
                                            <input type="text" name="name" class="form-control" placeholder="Name*" required>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 mb-4">
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control" placeholder="E-mail*" required>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 mb-4">
                                        <div class="form-group">
                                            <input type="number" name="number" class="form-control" placeholder="Number" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 mb-4">
                                        <div class="form-group">
                                            <input type="text" name="subject" class="form-control" placeholder="Subject" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 mb-4">
                                        <div class="form-group">
                                            <input type="text" name="address" class="form-control" placeholder="Address" required>
                                        </div>
                                    </div>

                                    <div class="col-md-12 col-lg-12 mb-4">
                                        <div class="form-group">
                                            <textarea name="message" class="form-control" placeholder="Text"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-12 col-lg-12">
                                        <div class="wptb-item--button"> 
                                            <button class="btn" type="submit">
                                                <span class="btn-wrap">
                                                    <span class="text-first">Send Mail</span>
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    

</main>
@endsection