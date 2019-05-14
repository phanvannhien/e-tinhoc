
<header>
    <div id="header-top" class="clearfix d-none d-md-block">
        <div class="container">
            @if( $topNav )
                {!! App\Utils\Category::renderMenuHTML( $topNav, 'top-menu' ) !!}
            @endif
        </div>
    </div>
    <div id="header-main" class="">
        <div class="container">
            <div id="header-main-inner" class="row align-items-center">
                <div class="col-2 col-lg-3">
                    <div id="logo">
                        <a title="{{ config('app.name') }}" href="{{ url('/') }}">
                            <img src="{{ app('Configuration')->get('logo') }}" alt="{{ config('app.name') }}" />
                        </a>
                    </div>
                </div>
                <div class="col-2 d-none d-md-flex col-lg-5">
                    <div id="search-form">
                        <form id="frm-search" action="" method="">
                            @csrf
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="@lang('app.search')"
                                       aria-label="" aria-describedby="">
                                <div class="input-group-append">
                                    <button class="btn btn-primary text-white" type="button" id="button-search">@lang('app.search')</button>
                                </div>
                            </div>
                        </form>
                        <div id="search-results"></div>
                    </div><!-- end search-form -->
                </div>

                <div class="col-2 d-none d-lg-flex col-lg-2 justify-content-end">
                    <p class="mb-0 text-right">Hotline: <a class="hot-line" href="tel:{{ app('Configuration')->get('hot_line') }}">
                          <i class="fa fa-phone"></i>  {{ app('Configuration')->get('hot_line') }}</a> </p>
                </div>

                <div class="col-10 col-lg-2">
                    <div id="header-right">
                        <div id="user-nav" class="mr-md-3">
                            @if( Auth::check() )
                                <div id="user-wrap">
                                    <a href="{{ route('customer.dashboard') }}">
                                        <i class="la la-user"></i>
                                        {{ auth()->user()->user_name }}
                                    </a>
                                    <ul class="user-menu">
                                        <li class=""><a href="{{ route('customer.profile') }}"><i class="la la-user"></i> @lang('customer.profile')</a></li>
                                        <li class=""><a href="{{ route('customer.order') }}"><i class="la la-cubes"></i> @lang('customer.order')</a></li>
                                        <li class=""><a href="{{ route('customer.address') }}"><i class="la la-map-marker"></i> @lang('customer.address')</a></li>
                                        <li class=""><a href="{{ route('customer.password') }}"><i class="la la-unlock"></i> @lang('customer.password')</a></li>
                                        <li class="">
                                            <form action="{{ route('logout') }}" method="POST">
                                                @csrf
                                                <a onclick="$(this).parent('form').submit()"
                                                   href="#"><i class="la la-sign-out"></i> @lang('customer.logout')</a>
                                            </form>

                                        </li>
                                    </ul>
                                </div>
                            @else
                                <div id="user-wrap">
                                    <a href="#" class="btn btn-sm" data-toggle="modal" data-target="#modal-login">
                                        <i class="la la-user"></i>
                                        <span class="d-none d-md-flex"> @lang('customer.login')</span>

                                    </a>
                                </div>
                            @endif
                        </div>
                        <div id="mini-cart">
                            <a href="#" id="open-mini-cart">
                                <i class="la la-shopping-cart"></i>
                                <span id="total-cart-item" class="badge badge-warning text-white">{{ Cart::getTotalQuantity() }}</span>
                            </a>
                        </div>
                        <a href="#mobile-nav" id="open-mobile-menu">
                            <i class="la la-bars"></i>
                        </a>
                    </div><!-- end header-right -->
                </div>
            </div>
        </div>
    </div><!-- end header-main -->

    @if( Agent::isDesktop() )
    <div id="header-nav" class="clearfix">
        <div class="container">
            <nav id="main-navigation">
                @if( $primaryNav )
                    {!! App\Utils\Category::renderMenuHTML( $primaryNav, 'primary-menu' ) !!}
                @endif
            </nav>
        </div>
    </div>
        @endif
</header>
