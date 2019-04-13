
@extends('admin.layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Tạo thành viên mới</h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <form method="POST" action="{{ route('sys_user.store') }}" id="" class="">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-sm-9">
                    <div class="box">
                        <div class="box-body">
                            <h3>Thông tin đăng nhập</h3>

                            <div class="form-group">
                                <label for="">Email <span class="text-red">*</span></label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="" required/>
                            </div>
                            <div class="form-group">
                                <label for="">Tên đăng nhập<span class="text-red">*</span></label>
                                <input type="text" class="form-control" name="user_name" id="user-name" placeholder="" required/>
                            </div>

                            <div class="form-group">
                                <label for="">Mật khẩu<span class="text-red">*</span></label>
                                <input type="password" class="form-control" name="password" id="password" placeholder="******" required/>

                            </div>
                            <div class="form-group">
                                <label for="">Nhắc lại Mật khẩu<span class="text-red">*</span></label>
                                <input type="password" class="form-control" name="re_password" id="re_password" placeholder="" required/>
                            </div>
                            <button type="submit" name="submit" class="btn btn-sm btn-success">
                                <i class="fa fa-save"></i> LƯU LẠI
                            </button>

                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="box">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="">Trạng thái</label>
                                <select name="status" id="" class="form-control">
                                    <option value="1">Hoạt động</option>
                                    <option value="0">Khoá hoạt động</option>
                                </select>
                            </div>

                        </div>
                    </div>
                </div>
            </div>



        </form>

        <!-- /.box -->
    </section>
    <!-- /.content -->

@stop
