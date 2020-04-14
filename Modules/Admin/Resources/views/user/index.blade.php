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
    <div class="table">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Quản lý người dùng</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table id="example2" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Tên</th>
                            <th>Email</th>
                            <th>Số điện thoại</th>
                            <th>Tác vụ</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(isset($users))
                        @foreach($users as $user)
                        <tr>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->phone}}</td>
                            <td>
                                <a href="{{route('admin.get.action.user',['delete',$user->id])}}" class="btn btn-danger"> Xóa</a>
                            </td>
                        </tr>
                        @endforeach
                        @endif
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Tên</th>
                            <th>Email</th>
                            <th>Số điện thoại</th>
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