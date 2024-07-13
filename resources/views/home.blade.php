@extends('layouts.front')

@section('content')

<div class="pl-200 pr-200 overflow clearfix">

    <div class="categori-menu-slider-wrapper clearfix">
        <div class="categories-menu">

            <div class="category-heading">
                <h3> All Produce <i class="pe-7s-angle-down"></i></h3>
            </div>

            @include('_category-list')

        </div>

        <div class="menu-slider-wrapper">

            <div class="menu-style-3 menu-hover text-center">
                @include('_navbar')
            </div>

            <div class="slider-area">
                @include('_slider')
            </div>

        </div>

    </div>

</div>

<div class="electronic-banner-area">
    <div class="custom-row-2">
        @include('_dummy-product')
        @include('_dummy-product')
        @include('_dummy-product')

    </div>
</div>

<div class="electro-product-wrapper wrapper-padding pt-95 pb-45">

    <div class="container-fluid">

        <div class="section-title-4 text-center mb-40">
            <h2>Top Produce Products</h2>
        </div>

        <div class="top-product-style">

            <div>
            <div id="electro1">
                    <div class="custom-row-2">

                                                    <div class="custom-col-style-2 custom-col-4">
    <div class="product-wrapper product-border mb-24">
        <div class="product-img-3">
            <a href="http://127.0.0.1:8000/products/1">
                                    <img src="/assets/img/product/electro/1.jpg" alt="">
                            </a>
            <div class="product-action-right">
                <a class="animate-right" href="http://127.0.0.1:8000/products/1" title="View">
                    <i class="pe-7s-look"></i>
                </a>
                <a class="animate-top" title="Add To Cart" href="http://127.0.0.1:8000/add-to-cart/1">
                    <i class="pe-7s-cart"></i>
                </a>
                <a class="animate-left" title="Wishlist" href="http://127.0.0.1:8000/add-to-wishlist/1">
                    <i class="pe-7s-like"></i>
                </a>
            </div>
        </div>
        <div class="product-content-4 text-center">
            <div class="product-rating-4">
                <i class="icofont icofont-star yellow"></i>
                <i class="icofont icofont-star yellow"></i>
                <i class="icofont icofont-star yellow"></i>
                <i class="icofont icofont-star yellow"></i>
                <i class="icofont icofont-star"></i>
            </div>
            <h4><a href="http://127.0.0.1:8000/products/1">Eggs</a></h4>
            <span>1 Tray</span>
            <h5>kshs 460</h5>
        <p>Farmer 1</p>
        </div>
    </div>
</div>
                                                    <div class="custom-col-style-2 custom-col-4">
    <div class="product-wrapper product-border mb-24">
        <div class="product-img-3">
            <a href="http://127.0.0.1:8000/products/2">
                                    <img src="/assets/img/product/electro/2.jpg" alt="">
                            </a>
            <div class="product-action-right">
                <a class="animate-right" href="http://127.0.0.1:8000/products/2" title="View">
                    <i class="pe-7s-look"></i>
                </a>
                <a class="animate-top" title="Add To Cart" href="http://127.0.0.1:8000/add-to-cart/2">
                    <i class="pe-7s-cart"></i>
                </a>
                <a class="animate-left" title="Wishlist" href="http://127.0.0.1:8000/add-to-wishlist/2">
                    <i class="pe-7s-like"></i>
                </a>
            </div>
        </div>
        <div class="product-content-4 text-center">
            <div class="product-rating-4">
                <i class="icofont icofont-star yellow"></i>
                <i class="icofont icofont-star yellow"></i>
                <i class="icofont icofont-star yellow"></i>
                <i class="icofont icofont-star yellow"></i>
                <i class="icofont icofont-star"></i>
            </div>
            <h4><a href="http://127.0.0.1:8000/products/2">Mangoes</a></h4>
            <span>1kg</span>
            <h5>kshs 296</h5>
        <p>Farmer 1</p>
        </div>
    </div>
</div>
                                                    <div class="custom-col-style-2 custom-col-4">
    <div class="product-wrapper product-border mb-24">
        <div class="product-img-3">
            <a href="http://127.0.0.1:8000/products/3">
                                    <img src="/assets/img/product/electro/3.jpg" alt="">
                            </a>
            <div class="product-action-right">
                <a class="animate-right" href="http://127.0.0.1:8000/products/3" title="View">
                    <i class="pe-7s-look"></i>
                </a>
                <a class="animate-top" title="Add To Cart" href="http://127.0.0.1:8000/add-to-cart/3">
                    <i class="pe-7s-cart"></i>
                </a>
                <a class="animate-left" title="Wishlist" href="http://127.0.0.1:8000/add-to-wishlist/3">
                    <i class="pe-7s-like"></i>
                </a>
            </div>
        </div>
        <div class="product-content-4 text-center">
            <div class="product-rating-4">
                <i class="icofont icofont-star yellow"></i>
                <i class="icofont icofont-star yellow"></i>
                <i class="icofont icofont-star yellow"></i>
                <i class="icofont icofont-star yellow"></i>
                <i class="icofont icofont-star"></i>
            </div>
            <h4><a href="http://127.0.0.1:8000/products/3">Carrots</a></h4>
            <span>1kg</span>
            <h5>kshs 92</h5>
        <p>Farmer 1</p>
        </div>
    </div>
