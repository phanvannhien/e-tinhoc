@extends('admin.layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Role</h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Default box -->

        <div class="box">
            <div class="box-header with-border">
                <a href="{{ route('role.create') }}" class="btn btn-success btn-sm">
                    <i class="fa fa-plus"></i> @lang('app.create')</a>
            </div>
            <div class="box-body">
                <table class="table">
                    <thead>
                    <tr>
                        <td>@lang('role.name')</td>
                        <td>@lang('role.display_name') </td>
                        <td>@lang('role.description')</td>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach( $data as $item )
                        <tr >
                            <td>
                                <a href="#">{{ $item->name }}</a> <br>
                                <a href="{{ route('role.edit', $item->id ) }}" class="">
                                    <i class="fa fa-edit"></i> {{ trans('app.edit') }}</a> |
                                <a href="{{ route('role.set', $item->id ) }}" class="">
                                    <i class="fa fa-edit"></i> {{ trans('app.edit') }}</a>
                            </td>
                            <td>{{ $item->display_name }}</td>
                            <td>{{ $item->description }}</td>

                        </tr>
                    @endforeach
                    </tbody>

                </table>
            </div>

            <div class="box-footer text-center">
                <div class="clearfix">
                    @if( $data && count($data))
                        <p class="text-right">@lang('app.showing')
                                {{$data->firstItem()}}-{{$data->lastItem()}} @lang('app.of') {{$data->total()}}
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
