
@extends('admin.layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>@lang('app.create') @lang('blocks.block')</h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <p class="clearfix">
            <a href="{{ route('block.index') }}" class="btn btn-info btn-sm">
                <i class="fa fa-angle-left"></i> @lang('app.back')</a>
        </p>

        <form method="POST" action="{{ route('block.store') }}" class="">

            {{ csrf_field() }}

            <div class="box">
                <div class="box-body">
                    <div class="form-group">
                        <label for="">@lang('blocks.block_code')</label>
                        <input type="text" class="form-control"
                               name="block_code"
                               id="block_code"
                               value="{{ old('block_code') }}" required/>
                    </div>

                    <div class="form-group">
                        <label for="block_title">@lang('blocks.block_title')</label>
                        <input type="text" class="form-control" name="block_title"
                               id="block_title" placeholder="" value="{{ old('block_title' ) }}"/>
                    </div>


                    <div class="form-group">
                        <label for="">@lang('blocks.block_content')</label>
                        <textarea class="form-control editor" name="block_content" id="" cols="30" rows="10">{{ old('block_content') }}</textarea>
                    </div>
                    <button type="submit" name="submit" class="btn btn-success btn-sm">
                        <i class="fa fa-save"></i> @lang('app.save')
                    </button>
                </div>
            </div>

        </form>

        <!-- /.box -->
    </section>
    <!-- /.content -->

@stop

@section('footer')
@stop