</div>
                                                    <div class="custom-col-style-2 custom-col-4">
    <div class="product-wrapper product-border mb-24">
        <div class="product-img-3">
            <a href="http://127.0.0.1:8000/products/4">
                                    <img src="/assets/img/product/electro/4.jpg" alt="">
                            </a>
            <div class="product-action-right">
                <a class="animate-right" href="http://127.0.0.1:8000/products/4" title="View">
                    <i class="pe-7s-look"></i>
                </a>
                <a class="animate-top" title="Add To Cart" href="http://127.0.0.1:8000/add-to-cart/4">
                    <i class="pe-7s-cart"></i>
                </a>
                <a class="animate-left" title="Wishlist" href="http://127.0.0.1:8000/add-to-wishlist/4">
                    <i class="pe-7s-like"></i>
                </a>
            </div>
        </div>
        <div class="product-content-4 text-center">
            <div class="product-rating-4">
                <i class="icofont icofont-star yellow"></i>
                <i class="icofont icofont-star yellow"></i>
                <i class="icofont icofont-star yellow"></i>
                <i class="icofont icofont-star yellow"></i>
                <i class="icofont icofont-star"></i>
            </div>
            <h4><a href="http://127.0.0.1:8000/products/4">Cheese</a></h4>
            <span>1/2 kg</span>
            <h5>kshs 199</h5>
        <p>Farmer 2</p>
        </div>
    </div>
</div>
                                                    <div class="custom-col-style-2 custom-col-4">
    <div class="product-wrapper product-border mb-24">
        <div class="product-img-3">
            <a href="http://127.0.0.1:8000/products/5">
                                    <img src="/assets/img/product/electro/5.jpg" alt="">
                            </a>
            <div class="product-action-right">
                <a class="animate-right" href="http://127.0.0.1:8000/products/5" title="View">
                    <i class="pe-7s-look"></i>
                </a>
                <a class="animate-top" title="Add To Cart" href="http://127.0.0.1:8000/add-to-cart/5">
                    <i class="pe-7s-cart"></i>
                </a>
                <a class="animate-left" title="Wishlist" href="http://127.0.0.1:8000/add-to-wishlist/5">
                    <i class="pe-7s-like"></i>
                </a>
            </div>
        </div>
        <div class="product-content-4 text-center">
            <div class="product-rating-4">
                <i class="icofont icofont-star yellow"></i>
                <i class="icofont icofont-star yellow"></i>
                <i class="icofont icofont-star yellow"></i>
                <i class="icofont icofont-star yellow"></i>
                <i class="icofont icofont-star"></i>
            </div>
            <h4><a href="http://127.0.0.1:8000/products/5">Milk</a></h4>
            <span>1 litre</span>
            <h5>kshs 98</h5>
        <p>Farmer 2</p>
        </div>
    </div>
</div>
                                                    <div class="custom-col-style-2 custom-col-4">
    <div class="product-wrapper product-border mb-24">
        <div class="product-img-3">
            <a href="http://127.0.0.1:8000/products/6">
                                    <img src="/assets/img/product/electro/6.jpg" alt="">
                            </a>
            <div class="product-action-right">
                <a class="animate-right" href="http://127.0.0.1:8000/products/6" title="View">
                    <i class="pe-7s-look"></i>
                </a>
                <a class="animate-top" title="Add To Cart" href="http://127.0.0.1:8000/add-to-cart/6">
                    <i class="pe-7s-cart"></i>
                </a>
                <a class="animate-left" title="Wishlist" href="http://127.0.0.1:8000/add-to-wishlist/6">
                    <i class="pe-7s-like"></i>
                </a>
            </div>
        </div>
        <div class="product-content-4 text-center">
            <div class="product-rating-4">
                <i class="icofont icofont-star yellow"></i>
                <i class="icofont icofont-star yellow"></i>
                <i class="icofont icofont-star yellow"></i>
                <i class="icofont icofont-star yellow"></i>
                <i class="icofont icofont-star"></i>
            </div>
            <h4><a href="http://127.0.0.1:8000/products/6">Sugarcane</a></h4>
            <span>1 kg</span>
            <h5>kshs 267</h5>
        <p>Farmer 2</p>
        </div>
    </div>
