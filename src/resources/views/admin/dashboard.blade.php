@extends('admin.layouts.app')
@section('content')
    <section class="content-header">
        <h1>
            Bảng quản trị
        </h1>
    </section>



    <!-- Main content -->
    <section class="content">

        <div class="row">
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <h3>{{ \App\Models\Order::count() }}</h3>
                        <p>@lang('order.order')</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <a href="{{ route('order.index') }}" class="small-box-footer">@lang('app.view') <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-green">
                    <div class="inner">
                        <h3>{{ \App\User::count() }}</h3>
                        <p>@lang('customer.customer')</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="{{ route('user.index') }}" class="small-box-footer">@lang('app.view')<i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-yellow">
                    <div class="inner">
                        <h3>{{ \App\Product::count() }}</h3>
                        <p>@lang('product.product')</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="{{ route('product.index') }}" class="small-box-footer">@lang('app.view') <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-red">
                    <div class="inner">
                        <h3>65</h3>

                        <p>Unique Visitors</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-pie-graph"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
        </div>


        <div class="box box-default">
            <div class="box-header with-border">
                <h3 class="box-title">@lang('order.order')</h3>
                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                </div>
            </div>

            <!-- /.box-header -->
            <div class="box-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th width="200">@lang('order.created_at')</th>
                            <th>@lang('order.status')</th>
                            <th>@lang('order.quantity')</th>
                            <th>@lang('order.total')</th>
                            <th></th>
                        </tr>
                        </thead>
                        @foreach( $orders  as $item)
                            <tr id="row-{{ $item->id }}">
                                <td>{{ $item->created_at }}</td>
                                <td><span class="label label-success">{{ $item->getStatus() }}</span> </td>
                                <td>{{ $item->id }}</td>
                                <td>{{ number_format($item->total) }}đ</td>
                                <td>
                                    <a href="{{ route('order.show', $item->id ) }}" class="btn-sm btn btn-info">
                                        <i class="fa fa-eye"></i> {{ trans('app.view') }}
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
                <!-- /.table-responsive -->
            </div>
            <!-- /.box-body -->
        </div>
    </section>
    <!-- /.content -->

@endsection
