@extends('layouts.app')
@section('title',$product->pro_title_seo)
@section('content')
<!-- Begin Li's Breadcrumb Area -->
<div class="box">
    <div class="breadcrumb-area pl-10">
        <div class="breadcrumb-content">
            <ul>
                <li><a href="{{route('home')}}">Trang chủ</a></li>
                <li class="active"><a href="{{route('get.detail.product',[$product->pro_slug,$product->id])}}">{{$product->pro_name}}</a></li>
            </ul>
        </div>
    </div>
</div>
<!-- Li's Breadcrumb Area End Here -->
<!-- content-wraper start -->
<div class="row">
    <div class="col-sm-9">
        <div class="box">
            <div class="content-wraper pb-20">
                <div class="row single-product-area">
                    <div class="col-lg-6 col-md-6">
                        <!-- Product Details Left -->
                        <div class="product-details-left">
                            <div class="product-details-images slider-navigation-1">
                                <div class="lg-image">
                                    <a class="popup-img venobox vbox-item" href="{{isset($product->pro_avatar) ? pare_url_file($product->pro_avatar): asset('images/no-image.png')}}" data-gall="myGallery">
                                        <img src="{{isset($product->pro_avatar) ? pare_url_file($product->pro_avatar): asset('images/no-image.png')}}" alt="product image">
                                    </a>
                                </div>
                                <div class="lg-image">
                                    <a class="popup-img venobox vbox-item" href="{{isset($product->pro_avatar) ? pare_url_file($product->pro_avatar): asset('images/no-image.png')}}" data-gall="myGallery">
                                        <img src="{{isset($product->pro_avatar) ? pare_url_file($product->pro_avatar): asset('images/no-image.png')}}" alt="product image">
                                    </a>
                                </div>
                                <div class="lg-image">
                                    <a class="popup-img venobox vbox-item" href="{{isset($product->pro_avatar) ? pare_url_file($product->pro_avatar): asset('images/no-image.png')}}g" data-gall="myGallery">
                                        <img src="{{isset($product->pro_avatar) ? pare_url_file($product->pro_avatar): asset('images/no-image.png')}}" alt="product image">
                                    </a>
                                </div>
                                <div class="lg-image">
                                    <a class="popup-img venobox vbox-item" href="{{isset($product->pro_avatar) ? pare_url_file($product->pro_avatar): asset('images/no-image.png')}}" data-gall="myGallery">
                                        <img src="{{isset($product->pro_avatar) ? pare_url_file($product->pro_avatar): asset('images/no-image.png')}}" alt="product image">
                                    </a>
                                </div>
                                <div class="lg-image">
                                    <a class="popup-img venobox vbox-item" href="{{isset($product->pro_avatar) ? pare_url_file($product->pro_avatar): asset('images/no-image.png')}}" data-gall="myGallery">
                                        <img src="{{isset($product->pro_avatar) ? pare_url_file($product->pro_avatar): asset('images/no-image.png')}}" alt="product image">
                                    </a>
                                </div>
                                <div class="lg-image">
                                    <a class="popup-img venobox vbox-item" href="{{isset($product->pro_avatar) ? pare_url_file($product->pro_avatar): asset('images/no-image.png')}}" data-gall="myGallery">
                                        <img src="{{isset($product->pro_avatar) ? pare_url_file($product->pro_avatar): asset('images/no-image.png')}}" alt="product image">
                                    </a>
                                </div>
                            </div>
                            <div class="product-details-thumbs slider-thumbs-1 pt-10">
                                <div class="sm-image"><img src="{{isset($product->pro_avatar) ? pare_url_file($product->pro_avatar): asset('images/no-image.png')}}" alt="product image thumb"></div>
                                <div class="sm-image"><img src="{{isset($product->pro_avatar) ? pare_url_file($product->pro_avatar): asset('images/no-image.png')}}" alt="product image thumb"></div>
                                <div class="sm-image"><img src="{{isset($product->pro_avatar) ? pare_url_file($product->pro_avatar): asset('images/no-image.png')}}" alt="product image thumb"></div>
                                <div class="sm-image"><img src="{{isset($product->pro_avatar) ? pare_url_file($product->pro_avatar): asset('images/no-image.png')}}" alt="product image thumb"></div>
                                <div class="sm-image"><img src="{{isset($product->pro_avatar) ? pare_url_file($product->pro_avatar): asset('images/no-image.png')}}" alt="product image thumb"></div>
                                <div class="sm-image"><img src="{{isset($product->pro_avatar) ? pare_url_file($product->pro_avatar): asset('images/no-image.png')}}" alt="product image thumb"></div>
                            </div>
                        </div>
                        <!--// Product Details Left -->
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="product-details-view-content pt-60">
                            <div class="product-info">
                                <h1>{{isset($product->pro_name)?$product->pro_name:''}}</h1>
                                <span class="product-details-code">Mã sản phẩm: {{isset($product->pro_code)? $product->pro_code:''}}</span>
                                <div class="rating-box pt-20">
                                    <ul class="rating rating-with-review-item">
                                        <li><i class="fa fa-star-o"></i></li>
                                        <li><i class="fa fa-star-o"></i></li>
                                        <li><i class="fa fa-star-o"></i></li>
                                        <li class="no-star"><i class="fa fa-star-o"></i></li>
                                        <li class="no-star"><i class="fa fa-star-o"></i></li>
                                        <li class="review-item"><a href="#">Xem đánh giá</a></li>
                                    </ul>
                                </div>
                                <div class="price-box pt-20">
                                    @if($product->pro_discount_percent !=0)
                                    <div class="per-discount">
                                        <span class="discount-percentage"><i class="fa fa-bolt" style="color: white"></i> Giảm giá {{ROUND(100 - $product->pro_price_discount*100/$product->pro_price)}} %</span>
                                    </div>
                                    <div>
                                        <span class="new-price new-price-2"> {{number_format($product->pro_price_discount)}} đ</span>
                                        <span class="old-price">{{number_format($product->pro_price)}} đ</span>
                                    </div>
                                    @else
                                    @if($product->pro_price!=0)
                                    <span class="new-price new-price-2">{{number_format($product->pro_price)}} đ</span>
                                    @else
                                    <span class="new-price new-price-2">Liên hệ</span>
                                    @endif
                                    @endif
                                </div>
                                <div class="product-desc">
                                    <p>
                                        {{isset($product->pro_meta_content)?$product->pro_meta_content:''}}
                                    </p>
                                </div>
                                @include('products.block-reassurance')
                                <div class="product-stock">
                                    @if($product->pro_stock!=0)
                                    <div class="product-stock-size">
                                        <span> Còn hàng</span>
                                    </div>
                                    <div class="single-add-to-cart">
                                        <form action="" class="cart-quantity">
                                            <a class="add-to-cart" type="submit" href="{{route('get.shopping.add', $product->id)}}">
                                                Mua ngay
                                                <span>Giao hàng tận nơi</span>
                                            </a>
                                        </form>
                                    </div>
                                    @else
                                    <div class="stock-out">
                                        <span>Hết hàng</span>
                                    </div>
                                    @endif
                                </div>
                            </div>

                            <div class="product-additional-info pt-25">
                                <a class="wishlist-btn" href="wishlist.html"><i class="fa fa-heart-o"></i>Yêu thích</a>
                                <div class="product-social-sharing pt-25">
                                    <ul>
                                        <li class="facebook"><a href="#"><i class="fa fa-facebook"></i>Facebook</a></li>
                                        <li class="twitter"><a href="#"><i class="fa fa-twitter"></i>Twitter</a></li>
                                        <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i>Google +</a></li>
                                        <li class="instagram"><a href="#"><i class="fa fa-instagram"></i>Instagram</a></li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="box">
            <div class="rightInfo phone">
                <ul class="policy ">
                    <li class="inpr">
                        <span>Bộ sản phẩm gồm: <a class="stdImg" href="javascript:void(0)" onclick="showGalleryPS(100,0);">Sạc,Tai nghe,Sách hướng dẫn,Hộp,Cây lấy sim,Ốp lưng,Cáp <i class="icondetail-camera standkit" href="//cdn.tgdd.vn/Products/Images/42/211570/Kit/samsung-galaxy-a51-bbh-org.jpg"></i></a></span>
                    </li>
                    <li class="wrpr">
                        <span>
                            Bảo hành chính hãng 12 tháng.
                        </span>
                    </li>
                    <li class="chpr">
                        Lỗi là đổi mới trong 1 tháng tại hơn 2016 siêu thị toàn quốc
                        <a href="javascript:openPopWrt();">Xem chi tiết</a>
                    </li>

                </ul>
                <div class="productOld">
                    <a class="viewold" target="_blank" href="/may-doi-tra/dien-thoai/samsung-galaxy-a51?pid=211570&amp;c=42">
                        Xem Samsung Galaxy A51 cũ
                        <div>
                            <span>Giá dưới: <strong>6.410.000₫</strong></span>
                            <span>Bảo hành tới 11.5 tháng</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- content-wraper end -->