</div>
                                                    <div class="custom-col-style-2 custom-col-4">
    <div class="product-wrapper product-border mb-24">
        <div class="product-img-3">
            <a href="http://127.0.0.1:8000/products/7">
                                    <img src="/assets/img/product/electro/7.jpg" alt="">
                            </a>
            <div class="product-action-right">
                <a class="animate-right" href="http://127.0.0.1:8000/products/7" title="View">
                    <i class="pe-7s-look"></i>
                </a>
                <a class="animate-top" title="Add To Cart" href="http://127.0.0.1:8000/add-to-cart/7">
                    <i class="pe-7s-cart"></i>
                </a>
                <a class="animate-left" title="Wishlist" href="http://127.0.0.1:8000/add-to-wishlist/7">
                    <i class="pe-7s-like"></i>
                </a>
            </div>
        </div>
        <div class="product-content-4 text-center">
            <div class="product-rating-4">
                <i class="icofont icofont-star yellow"></i>
                <i class="icofont icofont-star yellow"></i>
                <i class="icofont icofont-star yellow"></i>
                <i class="icofont icofont-star yellow"></i>
                <i class="icofont icofont-star"></i>
            </div>
            <h4><a href="http://127.0.0.1:8000/products/7">Pig</a></h4>
            <span>One whole pig</span>
            <h5>kshs 1655</h5>
        <p>Farmer 3</p>
        </div>
    </div>
</div>
                                                    <div class="custom-col-style-2 custom-col-4">
    <div class="product-wrapper product-border mb-24">
        <div class="product-img-3">
            <a href="http://127.0.0.1:8000/products/8">
                                    <img src="/assets/img/product/electro/8.jpg" alt="">
                            </a>
            <div class="product-action-right">
                <a class="animate-right" href="http://127.0.0.1:8000/products/8" title="View">
                    <i class="pe-7s-look"></i>
                </a>
                <a class="animate-top" title="Add To Cart" href="http://127.0.0.1:8000/add-to-cart/8">
                    <i class="pe-7s-cart"></i>
                </a>
                <a class="animate-left" title="Wishlist" href="http://127.0.0.1:8000/add-to-wishlist/8">
                    <i class="pe-7s-like"></i>
                </a>
            </div>
        </div>
        <div class="product-content-4 text-center">
            <div class="product-rating-4">
                <i class="icofont icofont-star yellow"></i>
                <i class="icofont icofont-star yellow"></i>
                <i class="icofont icofont-star yellow"></i>
                <i class="icofont icofont-star yellow"></i>
                <i class="icofont icofont-star"></i>
            </div>
            <h4><a href="http://127.0.0.1:8000/products/8">Maize</a></h4>
            <span>1 kg of Maize with combs</span>
            <h5>kshs 544</h5>
        <p>Farmer 3</p>
        </div>
    </div>
</div>
                                                    <div class="custom-col-style-2 custom-col-4">
    <div class="product-wrapper product-border mb-24">
        <div class="product-img-3">
            <a href="http://127.0.0.1:8000/products/9">
                                    <img src="/assets/img/product/electro/9.jpg" alt="">
                            </a>
            <div class="product-action-right">
                <a class="animate-right" href="http://127.0.0.1:8000/products/9" title="View">
                    <i class="pe-7s-look"></i>
                </a>
                <a class="animate-top" title="Add To Cart" href="http://127.0.0.1:8000/add-to-cart/9">
                    <i class="pe-7s-cart"></i>
                </a>
                <a class="animate-left" title="Wishlist" href="http://127.0.0.1:8000/add-to-wishlist/9">
                    <i class="pe-7s-like"></i>
                </a>
            </div>
        </div>
        <div class="product-content-4 text-center">
            <div class="product-rating-4">
                <i class="icofont icofont-star yellow"></i>
                <i class="icofont icofont-star yellow"></i>
                <i class="icofont icofont-star yellow"></i>
                <i class="icofont icofont-star yellow"></i>
                <i class="icofont icofont-star"></i>
            </div>
            <h4><a href="http://127.0.0.1:8000/products/9">Potatoes</a></h4>
            <span>1 bucket of Potatoes</span>
            <h5>kshs 1317</h5>
        <p>Farmer 3</p>
        </div>
    </div>
