@extends('admin.layouts.app')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>@lang('order.order') </h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <p>Mã đơn hàng: <span class="label label-info">{{ $order->id }}</span></p>
        <p>Ngày đặt: {{ $order->created_at }}</p>
        <p>Trạng thái: <span class="label label-success">{{ $order->getStatus() }}</span></p>


        <form action="{{ route('order.change_status') }}" method="post" class="form-inline">
            <input type="hidden" value="{{ $order->id }}" name="id">
            {{ csrf_field() }}
            <div class="form-group">
                <select class="form-control" name="status" name="status" id="">
                    @foreach( config('order.status') as $key => $s )
                        <option {{ ( $key == $order->status ) ? 'selected' : '' }}  value="{{ $key }}">{{ $s }}</option>
                    @endforeach
                </select>
            </div>

            <button class="btn btn-danger" type="submit" name="change_order_status">Change</button>
        </form>
        <hr/>
        <div class="row">
            <div class="col-md-6">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        Khách hàng
                    </div>
                    <div class="panel-body">
                        Họ tên: {{ $order->customer->full_name }} <br>
                        Email: <a href="mailto:{{ $order->customer->email }}">{{ $order->customer->email }}</a> <br/>
                        SDT: <a href="mailto:{{ $order->customer->phone }}">{{ $order->customer->phone }}</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        Thông tin giao hàng
                    </div>
                    <div class="panel-body">
                        Họ tên người nhận: {{ $order->shipping_full_name }} <br>
                        Email người nhận: <a href="mailto:{{ $order->shipping_email }}">{{ $order->shipping_email }}</a> <br/>
                        SDT người nhận: <a href="mailto:{{ $order->shipping_phone }}">{{ $order->shipping_phone }}</a>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-6">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        Hình thức giao hàng
                    </div>
                    <div class="panel-body">
                        {{ $order->shipping_title }} <br>
                        Phí giao hàng: {{ $order->shipping_amount }}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        Hình thức thanh toán
                    </div>
                    <div class="panel-body">
                        {{ $order->payment_title }} <br>
                    </div>
                </div>
            </div>
        </div>


        <!-- Default box -->
        <div class="box">
            <div class="box-header">
                Chi tiết đơn hàng
            </div>
            <div class="box-body">
            <table class="table-bordered table">
                <thead>
                    <tr>
                        <th>Sản phẩm</th>
                        <th>Số lượng</th>
                        <th>Đơn giá</th>
                        <th>Thành tiên</th>
                    </tr>
                </thead>
                <tbody>
                @foreach( $order->items as $item )
                <tr>
                    <td>{{ $item->product_title }}</td>
                    <td>{{ $item->qty_ordered }}</td>
                    <td>
                        {{ number_format($item->price) }}đ
                        @if( $item->base_price != 0 )
                            <br>
                            <del>{{ number_format($item->base_price) }}đ</del>
                        @endif
                    </td>
                    <td> {{ number_format($item->total) }}đ</td>
                </tr>
                @endforeach
                </tbody>
                <tfooter>
                    <tr>
                        <td colspan="4" class="text-right">
                            Tổng cộng: {{ number_format($order->total) }}đ
                        </td>
                    </tr>
                    <tr>
                        Ghi chú khách hàng: {{ $order->note }}
                    </tr>
                </tfooter>
            </table>
            </div>
        </div>


    </section>
    <!-- /.content -->
@stop

@section('footer')

@stop