@extends('frontend.master')

@section('title_name')
    Home page
@endsection


@section('maniContaint')

    <!-- Begin Slider With Banner Area -->
    <div class="slider-with-banner">
        <div class="container">
            <div class="row">
                <!-- Begin Slider Area -->
                <div class="col-lg-8 col-md-8">
                    <div class="slider-area">
                        <div class="slider-active owl-carousel">
                            <!-- Begin Single Slide Area -->
                            <div class="single-slide align-center-left  animation-style-01 bg-1">
                                <div class="slider-progress"></div>
                                <div class="slider-content">
                                    <h5>Sale Offer <span>-20% Off</span> This Week</h5>
                                    <h2>Chamcham Galaxy S9 | S9+</h2>
                                    <h3>Starting at <span>$1209.00</span></h3>
                                    <div class="default-btn slide-btn">
                                        <a class="links" href="shop-left-sidebar.html">Shopping Now</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Slide Area End Here -->
                            <!-- Begin Single Slide Area -->
                            <div class="single-slide align-center-left animation-style-02 bg-2">
                                <div class="slider-progress"></div>
                                <div class="slider-content">
                                    <h5>Sale Offer <span>Black Friday</span> This Week</h5>
                                    <h2>Work Desk Surface Studio 2018</h2>
                                    <h3>Starting at <span>$824.00</span></h3>
                                    <div class="default-btn slide-btn">
                                        <a class="links" href="shop-left-sidebar.html">Shopping Now</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Slide Area End Here -->
                            <!-- Begin Single Slide Area -->
                            <div class="single-slide align-center-left animation-style-01 bg-3">
                                <div class="slider-progress"></div>
                                <div class="slider-content">
                                    <h5>Sale Offer <span>-10% Off</span> This Week</h5>
                                    <h2>Phantom 4 Pro+ Obsidian</h2>
                                    <h3>Starting at <span>$1849.00</span></h3>
                                    <div class="default-btn slide-btn">
                                        <a class="links" href="shop-left-sidebar.html">Shopping Now</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Slide Area End Here -->
                        </div>
                    </div>
                </div>
                <!-- Slider Area End Here -->
                <!-- Begin Li Banner Area -->
                <div class="col-lg-4 col-md-4 text-center pt-xs-30">
                    <div class="li-banner">
                        <a href="#">
                            <img src="{{ asset('frontend') }}/images/banner/1_1.jpg" alt="">
                        </a>
                    </div>
                    <div class="li-banner mt-15 mt-sm-30 mt-xs-30">
                        <a href="#">
                            <img src="{{ asset('frontend') }}/images/banner/1_2.jpg" alt="">
                        </a>
                    </div>
                </div>
                <!-- Li Banner Area End Here -->
            </div>
        </div>
    </div>
    <!-- Slider With Banner Area End Here -->




    <!-- Begin Li's Laptop Product Area -->
    <section class="product-area li-laptop-product pt-60 pb-45">
        <div class="container">
            <div class="row">
                <!-- Begin Li's Section Area -->
                @foreach ($categories as $category)

                {{-- @dd($categories->all()) --}}
                    <div class="col-lg-12">

                        @if ($category->products_count != 0)
                            <div class="li-section-title">
                                <h2>
                                    <span>{{ $category->name }}</span>
                                </h2>

                            </div>
                            <div class="row">
                                <div class="product-active owl-carousel">

                                    @foreach ($category->products as $product)
                                        <div class="col-lg-12">



                                            <!-- single-product-wrap start -->
                                            <div class="single-product-wrap">
                                                <div class="product-image">
                                                    <a href="{{ route("product.details", $product->id )}}">
                                                        {{-- @dd($product->firstImage->path) --}}

                                                        <img src="{{ asset(@$product->firstImage->path) }}"
                                                            alt="Li's Product Image">
                                                    </a>
                                                    <span class="sticker">New</span>
                                                </div>
                                                <div class="product_desc">
                                                    <div class="product_desc_info">
                                                        <div class="product-review">
                                                            <h5 class="manufacturer">
                                                                <a href="{{ route("product.details", $product->id )}}">{{ $product->name }}</a>
                                                            </h5>
                                                            <div class="rating-box">
                                                                <ul class="rating">
                                                                    <li><i class="fa fa-star-o"></i></li>
                                                                    <li><i class="fa fa-star-o"></i></li>
                                                                    <li><i class="fa fa-star-o"></i></li>
                                                                    <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                                    <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <h4><a class="product_name"
                                                                href="{{ route("product.details", $product->id )}}">{{ $product->name }}</a></h4>
                                                        <div class="price-box">
                                                            <span class="new-price">${{ $product->price }}</span>
                                                        </div>
                                                    </div>
                                                    <div class="add-actions">
                                                        <ul class="add-actions-link">
                                                            <li class="add-cart active"><a href="#">Add to cart</a>
                                                            </li>
                                                            <li><a class="links-details" href="wishlist.html"><i
                                                                        class="fa fa-heart-o"></i></a></li>
                                                            <li><a href="#" title="quick view" class="quick-view-btn"
                                                                    data-toggle="modal" data-target="#exampleModalCenter"><i
                                                                        class="fa fa-eye"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>


                                            <!-- single-product-wrap end -->
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                    </div>
                @endif
                @endforeach
                <!-- Li's Section Area End Here -->

            </div>
        </div>
    </section>
    <!-- Li's Laptop Product Area End Here -->
@endsection
