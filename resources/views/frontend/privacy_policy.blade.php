@extends('frontend.layouts.app')
@section('content')
    <!-- Page Header -->
    <div class="wptb-page-heading">
        <div class="wptb-item--inner" style="background-image: url('{{ asset('frontend') }}/assets/img/background/page-header-bg-4.jpg');">
            <div class="wptb-item-layer wptb-item-layer-one">
                <img src="{{ asset('frontend') }}/assets/img/more/circle.png" alt="img">
            </div>
            <h2 class="wptb-item--title ">Privacy Policy</h2>
        </div>
    </div>
    <div class="container-xl my-5" style="min-height: 600px">
        <div class="row g-5">

            <div class="col-md-12 col-lg-12 order-md-last">
                {!! $privacypolicy->description !!}
            </div>

        </div>
    </div>
@endsection


