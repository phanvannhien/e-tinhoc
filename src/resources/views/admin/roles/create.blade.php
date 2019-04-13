
@extends('admin.layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>@lang('app.create')</h1>
    </section>

    <!-- Main content -->
    <section class="content">

        <form method="POST" action="{{ route('role.store') }}" id="level-form" class="">
            {{ csrf_field() }}

            <div class="box">
                <div class="box-body">
                    <div class="form-group">
                        <label for="name">@lang('role.name')</label>
                        <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}" required/>
                    </div>
                    <div class="form-group">
                        <label for="display_name">@lang('role.display_name') <span class="text-red">*</span></label>
                        <input type="text" class="form-control" name="display_name" id="display_name" value="{{ old('display_name') }}" required/>
                    </div>

                    <div class="form-group">
                        <label for="description">@lang('role.description')<span class="text-red">*</span></label>
                        <textarea name="description" id="" class="form-control" cols="30" rows="3">{{ old('description') }}</textarea>
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

@section('footer')
    <script>
        $(document).ready(function(){
            $('.colorpicker').colorpicker().on('changeColor', function(e) {
                $(this)[0].style.backgroundColor = e.color.toString('rgba');
            });
        })
    </script>
@stop
