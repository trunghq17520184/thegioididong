@extends('admin::layouts.master')
@section('content')
<div class="page-header">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{route('admin.index')}}">Trang chủ</a>
        </li>
        <li class="breadcrumb-item">
            <a href="{{route('admin.get.slider')}}">Quản lý Slider</a>
        </li>
        <li class="breadcrumb-item active">Danh sách</li>
    </ol>
</div>
<div class="card mb-3">
    <div class="card-header">
        <i class="fas fa-table"></i>
        Quản lý Slider
        @if (isset($slider))
        <a href="{{route('admin.get.slider')}}" class="">Thêm mới</a>
        @endif
    </div>
    <div class="card-body">
        <div class="col">
                @include("admin::slider.form")
            <div class="col product-content">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Ảnh</th>
                                <th>Tên</th>
                                <th>Mô tả</th>
                                <th>Slug</th>
                                <th>Số lượng</th>
                                <th style="width: 110px;">Tác vụ</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Ảnh</th>
                                <th>Tên</th>
                                <th>Mô tả</th>
                                <th>Slug</th>
                                <th>Số lượng</th>
                                <th style="width: 110px;">Tác vụ</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @if(isset($sliders))
                            @foreach($sliders as $slider)
                            <tr>
                                <td>{{$slider->c_avatar}}</td>
                                <td>{{$slider->c_name}}</td>
                                <td>{{$slider->c_description_seo}}</td>
                                <td>{{$slider->c_slug}}</td>
                                <td>{{$slider->c_total_product}}</td>
                                <td>
                                    <div class="tac-vu">
                                        <a href="{{route('admin.get.action.slider',['edit',$slider->id])}}" class="alert-primary btn">Sửa</a>
                                        <a href="{{route('admin.get.action.slider',['delete',$slider->id])}}" class="alert-danger btn">Xóa</a>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection