<div class="col-lg-12">
    <!-- single-product-wrap start -->
    <div class="single-product-wrap">
        <div class="product-image">
            <a href="{{route('get.detail.product',[$product->pro_slug,$product->id])}}">
                <img src="{{isset($product->pro_avatar) ? pare_url_file($product->pro_avatar): asset('images/no-image.png')}}" alt="Li's Product Image">
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
                <h4><a class="product_name" href="{{route('get.detail.product',[$product->pro_slug,$product->id])}}">
                        <h3>{{$product->pro_name}}</h3>
                    </a></h4>
                <div class="price-box">
                    @if($product->pro_price_discount!=0)
                    <div class="per-discount">
                        <span class="discount-percentage"><i class="fa fa-bolt" style="color: white"></i> Giảm giá {{ROUND(100 - $product->pro_price_discount*100/$product->pro_price)}} %</span>
                    </div>
                    <div class="price">
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
            </div>
            <div class="add-actions">
                <ul class="add-actions-link">
                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                    <li><a class="links-details" href="wishlist.html"><i class="fa fa-heart-o"></i></a></li>
                    <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- single-product-wrap end -->
</div>