@extends('layouts.app')
@section('title',$category->c_name)
@section('content')
<!-- Begin Li's Breadcrumb Area -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-content">
            <ul>
                <li><a href="{{route('home')}}">Trang chủ</a></li>
                <li><a href="">Danh mục</a></li>
                <li class="active">{{$category->c_name}}</li>
            </ul>
        </div>
    </div>
</div>
<!-- Li's Breadcrumb Area End Here -->
<!-- Begin Li's Content Wraper Area -->
<div class="content-wraper pt-60 pb-60">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 order-2 order-lg-1">
                <!-- Begin Li's Banner Area -->
                <div class="single-banner shop-page-banner">
                    @if(isset($category->c_banner))
                    <a href="#">
                        <img src="{{pare_url_file($category->c_banner)}}" alt="{{$category->c_name}}">
                    </a>
                    @endif
                </div>
                <!-- Li's Banner Area End Here -->
                <!-- shop-top-bar start -->
                <div class="shop-top-bar mt-30">
                    <div class="shop-bar-inner">
                        <div class="product-view-mode">
                            <!-- shop-item-filter-list start -->
                            <ul class="nav shop-item-filter-list" role="tablist">
                                <li role="presentation"><a class="active show" aria-selected="true" data-toggle="tab" role="tab" aria-controls="grid-view" href="#grid-view"><i class="fa fa-th"></i></a></li>
                                <li class="active" role="presentation"><a data-toggle="tab" role="tab" aria-controls="list-view" href="#list-view"><i class="fa fa-th-list"></i></a></li>
                            </ul>
                            <!-- shop-item-filter-list end -->
                        </div>
                        <div class="toolbar-amount">
                            <span style="color: red">Tổng số: {{$products->total()}} sản phẩm</span>
                        </div>
                    </div>
                    <!-- product-select-box start -->
                    <div class="product-select-box">
                        <div class="product-short">
                            <p>Sort By:</p>
                            <select class="nice-select">
                                <option value="trending">Nổi bật</option>
                                <option value="sales">Tên (A - Z)</option>
                                <option value="sales">Tên (Z - A)</option>
                                <option value="rating">Giá (Thấp &gt; Cao)</option>
                                <option value="date">Đánh giá (Thấp nhất)</option>
                                <option value="price-asc">Model (A - Z)</option>
                                <option value="price-asc">Model (Z - A)</option>
                            </select>
                        </div>
                    </div>
                    <!-- product-select-box end -->
                </div>
                <!-- shop-top-bar end -->
                <!-- shop-products-wrapper start -->
                <div class="shop-products-wrapper">
                    <div class="tab-content">
                        <div id="list-view" class="tab-pane fade product-list-view " role="tabpanel">
                            <div class="row">
                                <div class="col">
                                    @if(isset($products))
                                    @foreach($products as $product)
                                    <div class="row product-layout-list">
                                        <div class="col-lg-3 col-md-5 ">
                                            <div class="product-image">
                                                <a href="{{route('get.detail.product',[$product->pro_slug,$product->id])}}">
                                                    <img src="{{isset($product->pro_avatar) ? pare_url_file($product->pro_avatar): asset('images/no-image.png')}}" alt="">
                                                </a>
                                                <span class="sticker">New</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 col-md-7">
                                            <div class="product_desc">
                                                <div class="product_desc_info">
                                                    <div class="product-review">
                                                        <h5 class="manufacturer">
                                                            <a href="{{isset($product->category->c_name)? route('get.list.product',[$product->category->c_slug,$product->category->id]) : route('home')}}">{{isset($product->category->c_name)? $product->category->c_name : '[N/A]'}}</a>
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
                                                    <h4><a class="product_name" href="{{route('get.detail.product',[$product->pro_slug,$product->id])}}">{{$product->pro_name}}</a></h4>
                                                    <div class="price-box">
                                                        @if($product->pro_price_discount!=0)
                                                        <span class="new-price new-price-2"> {{number_format($product->pro_price_discount)}} đ</span>
                                                        <span class="old-price">{{number_format($product->pro_price)}} đ</span>
                                                        <span class="discount-percentage">-7%</span>
                                                        @else
                                                        @if($product->pro_price!=0)
                                                        <span class="new-price new-price-2">{{number_format($product->pro_price)}} đ</span>
                                                        @else
                                                        <span class="new-price new-price-2">Liên hệ</span>
                                                        @endif
                                                        @endif
                                                    </div>
                                                    <p>{{$product->pro_meta_content}}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="shop-add-action mb-xs-30">
                                                <ul class="add-actions-link">
                                                    <li class="add-cart"><a href="#">Thêm vào giỏ</a></li>
                                                    <li class="wishlist"><a href="wishlist.html"><i class="fa fa-heart-o"></i>Yêu thích</a></li>
                                                    <li><a class="quick-view" data-toggle="modal" data-target="#exampleModalCenter" href="#"><i class="fa fa-eye"></i>Xem nhanh</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    @endif

                                </div>
                            </div>
                        </div>
                        <div id="grid-view" class="tab-pane fade active show" role="tabpanel">
                            <div class="product-area shop-product-area">
                                <div class="row">
                                    @if(isset($products))
                                    @foreach($products as $product)
                                    <div class="col-lg-4 col-md-4 col-sm-6 mt-40">
                                        <!-- single-product-wrap start -->
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                <a href="{{route('get.detail.product',[$product->pro_slug,$product->id])}}">
                                                    <img src="{{isset($product->pro_avatar) ? pare_url_file($product->pro_avatar): asset('images/no-image.png')}}" alt="">
                                                </a>
                                                <span class="sticker">Mới</span>
                                            </div>
                                            <div class="product_desc">
                                                <div class="product_desc_info">
                                                    <div class="product-review">
                                                        <h5 class="manufacturer">
                                                            <a href="{{isset($product->category->c_name)? route('get.list.product',[$product->category->c_slug,$product->category->id]) : route('home')}}">{{isset($product->category->c_name)? $product->category->c_name : '[N/A]'}}</a>
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
                                                    <h4><a class="product_name" href="{{route('get.detail.product',[$product->pro_slug,$product->id])}}">{{$product->pro_name}}</a></h4>
                                                    <div class="price-box">
                                                        @if($product->pro_price_discount!=0)
                                                        <span class="new-price new-price-2"> {{number_format($product->pro_price_discount)}} đ</span>
                                                        <span class="old-price">{{number_format($product->pro_price)}} đ</span>
                                                        <span class="discount-percentage">-7%</span>
                                                        @else
                                                        @if($product->pro_price!=0)
                                                        <span class="new-price new-price-2">{{number_format($product->pro_price)}} đ</span>
                                                        @else
                                                        <span class="new-price new-price-2">Liên hệ</span>
                                                        @endif
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="add-actions">
                                                    <ul class="add-actions-link">
                                                        <li class="add-cart active"><a href="shopping-cart.html">Thêm vào giỏ</a></li>
                                                        <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                                                        <li><a class="links-details" href="wishlist.html"><i class="fa fa-heart-o"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrap end -->
                                    </div>
                                    @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="float-right">
                            {!!$products->appends([])->links()!!}
                        </div>
                    </div>
                </div>
                <!-- shop-products-wrapper end -->
            </div>
            <div class="col-lg-3 order-1 order-lg-2">
                <!--sidebar-categores-box start  -->
                <div class="sidebar-categores-box mt-sm-30 mt-xs-30">
                    <div class="sidebar-title">
                        <h2>Laptop</h2>
                    </div>
                    <!-- category-sub-menu start -->
                    <div class="category-sub-menu">
                        <ul>
                            <li class="has-sub"><a href="# ">Prime Video</a>
                                <ul>
                                    <li><a href="#">All Videos</a></li>
                                    <li><a href="#">Blouses</a></li>
                                    <li><a href="#">Evening Dresses</a></li>
                                    <li><a href="#">Summer Dresses</a></li>
                                    <li><a href="#">T-Rent or Buy</a></li>
                                    <li><a href="#">Your Watchlist</a></li>
                                    <li><a href="#">Watch Anywhere</a></li>
                                    <li><a href="#">Getting Started</a></li>
                                </ul>
                            </li>
                            <li class="has-sub"><a href="#">Computer</a>
                                <ul>
                                    <li><a href="#">TV & Video</a></li>
                                    <li><a href="#">Audio & Theater</a></li>
                                    <li><a href="#">Camera, Photo</a></li>
                                    <li><a href="#">Cell Phones</a></li>
                                    <li><a href="#">Headphones</a></li>
                                    <li><a href="#">Video Games</a></li>
                                    <li><a href="#">Wireless Speakers</a></li>
                                </ul>
                            </li>
                            <li class="has-sub"><a href="#">Electronics</a>
                                <ul>
                                    <li><a href="#">Amazon Home</a></li>
                                    <li><a href="#">Kitchen & Dining</a></li>
                                    <li><a href="#">Bed & Bath</a></li>
                                    <li><a href="#">Appliances</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- category-sub-menu end -->
                </div>
                <!--sidebar-categores-box end  -->
                <!--sidebar-categores-box start  -->
                <div class="sidebar-categores-box">
                    <div class="sidebar-title">
                        <h2>Filter By</h2>
                    </div>
                    <!-- btn-clear-all start -->
                    <button class="btn-clear-all mb-sm-30 mb-xs-30">Clear all</button>
                    <!-- btn-clear-all end -->
                    <!-- filter-sub-area start -->
                    <div class="filter-sub-area">
                        <h5 class="filter-sub-titel">Brand</h5>
                        <div class="categori-checkbox">
                            <form action="#">
                                <ul>
                                    <li><input type="checkbox" name="product-categori"><a href="#">Prime Video (13)</a></li>
                                    <li><input type="checkbox" name="product-categori"><a href="#">Computers (12)</a></li>
                                    <li><input type="checkbox" name="product-categori"><a href="#">Electronics (11)</a></li>
                                </ul>
                            </form>
                        </div>
                    </div>
                    <!-- filter-sub-area end -->
                    <!-- filter-sub-area start -->
                    <div class="filter-sub-area pt-sm-10 pt-xs-10">
                        <h5 class="filter-sub-titel">Categories</h5>
                        <div class="categori-checkbox">
                            <form action="#">
                                <ul>
                                    <li><input type="checkbox" name="product-categori"><a href="#">Graphic Corner (10)</a></li>
                                    <li><input type="checkbox" name="product-categori"><a href="#"> Studio Design (6)</a></li>
                                </ul>
                            </form>
                        </div>
                    </div>
                    <!-- filter-sub-area end -->
                    <!-- filter-sub-area start -->
                    <div class="filter-sub-area pt-sm-10 pt-xs-10">
                        <h5 class="filter-sub-titel">Size</h5>
                        <div class="size-checkbox">
                            <form action="#">
                                <ul>
                                    <li><input type="checkbox" name="product-size"><a href="#">S (3)</a></li>
                                    <li><input type="checkbox" name="product-size"><a href="#">M (3)</a></li>
                                    <li><input type="checkbox" name="product-size"><a href="#">L (3)</a></li>
                                    <li><input type="checkbox" name="product-size"><a href="#">XL (3)</a></li>
                                </ul>
                            </form>
                        </div>
                    </div>
                    <!-- filter-sub-area end -->
                    <!-- filter-sub-area start -->
                    <div class="filter-sub-area pt-sm-10 pt-xs-10">
                        <h5 class="filter-sub-titel">Color</h5>
                        <div class="color-categoriy">
                            <form action="#">
                                <ul>
                                    <li><span class="white"></span><a href="#">White (1)</a></li>
                                    <li><span class="black"></span><a href="#">Black (1)</a></li>
                                    <li><span class="Orange"></span><a href="#">Orange (3) </a></li>
                                    <li><span class="Blue"></span><a href="#">Blue (2) </a></li>
                                </ul>
                            </form>
                        </div>
                    </div>
                    <!-- filter-sub-area end -->
                    <!-- filter-sub-area start -->
                    <div class="filter-sub-area pt-sm-10 pb-sm-15 pb-xs-15">
                        <h5 class="filter-sub-titel">Dimension</h5>
                        <div class="categori-checkbox">
                            <form action="#">
                                <ul>
                                    <li><input type="checkbox" name="product-categori"><a href="#">40x60cm (6)</a></li>
                                    <li><input type="checkbox" name="product-categori"><a href="#">60x90cm (6)</a></li>
                                    <li><input type="checkbox" name="product-categori"><a href="#">80x120cm (6)</a></li>
                                </ul>
                            </form>
                        </div>
                    </div>
                    <!-- filter-sub-area end -->
                </div>
                <!--sidebar-categores-box end  -->
                <!-- category-sub-menu start -->
                <div class="sidebar-categores-box mb-sm-0">
                    <div class="sidebar-title">
                        <h2>Laptop</h2>
                    </div>
                    <div class="category-tags">
                        <ul>
                            <li><a href="# ">Devita</a></li>
                            <li><a href="# ">Cameras</a></li>
                            <li><a href="# ">Sony</a></li>
                            <li><a href="# ">Computer</a></li>
                            <li><a href="# ">Big Sale</a></li>
                            <li><a href="# ">Accessories</a></li>
                        </ul>
                    </div>
                    <!-- category-sub-menu end -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Content Wraper Area End Here -->
@stop