<!-- Begin Li's Laptop Product Area -->
<div class="box pt-30 pb-50">
    <div class="product-area">
        <div class="row">
            <!-- Begin Li's Section Area -->
            <div class="col-lg-12">
                <div class="box-title">
                    <h2>
                        <span>Sản phẩm cùng loại</span>
                    </h2>
                </div>
                <div class="row">
                    <div class="product-active owl-carousel">
                        @if(isset($product))
                        @foreach($product->getSameProduct($product->pro_category_id) as $product)
                        <div class="col-lg-12">
                            <!-- single-product-wrap start -->
                            @include('components.productbox')
                            <!-- single-product-wrap end -->
                        </div>
                        @endforeach
                        @endif
                    </div>
                </div>
            </div>
            <!-- Li's Section Area End Here -->
        </div>
    </div>
</div>
<!-- Li's Laptop Product Area End Here -->
<!-- Begin Product Area -->

<div class="row">
    <div class="col-sm-9">
        <div class="box py-3 px-3">
            <div class="box-title">
                <h2>
                    <span>Thông tin sản phẩm</span>
                </h2>
            </div>
            @include('products.product-decription')
        </div>
    </div>
    <div class="col-sm-3">
        <div class="box pt-10 pl-10">
            <div class="box-title">
                <h2>
                    <span>Thông số kỹ thuật</span>
                </h2>
            </div>
            <div class="box-title">
                <h2>
                    <span>Bài viết liên quan</span>
                </h2>
            </div>
        </div>

    </div>
</div>
<!-- Product Area End Here -->

@stop