</div>
                                                    <div class="custom-col-style-2 custom-col-4">
    <div class="product-wrapper product-border mb-24">
        <div class="product-img-3">
            <a href="http://127.0.0.1:8000/products/10">
                                    <img src="/assets/img/product/electro/10.jpg" alt="">
                            </a>
            <div class="product-action-right">
                <a class="animate-right" href="http://127.0.0.1:8000/products/10" title="View">
                    <i class="pe-7s-look"></i>
                </a>
                <a class="animate-top" title="Add To Cart" href="http://127.0.0.1:8000/add-to-cart/10">
                    <i class="pe-7s-cart"></i>
                </a>
                <a class="animate-left" title="Wishlist" href="http://127.0.0.1:8000/add-to-wishlist/10">
                    <i class="pe-7s-like"></i>
                </a>
            </div>
        </div>
        <div class="product-content-4 text-center">
            <div class="product-rating-4">
                <i class="icofont icofont-star yellow"></i>
                <i class="icofont icofont-star yellow"></i>
                <i class="icofont icofont-star yellow"></i>
                <i class="icofont icofont-star yellow"></i>
                <i class="icofont icofont-star"></i>
            </div>
            <h4><a href="http://127.0.0.1:8000/products/10">Garlic</a></h4>
            <span> 1/2 kg of ground garlic</span>
            <h5>kshs 110</h5>
        <p>Farmer 3</p>
        </div>
    </div>
</div>
                                                    <div class="custom-col-style-2 custom-col-4">
    <div class="product-wrapper product-border mb-24">
        <div class="product-img-3">
            <a href="http://127.0.0.1:8000/products/11">
                                    <img src="/assets/img/product/electro/11.jpg" alt="">
                            </a>
            <div class="product-action-right">
                <a class="animate-right" href="http://127.0.0.1:8000/products/11" title="View">
                    <i class="pe-7s-look"></i>
                </a>
                <a class="animate-top" title="Add To Cart" href="http://127.0.0.1:8000/add-to-cart/11">
                    <i class="pe-7s-cart"></i>
                </a>
                <a class="animate-left" title="Wishlist" href="http://127.0.0.1:8000/add-to-wishlist/11">
                    <i class="pe-7s-like"></i>
                </a>
            </div>
        </div>
        <div class="product-content-4 text-center">
            <div class="product-rating-4">
                <i class="icofont icofont-star yellow"></i>
                <i class="icofont icofont-star yellow"></i>
                <i class="icofont icofont-star yellow"></i>
                <i class="icofont icofont-star yellow"></i>
                <i class="icofont icofont-star"></i>
            </div>
            <h4><a href="http://127.0.0.1:8000/products/11">Watermelons</a></h4>
            <span>A whole watermelon</span>
            <h5>kshs 757</h5>
        <p>Farmer 3</p>
        </div>
    </div>
</div>
                                                    <div class="custom-col-style-2 custom-col-4">
    <div class="product-wrapper product-border mb-24">
        <div class="product-img-3">
            <a href="http://127.0.0.1:8000/products/12">
                                    <img src="/assets/img/product/electro/12.jpg" alt="">
                            </a>
            <div class="product-action-right">
                <a class="animate-right" href="http://127.0.0.1:8000/products/12" title="View">
                    <i class="pe-7s-look"></i>
                </a>
                <a class="animate-top" title="Add To Cart" href="http://127.0.0.1:8000/add-to-cart/12">
                    <i class="pe-7s-cart"></i>
                </a>
                <a class="animate-left" title="Wishlist" href="http://127.0.0.1:8000/add-to-wishlist/12">
                    <i class="pe-7s-like"></i>
                </a>
            </div>
        </div>
        <div class="product-content-4 text-center">
            <div class="product-rating-4">
                <i class="icofont icofont-star yellow"></i>
                <i class="icofont icofont-star yellow"></i>
                <i class="icofont icofont-star yellow"></i>
                <i class="icofont icofont-star yellow"></i>
                <i class="icofont icofont-star"></i>
            </div>
            <h4><a href="http://127.0.0.1:8000/products/12">Eggplant</a></h4>
            <span>1 kg of Eggplant</span>
            <h5>kshs 457</h5>
        <p>Farmer 3</p>
        </div>
    </div>
