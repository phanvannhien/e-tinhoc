
@extends('admin.layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <a href="{{ route('banks.index') }}" class="btn btn-info pull-right"><i class="fa fa-mail-reply"></i> Quay lại</a>
        <h1>Sửa<a href="{{ route('banks.create') }}" class="btn btn-success">
                <i class="fa fa-plus"></i> Thêm ngân hàng</a></h1>

    </section>

    <!-- Main content -->
    <section class="content">

        <form method="POST" action="{{ route('payment_banks.update', $bank->payment_bank_id ) }}" id="level-form" class="">
            <input type="hidden" name="_method" value="PUT">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-sm-9">
                    <div class="box">
                        <div class="box-body">

                            <div class="form-group">
                                <label for="payment_bank_name">Tên ngân hàng <span class="text-danger">*</span></label>
                                <select name="payment_bank_name" id="" class="form-control">
                                    @foreach( \App\Banks::where('status',1)->select('bank_name')->get() as $item )
                                        <option {{$bank->payment_bank_name ==$item->bank_name ? 'selected' : '' }}
                                                value="{{ $item->bank_name }}">{{ $item->bank_name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="">Tên tài khoản <span class="text-danger">*</span></label>
                                <input name="payment_bank_acc_name" type="text" class="form-control" id="" value="{{ $bank->payment_bank_acc_name }}" required>
                            </div>
                            <div class="form-group">
                                <label for="">Số tài khoản <span class="text-danger">*</span></label>
                                <input name="payment_bank_acc_number" type="text" class="form-control" id="" value="{{ $bank->payment_bank_acc_number }}" required>
                            </div>
                            <div class="form-group">
                                <label for="">Chi nhánh <span class="text-danger">*</span></label>
                                <input name="payment_bank_acc_address" type="text" class="form-control" id="" value="{{ $bank->payment_bank_acc_address }}" required>
                            </div>


                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="box">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="">Trạng thái</label>

                                <select name="status" id="" class="form-control">
                                    <option {{ ($bank->status == 1) ? 'selected' : '' }} value="1">Hoạt động</option>
                                    <option {{ ($bank->status == 0) ? 'selected' : '' }} value="0">Khoá hoạt động</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <button type="submit" name="submit" class="btn btn-lg btn-block btn-success">
                                    <i class="fa fa-save"></i> LƯU LẠI
                                </button>

                            </div>
                            <div class="form-group">
                                <a href="{{ route('payment_banks.index') }}" class="btn btn-info btn-block btn-lg "><i class="fa fa-mail-reply"></i> Quay lại</a>
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

@section('footer')
    <script>
        $(document).ready(function(){
            $('.colorpicker').colorpicker().on('changeColor', function(e) {
                $(this)[0].style.backgroundColor = e.color.toString('rgba');
            });
        })
    </script>
@stop
