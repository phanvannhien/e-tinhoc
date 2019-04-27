@extends('theme.layouts.app')
@section('main')
    @php
        $slider = Cache::remember('slider', 300 , function () {
            return \App\Models\Slider::where('status',1)->get();
        });

        $posts = Cache::remember('home-post', 300 , function () {
            return \App\Models\Blog::where('blog_status',1)->orderBy('created_at','DESC')->limit(3)->get();
        });
    @endphp
    <section id="" class="mb-4">
        <div class="container">
            <div class="row align-items-stretch">
                <div class="col-md-8">
                    <div id="home-slider">
                        @foreach( $slider as $slide  )
                            <a href="{{ $slide->url }}" title="{{ $slide->title }}">
                                <img class="img-fluid" src="{{ $slide->image }}" alt="{{ $slide->title }}" />
                            </a>
                        @endforeach
                    </div>
                </div>
                <div class="col-md-4">
                    <div id="home-post" class=" ">
                        <h3>Tin mới</h3>
                        @foreach( $posts as $blog )
                        <div class="post-item clearfix border p-2 bg-white mb-2">
                            <a href="{{ $blog->getUrl() }}">
                                <img src="{{ $blog->blog_thumbnail }}" alt="{{ $blog->blog_title }}" class="mr-2 img-fluid float-left">
                                <h3>{{ $blog->blog_title }}</h3>

                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
        $arrCate =  explode( ',', app('Configuration')->get('home_category_product'));
    ?>
    @if( is_array( $arrCate ) && count($arrCate) )
        @foreach($arrCate as $cat_id)
            @php
                $cat = Cache::remember( 'cat-carousel-'.$cat_id  , 300 , function () use ($cat_id) {
                    return  \App\Category::where('id',$cat_id )->first();
                });

                if($cat){
                    $products = Cache::remember( 'product-carousel-'.$cat_id  , 300 , function () use ($cat) {
                        return $cat->products()->orderBy('created_at','DESC')->limit(10)->get();
                    });
                }



            @endphp
            @if( $cat && $products )
            <section class="mb-4">
                <div class="container">
                    <h3 class=""><a href="{{ $cat->getUrl() }}" title="{{ $cat->category_name }}">{{ $cat->category_name }}</a></h3>
                    {!! view('theme.products.product_carousel', [ 'products' => $products ])->render() !!}
                </div>
            </section>
            @endif
            @endforeach
    @endif




@stop