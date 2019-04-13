@extends('theme.layouts.app')
@section('main')
<div id="breadcrumbs">
    <div class="container">
        {{ Breadcrumbs::render('product.category', $category) }}
    </div>
</div>
<section class="">
    <div class="container">
        <div class="row">
            @if( Agent::isDesktop() )
                <div id="sidebar" class="col-md-3">
                    <form action="{{url( request()->fullUrl()) }}" method="get">
                        <div class="block-sidebar mb-3">
                            <div class="tree-category">
                                @php
                                    $arrSelected = [];

                                    if( request()->has('category') ){
                                        $arrSelected = request()->get('category');
                                    }else if( $category ){
                                        $arrSelected[] = $category->id;
                                    }


                                @endphp
                                {!! \App\Utils\Category::renderProductCategoryTree( $categories, 'layer-category', $arrSelected  ) !!}
                            </div>
                        </div>
                        <div class="block-sidebar mb-3 bg-white">
                            <div class="block-sidebar-header">
                                @lang('product.product_filter_price')
                            </div>
                            <div class="block-sidebar-body">
                                @if( Request::has('price_range') )
                                    <?php
                                    $arrPrice = explode(',', Request::get('price_range'));
                                    ?>
                                    <input name="price_range" id="slider-price" type="text" class="form-control" value=""
                                           data-slider-min="100000" data-slider-max="100000000"
                                           data-slider-step="500000" data-slider-value="[{{ $arrPrice[0] }},{{ $arrPrice[1] }}]"/> <br>
                                    <p class="text-danger text-center"><span id="slider-price-text">{{ number_format($arrPrice[0]) }} - {{ number_format($arrPrice[1]) }}</span></p>
                                @else
                                    <input name="price_range" id="slider-price" type="text" class="form-control" value=""
                                           data-slider-min="100000" data-slider-max="100000000"
                                           data-slider-step="500000" data-slider-value="[100000,10000000]"/> <br>
                                    <p class="text-danger text-center"><span id="slider-price-text">100.000 - 10.000.000</span></p>

                                @endif
                                <div class="row">
                                    <div class="col-6">
                                        <a class="btn btn-warning btn-block btn-sm mt-3 text-white" href="{{  url()->current() }}">@lang('app.reset')</a>
                                    </div>
                                    <div class="col-6">
                                        <button value="1" type="submit" name="apply_filter" class="btn btn-danger btn-block btn-sm mt-3">
                                            <i class="la la-filter"></i>
                                            @lang('app.apply')
                                        </button>
                                    </div>
                                </div>



                            </div>
                        </div>
                    </form>
                </div>
            @endif
            <div class="col-md-9">
                <div class="category-meta">
                    {!! $category->category_description !!}
                </div>
                <h1 class="relative">{{ $category->category_name }}</h1>
                <?php $currentURI = Request::fullUrl() ?>
                <div id="tool-bars" class="clearfix">

                    <div class="row justify-content-end">
                        <div class="col-md-6">
                            <p class="m-0">@lang('app.showing')
                                    {{$products->firstItem()}}-{{$products->lastItem()}} @lang('app.of') {{$products->total()}}
                                @lang('app.results')</p>
                        </div>
                        <div class="col-md-6">
                            <select class="float-right" name="order" id=""
                                    onchange="window.location.href = $(this).val()">
                                    @foreach( config('product.order') as $key => $val )
                                        @foreach( $val as $dir => $text )
                                            @php
                                                $url = url( request()->fullUrlWithQuery([ 'orderby' => $key, 'dir' => $dir ]));
                                                $selected = ( request()->get('orderby') == $key &&  request()->get('dir') == $dir )
                                                    ? 'selected'
                                                    : '';
                                            @endphp
                                            <option {{ $selected }} value="{{ $url }}">{{ $text }}</option>
                                        @endforeach
                                    @endforeach
                            </select>
                        </div>
                    </div>

                </div>

                <div class="row align-items-stretch ">
                    @foreach ( $products as $product )
                        <div class="col-6 col-md-4 mb-3">
                            {!! view('theme.products.view',[ 'product' => $product ])->render() !!}
                        </div>
                    @endforeach
                </div>

                <div class="pagination">
                    {!! $products->appends(request()->input())->links() !!}
                </div>

            </div>
        </div>


    </div>
</section>

@endsection
