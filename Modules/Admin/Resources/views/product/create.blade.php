@extends('admin::layouts.master')
@section('content')
<section class="content-header">
    <h1>
        Dashboard
        <small>Version 2.0</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Danh sách sản phẩm</li>
        @if (!isset($product))
        <li class="active">Thêm mới</li>
        @endif
    </ol>
</section>
<section class="content">
    <div class="product-create">
        @include("admin::product.form")
    </div>
</section>
</div>
@endsection