</div>
                                                    <div class="custom-col-style-2 custom-col-4">
    <div class="product-wrapper product-border mb-24">
        <div class="product-img-3">
            <a href="http://127.0.0.1:8000/products/13">
                                    <img src="/assets/img/product/electro/13.jpg" alt="">
                            </a>
            <div class="product-action-right">
                <a class="animate-right" href="http://127.0.0.1:8000/products/13" title="View">
                    <i class="pe-7s-look"></i>
                </a>
                <a class="animate-top" title="Add To Cart" href="http://127.0.0.1:8000/add-to-cart/13">
                    <i class="pe-7s-cart"></i>
                </a>
                <a class="animate-left" title="Wishlist" href="http://127.0.0.1:8000/add-to-wishlist/13">
                    <i class="pe-7s-like"></i>
                </a>
            </div>
        </div>
        <div class="product-content-4 text-center">
            <div class="product-rating-4">
                <i class="icofont icofont-star yellow"></i>
                <i class="icofont icofont-star yellow"></i>
                <i class="icofont icofont-star yellow"></i>
                <i class="icofont icofont-star yellow"></i>
                <i class="icofont icofont-star"></i>
            </div>
            <h4><a href="http://127.0.0.1:8000/products/13">Strawberries</a></h4>
            <span>1 kg of strawberies</span>
            <h5>kshs 799</h5>
        <p>Farmer 4</p>
        </div>
    </div>
</div>
                                                    <div class="custom-col-style-2 custom-col-4">
    <div class="product-wrapper product-border mb-24">
        <div class="product-img-3">
            <a href="http://127.0.0.1:8000/products/14">
                                    <img src="/assets/img/product/electro/14.jpg" alt="">
                            </a>
            <div class="product-action-right">
                <a class="animate-right" href="http://127.0.0.1:8000/products/14" title="View">
                    <i class="pe-7s-look"></i>
                </a>
                <a class="animate-top" title="Add To Cart" href="http://127.0.0.1:8000/add-to-cart/14">
                    <i class="pe-7s-cart"></i>
                </a>
                <a class="animate-left" title="Wishlist" href="http://127.0.0.1:8000/add-to-wishlist/14">
                    <i class="pe-7s-like"></i>
                </a>
            </div>
        </div>
        <div class="product-content-4 text-center">
            <div class="product-rating-4">
                <i class="icofont icofont-star yellow"></i>
                <i class="icofont icofont-star yellow"></i>
                <i class="icofont icofont-star yellow"></i>
                <i class="icofont icofont-star yellow"></i>
                <i class="icofont icofont-star"></i>
            </div>
            <h4><a href="http://127.0.0.1:8000/products/14">Sheep</a></h4>
            <span>A whole sheep </span>
            <h5>kshs 2463</h5>
        <p>Farmer 4</p>
        </div>
    </div>
</div>
                                                    <div class="custom-col-style-2 custom-col-4">
    <div class="product-wrapper product-border mb-24">
        <div class="product-img-3">
            <a href="http://127.0.0.1:8000/products/15">
                                    <img src="/assets/img/product/electro/15.jpg" alt="">
                            </a>
            <div class="product-action-right">
                <a class="animate-right" href="http://127.0.0.1:8000/products/15" title="View">
                    <i class="pe-7s-look"></i>
                </a>
                <a class="animate-top" title="Add To Cart" href="http://127.0.0.1:8000/add-to-cart/15">
                    <i class="pe-7s-cart"></i>
                </a>
                <a class="animate-left" title="Wishlist" href="http://127.0.0.1:8000/add-to-wishlist/15">
                    <i class="pe-7s-like"></i>
                </a>
            </div>
        </div>
        <div class="product-content-4 text-center">
            <div class="product-rating-4">
                <i class="icofont icofont-star yellow"></i>
                <i class="icofont icofont-star yellow"></i>
                <i class="icofont icofont-star yellow"></i>
                <i class="icofont icofont-star yellow"></i>
                <i class="icofont icofont-star"></i>
            </div>
            <h4><a href="http://127.0.0.1:8000/products/15">Chicken</a></h4>
            <span>1 whole chicken(broiler)</span>
            <h5>kshs 763</h5>
        <p>Farmer 4</p>
        </div>
    </div>
</div>
                                                    <div class="custom-col-style-2 custom-col-4">
    <div class="product-wrapper product-border mb-24">
        <div class="product-img-3">
            <a href="http://127.0.0.1:8000/products/16">
                                    <img src="/assets/img/product/electro/16.jpg" alt="">
                            </a>
            <div class="product-action-right">
                <a class="animate-right" href="http://127.0.0.1:8000/products/16" title="View">
                    <i class="pe-7s-look"></i>
                </a>
                <a class="animate-top" title="Add To Cart" href="http://127.0.0.1:8000/add-to-cart/16">
                    <i class="pe-7s-cart"></i>
                </a>
                <a class="animate-left" title="Wishlist" href="http://127.0.0.1:8000/add-to-wishlist/16">
                    <i class="pe-7s-like"></i>
                </a>
            </div>
        </div>
        <div class="product-content-4 text-center">
            <div class="product-rating-4">
                <i class="icofont icofont-star yellow"></i>
                <i class="icofont icofont-star yellow"></i>
                <i class="icofont icofont-star yellow"></i>
                <i class="icofont icofont-star yellow"></i>
                <i class="icofont icofont-star"></i>
            </div>
            <h4><a href="http://127.0.0.1:8000/products/16">Chicks</a></h4>
            <span>1 chick</span>
            <h5>kshs 300</h5>
        <p>Farmer 4</p>
        </div>
    </div>
