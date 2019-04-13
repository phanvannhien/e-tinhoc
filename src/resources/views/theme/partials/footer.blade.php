<?php
    $configuration = app('Configuration');
    $stores = \App\Models\Store::all();

    $block_footer_1 = \App\Models\Block::where('block_code', 'footer_1')->first();
    $block_footer_2  = \App\Models\Block::where('block_code', 'footer_2')->first();
    $block_footer_3   = \App\Models\Block::where('block_code', 'footer_3')->first();
    $block_footer_4 = \App\Models\Block::where('block_code', 'footer_4')->first();
    $block_footer_contact = \App\Models\Block::where('block_code', 'footer_contact')->first();

?>
<footer>

    <div id="footer-main" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-3 footer-block mb-3 mb-md-0">
                    @if( $block_footer_1 )
                        <h3>{{ $block_footer_1->block_title  }}</h3>
                        {!! $block_footer_1->block_content !!}
                    @endif
                </div>
                <div class="col-md-6 col-lg-3 footer-block mb-3 mb-md-0">
                    @if( $block_footer_2 )
                        <h3>{{ $block_footer_2->block_title  }}</h3>
                        {!! $block_footer_2->block_content !!}
                    @endif
                </div>
                <div class="col-md-6 col-lg-3 footer-block mb-4 mb-md-0">
                    @if( $block_footer_3 )
                        <h3>{{ $block_footer_3->block_title  }}</h3>
                        {!! $block_footer_3->block_content !!}
                    @endif
                </div>
                <div class="col-md-6 col-lg-3 footer-block mb-4 mb-md-0">
                    @if( $block_footer_4 )
                        <h3>{{ $block_footer_4->block_title  }}</h3>
                        {!! $block_footer_4->block_content !!}
                    @endif
                </div>

            </div>
        </div>


    </div>

    <div id="footer-bottom" class="py-5">
        <div class="container">
            @if( $block_footer_contact )
            {!! $block_footer_contact->block_content !!}
            @endif
        </div>

    </div>

</footer>
