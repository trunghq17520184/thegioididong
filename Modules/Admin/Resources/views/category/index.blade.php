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
        <li class="active">Dashboard</li>
    </ol>
</section>
<section class="content">
    @include('admin::category.form')

    <div class="table">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Quản lý chuyên mục</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table id="example2" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Ảnh</th>
                            <th>Tên chuyên mục</th>
                            <th>Slug</th>
                            <th>Số bài viết</th>
                            <th>Tác vụ</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(isset($categories))
                        @foreach($categories as $category)
                        <tr>
                            <td>{{$category->c_avatar}}</td>
                            <td>{{$category->c_name}}</td>
                            <td>{{$category->c_slug}}</td>
                            <td>{{$category->c_total}}</td>
                            <td>
                                <a href="{{route('admin.get.action.category',['edit',$category->id])}}" class="btn btn-success"> Sửa</a>
                                <a href="{{route('admin.get.action.category',['delete',$category->id])}}" class="btn btn-danger"> Xóa</a>
                            </td>
                        </tr>
                        @endforeach
                        @endif
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Ảnh</th>
                            <th>Tên chuyên mục</th>
                            <th>Slug</th>
                            <th>Số bài viết</th>
                            <th>Tác vụ</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <!-- /.box-body -->
        </div>
    </div>
</section>
@endsection