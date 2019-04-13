@extends('admin.layouts.app')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>@lang('order.order')</h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box">
            <div class="box-header">
                <div class="tool-bars">
                    <a href="{{ route('order.create') }}" class="btn btn-success btn-sm">
                        <i class="fa fa-plus"></i> @lang('app.create')</a>
                </div>
                <hr>
                <form class="form-inline" action="{{ route('order.index') }}">
                    <div class="form-group">
                        <input type="text" name="title" value="{{ request('title') }}" class="form-control" placeholder="@lang('pages.title')" />
                    </div>
                    <button class="btn btn-info" type="submit" name="submit" value="search"><i class="fa fa-filter"></i> @lang('app.filter')</button>
                </form>

            </div>
            <div class="box-body">
                <table class="table">
                    <thead>
                    <tr>
                        <th width="50"></th>
                        <th>@lang('order.title')</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach( $data as $item )
                        <tr id="row-{{ $item->id }}">

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

