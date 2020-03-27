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
<section class="content">
    @include('admin::slider.form')
    <div class="table">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Quản lý Slider</h3>
                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table id="example2" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Ảnh</th>
                            <th>Loại</th>
                            <th>URL</th>
                            <th>Mô tả</th>
                            <th>Tác vụ</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Ảnh</th>
                            <th>Loại</th>
                            <th>URL</th>
                            <th>Mô tả</th>
                            <th>Tác vụ</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @if(isset($sliders))
                        @foreach($sliders as $slider)
                        <tr>
                            <td>
                                <img src="{{pare_url_file($slider->name)}}" width="100px" alt=""></td>
                            <td>{{$slider->getType($slider->type)['name']}}</td>
                            <td>{{$slider->url}}</td>
                            <td>{{$slider->description}}</td>
                            <td>
                                <div class="tac-vu">
                                    <a href="{{route('admin.get.action.slider',['edit',$slider->id])}}" class="alert-success btn">Sửa</a>
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
</section>

@endsection