
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('slick-carousel');
require('magnific-popup');
require('jquery-bar-rating');
require('bootstrap-slider');
require('jquery.mmenu');


window.toastr = require('toastr');


const WOW = require('wowjs');

window.wow = new WOW.WOW({
    live: false
});

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

function openMiniCart() {
    $.ajax({
        url: '/ajax/cart',
        type: 'get',
        dataType: 'html',
        beforeSend: function () {
            $('#mini-cart-body').html('<div class="spinner-grow" style="width: 3rem; height: 3rem;" role="status">' +
                '<span class="sr-only">Loading...</span></div>');
        },
        success: function ( response ) {
            $('#modal-cart').modal('show');
            $('#mini-cart-body').html(response);
        },
        error: function(  jqXHR,  textStatus,  errorThrown){

        }
    });
}

jQuery(document).ready(function(){
    window.wow.init();

    $('.popover').popover();

    $("#mobile-nav").mmenu({
        "navbars": [
            {
                "position": "top",
                "content": [
                    "searchfield"
                ]
            }
        ]
    });


    $('#slider-price').slider({

    });

    $("#slider-price").on("slide", function(slideEvt) {
        var arrNum = slideEvt.value;
        $("#slider-price-text").text( arrNum[0].toString().replace(/\D/g, "")
                .replace(/\B(?=(\d{3})+(?!\d))/g, ".") + ' - ' +  arrNum[1].toString().replace(/\D/g, "")
                .replace(/\B(?=(\d{3})+(?!\d))/g, ".") );
    });

    // $(window).scroll(function() {
    //     if ($(this).scrollTop() > 200) {
    //         $('header').addClass("sticky");
    //     }else{
    //         $('header').removeClass("sticky");
    //     }
    // });


    $('#qty-down').on('click', function(e){
        var qty =  parseInt($(this).next('.qty').val());
        if( qty > 1  ){
            qty = qty - 1;
            $(this).next().val( qty );
        }
    });

    $('#qty-up').on('click', function(e){
        var qty =  parseInt($(this).prev('.qty').val());
        if( qty < 100  ){
            qty = qty + 1;
            $(this).prev().val( qty );
        }
    });

    $('.scroll-to').on('click', function(e){
        e.preventDefault();
        var target = jQuery(this).attr('href');

        jQuery('html, body').animate({
            scrollTop: jQuery(target).offset().top - 84
        }, 500);
    });

    $('#home-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        autoplay: true ,
        adaptiveHeight: true,
        centerMode: true,
        centerPadding: '0',
        fade: true,
        nextArrow: '<button class="slick-next"><i class="fa fa-angle-right"></i></button>',
        prevArrow: '<button class="slick-prev"><i class="fa fa-angle-left"></i></button>',
    });

    $('.product-carousel').slick({
        arrows: true,
        nextArrow: '<button class="slick-next"><i class="fa fa-angle-right"></i></button>',
        prevArrow: '<button class="slick-prev"><i class="fa fa-angle-left"></i></button>',
        speed: 500,
        slidesToShow: 4,
        slidesToScroll: 1,
        infinite: false,
        autoplay: true,
        // centerMode: true,
        // centerPadding: '0',
        responsive: [
            {
                breakpoint: 1800,
                settings: {
                    slidesToShow: 6,
                }
            },
            {
                breakpoint: 1400,
                settings: {
                    slidesToShow: 5,
                }
            },
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 4,
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 4,
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 2,
                }
            }
        ]

    });


    $('#btn-login').on( 'click', function(e){
        e.preventDefault();
        var form = $('#frm-login');
        var url = form.attr('action');
        $.ajax({
            url: url,
            type: 'post',
            dataType: 'json',
            data: $(form).serializeArray(),
            beforeSend: function () {
                $('body').addClass('loading');
            },
            success: function ( response ) {
                $('body').removeClass('loading');
                if( response.auth ){
                    window.location.reload();
                }
            },
            error: function(  jqXHR,  textStatus,  errorThrown){
                $('body').removeClass('loading');
                var alert = $(form).find('#alert');
                $(alert).html('').addClass('alert alert-danger');
                if( jqXHR.responseJSON.errors ){

                    for (var k in jqXHR.responseJSON.errors){
                        alert.append( jqXHR.responseJSON.errors[k]+'<br/>' );
                    }
                }
            }
        });

    });

    $('#btn-register').on( 'click', function(e){
        e.preventDefault();
        var form = $('#frm-register');
        var url = form.attr('action');
        $.ajax({
            url: url,
            type: 'post',
            dataType: 'json',
            data: form.serializeArray(),
            beforeSend: function () {
                $('body').addClass('loading');
            },
            success: function ( response ) {
                $('body').removeClass('loading');
                console.log(response);
                if( response.success ){
                    window.location.reload();
                }
            },
            error: function(  jqXHR,  textStatus,  errorThrown){
                $('body').removeClass('loading');
                var msg = '';
                var alert = $(form).find('#alert');
                $(alert).addClass('alert alert-danger');
                $(alert).html('');
                if( jqXHR.responseJSON.errors ){
                    for (var k in jqXHR.responseJSON.errors){
                        alert.append( jqXHR.responseJSON.errors[k]+'<br/>' );
                    }

                }
            }
        });

    });

    $('#open-mini-cart').on('click', function (e) {
        e.preventDefault();
        openMiniCart();
    });


    $('#more-description').on('click', function (e) {
        e.preventDefault();
        if( $('#product-description').hasClass('active') ){
            $('#product-description').css({
                'max-height': '70rem'
            }).removeClass('active');
            $(this).html('Xem thêm <i class="la la-angle-down"></i>')
        }else{
            $('#product-description').css({
                'max-height': '100%'
            }).addClass('active');
            $(this).html('Thu gọn <i class="la la-angle-up"></i>');
        }

    });


    $('#product-galleries').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        centerMode: false,
        centerPadding: '0',
        autoplay: true,
        autoplaySpeed: 2000,
        fade: true,
        asNavFor: '#product-thumbs',
        nextArrow: '<button class="slick-next"><i class="fa fa-angle-right"></i></button>',
        prevArrow: '<button class="slick-prev"><i class="fa fa-angle-left"></i></button>',
    });

    $('#product-thumbs').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        asNavFor: '#product-galleries',
        focusOnSelect: true,
        autoplay: true,
        autoplaySpeed: 2000,
        nextArrow: '<button class="slick-next"><i class="fa fa-angle-right"></i></button>',
        prevArrow: '<button class="slick-prev"><i class="fa fa-angle-left"></i></button>',

    });


    $('.star-rating').barrating({
        theme: 'fontawesome-stars'
    });


    $('#btn-review').on( 'click', function(e){
        e.preventDefault();
        var form = $(this).closest('form');
        console.log(form);
        var url = form.attr('action');

        var reviewTitle = $(form).find('#your_rating_title');
        var reviewContent = $(form).find('textarea');

        if ( $(reviewTitle).val() == '' ) {
            $(reviewTitle).addClass('is-invalid').focus();
            return false;
        }

        if ( $(reviewContent).val() == '' ) {
            $(reviewContent).addClass('is-invalid').focus();
            return false;
        }
        $.ajax({
            url: url,
            type: 'post',
            data: form.serializeArray(),
            beforeSend: function () {
                $(form).find('.wrap-loadding').show();
            },
            success: function ( response ) {
                $(form).find('.wrap-loadding').hide();
                if( response.success ){
                    toastr.success( response.msg );
                }else{
                    toastr.error( response.msg );
                }
                form[0].reset();

            },

        });

    });


    $('.btn-add-cart').on( 'click', function(e){
        e.preventDefault();
        var form = $(this).closest('form#form-addcart');
        var url = form.attr('action');
        $.ajax({
            url: url,
            type: 'post',
            dataType: 'json',
            data: form.serializeArray(),
            beforeSend: function () {
                $('body').addClass('loading');
            },
            success: function ( response ) {
                $('body').removeClass('loading');
                if(response.success){
                    toastr.success( response.msg );
                    $('#total-cart-item').text( response.cart_count );
                    openMiniCart();
                }else{
                    toastr.error( response.msg );
                }

            },

        });

    });

    $('body').on( 'click', '.remove-item-minicart', function(e){
        e.preventDefault();
        var $container = $('#side-cart');
        var $item = $(this).parent('.mini-cart-item');
        $.ajax({
            url: '/ajax/cart',
            type: 'DELETE',
            dataType: 'json',
            data: { pid: $(this).attr('data-pid') },
            beforeSend: function () {
                $container.find('.wrap-loadding').show();
            },
            success: function ( response ) {
                $container.find('.wrap-loadding').hide();
                if(response.success){
                    // $item.remove();
                    $('#total-cart-item').text( response.cart_count );
                    openMiniCart();
                }else{
                    toastr.error( response.msg );
                }

            },

        });

    });


    $('#sl-cities').on('change', function (e) {
        var data = $(this).val();
        $.ajax({
            url: '/ajax/district',
            dataType: 'json',
            method: 'get',
            data:{
                id: data
            },
            success: function(response){
                if( response.success ){
                    $('#sl-district').html('');
                    response.data.map(function (item, index) {
                        $('#sl-district').append('<option value="'+item.id+'">'+item.text+'</option>');
                    })
                }

            }
        });

    });

    $('select[name="address_id"]').on('change', function (event) {
        //alert(event.type + ' callback');
        if( $(this).val() == '0' ){
            $('#new-address').collapse("show");
        }else{
            $('#new-address').collapse("hide");
        }
    });


    $('.save-to-favorite').on( 'click', function(e){
        e.preventDefault();
        var pid = $(this).attr('data-id');
        var that = this;
        $.ajax({
            url: 'ajax/favorite',
            type: 'post',
            dataType: 'json',
            data: {
                id: pid
            },
            beforeSend: function () {
                $('body').addClass('loading');
            },
            success: function ( response ) {
                $('body').removeClass('loading');
                if( response.success ){
                    if( response.type == 'add' ){
                        $(that).find('i').attr('class','la la-heart la-2x');
                    }
                    if( response.type == 'remove' ){
                        $(that).find('i').attr('class','la la-heart-o la-2x');
                    }
                    toastr.success( response.msg );
                }else{
                    toastr.error( response.msg );
                }
            },
            error: function(  jqXHR,  textStatus,  errorThrown){
                $('body').removeClass('loading');
                toastr.error( 'Error' );
            }
        });

    });


    $(document).click(function(){
        $('#search-results').hide();
    });

    $('#frm-search input[type="text"]').click(function(){
        $('#search-results').show();
    });
    $('#frm-search input[type="text"]').focus(function(){
        $('#search-results').show();
    });

    $('#search-results, #frm-search').click(function(e){
        e.stopPropagation();
    });

    $('#button-search').on('click', function(e){
        e.preventDefault();
        $('#frm-search input[type="text"]').trigger('keyup');
    });

    $('#frm-search input[type="text"]').keyup(function (e) {
        e.preventDefault();
        console.log($(this).val());
        if( $(this).val().length > 3 ){
            $.ajax({
                url: 'ajax/search',
                type: 'get',
                data: {
                    s: $(this).val()
                },
                beforeSend: function () {

                },
                success: function ( response ) {
                    $('#search-results').html( response );
                    $('#search-results').show();
                },

            });
        }else{

        }
    });



});

