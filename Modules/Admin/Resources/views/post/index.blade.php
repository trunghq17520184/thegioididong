@extends('admin::layouts.master')
@section('content')
<div class="page-header">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{route('admin.index')}}">Trang chủ</a>
        </li>
        <li class="breadcrumb-item">
            <a href="#">Quản lý bài viết</a>
        </li>
    </ol>
    <div class="pull-right">
    <a href="{{route('admin.get.create.post')}}" class="btn alert-info">Thêm mới</a>
    </div>
</div>
</div>
@endsection