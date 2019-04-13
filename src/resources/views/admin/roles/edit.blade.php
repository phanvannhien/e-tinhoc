
@extends('admin.layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>@lang('app.edit')</h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <p>
            <a href="{{ route('role.create') }}" class="btn btn-success btn-sm">
                <i class="fa fa-plus"></i> @lang('app.create')</a>
            <a href="{{ route('role.index') }}" class="btn btn-info btn-sm"><i class="fa fa-angle-left"></i> @lang('app.back')</a>
        </p>
        <form method="POST" action="{{ route('role.update', $role->id ) }}" id="level-form" class="">
            <input type="hidden" name="_method" value="PUT">
            {{ csrf_field() }}

            <div class="box">
                <div class="box-body">

                    <div class="form-group">
                        <label for="name">@lang('role.name')</label>
                        <input readonly type="text" class="form-control" name="name" id="name" value="{{ old('name',$role->name  ) }}" required/>
                    </div>
                    <div class="form-group">
                        <label for="display_name">@lang('role.display_name') <span class="text-red">*</span></label>
                        <input type="text" class="form-control" name="display_name" id="display_name" value="{{ old('name',$role->display_name )}}" required/>
                    </div>

                    <div class="form-group">
                        <label for="description">@lang('role.description')<span class="text-red">*</span></label>
                        <textarea name="description" id="" class="form-control" cols="30" rows="3">{{ old('name',$role->description) }}</textarea>
                    </div>

                    <button type="submit" name="submit" class="btn btn-sm btn-success">
                        <i class="fa fa-save"></i> @lang('app.save')
                    </button>
                </div>
            </div>

        </form>

        <!-- /.box -->
    </section>
    <!-- /.content -->

@stop
