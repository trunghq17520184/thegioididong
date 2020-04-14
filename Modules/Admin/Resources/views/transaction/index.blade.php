@extends('admin::layouts.master')
@section('content')
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
                        <th>ID Đơn hàng</th>
                        <th>Thông tin khách hàng</th>
                        <th>Tài khoản</th>
                        <th>Tổng tiền</th>
                        <th>Ngày đặt</th>
                        <th>Trạng thái</th>
                        <th>Tác vụ</th>
                    </tr>
                </thead>
                <tbody>
                    @if(isset($transactions))
                    @foreach($transactions as $transaction)
                    <tr>
                        <td>{{$transaction->id}}</td>
                        <td>
                            <ul style="list-style-type: none;">
                                <li><b>{{$transaction->tst_name}}</b></li>
                                <li>{{$transaction->tst_email}}</li>
                                <li>{{$transaction->tst_phone}}</li>
                                <li>{{$transaction->tst_address}}</li>
                            </ul>
                        </td>
                        <td>
                            @if($transaction->tst_user_id)
                            <label class="label label-success">Thành viên</label>
                            @else
                            <label class="label label-default">Khách</label>
                            @endif
                        </td>
                        <td>{{number_format($transaction->tst_total_money)}}</td>
                        <td>{{date('d-m-Y', strtotime($transaction->created_at))}}</td>
                        <td><label class="label {{$transaction->getStatus($transaction->tst_status)['class']}}">{{$transaction->getStatus($transaction->tst_status)['name']}}</label></td>
                        <td>
                            <a href="" class="btn btn-success"> Chi tiết</a>
                            <a href="{{route('admin.get.action.transaction',['delete',$transaction->id])}}" class="btn btn-danger"> Xóa</a>
                        </td>
                    </tr>
                    @endforeach
                    @endif
                </tbody>
                <tfoot>
                    <tr>
                        <th>ID Đơn hàng</th>
                        <th>Thông tin khách hàng</th>
                        <th>Tài khoản</th>
                        <th>Tổng tiền</th>
                        <th>Ngày đặt</th>
                        <th>Trạng thái</th>
                        <th>Tác vụ</th>
                    </tr>
                </tfoot>
            </table>
        </div>
        <!-- /.box-body -->
    </div>
</div>
@endsection