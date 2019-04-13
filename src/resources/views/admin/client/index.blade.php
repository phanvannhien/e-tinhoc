@extends('admin.layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Client</h1>
    </section>
    <!-- Main content -->
    <section class="content">

        <form action="{{ route('client.index') }}" class="form-inline">
        <!-- Default box -->
            <div class="box">
                <div class="box-header with-border">
                    <input type="checkbox" name="ids[]" class="i-checks check-all">
                    <a href="#" class="btn btn-danger btn-sm to-trash">
                        <i class="fa fa-trash"></i> @lang('app.delete')</a>
                    <a href="{{ route('client.create') }}" class="btn btn-success btn-sm">
                        <i class="fa fa-plus"></i> @lang('app.create')</a>
                    <hr>

                    <form class="form-inline" action="{{ route('client.index') }}">
                        <div class="form-group">
                            <input type="text" name="title" value="{{ request('title') }}" class="form-control" placeholder="@lang('client.name')" />
                        </div>
                        <button class="btn btn-info" type="submit" name="submit" value="search"><i class="fa fa-filter"></i> @lang('app.filter')</button>
                    </form>

                </div>
                <div class="box-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <td width="50"></td>
                            <td width="100">@lang('client.logo')</td>
                            <td>@lang('client.name')</td>
                            <td>@lang('client.url')</td>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach( $data as $item )
                            <tr id="row-{{ $item->id }}">
                                <td><input type="checkbox" class="data-id i-checks" name="id[]" value="{{ $item->id }}"></td>
                                <td><img class="img-thumbnail" src="{{ $item->logo }}" width="100" alt=""></td>
                                <td>
                                    <a href="#">{{ $item->name }}</a>
                                    <br>
                                    <a href="{{ route('client.edit', $item->id ) }}" class="">
                                            <i class="fa fa-edit"></i> {{ trans('app.edit') }}</a>
                                </td>

                                <td>{{ $item->url }}</td>
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
        </form>
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
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Tiếp tục xoá!'
            }, function(){

                $.ajax({
                    url: '{{ route("client.remove") }}' ,
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