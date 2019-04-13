
@extends('admin.layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>@lang('app.create')</h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <p>
            <a href="{{ route('type.index') }}" class="btn btn-info btn-sm">
                <i class="fa fa-angle-left"></i> @lang('app.back')</a>
        </p>

        <div class="box">
            <div class="box-body">
                <form method="POST" action="{{ route('type.store') }}" class="">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="">@lang('type.type_name')</label>
                        <input type="text" class="form-control"
                               name="type_name"
                               id="type_name"
                               value="{{ old('type_name') }}" required/>
                    </div>
                    <button type="submit" name="submit" class="btn btn-success">
                        <i class="fa fa-save"></i> @lang('app.save')
                    </button>
                </form>
            </div>
        </div>

        <!-- /.box -->
    </section>
    <!-- /.content -->

@stop

@section('footer')
@stop