</div>
                                                    <div class="custom-col-style-2 custom-col-4">
    <div class="product-wrapper product-border mb-24">
        <div class="product-img-3">
            <a href="http://127.0.0.1:8000/products/17">
                                    <img src="/assets/img/product/electro/17.jpg" alt="">
                            </a>
            <div class="product-action-right">
                <a class="animate-right" href="http://127.0.0.1:8000/products/17" title="View">
                    <i class="pe-7s-look"></i>
                </a>
                <a class="animate-top" title="Add To Cart" href="http://127.0.0.1:8000/add-to-cart/17">
                    <i class="pe-7s-cart"></i>
                </a>
                <a class="animate-left" title="Wishlist" href="http://127.0.0.1:8000/add-to-wishlist/17">
                    <i class="pe-7s-like"></i>
                </a>
            </div>
        </div>
        <div class="product-content-4 text-center">
            <div class="product-rating-4">
                <i class="icofont icofont-star yellow"></i>
                <i class="icofont icofont-star yellow"></i>
                <i class="icofont icofont-star yellow"></i>
                <i class="icofont icofont-star yellow"></i>
                <i class="icofont icofont-star"></i>
            </div>
            <h4><a href="http://127.0.0.1:8000/products/17">Sheep&#039;s Milk</a></h4>
            <span>1 litre of Sheep&#039;s milk</span>
            <h5>Kshs 320</h5>
        <p>Farmer 4</p>
        </div>
    </div>
</div>
                                                    <div class="custom-col-style-2 custom-col-4">
    <div class="product-wrapper product-border mb-24">
        <div class="product-img-3">
            <a href="http://127.0.0.1:8000/products/18">
                                    <img src="/assets/img/product/electro/18.jpg" alt="">
                            </a>
            <div class="product-action-right">
                <a class="animate-right" href="http://127.0.0.1:8000/products/18" title="View">
                    <i class="pe-7s-look"></i>
                </a>
                <a class="animate-top" title="Add To Cart" href="http://127.0.0.1:8000/add-to-cart/18">
                    <i class="pe-7s-cart"></i>
                </a>
                <a class="animate-left" title="Wishlist" href="http://127.0.0.1:8000/add-to-wishlist/18">
                    <i class="pe-7s-like"></i>
                </a>
            </div>
        </div>
        <div class="product-content-4 text-center">
            <div class="product-rating-4">
                <i class="icofont icofont-star yellow"></i>
                <i class="icofont icofont-star yellow"></i>
                <i class="icofont icofont-star yellow"></i>
                <i class="icofont icofont-star yellow"></i>
                <i class="icofont icofont-star"></i>
            </div>
            <h4><a href="http://127.0.0.1:8000/products/18">Lettuce</a></h4>
            <span>1 kg of lettuce</span>
            <h5>kshs 230</h5>
        <p>Farmer 4</p>
        </div>
    </div>
</div>
                                                    <div class="custom-col-style-2 custom-col-4">
    <div class="product-wrapper product-border mb-24">
        <div class="product-img-3">
            <a href="http://127.0.0.1:8000/products/19">
                                    <img src="/assets/img/product/electro/19.jpg" alt="">
                            </a>
            <div class="product-action-right">
                <a class="animate-right" href="http://127.0.0.1:8000/products/19" title="View">
                    <i class="pe-7s-look"></i>
                </a>
                <a class="animate-top" title="Add To Cart" href="http://127.0.0.1:8000/add-to-cart/19">
                    <i class="pe-7s-cart"></i>
                </a>
                <a class="animate-left" title="Wishlist" href="http://127.0.0.1:8000/add-to-wishlist/19">
                    <i class="pe-7s-like"></i>
                </a>
            </div>
        </div>
        <div class="product-content-4 text-center">
            <div class="product-rating-4">
                <i class="icofont icofont-star yellow"></i>
                <i class="icofont icofont-star yellow"></i>
                <i class="icofont icofont-star yellow"></i>
                <i class="icofont icofont-star yellow"></i>
                <i class="icofont icofont-star"></i>
            </div>
            <h4><a href="http://127.0.0.1:8000/products/19">Peaches</a></h4>
            <span>1 kg of Peaches </span>
            <h5>kshs 741</h5>
        <p>Farmer 4</p>
        </div>
    </div>
