@extends('frontend.layouts.app')
@section('content')
<!-- Main Wrapper-->
<main class="wrapper">
    <div class="wptb-page-heading">
        <div class="wptb-item--inner" style="background-image: url('{{ asset('frontend') }}/assets/img/background/page-header-bg-12.jpg');">
            <div class="wptb-item-layer wptb-item-layer-one">
                <img src="{{ asset('frontend') }}/assets/img/more/circle.png" alt="img">
            </div>
            <h2 class="wptb-item--title ">Album</h2>
        </div>
    </div>

    <section class="wptb-shop">
        <div class="container">
            <div class="row">
                
                <div class="col-lg-9 col-md-8 pe-md-5">
                    <div class="shop_filtering_method d-flex align-items-center flex-wrap">
                        <div class="view_type_wrapper d-flex align-items-center">
                            <ul class="nav view_type d-flex align-items-center">
                                <li>
                                    <a class="icon-grid active" id="grid-tab" data-bs-toggle="tab" href="#grid"><i class="bi bi-grid-3x3-gap-fill"></i></a>
                                </li>
                                <li>
                                    <a class="icon-list" id="list-tab" data-bs-toggle="tab" href="#list"><i class="bi bi-list-task"></i></a>
                                </li>
                            </ul>
                            <div class="showing_results">
                                Showing 1-12 of 42 results
                            </div>
                        </div>
                        <div class="sorting_wrapper">
                            <div class="sorting_select">
                                <select class="basic_select" id="sorting">
                                    <option value="0">Default Sorting</option>
                                    <option value="1">Title</option>
                                    <option value="2">Price: Low to High</option>
                                    <option value="3">Price: High to Low</option>
                                    <option value="4">Popular</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="grid" role="tabpanel" aria-labelledby="grid-tab">
                            <div class="product_view_grid product_col_3">
                                @foreach($albums as $album)
                                    <div class="product_item">
                                        <div class="product_thumb">
                                            <div class="product_imagebox">
                                                <a href="{{ route('albums.details', $album->slug) }}">
                                                    <img class="primary_img" src="{{ asset('uploads/album') }}/{{ $album->image }}" alt="img">
                                                </a>
                                                
                                            </div>
                                            <div class="product_item_inner">
                                                <div class="label_text">
                                                    <h2 class="product_item_name d-flex align-items-center justify-content-between gap-1 flex-wrap">
                                                        <a href="{{ route('albums.details', $album->slug) }}">{{ $album->title }}</a>
                                                        <strong class="">${{ $album->price }}</strong>
                                                    </h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
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
                        </div>

                        <div class="tab-pane fade" id="list" role="tabpanel" aria-labelledby="list-tab">
                            <!-- Product List View -->
                            <div class="product_view_list">
                                <div class="product_item">
                                    <div class="product_thumb">
                                        <div class="product_imagebox">
                                            
                                            <img class="primary_img" src="{{ asset('frontend') }}/assets/img/shop/1.png" alt="img">
                                        </div>
                                        <div class="product_item_inner">
                                            <div class="label_text">
                                                <h2 class="product_item_name d-flex align-items-center justify-content-between gap-1 flex-wrap">
                                                    <a href="shop-product.html">Black Frame</a>
                                                </h2>

                                                <div class="product_item_price">$15 <del class="old_price">$19.99</del></div>
                                                
                                                <div class="cart_button">
                                                    <a href="#" class="btn">
                                                        Add to Cart 
                                                    </a>
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
                        </div>
                    </div>
                </div>

                <!-- Sidebar  -->
                <div class="col-lg-3 col-md-4 p-0 mt-5 mt-md-0">
                    <div class="shop_sidebar">
                        <div class="widget widget_block widget_search">
                            <form method="get" class="wp-block-search">
                                <div class="wp-block-search__inside-wrapper ">
                                    <input type="search" class="wp-block-search__input" name="search" value="" placeholder="Search products..." required="">
                                    <button type="submit" class="wp-block-search__button"><i class="bi bi-search"></i></button>
                                </div>
                            </form>
                        </div>

                        <div class="widget">
                            <h2 class="widget-title">
                                Categories
                            </h2>
                            <ul class="wp-block-categories-list wp-block-categories">
                                <li class="cat-item"><a href="#">Album</a> <i class="bi bi-chevron-right"></i></li>
                                <li class="cat-item"><a href="#">Nature</a> <i class="bi bi-chevron-right"></i></li>
                                <li class="cat-item"><a href="#">Decorative</a> <i class="bi bi-chevron-right"></i></li>
                                <li class="cat-item"><a href="#">Newborn</a> <i class="bi bi-chevron-right"></i></li>
                                <li class="cat-item"><a href="#">Wildlife</a> <i class="bi bi-chevron-right"></i></li>
                                <li class="cat-item"><a href="#">Portfolio</a> <i class="bi bi-chevron-right"></i></li>
                                <li class="cat-item"><a href="#">Abstract</a> <i class="bi bi-chevron-right"></i></li>
                            </ul>
                        </div>

                        <div class="widget">
                            <h2 class="widget-title">
                                Price Filter
                            </h2>
                            <div class="sidebar_price_filter"> 
                                <div id="slider-range" class="range-bar"></div> 
                                <div class="range-value d-flex justify-content-end">
                                    <span>Price:</span> <input type="text" id="amount" readonly>
                                </div>
                            </div>
                        </div>

                        <div class="widget">
                            <h2 class="widget-title">
                                Filter by Size
                            </h2>
                            <div class="sidebar_brand"> 
                                <form action="https://wpthemebooster.com/demo/themeforest/html/kimono/light/checkout.php" method="post">
                                    <div class="form-check">
                                        <label for="checkbox1">Small (32)</label>
                                        <input type="checkbox" class="form-check-input" id="checkbox1" name="checkbox1" value="">
                                    </div>                                
                                    <div class="form-check">
                                        <label for="checkbox2">Medium (09)</label>
                                        <input type="checkbox" class="form-check-input" id="checkbox2" name="checkbox2" checked value="">
                                    </div>
                                    <div class="form-check">
                                        <label for="checkbox3">Large (02)</label>
                                        <input type="checkbox" class="form-check-input" id="checkbox3" name="checkbox3" value="">
                                    </div>
                                    <div class="form-check">
                                        <label for="checkbox4">Extra Large (12)</label>
                                        <input type="checkbox" class="form-check-input" id="checkbox4" name="checkbox4" value="">
                                    </div>
                                    <div class="form-check">
                                        <label for="checkbox5">Multiscale (22)</label>
                                        <input type="checkbox" class="form-check-input" id="checkbox5" name="checkbox5" value="">
                                    </div>
                                </form>
                            </div>
                        </div>
                        
                        <div class="widget">
                            <h2 class="widget-title">
                                Popular Products
                            </h2>
                            
                            <div class="products-list">
                                <ul class="popular_product_list">
                                    <li class="popular_product_item">
                                        <div class="popular_product_image">
                                            <img class="primary_img" src="{{ asset('frontend') }}/assets/img/shop/6.png" alt="">
                                        </div>
                                        <div class="popular_product_content">
                                            <h5 class="product_title"><a href="shop-product.html">Japan Frame</a></h5>
                                            <h6 class="product_price">$16</h6>
                                        </div>
                                    </li>
                                    <li class="popular_product_item">
                                        <div class="popular_product_image">
                                            <img class="primary_img" src="{{ asset('frontend') }}/assets/img/shop/3.png" alt="">
                                        </div>
                                        <div class="popular_product_content">
                                            <h5 class="product_title"><a href="shop-product.html">Golden Frame</a></h5>
                                            <h6 class="product_price">$16</h6>
                                        </div>
                                    </li>
                                    <li class="popular_product_item">
                                        <div class="popular_product_image">
                                            <img class="primary_img" src="{{ asset('frontend') }}/assets/img/shop/5.png" alt="">
                                        </div>
                                        <div class="popular_product_content">
                                            <h5 class="product_title"><a href="shop-product.html">Nature Frame</a></h5>
                                            <h6 class="product_price">$18</h6>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="widget">
                            <h2 class="widget-title">
                                Product Tag
                            </h2>
                            <div class="wp-block-tag-list wp-block-tag">
                                <a href="#" class="tag-cloud-link">Photography</a>
                                <a href="#" class="tag-cloud-link">Indoor</a>
                                <a href="#" class="tag-cloud-link">Outdoor</a>
                                <a href="#" class="tag-cloud-link">Fashion</a>
                                <a href="#" class="tag-cloud-link">Studio</a>
                                <a href="#" class="tag-cloud-link">Wedding</a>
                                <a href="#" class="tag-cloud-link">Newborn</a>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>
@endsection