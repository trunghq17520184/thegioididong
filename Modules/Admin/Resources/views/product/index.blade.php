@extends('admin::layouts.master')
@section('content')
<!-- Content Wrapper. Contains page content -->

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Dashboard
        <small>Version 2.0</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Danh sách sản phẩm</li>
    </ol>
</section>
<section class="content">
    <div class="table">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Quản lý danh sách</h3>
                <a href="" class="btn btn-info">Thêm mới</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table id="example2" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Ảnh</th>
                            <th>Tên</th>
                            <th>Mã sản phẩm</th>
                            <th>Danh mục</th>
                            <th>Trạng thái</th>
                            <th>Tác vụ</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Ảnh</th>
                            <th>Tên</th>
                            <th>Mã sản phẩm</th>
                            <th>Danh mục</th>
                            <th>Trạng thái</th>
                            <th>Tác vụ</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @if(isset($products))
                        @foreach($products as $product)
                        <tr>
                            <td style="text-align: center; width: 100px">
                                <img src="{{isset($product->pro_avatar)?pare_url_file($product->pro_avatar):asset('images/no-image.png')}}" alt="" style="width: 80px; height: 80px;">
                            </td>
                            <td>{{$product->pro_name}}
                                <ul style="list-style-type: none;">
                                    <li>
                                        <span>Giá sản phẩm: {{number_format($product->pro_price)}} đ</span>
                                    </li>
                                    <li>
                                        <span>Giá khuyến mãi: {{number_format($product->pro_price_discount)}} đ</span>
                                    </li>
                                    <li>
                                        <span>Kho hàng: {{$product->pro_stock}}</span>
                                    </li>
                                </ul>
                            </td>
                            <td>{{$product->pro_code}}</td>
                            <td>{{isset($product->category->c_name)? $product->category->c_name : '[N/A]'}}</td>
                            <td><a href="{{route('admin.get.action.product',['active',$product->id])}}" class="btn {{$product->getStatus($product->pro_active)['class']}}">{{$product->getStatus($product->pro_active)['name']}}</a></td>
                            <td>
                                <a href="{{route('admin.get.action.product',['edit',$product->id])}}" class="btn-success btn">Sửa</a>
                                <a href="{{route('admin.get.action.product',['delete',$product->id])}}" class="btn btn-danger">Xoá</a>
                            </td>
                        </tr>
                        @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
            <!-- /.box-body -->
        </div>
    </div>
</section>
@endsection