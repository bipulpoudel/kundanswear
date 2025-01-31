@extends('layouts.app')

@section('content')

<!-- Slider -->
<section class="section-slide">
    <div class="wrap-slick1">
        <div class="slick1">
            <div class="item-slick1" style="background-image: url(images/slide-01.jpg);">
                <div class="container h-full">
                    <div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
                        <div class="layer-slick1 animated visible-false" data-appear="fadeInDown" data-delay="0">
                            <span class="ltext-101 cl2 respon2">
                                Women Collection 2020
                            </span>
                        </div>
                            
                        <div class="layer-slick1 animated visible-false" data-appear="fadeInUp" data-delay="800">
                            <h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1">
                                NEW ARRIVAL
                            </h2>
                        </div>
                            
                        <div class="layer-slick1 animated visible-false" data-appear="zoomIn" data-delay="1600">
                            <a href="shop/category/kurti" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
                                Shop Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="item-slick1" style="background-image: url(images/slider-02.jpg);">
                <div class="container h-full">
                    <div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
                        <div class="layer-slick1 animated visible-false" data-appear="rollIn" data-delay="0">
                            <span class="ltext-101 cl2 respon2" style="color: white">
                                Women Collection 2020
                            </span>
                        </div>
                            
                        <div class="layer-slick1 animated visible-false" data-appear="lightSpeedIn" data-delay="800">
                            <h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1" style="color: white">
                                DUPATTAS
                            </h2>
                        </div>
                            
                        <div class="layer-slick1 animated visible-false" data-appear="slideInUp" data-delay="1600">
                            <a href="shop/category/dupatta" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
                                Shop Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Banner -->
<div class="sec-banner bg0 p-t-80 p-b-50">
    <div class="container">
        <div class="p-b-10">
            <h3 class="ltext-103 cl5">
                Categories of Products
            </h3>
        </div>
        <br>
        <div class="row">
            
            @foreach ($categories as $category)
                    <div class="col-md-6  col-xl-4 p-b-30">
                        <!-- Block1 -->
                        <div class="block1 wrap-pic-w">
                            <img style="object-fit:cover;" src="{{ Voyager::image( $category->image ) }}" alt="IMG-BANNER">

                            <a href="shop/category/{{$category->slug}}" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
                                <div class="block1-txt-child1 flex-col-l">
                                    <span class="block1-name ltext-102 trans-04 p-b-8">
                                        Women
                                    </span>

                                    <span class="block1-info stext-102 trans-04">
                                        {{$category->name}}
                                    </span>
                                </div>

                                <div class="block1-txt-child2 p-b-4 trans-05">
                                    <div class="block1-link stext-101 cl0 trans-09">
                                        Shop Now
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
            @endforeach
        </div>
    </div>
</div>


<section class="bg0 p-t-23 p-b-50">
    <div class="container">
        <div class="p-b-10">
            <h3 class="ltext-103 cl5">
                Featured Products
            </h3>
        </div>
        <br>
        <div class="row isotope-grid">
            @foreach ($featured_products as $product)
                        <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
                            <!-- Block2 -->
                            <div class="block2">
                                <div class="block2-pic hov-img0">
                                    <a href="{{route('product.show',$product->slug)}}"><img src="{{ Voyager::image( $product->main_image ) }}" alt="IMG-PRODUCT"></a>

                                    <a href="{{route('product.show',$product->slug)}}" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04">
                                        Show Product
                                    </a>
                                </div>

                                <div class="block2-txt flex-w flex-t p-t-14">
                                    <div class="block2-txt-child1 flex-col-l ">
                                        <a href="{{route('product.show',$product->slug)}}" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                            {{$product->name}}
                                        </a>

                                        <span class="stext-105 cl3">
                                            ₹ {{$product->price}}
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
            @endforeach


        </div>
    </div>
</section>
<!-- Product -->
<section class="bg0 p-t-23 p-b-140">
    <div class="container">
        <div class="p-b-10">
            <h3 class="ltext-103 cl5">
                Product Overview
            </h3>
        </div>
        <div class="row isotope-grid">

            @foreach ($overview_products as $product)
            <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
                <!-- Block2 -->
                <div class="block2">
                    <div class="block2-pic hov-img0">
                        <a href="{{route('product.show',$product->slug)}}"><img src="{{ Voyager::image( $product->main_image ) }}" alt="IMG-PRODUCT"></a>

                        <a href="{{route('product.show',$product->slug)}}" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04">
                            Show Product
                        </a>
                    </div>

                    <div class="block2-txt flex-w flex-t p-t-14">
                        <div class="block2-txt-child1 flex-col-l ">
                            <a href="{{route('product.show',$product->slug)}}" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                {{$product->name}}
                            </a>

                            <span class="stext-105 cl3">
                                ₹ {{$product->price}}
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

        </div>
    </div>
</section>
@endsection
