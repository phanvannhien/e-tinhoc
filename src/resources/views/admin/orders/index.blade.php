@extends('admin.layouts.app')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>@lang('pages.pages')</h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box">
            <div class="box-header">
                <div class="tool-bars">
                    <input type="checkbox" name="ids[]" class="i-checks check-all">
                    <a href="#" class="btn btn-danger btn-sm to-trash">
                        <i class="fa fa-trash"></i> @lang('app.delete')</a>

                    <a href="{{ route('page.create') }}" class="btn btn-success btn-sm">
                        <i class="fa fa-plus"></i> @lang('app.create')</a>
                </div>
                <hr>

                <form class="form-inline" action="{{ route('page.index') }}">
                    <div class="form-group">
                        <input type="text" name="user_id" value="{{ request('user_id') }}" class="form-control" placeholder="@lang('order.user_id')" />
                    </div>
                    <button class="btn btn-info" type="submit" name="submit" value="search"><i class="fa fa-filter"></i> @lang('app.filter')</button>
                </form>

            </div>
            <div class="box-body">
                <table class="table">
                    <thead>
                    <tr>
                        <th width="50"></th>
                        <th>@lang('order.user_id')</th>
                        <th>@lang('order.is_guest')</th>
                        <th>@lang('order.shipping_full_name')</th>
                        <th>@lang('order.shipping_email')</th>
                        <th>@lang('order.shipping_phone')</th>
                        <th>@lang('order.shipping_title')</th>
                        <th>@lang('order.payment_title')</th>
                        <th>@lang('order.total')</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach( $data as $item )
                        <tr id="row-{{ $item->id }}">
                            <td><input type="checkbox" class="data-id i-checks" name="id[]" value="{{ $item->id }}"></td>
                            <td>
                                <a href="#">{{ $item->customer->full_name }}</a> <br/>
                                <a href="{{ route('order.show', $item->id ) }}" class="">
                                    <i class="fa fa-eye"></i> {{ trans('app.view') }}</a>
                            </td>
                            <td>{{ $item->is_guest }}</td>
                            <td>{{ $item->shipping_full_name }}</td>
                            <td><a href="mailto:{{ $item->shipping_email }}">{{ $item->shipping_email }}</a></td>
                            <td><a href="tel{{ $item->shipping_phone }}">{{ $item->shipping_phone }}</a></td>
                            <td>{{ $item->shipping_title }}</td>
                            <td>{{ $item->payment_title }}</td>
                            <td>{{ number_format($item->total) }}</td>
                        </tr>
                    @endforeach
                    </tbody>

                </table>
            </div>
            <div class="box-footer text-center">
                <div class="clearfix">
                    @if( $data && count($data))
                        <p class="text-right">@lang('app.showing') {{$data->firstItem()}}-{{$data->lastItem()}} @lang('app.of') {{$data->total()}}
                            @lang('app.results')</p>
                    @endif
                </div>
            </div>
        </div>
        <!-- /.box -->
        <div class="text-center">
            {!! $data->appends(request()->input())->links() !!}
        </div>
    </section>
    <!-- /.content -->

@stop

@section('footer')
    <script>
        $(function(){
            $('.check-all').on('ifToggled', function(e){
                $('.data-id').iCheck('toggle');
            });
        });

        $('.to-trash').on('click', function(e){
            e.preventDefault();

            var ids = $('.data-id:checked').map(function(){
                return $(this).val();
            });

            if( ids.length <= 0 ){
                swal("Thông báo!", "Chọn dữ liệu để xoá", "warning");
                return false;
            }

            swal({
                title: 'Bạn chắc chắn muốn xoá?',
                text: "Bạn không thể phục hồi",
                type: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Tiếp tục xoá!'
            }, function(){

                $.ajax({
                    url: '{{ route("page.remove") }}' ,
                    type: 'POST',
                    data: { id: ids.get() },
                    beforeSend: function(){

                    },
                    success: function( res ){
                        if( res.success ){
                            toastr.success( res.msg , '{{ config('app.name') }}')
                            ids.get().map( function(id){
                                $('#row-'+id).remove();
                            })
                        }else{
                            swal("Thông báo!", res.msg , "error");

                        }

                    }
                });
            });



        })
    </script>
@stop