@extends('theme.layouts.app')
@section('seo')
    {!! app('SEO')->pageSEO( $page )->toHTML() !!}
@stop
@section('main')
<div id="breadcrumbs">
    <div class="container">
        <i class="fa fa-home"></i>
        {{ Breadcrumbs::render('page', $page ) }}
    </div>
</div>
<section class="pt-0 pb-3">
    <div class="container">
        <div class="content">
            {!! $page->content !!}
        </div>
    </div>
</section>
@stop

@section('footer')
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Article",
    "headline": "{{ $page->title }}",
    "name": "{{ $page->title }}",
    "mainEntityOfPage": "{{ request()->getUri() }}",
    "dateModified": "{{ $page->updated_at }}",
    "datePublished": "{{ $page->created_at }}",
    "dateCreated": "{{ $page->created_at }}",
    "image" : "{{ $page->thumbnail }}",
    "author": {
        "@type": "Person",
        "name": "Nhien Phan"
    },
    "publisher": {
        "@type": "Organization",
        "name": "{{ app('Configuration')->get('site_title') }}",
        "logo": {
              "@type": "ImageObject",
              "url": "{{ url('/') }}"
        }
    },
    "description": "",
    "review": {
        "@type": "Review",
        "url": "{{ request()->getUri() }}",
        "author": {
            "@type": "Person",
            "name": "Michael Nhien",
            "sameAs": "https://plus.google.com/110882598925562567554"
        },
        "datePublished": "{{ $page->created_at }}",
        "description": "Thiết kế website đẹp, tốc độ nhanh, phục vụ tốt, cảm thấy hài lòng",
        "inLanguage": "vi",
        "reviewRating": {
            "@type": "Rating",
            "worstRating": 1,
            "bestRating": 5,
            "ratingValue":5
        }
    }
}
</script>
@stop