</div>
                                                    <div class="custom-col-style-2 custom-col-4">
    <div class="product-wrapper product-border mb-24">
        <div class="product-img-3">
            <a href="http://127.0.0.1:8000/products/20">
                                    <img src="/assets/img/product/electro/20.jpg" alt="">
                            </a>
            <div class="product-action-right">
                <a class="animate-right" href="http://127.0.0.1:8000/products/20" title="View">
                    <i class="pe-7s-look"></i>
                </a>
                <a class="animate-top" title="Add To Cart" href="http://127.0.0.1:8000/add-to-cart/20">
                    <i class="pe-7s-cart"></i>
                </a>
                <a class="animate-left" title="Wishlist" href="http://127.0.0.1:8000/add-to-wishlist/20">
                    <i class="pe-7s-like"></i>
                </a>
            </div>
        </div>
        <div class="product-content-4 text-center">
            <div class="product-rating-4">
                <i class="icofont icofont-star yellow"></i>
                <i class="icofont icofont-star yellow"></i>
                <i class="icofont icofont-star yellow"></i>
                <i class="icofont icofont-star yellow"></i>
                <i class="icofont icofont-star"></i>
            </div>
            <h4><a href="http://127.0.0.1:8000/products/20">Hen</a></h4>
            <span>1 hen</span>
            <h5>kshs 529</h5>
        <p>Farmer 4</p>
        </div>
    </div>
</div>
                                                    <div class="custom-col-style-2 custom-col-4">
    <div class="product-wrapper product-border mb-24">
        <div class="product-img-3">
            <a href="http://127.0.0.1:8000/products/21">
                                    <img src="/assets/img/product/electro/21.jpg" alt="">
                            </a>
            <div class="product-action-right">
                <a class="animate-right" href="http://127.0.0.1:8000/products/21" title="View">
                    <i class="pe-7s-look"></i>
                </a>
                <a class="animate-top" title="Add To Cart" href="http://127.0.0.1:8000/add-to-cart/21">
                    <i class="pe-7s-cart"></i>
                </a>
                <a class="animate-left" title="Wishlist" href="http://127.0.0.1:8000/add-to-wishlist/21">
                    <i class="pe-7s-like"></i>
                </a>
            </div>
        </div>
        <div class="product-content-4 text-center">
            <div class="product-rating-4">
                <i class="icofont icofont-star yellow"></i>
                <i class="icofont icofont-star yellow"></i>
                <i class="icofont icofont-star yellow"></i>
                <i class="icofont icofont-star yellow"></i>
                <i class="icofont icofont-star"></i>
            </div>
            <h4><a href="http://127.0.0.1:8000/products/21">Soybeans</a></h4>
            <span>1 kg of soybeans(grounded)</span>
            <h5>kshs 719</h5>
        <p>Farmer 4</p>
        </div>
    </div>
</div>
                                                    <div class="custom-col-style-2 custom-col-4">
    <div class="product-wrapper product-border mb-24">
        <div class="product-img-3">
            <a href="http://127.0.0.1:8000/products/22">
                                    <img src="/assets/img/product/electro/22.jpg" alt="">
                            </a>
            <div class="product-action-right">
                <a class="animate-right" href="http://127.0.0.1:8000/products/22" title="View">
                    <i class="pe-7s-look"></i>
                </a>
                <a class="animate-top" title="Add To Cart" href="http://127.0.0.1:8000/add-to-cart/22">
                    <i class="pe-7s-cart"></i>
                </a>
                <a class="animate-left" title="Wishlist" href="http://127.0.0.1:8000/add-to-wishlist/22">
                    <i class="pe-7s-like"></i>
                </a>
            </div>
        </div>
        <div class="product-content-4 text-center">
            <div class="product-rating-4">
                <i class="icofont icofont-star yellow"></i>
                <i class="icofont icofont-star yellow"></i>
                <i class="icofont icofont-star yellow"></i>
                <i class="icofont icofont-star yellow"></i>
                <i class="icofont icofont-star"></i>
            </div>
            <h4><a href="http://127.0.0.1:8000/products/22">Goat</a></h4>
            <span>I whole Goat</span>
            <h5>kshs 1480</h5>
        <p>Farmer 4</p>
        </div>
    </div>
