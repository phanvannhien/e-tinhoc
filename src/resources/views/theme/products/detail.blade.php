@extends('theme.layouts.app')
@inject('agent','Jenssegers\Agent\Agent')
@section('header')

@stop
@section('main')
<div id="breadcrumbs">
    <div class="container">
        {{ Breadcrumbs::render('product', $product) }}
    </div>
</div>
<div id="product-view">
    <section class="mb-4">
        <div class="container">
            <div class="bg-white p-3">
                <div class="row align-items-stretch">
                    <div id="product-media" class="col-lg-6">
                        <div class="mb-4 mb-lg-0">
                            @include( 'theme.products.media' )
                        </div>
                    </div>
                    <!-- end product media -->
                    <div id="product-sheet" class="col-lg-6">
                        <h1 class="product-name">{{ $product->title }}</h1>
                        
                        <div class="product-price bg-dark-50">
                            {!! $product->getPriceHTML() !!}
                        </div>
    
                        <div class="product-addcart">
                            <form id="form-addcart" action="{{ route('product.addcart') }}" method="post">
                                <input type="hidden" name="product_id" value="{{ $product->id }}">

                                <div class="product-quantity mb-3" style="max-width: 150px">
                                    <div class="input-group text-center">
                                    <span class="input-group-prepend" id="qty-down">
                                        <button class="btn" type="button" id="">-</button>
                                    </span>
                                        <input name="qty" type="text" value="1" max="100" min="1" class="form-control text-center qty" />
                                        <span class="input-group-append" id="qty-up">
                                        <button class="btn" type="button" id="">+</button>
                                    </span>
                                    </div>
                                </div>


                                <div class="clearfix mb-3">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <a data-pid="{{ $product->id }}" rel="nofollow" target="_blank" href="#"
                                               class="btn-add-cart btn btn-block btn-lg btn-radius btn-outline-danger mb-3 mb-sm-0" >
                                                <i class="fa fa-cart-plus"></i>
                                                @lang('product.add_cart')
                                            </a>
                                        </div>
                                        <div class="col-sm-6">
                                            <form action="{{ route('purchase') }}" method="post">
                                                {{ csrf_field()  }}
                                                <input type="hidden" name="pid" value="{{ $product->id }}">
                                                <button type="submit" class="btn btn-block btn-warning btn-lg btn-radius">
                                                    <i class="fa fa-shopping-cart"></i>
                                                    @lang('product.buy_now')
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <p>

                           
                            @if( auth()->check() )
                                @if( ! Auth::user()->loved( $product->id ) )
                                <a href="#" class="save-to-favorite" data-id="{{ $product->id }}">
                                    <i class="far fa-heart fa-lg"></i> Lưu tin
                                </a>
                                @else
                                <a href="#" class="save-to-favorite" data-id="{{ $product->id }}"><i class="fas fa-heart fa-lg"></i> Đã Lưu</a>
                                @endif
                            @else
                                <a href="#modal-login" class=""
                                    data-toggle="modal"><i class="far fa-heart fa-lg"></i> @lang('customer.favorite')</a>
                                
                            @endif
                                <a href="#product-reviews" class="scroll-to"><i class="fa fa-comments fa-lg"></i> @lang('product.reviews')</a>
                            </p>


                        </div>
                        <hr>
                        @include('theme.products.share')

                    </div>
                    <!-- end product sheet -->

                </div>
                @if( $product->brand )
                <div id="product-brand" class="border-top py-3">

                    <img src="{{ $product->brand->brand_logo }}"
                         style="max-width: 20rem"
                         class="img-fluid mr-md-3 mb-3 float-md-left img-thumbnail"
                         alt="{{ $product->brand->brand_name }}">
                    <h3 class="text-uppercase">@lang('front.brand') {{ $product->brand->brand_name }}</h3>
                    {!! $product->brand->brand_description !!}


                </div>
                <!-- end product brand -->
                @endif


            </div>
        </div>
    </section>

    <!-- begin product description -->
    <section class="py-5 bg-white">
        <div class="container">
            <div class="row align-items-stretch">
                <div class="col-md-8">
                    <div id="product-description" class=" content">
                        {!! $product->description  !!}
                    </div>
                    <p class="text-center mt-4">
                        <a id="more-description" href="#" class="btn btn-outline-secondary">@lang('app.read_more') <i class="fal fa-angle-down"></i></a>
                    </p>
                </div>
                <div class="col-md-4 border-left">
                    <div id="product-sort-description" class="px-3">
                        <h3 class="text-uppercase border-bottom pb-2">@lang('product.sort_description')</h3>

                        {!! $product->sort_description  !!}
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- end product description -->

    <!-- begin product related -->
    @include('theme.products.related')
    <!-- end product related -->

    <!-- begin product review -->
    @include('theme.products.review')
    <!-- end product review -->
</div>


@endsection

@section('footer')

<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Product",
        "name": "{{ $product->title }}",
        "image" : "{{ $product->thumbnail }}",
        "description": "{{ strip_tags($product->sort_description) }}",
        "sku": "TEMPLATE-{{ $product->id }}",
        "mpn": "925872",
        "price": "100000",
        "priceCurrency" : "VND",
        "brand": {
            "@type": "Thing",
            "name": "{{ app('Configuration')->get('site_title') }}"
        },

        "review": {
            "@type": "Review",
            "url": "{{ request()->getUri() }}",
            "author": {
            "@type": "Person",
                "name": "Michael Nhien",
                "sameAs": "https://plus.google.com/110882598925562567554"
        },
        "datePublished": "{{ $product->created_at }}",
            "description": "Thiết kế website đẹp, tốc độ nhanh, phục vụ tốt, cảm thấy hài lòng",
            "inLanguage": "vi",
            "reviewRating": {
            "@type": "Rating",
                "worstRating": 1,
                "bestRating": 5,
                "ratingValue":5
            }
        },
        "aggregateRating": {
            "@type": "AggregateRating",
            "ratingValue": "5",
            "reviewCount": "100"
        },
        "offers": {
            "@type": "Offer",
            "availability": "http://schema.org/InStock",
            "price": "100000.00",
            "priceCurrency": "VND"
        }

    }
</script>
@endsection