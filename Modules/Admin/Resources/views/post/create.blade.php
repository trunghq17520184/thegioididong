@extends('admin::layouts.master')
@section('content')
<div class="page-header">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{route('admin.index')}}">Trang chủ</a>
        </li>
        <li class="breadcrumb-item">
            <a href="#">Quản lý danh mục</a>
        </li>
        <li class="breadcrumb-item active">Thêm mới sản phẩm</li>
    </ol>
</div>
<div class="post-create">
    @include("admin::post.form")
</div>
</div>
@endsection