</div>
                                                    <div class="custom-col-style-2 custom-col-4">
    <div class="product-wrapper product-border mb-24">
        <div class="product-img-3">
            <a href="http://127.0.0.1:8000/products/23">
                                    <img src="/assets/img/product/electro/23.jpg" alt="">
                            </a>
            <div class="product-action-right">
                <a class="animate-right" href="http://127.0.0.1:8000/products/23" title="View">
                    <i class="pe-7s-look"></i>
                </a>
                <a class="animate-top" title="Add To Cart" href="http://127.0.0.1:8000/add-to-cart/23">
                    <i class="pe-7s-cart"></i>
                </a>
                <a class="animate-left" title="Wishlist" href="http://127.0.0.1:8000/add-to-wishlist/23">
                    <i class="pe-7s-like"></i>
                </a>
            </div>
        </div>
        <div class="product-content-4 text-center">
            <div class="product-rating-4">
                <i class="icofont icofont-star yellow"></i>
                <i class="icofont icofont-star yellow"></i>
                <i class="icofont icofont-star yellow"></i>
                <i class="icofont icofont-star yellow"></i>
                <i class="icofont icofont-star"></i>
            </div>
            <h4><a href="http://127.0.0.1:8000/products/23">Grapes</a></h4>
            <span>1 kg of Grapes</span>
            <h5>kshs 462</h5>
        <p>Farmer 5</p>
        </div>
    </div>
</div>
                                                    <div class="custom-col-style-2 custom-col-4">
    <div class="product-wrapper product-border mb-24">
        <div class="product-img-3">
            <a href="http://127.0.0.1:8000/products/24">
                                    <img src="/assets/img/product/electro/24.jpg" alt="">
                            </a>
            <div class="product-action-right">
                <a class="animate-right" href="http://127.0.0.1:8000/products/24" title="View">
                    <i class="pe-7s-look"></i>
                </a>
                <a class="animate-top" title="Add To Cart" href="http://127.0.0.1:8000/add-to-cart/24">
                    <i class="pe-7s-cart"></i>
                </a>
                <a class="animate-left" title="Wishlist" href="http://127.0.0.1:8000/add-to-wishlist/24">
                    <i class="pe-7s-like"></i>
                </a>
            </div>
        </div>
        <div class="product-content-4 text-center">
            <div class="product-rating-4">
                <i class="icofont icofont-star yellow"></i>
                <i class="icofont icofont-star yellow"></i>
                <i class="icofont icofont-star yellow"></i>
                <i class="icofont icofont-star yellow"></i>
                <i class="icofont icofont-star"></i>
            </div>
            <h4><a href="http://127.0.0.1:8000/products/24">Cassava</a></h4>
            <span>1 kg of Cassava</span>
            <h5>kshs 832</h5>
        <p>Farmer 5</p>
        </div>
    </div>
</div>
                                                    <div class="custom-col-style-2 custom-col-4">
    <div class="product-wrapper product-border mb-24">
        <div class="product-img-3">
            <a href="http://127.0.0.1:8000/products/25">
                                    <img src="/assets/img/product/electro/25.jpg" alt="">
                            </a>
            <div class="product-action-right">
                <a class="animate-right" href="http://127.0.0.1:8000/products/25" title="View">
                    <i class="pe-7s-look"></i>
                </a>
                <a class="animate-top" title="Add To Cart" href="http://127.0.0.1:8000/add-to-cart/25">
                    <i class="pe-7s-cart"></i>
                </a>
                <a class="animate-left" title="Wishlist" href="http://127.0.0.1:8000/add-to-wishlist/25">
                    <i class="pe-7s-like"></i>
                </a>
            </div>
        </div>
        <div class="product-content-4 text-center">
            <div class="product-rating-4">
                <i class="icofont icofont-star yellow"></i>
                <i class="icofont icofont-star yellow"></i>
                <i class="icofont icofont-star yellow"></i>
                <i class="icofont icofont-star yellow"></i>
                <i class="icofont icofont-star"></i>
            </div>
            <h4><a href="http://127.0.0.1:8000/products/25">Chilli peppers</a></h4>
            <span>1/2 kg of chilli pepers</span>
            <h5>kshs 360</h5>
        <p>Farmer 5</p>
        </div>
    </div>
</div>
                                                    <div class="custom-col-style-2 custom-col-4">
    <div class="product-wrapper product-border mb-24">
        <div class="product-img-3">
            <a href="http://127.0.0.1:8000/products/26">
                                    <img src="/assets/img/product/electro/26.jpg" alt="">
                            </a>
            <div class="product-action-right">
                <a class="animate-right" href="http://127.0.0.1:8000/products/26" title="View">
                    <i class="pe-7s-look"></i>
                </a>
                <a class="animate-top" title="Add To Cart" href="http://127.0.0.1:8000/add-to-cart/26">
                    <i class="pe-7s-cart"></i>
                </a>
                <a class="animate-left" title="Wishlist" href="http://127.0.0.1:8000/add-to-wishlist/26">
                    <i class="pe-7s-like"></i>
                </a>
            </div>
        </div>
       
                        
                    </div>
                </div>

            </div>
        </div>
    </div>

</div>

@endsection
