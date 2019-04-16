@extends('admin.layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>@lang('client.client')</h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <p class="clearfix">

            <a href="{{ route('client.index') }}" class="btn btn-info btn-sm ">
                <i class="fa fa-angle-left"></i> @lang('app.back')</a>
            <a href="{{ route('client.create') }}" class="btn btn-success btn-sm">
                <i class="fa fa-plus"></i> @lang('app.create')</a>
        </p>

        <form method="POST" action="{{ route('client.update', $client->id ) }}" class="">

            <input type="hidden" name="_method" value="PUT">
            {{ csrf_field() }}
            <div class="box">
                <div class="box-body">
                    <div class="form-group">
                        <label for="name">@lang('client.name')</label>
                        <input type="text" class="form-control"
                               name="name" id="name" value="{{ old('name', $client->name ) }}" required/>
                    </div>

                    <div class="form-group">
                        <label for="title">@lang('client.logo')</label>
                        <div class="input-group">
                                   <span class="input-group-btn">
                                     <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                                       <i class="fa fa-picture-o"></i> Choose
                                     </a>
                                   </span>
                            <input id="thumbnail" value="{{ old('logo',$client->logo) }}" class="form-control" readonly
                                   type="text" name="file_path">
                        </div>
                        <img class="img-thumbnail img-responsive" style="max-width: 200px" id="holder"
                             src="{{ $client->logo }}">
                    </div>

                    <div class="form-group">
                        <label for="url">@lang('client.url')</label>
                        <input type="text" class="form-control"
                               name="url" id="url" value="{{ old('url', $client->url) }}" required/>
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
