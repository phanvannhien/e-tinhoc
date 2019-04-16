@extends('admin.layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>@lang('app.edit')</h1>
    </section>

    <!-- Main content -->
    <section class="content">

        @include('admin.partials.messages')

        <form action="{{ route('sys_user.update', $user->id) }}" method="post">
            <input type="hidden" name="_method" value="PUT">
            @csrf
            <div class="row">
            <div class="col-sm-9">
                <div class="box">
                    <div class="box-body">

                        <div class="form-group">
                            <label for="">Tên đăng nhập<span class="text-red">*</span></label>
                            <input value="{{ old('user_name', $user->user_name ) }}"
                                   type="text" class="form-control" name="user_name" id="user-name" placeholder="" required/>
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control" id="email" value="{{ $user->email }}">
                        </div>

                        <div class="form-group">
                            <label for="is_change_password">Đổi mật khẩu
                                <input type="checkbox" class="i-checks" name="is_change_password" id="is_change_password" placeholder=""/>
                            </label>

                        </div>
                        <div id="change-pass-wrap" class="collapse">
                            <div class="form-group">
                                <label for="">Mật khẩu<span class="text-red">*</span></label>
                                <input type="password" class="form-control" name="password" id="password" placeholder="******"/>

                            </div>
                            <div class="form-group">
                                <label for="">Nhắc lại Mật khẩu<span class="text-red">*</span></label>
                                <input type="password" class="form-control" name="re_password" id="re_password" placeholder="" />
                            </div>

                        </div>

                        <button type="submit" name="submit" class="btn btn-sm btn-success">
                            <i class="fa fa-save"></i> @lang('app.save')
                        </button>


                    </div>
                </div>



            </div>

            <div class="col-md-3">
                <div class="box">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="">@lang('user.status')</label>
                            <select name="status" id="" class="form-control">
                                <option {{ $user->status == 1 ? 'selected' : '' }} value="1">@lang('app.locked')</option>
                                <option {{ $user->status == 0 ? 'selected' : '' }} value="0">@lang('app.un_locked')</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="">@lang('user.locked')</label>
                            <select name="locked" id="" class="form-control">
                                <option {{ $user->locked == 1 ? 'selected' : '' }} value="1">@lang('app.locked')</option>
                                <option {{ $user->locked == 0 ? 'selected' : '' }} value="0">@lang('app.un_locked')</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="">@lang('user.role')</label>
                            <select name="role" id="" class="form-control">
                                <option value="">@lang('app.select')</option>
                                @if( count($roles) )
                                    @foreach( $roles as $role )
                                    <option {{ $role->name ? 'selected' : '' }}
                                            value="{{ $role->id }}">{{ $role->display_name }}</option>

                                    @endforeach
                                @endif
                            </select>
                        </div>


                    </div>
                </div>
            </div>
        </div>
        </form>
    </section>
    <!-- /.content -->

@stop
@section('footer')

    <script>
        $(function(){
            $('#is_change_password').on('ifToggled', function(e){
                $('#change-pass-wrap').collapse('toggle');
            });

        });
    </script>
    @stop