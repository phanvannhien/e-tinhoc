@extends('theme.layouts.app')
@section('main')
    <div id="breadcrumbs">
        <div class="container">
            {{ Breadcrumbs::render('customer.profile') }}
        </div>
    </div>
    <section class="mb-5">
        <div class="container">
            <div class="row align-items-stretch">
                <div class="col-md-4">
                    @include('theme.customers.partials.sidebar')
                </div>
                <div id="primary" class="col-md-8">
                    <div id="primary-inner" class="bg-white p-4">
                        @include('theme.partials.messages')
                        <form class="forms-sample" method="POST" action="{{ route('customer.profile.save') }}">
                            @csrf
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="full_name">@lang('customer.full_name')</label>
                                        <input type="text" class="form-control" id="full_name" name="full_name"  value="{{ old('full_name', $user->full_name) }}">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="gender">@lang('customer.gender')</label>
                                        <select name="gender" id="gender" class="form-control">
                                            <option {{ $user->gender == 0 ? 'selected' : '' }} value="0">Nữ</option>
                                            <option {{ $user->gender == 1 ? 'selected' : '' }} value="1">Nam</option>
                                            <option {{ $user->gender == 2 ? 'selected' : '' }} value="2">Khác</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="email">Email <span class="text-danger">*</span></label>
                                <input type="email" name="email" class="form-control" id="email" value="{{ old('email',$user->email) }}">
                            </div>
                            <div class="form-group">
                                <label for="user_name">@lang('customer.user_name')<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="user_name" name="user_name" readonly value="{{ $user->user_name }}">
                            </div>

                            <div class="form-group">
                                <label for="phone">@lang('customer.phone')<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="phone" name="phone"  value="{{ old('phone',$user->phone) }}">
                            </div>

                            <?php
                            $carbon = new \Carbon\Carbon($user->dob);
                            ?>
                            <div class="form-group">

                                <div class="row">
                                    <div class="col-sm-2">
                                        <label for="day">@lang('customer.day')</label>
                                        <select class="dob day form-control" name="day" id="day">
                                            @for( $i = 1; $i <= 31 ; $i++ )
                                                <option {{ $carbon->day == $i ? 'selected' : '' }} value="{{ $i }}">{{ $i }}</option>
                                            @endfor
                                        </select>
                                    </div>
                                    <div class="col-sm-2">
                                        <label for="month">@lang('customer.month')</label>
                                        <select class="dob month form-control" name="month" id="month">
                                            @for( $i = 1; $i <= 12 ; $i++ )
                                                <option {{ $carbon->month == $i ? 'selected' : '' }} value="{{ $i }}">{{ $i }}</option>
                                            @endfor
                                        </select>

                                    </div>
                                    <div class="col-sm-2">
                                        <label for="year">@lang('customer.year')</label>
                                        <select class="dob year form-control" name="year" id="year">
                                            @for( $i = 1945 ; $i <= 2000 ; $i++ )
                                                <option {{ $carbon->year == $i ? 'selected' : '' }} value="{{ $i }}">{{ $i }}</option>
                                            @endfor
                                        </select>

                                    </div>

                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="sl-citie">@lang('customer.matp')</label>
                                        <select id="sl-cities" name="matp" class="form-control" id="">
                                            @foreach( \App\Models\Cities::select('matp','name')->get() as $tp )
                                                <option {{ $user->matp == $tp->matp ? 'selected' : '' }} value="{{ $tp->matp }}">{{ $tp->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="sl-district">@lang('customer.maqh')</label>
                                        <select id="sl-district" name="maqh" class="form-control" id="">
                                            @foreach( \App\Models\District::where('matp', $user->matp )->orderBy('name')->select('maqh','name')->get() as $qh )
                                                <option {{ $user->maqh == $qh->maqh ? 'selected' : '' }} value="{{ $qh->maqh }}">{{ $qh->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                            </div>

                            <div class="form-group">
                                <div class="form-group">
                                    <label for="address">@lang('customer.address')</label>
                                    <input type="text" class="form-control" id="address" name="address"  value="{{ old('address', $user->address) }}">
                                </div>
                            </div>

                            <button type="submit" class="btn btn-success mr-2"><i class="fa fa-save"></i> @lang('app.save')</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
