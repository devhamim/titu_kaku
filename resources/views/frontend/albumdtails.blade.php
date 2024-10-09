@extends('frontend.layouts.app')
@section('content')
<!-- Main Wrapper-->
<main class="wrapper">
    <div class="wptb-page-heading">
        <div class="wptb-item--inner" style="background-image: url('{{ asset('frontend') }}/assets/img/background/page-header-bg-12.jpg');">
            <div class="wptb-item-layer wptb-item-layer-one">
                <img src="{{ asset('frontend') }}/assets/img/more/circle.png" alt="img">
            </div>
            <h2 class="wptb-item--title ">{{ $albums->category }}</h2>
        </div>
    </div>

    <section class="product_view">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 pe-lg-5">
                    <div class="product_left">
                        <div class="product_zoom">
                            <div  class="product_zoom_container">
                                <div class="product_zoom_info selected">
                                    <div class="product_image_zoom">
                                        <img src="{{ asset('uploads/album') }}/{{ $albums->image }}" alt="img">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 ps-lg-0 pe-lg-5">
                    <div class="product_right">
                        <div class="product_info">
                            <h2 class="product_title">{{ $albums->title }}</h2>
                        </div>
                        <div class="product_price">
                                <span class="product_per_price"></span> $<span class="product_total_price">{{ $albums->price }}</span>
                        </div>
                        <div class="product_description">
                            {{ $albums->sort_description }}
                        </div>

                        <div class="cart_button">
                            <a href="shop-cart.html" class="btn btn-three w-100">
                                <div class="btn-wrap">
                                    <span class="text-first">Message</span>
                                    <span class="text-second">Message</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="product_details_section">							
        <div class="container">
            <div class="product_details_tab">
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="description" tabindex="0">
                        <p>{{ $albums->description }}</p>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <section class="related_products">							
        <div class="container">
            <div class="product_view_grid product_col_12">
                <style>
                    .gallery {
                        display: grid;
                        grid-template-columns: repeat(2, 1fr); /* Two equal-width columns */
                        gap: 1px; /* Small gap between images */
                    }
                    .gallery-item {
                        display: flex;
                    }

                    .gallery-item img {
                        width: 100%;
                        height: auto;
                        display: block;
                        object-fit: cover;
                    }
                </style>
                <div class="gallery-container">
                    @if(!empty($galleryImages))
                        <div class="gallery">
                            @foreach($galleryImages as $image)
                                <div class="gallery-item">
                                    <img src="{{ asset('uploads/album/gallery/' . $image) }}" alt="Gallery Image">
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>
                {{-- <div class="product_item">
                      
                    <div class="product_thumb">
                        <div class="product_imagebox">
                            <img class="primary_img" src="{{ asset('frontend') }}/assets/img/shop/4.png" alt="img">
                            <div class="cart_button">
                                <a href="#" class="btn">
                                    Add to Cart 
                                </a>
                            </div>
                        </div>
                        <div class="product_item_inner">
                            <div class="label_text">
                                <h2 class="product_item_name d-flex align-items-center justify-content-between gap-1 flex-wrap">
                                    <a href="shop-product.html">Desert Frame</a>
                                    <span class="product_item_price">$16</span>
                                </h2>
                            </div>
                        </div>
                    </div>
                </div> --}}
 
            </div>
        </div>
    </section>

</main>
@endsection