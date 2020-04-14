@extends('layouts.app')
@section('content')
<!--Shopping Cart Area Strat-->
@if(\Cart::count()!=0)
<div class="Shopping-cart-area pt-60 pb-60 box">
    <div class="row">
        <div class="col-12">

            <div class="form-group">
                <h2 for="">Đơn hàng</h2>
            </div>
            <div class="table-content table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th class="li-product-remove">Xóa</th>
                            <th class="li-product-thumbnail">Hình ảnh</th>
                            <th class="cart-product-name">Sản phẩm</th>
                            <th class="li-product-price">Giá</th>
                            <th class="li-product-quantity">Số lượng</th>
                            <th class="li-product-subtotal">Thành tiền</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach($shoppingcart as $item)
                        <tr>
                            <td class="li-product-remove"><a href="{{route('get.shopping.delete',$item->rowId)}}"><i class="fa fa-times"></i></a></td>
                            <td class="li-product-thumbnail"><a href="{{route('get.detail.product',[$item->options->slug,$item->id])}}"><img src="{{pare_url_file($item->options->image)}}" alt="" style="height: 100px;"></a></td>
                            <td class="li-product-name"><a href="{{route('get.detail.product',[$item->options->slug,$item->id])}}">{{$item->name}}</a></td>
                            <td class="li-product-price">
                                @if($item->options->percent_discount!=0)
                                <span class="amount"> {{number_format($item->price)}} VNĐ</span>
                                <span class="old-price">{{number_format($item->options->price_old)}} VNĐ</span>

                                @else
                                <span class="amount">{{number_format($item->price)}} VNĐ</span>
                                @endif
                            </td>

                            <td class="quantity">
                                <label>Số lượng</label>
                                <div class="cart-plus-minus">
                                    <input class="cart-plus-minus-box" value="{{$item->qty}}" type="text">
                                    <div class="dec qtybutton"><i class="fa fa-angle-down"></i></div>
                                    <div class="inc qtybutton"><i class="fa fa-angle-up"></i></div>
                                </div>
                            </td>
                            <td class="product-subtotal"><span class="amount">{{number_format($item->price * $item->qty)}} VNĐ</span></td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="coupon-all">
                        <div class="coupon">
                            <input id="coupon_code" class="input-text" name="coupon_code" value="" placeholder="Nhập mã giảm giá" type="text">
                            <a class="btn btn-info" href="">Sử dụng</a>
                        </div>
                        <div class="coupon2">
                            <a class="btn btn-success" href="{{route('get.shopping.update')}}" type="submit">Cập nhật</a>
                        </div>
                    </div>
                </div>
            </div>
            <form action="{{route('post.shopping.order')}}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-5">
                        <div class="cart-page-total">
                            <h2 for="">Thông tin đơn hàng</h2>
                            <div class="form-group">
                                <label for="">Họ tên</label>
                                <input type="text" name="tst_name" id="" class="form-control" required placeholder="" aria-describedby="helpId">
                            </div>
                            <div class="form-group">
                                <label for="">Điện thoại</label>
                                <input type='tel' pattern='[0]{1}[0-9]{9}' title='Số điện thoại: 0977xxxxxx' required name="tst_phone">
                            </div>
                            <div class="form-group">
                                <label for="">Địa chỉ</label>
                                <input type="text" name="tst_address" id="" class="form-control" placeholder="" required aria-describedby="helpId">
                            </div>
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="text" name="tst_email" id="" class="form-control" placeholder="" required aria-describedby="helpId">
                            </div>
                            <div class="form-group">
                                <label for="">Ghi chú</label>
                                <textarea name="tst_note" id="" cols="30" rows="5"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 ml-auto">
                        <div class="cart-page-total">
                            <h2>Tổng thanh toán</h2>
                            <ul>
                                <li>Tổng thành tiền <span>{{\Cart::subtotal(0)}} VNĐ</span></li>
                                <li>Thuế <span>{{\Cart::tax(0)}} VNĐ</span></li>
                                <li>Tổng tiền <span>{{\Cart::total(0)}} VNĐ</span></li>
                            </ul>
                            <button class="btn btn-primary col-sm-12 my-3" type="submit">Đặt hàng</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@else
<div>Chưa có sản phẩm quay lại mua sắm</div>
@endif
<!--Shopping Cart Area End-->
@stop