<!doctype html>

<html class="no-js" lang="vi">
<!--<![endif]-->
<head>
    <link rel="shortcut icon"
          href="{{asset('client-assets/theme.hstatic.net/1000177652/1000229231/14/favicon.png?v=90')}}"
          type="image/png"/>
    <meta charset="utf-8"/>
    <title>@yield('title')</title>
    <!--    <link rel="canonical" href="http://happylive.vn/"/>-->
    <meta name="robots" content="index,follow"/>
    <meta name="revisit-after" content="1 day"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="HandheldFriendly" content="true">
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=0'
          name='viewport'/>
    <!--    <link rel="dns-prefetch" href="http://happylive.vn">-->
    <link rel="dns-prefetch" href="./hstatic.net">
    <script>
        //<![CDATA[
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'www.google-analytics.com/analytics.js', 'ga');
        ga('create', 'UA-97086989-1', 'auto');
        try {

        } catch (e) {
        }
        ;
        ga('send', 'pageview');

        //]]>
    </script>
    <script>
        //<![CDATA[
        !function (f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function () {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window,
            document, 'script', "{{asset('client-assets/connect.facebook.net/en_US/fbevents.js')}}");
        // Insert Your Facebook Pixel ID below.
        fbq('init', '905600829489553');
        fbq('track', 'PageView');
        //]]>
    </script>
    <noscript>
        <img height='1' width='1' style='display: none'
             src='https://www.facebook.com/tr?id=905600829489553&amp;ev=PageView&amp;noscript=1'/></noscript>
    <script type='text/javascript'>
        //<![CDATA[
        if ((typeof Haravan) === 'undefined') {
            Haravan = {};
        }
        Haravan.culture = 'vi-VN';
        Haravan.shop = 'happylive.myharavan.com';
        Haravan.theme = {"name": "Theme mặc định", "id": 1000229231, "role": "main"};
        Haravan.domain = 'happylive.vn';
        //]]>
    </script>
    <script>
        //<![CDATA[
        (function () {
            function asyncLoad() {
                var urls = ["./hstatic.net/652/1000177652/20/2017/4-10/noname.js"];
                for (var i = 0; i < urls.length; i++) {
                    var s = document.createElement('script');
                    s.type = 'text/javascript';
                    s.async = true;
                    s.src = urls[i];
                    var x = document.getElementsByTagName('script')[0];
                    x.parentNode.insertBefore(s, x);
                }
            }

            window.attachEvent ? window.attachEvent('onload', asyncLoad) : window.addEventListener('load', asyncLoad, false);
        })();
        //]]>
    </script>
    <script src="{{asset('client-assets/hstatic.net/0/0/global/design/js/jquery.min.1.11.0.js')}}"></script>
    <script src="{{asset('client-assets/hstatic.net/0/0/global/design/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('client-assets/hstatic.net/0/0/global/option_selection.js')}}" type='text/javascript'></script>
    <script src="{{asset('client-assets/hstatic.net/0/0/global/api.jquery.js')}}" type='text/javascript'></script>

    <script src="{{asset('client-assets/theme.hstatic.net/1000177652/1000229231/14/default_script.min.js?v=90')}}"
            type='text/javascript'></script>
    <link href="{{asset('client-assets/theme.hstatic.net/1000177652/1000229231/14/default_style.min.css?v=90')}}"
          rel='stylesheet' type='text/css' media='all'/>
    <!--[if lt IE 9]>
    <script src="{{asset('client-assets/hstatic.net/0/0/global/design/theme-default/html5shiv.js')}}"></script>
    <![endif]-->
    <script src="{{asset('client-assets/hstatic.net/0/0/global/design/theme-default/jquery-migrate-1.2.0.min.js')}}"></script>
    <script src="{{asset('client-assets/hstatic.net/0/0/global/design/theme-default/jquery.touchSwipe.min.js')}}"
            type='text/javascript'></script>
    <script data-target=".product-resize" data-parent=".products-resize" data-img-box=".image-resize"
            src="{{asset('client-assets/hstatic.net/0/0/global/design/js/fixheightproductv2.js')}}"></script>
    <script src="{{asset('client-assets/hstatic.net/0/0/global/design/js/haravan.plugin.1.0.js')}}"></script>
    <script src="{{asset('client-assets/hstatic.net/0/0/global/design/theme-default/jquery.flexslider.js')}}"
            type='text/javascript'></script>
    <link href="{{asset('client-assets/hstatic.net/0/0/global/design/theme-default/flexslider.css')}}" rel='stylesheet'
          type='text/css' media='all'/>
    <script src="{{asset('client-assets/theme.hstatic.net/1000177652/1000229231/14/scripts.js?v=90')}}"
            type='text/javascript'></script>
    <link rel="stylesheet" type="text/css"
          href="{{asset('client-assets/hstatic.net/0/0/global/design/member/fonts-master/roboto.css')}}">
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="OxyWatch"/>
    <meta property="og:image" content="http://theme.hstatic.net/1000177652/1000229231/14/share_fb_home.png?v=90"/>
    <meta property="og:image" content="https://theme.hstatic.net/1000177652/1000229231/14/share_fb_home.png?v=90"/>
    <meta property="og:url" content="http://happylive.vn/"/>
    <meta property="og:site_name" content="Happylive"/>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="{{asset('client-assets/hstatic.net/0/0/global/design/css/bootstrap.3.3.1.css')}}">
    <!-- Latest compiled and minified JavaScript -->
    <link href="{{asset('client-assets/hstatic.net/0/0/global/design/plugins/font-awesome/4.6.3/css/font-awesome.min.css')}}"
          rel='stylesheet' type='text/css' media='all'/>
    <link href="{{asset('client-assets/theme.hstatic.net/1000177652/1000229231/14/styles.css?v=90')}}" rel='stylesheet'
          type='text/css' media='all'/>
</head>
<body>
<nav id="menu-mobile" class="hidden" >
    <ul>
        @foreach ($loai as $item)
        <li>
            <a href="">{{$item->TenLoaiHH}}
            </a>
        </li>
        @endforeach
    </ul>
</nav>
<div id="page">
    <div id="quick-view-modal" class="wrapper-quickview" style="display: none;">
        <div class="quickviewOverlay">
        </div>
        <div class="jsQuickview">
            <div class="modal-header clearfix" style="width: 100%">
                <a href="/products/dong-ho-nam-skmei-kim-xanh-duong" class="quickview-title text-left"
                   title="ĐỒNG HỒ NAM SKMEI KIM XANH DƯƠNG">
                    <h4 class="p-title modal-title">
                        ĐỒNG HỒ NAM SKMEI KIM XANH DƯƠNG</h4>
                </a>
                <div class="quickview-close">
                    <a href="javascript:void(0);"><i class="fa fa-times"></i></a>
                </div>
            </div>
            <div class="col-md-5">
                <div class="quickview-image image-zoom">
                    <img class="p-product-image-feature"
                         src="./product.hstatic.net/1000177652/product/1_e0ed7c0240734782a8268793dce0b9b8_large.jpg"
                         alt="ĐỒNG HỒ NAM SKMEI KIM XANH DƯƠNG">
                </div>
                <div id="quickview-sliderproduct">
                    <div class="quickview-slider">
                        <ul class="owl-carousel owl-theme" style="display: block; opacity: 1;">
                            <div class="owl-wrapper-outer">
                                <div class="owl-wrapper" style="width: 600px; left: 0px; display: block;">
                                    <div class="owl-item" style="width: 100px;">
                                        <li class="product-thumb active"><a href="javascript:void(0);"
                                                                            data-image="./product.hstatic.net/1000177652/product/1_e0ed7c0240734782a8268793dce0b9b8_large.jpg">
                                                <img src="./product.hstatic.net/1000177652/product/1_e0ed7c0240734782a8268793dce0b9b8_small.jpg"></a>
                                        </li>
                                    </div>
                                    <div class="owl-item" style="width: 100px;">
                                        <li class="product-thumb"><a href="javascript:void(0);"
                                                                     data-image="./product.hstatic.net/1000177652/product/2_85fc5908867e488da92b768cb240477d_large.jpg">
                                                <img src="./product.hstatic.net/1000177652/product/2_85fc5908867e488da92b768cb240477d_small.jpg"></a>
                                        </li>
                                    </div>
                                    <div class="owl-item" style="width: 100px;">
                                        <li class="product-thumb"><a href="javascript:void(0);"
                                                                     data-image="./product.hstatic.net/1000177652/product/3_30be00d496bb474aa0e9324311dd02f0_large.jpg">
                                                <img src="./product.hstatic.net/1000177652/product/3_30be00d496bb474aa0e9324311dd02f0_small.jpg"></a>
                                        </li>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-controls clickable" style="display: none;">
                                <div class="owl-pagination">
                                    <div class="owl-page active">
                                        <span class=""></span>
                                    </div>
                                </div>
                                <div class="owl-buttons">
                                    <div class="owl-prev">
                                        owl-prev
                                    </div>
                                    <div class="owl-next">
                                        owl-next
                                    </div>
                                </div>
                            </div>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <form id="form-quickview" method="post" action="/cart/add">
                    <div class="quickview-information">
                        <div class="form-input">
                            <div class="quickview-price product-price">
                                <span>499,000₫</span>
                                <del>700,000₫</del>
                            </div>
                        </div>
                        <div class="quickview-variants variant-style clearfix">
                            <select name="id" class="" id="quickview-select" style="display: none;">
                                <option value="1012030836">Default Title - 49900000</option>
                            </select>
                        </div>
                        <div class="quickview-description">
                        </div>
                        <div class="form-input ">
                            <label>
                                Số lượng</label>
                            <input id="quantity-quickview" name="quantity" type="number" min="1" value="1">
                        </div>
                        <div class="form-input" style="width: 100%">
                            <button type="submit" class="btn-detail  btn-color-add btn-min-width btn-mgt btn-addcart"
                                    style="display: block;">
                                Thêm vào giỏ
                            </button>
                            <button disabled=""
                                    class="btn-detail addtocart btn-color-add btn-min-width btn-mgt btn-soldout"
                                    style="display: none;">
                                Hết hàng
                            </button>
                            <div class="qv-readmore">
                                <span>hoặc </span><a class="read-more p-url" href="" role="button">Xem chi tiết</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        /* QUICK VIEW JS */
        jQuery(document).ready(function () {
            var callBack = function (variant, selector) {
                if (variant) {
                    item = $('.wrapper-quickview');
                    if (variant != null && variant.featured_image != null) {
                        item.find(".product-thumb a[data-image='" + Haravan.resizeImage(variant.featured_image.src, 'large') + "']").click();
                    }

                    if (variant.available) {
                        item.find('.btn-addcart').css('display', 'block');
                        item.find('.btn-soldout').css('display', 'none');
                    }
                    else {
                        item.find('.btn-addcart').css('display', 'none');
                        item.find('.btn-soldout').css('display', 'block');
                    }
                }
                else {
                    item.find('.btn-addcart').css('display', 'none');
                    item.find('.btn-soldout').css('display', 'block');
                }
            }
            var quickview_html_variants = $('.quickview-variants').html();
            var quickview_image_zoom = $('.quickview-image').html();
            var quickViewProduct = function (purl) {
                if ($(window).width() < 680) {
                    window.location = purl;
                    return false;
                }
                item = $('.wrapper-quickview');
                $.ajax({
                    url: purl + '.js',
                    async: false,
                    success: function (product) {
                        $.each(product.options, function (i, v) {
                            product.options[i] = v.name;
                        })
                        item.find('.quickview-title').attr('title', product.title).attr('href', product.url).find('h4').html(product.title);
                        item.find('.quickview-variants').html(quickview_html_variants);
                        $('.quickview-image').html(quickview_image_zoom);
                        $.each(product.variants, function (i, v) {
                            item.find('#quickview-select').append("<option value='" + v.id + "'>" + v.title + ' - ' + v.price + "</option>");
                        })
                        if (product.variants.length == 1 && product.variants[0].title.indexOf('Default') != -1)
                            $('#quickview-select').hide();
                        else
                            $('#quickview-select').show();
                        if (product.variants.length == 1 && product.variants[0].title.indexOf('Default') != -1) {
                            callBack(product.variants[0], null);
                        }
                        else {
                            new Haravan.OptionSelectors("quickview-select", {
                                product: product,
                                onVariantSelected: callBack
                            });
                            if (product.options.length == 1 && product.options[0].indexOf('Tiêu đề') == -1)
                                item.find('.selector-wrapper:eq(0)').prepend('<label>' + product.options[0] + '</label>');
                            $('.p-option-wrapper select:not(#p-select)').each(function () {
                                $(this).wrap('<span class="custom-dropdown custom-dropdown--white"></span>');
                                $(this).addClass("custom-dropdown__select custom-dropdown__select--white");
                            });
                            callBack(product.variants[0], null);
                        }
                        if (product.images.length == 0) {
                            item.find('.quickview-image').find('img').attr('alt', product.title).attr('src', './hstatic.net/0/0/global/design/theme-default/no-image.png');
                        }
                        else {
                            $('.quickview-slider').remove();
                            $('#quickview-sliderproduct').append("<div class='quickview-slider' class='flexslider'>");
                            $('.quickview-slider').append("<ul class='owl-carousel'>");
                            $.each(product.images, function (i, v) {
                                elem = $('<li class="product-thumb">').append('<a href="javascript:void(0);" data-image=""><img /></a>');
                                elem.find('a').attr('data-image', Haravan.resizeImage(v, 'large'));
                                elem.find('img').attr('src', Haravan.resizeImage(v, 'small'));
                                item.find('.owl-carousel').append(elem);
                            });
                            item.find('.quickview-image img').attr('alt', product.title).attr('src', Haravan.resizeImage(product.featured_image, 'large'));

                            $('.quickview-slider img').imagesLoaded(function () {
                                var owl = $('.owl-carousel');
                                owl.owlCarousel({
                                    items: 3,
                                    navigation: true,
                                    navigationText: ['owl-prev', 'owl-next']
                                });
                                $('.quickview-slider .owl-carousel .owl-item').first().children('.product-thumb').addClass('active');
                            });

                        }

                    }
                });
                return false;
            }
            //final width --> this is the quick view image slider width
            //maxQuickWidth --> this is the max-width of the quick-view panel
            var sliderFinalWidth = 500,
                maxQuickWidth = 900;

            //open the quick view panel
            jQuery(document).on("click", ".quickview", function (event) {
                var selectedImage = $(this).parents('.product-block').find('.product-img img'),
                    slectedImageUrl = selectedImage.attr('src');
                quickViewProduct($(this).attr('data-handle'));

                animateQuickView(selectedImage, sliderFinalWidth, maxQuickWidth, 'open');

                //update the visible slider image in the quick view panel
                //you don't need to implement/use the updateQuickView if retrieving the quick view data with ajax

            });

            $('.wrapper-quickview').on('click', '.product-thumb a', function () {
                item = $('.wrapper-quickview');
                item.find('.quickview-image img').attr('src', $(this).attr('data-image'));
                item.find('.product-thumb').removeClass('active');
                $(this).parents('li').addClass('active');
                return false;
            });
            //close the quick view panel

            $(document).on('click', '.quickview-close, .quickviewOverlay', function (e) {
                $(".wrapper-quickview").fadeOut(500);

                $('.jsQuickview').fadeOut(500);
            });


            //center quick-view on window resize
            $(window).on('resize', function () {
                if ($('.wrapper-quickview').hasClass('is-visible')) {
                    window.requestAnimationFrame(resizeQuickView);
                }
            });

            function animateQuickView(image, finalWidth, maxQuickWidth, animationType) {

                $('.wrapper-quickview').fadeIn(500);
                $('.jsQuickview').fadeIn(500);
            }

            $(document).on("click", ".btn-addcart", function (event) {
                event.preventDefault();
                variant_id_quickview = $('#quickview-select').val();
                quantity_quickview = $('#quantity-quickview').val();
                var params = {
                    type: 'POST',
                    url: '/cart/add.js',
                    async: true,
                    data: 'quantity=' + quantity_quickview + '&id=' + variant_id_quickview,
                    dataType: 'json',
                    success: function (line_item) {
                        window.location = '/cart';
                    },
                    error: function (XMLHttpRequest, textStatus) {
                        alert('Sản phẩm bạn vừa mua đã vượt quá tồn kho');
                    }
                };
                jQuery.ajax(params);
            });


        });
    </script>
    <section id="page_content" class="">
        <div id="pageContainer" class="clearfix">
            <header class="header bkg visible-lg">
                <div class="container clearfix">
                    <div class="row">
                        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 logo">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-7 col-xs-7">
                                    <!-- LOGO -->

                                    <h1>
                                        <a href="http://happylive.vn">
                                            <img src="./theme.hstatic.net/1000177652/1000229231/14/logo.png?v=90"
                                                 alt="Happylive" class="img-responsive logoimg"/>
                                        </a>
                                    </h1>

                                    <h1 style="display:none">
                                        <a href="/">Happylive</a>
                                    </h1>


                                </div>
                                <div class="hidden-lg hidden-md col-sm-5 col-xs-5 mobile-icons">
                                    <div>
                                        <a href="#" title="Xem giỏ hàng" class="mobile-cart"><span>5</span></a>
                                        <a href="#" id="mobile-toggle"><i class="fa fa-bars"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 hidden-md hidden-sm hidden-xs">
                            <aside class="top-info">
                                <div class="cart-info hidden-xs">
                                    <a class="cart-link" href="/cart">
		<span class="icon-cart">
		</span>
                                        <div class="cart-number">
                                            5
                                        </div>
                                    </a>
                                    <div class="cart-view clearfix" style="display: none;">
                                        <table id="clone-item-cart" class="table-clone-cart">
                                            <tr class="item_2 hidden">
                                                <td class="img"><a href="" title=""><img src="" alt=""/></a></td>
                                                <td>
                                                    <a class="pro-title-view" href="" title=""></a>
                                                    <span class="variant"></span>
                                                    <span class="pro-quantity-view"></span>
                                                    <span class="pro-price-view"></span>
                                                    <span class="remove_link remove-cart">
					</span>
                                                </td>
                                            </tr>
                                        </table>
                                        <table id="cart-view">


                                            <tr>
                                                <td class="img">
                                                    <a href="/products/dong-ho-nam-skmei-kim-xanh-duong">
                                                        <img src="./product.hstatic.net/1000177652/product/1_e0ed7c0240734782a8268793dce0b9b8_small.jpg "
                                                             alt="ĐỒNG HỒ NAM SKMEI KIM XANH DƯƠNG"/>
                                                    </a>
                                                </td>
                                                <td>
                                                    <a class="pro-title-view"
                                                       href="/products/dong-ho-nam-skmei-kim-xanh-duong"
                                                       title="ĐỒNG HỒ NAM SKMEI KIM XANH DƯƠNG">ĐỒNG HỒ NAM SKMEI KIM
                                                        XANH DƯƠNG</a>
                                                    <span class="variant">

					</span>
                                                    <span class="pro-quantity-view">2</span>
                                                    <span class="pro-price-view">499,000₫</span>
                                                    <span class="remove_link remove-cart">
						<a href='javascript:void(0);' onclick='deleteCart(1012030836)'><i class='fa fa-times'></i></a>
					</span>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="img">
                                                    <a href="/products/dong-ho-nam-tevise-1952-chay-co-cuc-chat">
                                                        <img src="./product.hstatic.net/1000177652/product/7_0590d26379fb4da3ba8d9b57564ee6b0_small.jpg "
                                                             alt="ĐỒNG HỒ NAM TEVISE 1952 CHẠY CƠ CỰC CHẤT"/>
                                                    </a>
                                                </td>
                                                <td>
                                                    <a class="pro-title-view"
                                                       href="/products/dong-ho-nam-tevise-1952-chay-co-cuc-chat"
                                                       title="ĐỒNG HỒ NAM TEVISE 1952 CHẠY CƠ CỰC CHẤT">ĐỒNG HỒ NAM
                                                        TEVISE 1952 CHẠY CƠ CỰC CHẤT</a>
                                                    <span class="variant">

					</span>
                                                    <span class="pro-quantity-view">3</span>
                                                    <span class="pro-price-view">800,000₫</span>
                                                    <span class="remove_link remove-cart">
						<a href='javascript:void(0);' onclick='deleteCart(1012006173)'><i class='fa fa-times'></i></a>
					</span>
                                                </td>
                                            </tr>


                                        </table>
                                        <span class="line"></span>
                                        <table class="table-total">
                                            <tr>
                                                <td class="text-left">TỔNG TIỀN:</td>
                                                <td class="text-right" id="total-view-cart">3,398,000₫</td>
                                            </tr>
                                            <tr>
                                                <td><a href="/cart" class="linktocart">Xem giỏ hàng</a></td>
                                                <td><a href="/checkout" class="linktocheckout">Thanh toán</a></td>
                                            </tr>
                                        </table>
                                    </div>

                                </div>

                                <div class="navholder">
                                    <nav id="subnav">
                                        <ul>

                                            <li>
                                                <a href="#"><i class="fa fa-phone" aria-hidden="true"></i> 0978.828.888</a>
                                            </li>


                                            <li><a class="reg" href="/account/register" title="Đăng ký">ĐĂNG KÝ</a></li>
                                            <li><a class="log" href="{{route('login.post')}}" title="Đăng nhập">Đăng
                                                    nhập</a></li>


                                        </ul>
                                    </nav>
                                    <div class="header_line"><p>Miễn phí vận chuyển<span class="mar-l5">ĐƠN HÀNG TRÊN 500K TP HÀ NỘI</span>
                                        </p></div>
                                </div>
                            </aside>
                        </div>
                    </div>
                </div>
            </header>
            <nav class="navbar-main navbar navbar-default cl-pri">
                <!-- MENU MAIN -->
                <div class="container nav-wrapper check_nav">
                    <div class="row">
                        <div class="navbar-header">
                            <div class="mobile-menu-icon-wrapper">
                                <div class="menu-logo">

                                    <h1 class="logo logo-mobile">
                                        <a href="http://happylive.vn">
                                            <img src="{{asset('client-assets/theme.hstatic.net/1000177652/1000229231/14/logo.png?v=90')}}"
                                                 alt="Happylive" class="img-responsive logoimg"/>
                                        </a>
                                    </h1>

                                    <div class="nav-login">
                                        <a href="/account" class="cart " title="Tài khoản">
                                            <svg class="icon icon-user" viewBox="0 0 32 32">
                                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-user">
                                                </use>
                                            </svg>
                                        </a>
                                    </div>
                                    <div class="menu-btn click-menu-mobile "><a href="#menu-mobile"
                                                                                class="navbar-toggle">
                                            <span class="sr-only">Toggle navigation</span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span></a>
                                    </div>

                                    <div id="cart-targets" class="cart">
                                        <a href="/cart" class="cart " title="Giỏ hàng">
							<span>

								<svg class="shopping-cart">
									<use xmlns:xlink="./www.w3.org/1999/xlink" xlink:href="#icon-add-cart"/>
								</svg>
							</span>
                                            <span id="cart-count" class="cart-number">0</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="search-bar-top">
                                    <div class="search-input-top">
                                        <form action="/search">
                                            <input type="hidden" name="type" value="product"/>
                                            <input type="text" name="q" placeholder="Tìm kiếm sản phẩm ..."/>
                                            <button type="submit" class="icon-search">
                                                <svg class="icon-search_white">
                                                    <use xmlns:xlink="./www.w3.org/1999/xlink"
                                                         xlink:href="#icon-search_white"/>
                                                </svg>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="navbar" class="navbar-collapse collapse">
                            <ul class="nav navbar-nav clearfix">

                                @foreach ($loai as $item)
                                    <li>
                                        <a href="" class="" title="{{$item->TenLoaiHH}}">
                                            <span>{{$item->TenLoaiHH}}</span>
                                        </a>
                                    </li>
                                @endforeach


                            </ul>

                        </div>
<!--                        <div id="navbar" class="navbar-collapse collapse">-->
<!--                            <ul class="nav navbar-nav clearfix">-->
<!--                                @foreach ($loai as $item)-->
<!--                                <li>-->
<!--                                    <a href="" title="{{$item->TenLoaiHH}}">-->
<!--                                        <span>{{$item->TenLoaiHH}}</span>-->
<!--                                    </a>-->
<!--                                </li>-->
<!--                                @endforeach-->
<!---->
<!--                            </ul>-->
<!---->
<!--                        </div>-->
                        <div class="hidden-xs pull-right right-menu">
                            <ul class="nav navbar-nav pull-right">
                                <li class="col-md-12">

                                    <div class="search-bar">

                                        <div class="">
                                            <form action="/search">
                                                <input type="hidden" name="type" value="product"/>
                                                <input type="text" name="q" placeholder="Tìm kiếm..."
                                                       autocomplete="off"/>
                                            </form>
                                        </div>
                                    </div>
                                </li>

                            </ul>
                        </div><!--/.nav-collapse -->
                    </div>
                </div><!-- End container  -->
                <script>

                    $(window).resize(function () {
                        $('li.dropdown li.active').parents('.dropdown').addClass('active');
                        if ($('.right-menu').width() + $('#navbar').width() > $('.check_nav.nav-wrapper').width() - 40) {
                            $('.nav-wrapper').addClass('responsive-menu');
                        }
                        else {
                            $('.nav-wrapper').removeClass('responsive-menu');
                        }
                    })

                    $(document).on("click", ".mobile-menu-icon .dropdown-menu ,.drop-control .dropdown-menu, .drop-control .input-dropdown", function (e) {
                        e.stopPropagation();
                    });
                </script>
                <script>
                    $(function () {
                        $('nav#menu-mobile').mmenu();
                    });
                    $(document).ready(function () {
                        flagg = true;
                        if (flagg) {
                            $('.click-menu-mobile a').click(function () {
                                $('#menu-mobile').removeClass('hidden');
                                flagg = false;
                            })
                        }
                    })


                </script>
            </nav>


            <!-- Begin slider -->
            <div class="slider-default bannerslider">
                <div class="hrv-banner-container">
                    <div class="hrvslider">
                        <ul class="slides">


                            <li>
                                <a href="/collections/dong-ho-nam-rolex" class="hrv-url">
                                    <img class="img-responsive"
                                         src="./theme.hstatic.net/1000177652/1000229231/14/slideshow_1.jpg?v=90"
                                         alt="Thời trang nam"/>
                                </a>
                                <div id="hrv-banner-caption1" class="hrv-caption hrv-banner-caption">
                                    <div class="container">
                                        <div class="hrv-caption-inner">
                                            <div class="hrv-banner-content slider-1">
                                                <h2 class="hrv-title1">Đẳng cấp về thương hiệu</h2>
                                                <h3 class="hrv-title2">ĐỒNG HỒ ROLEX</h3>
                                                <a href="/collections/dong-ho-nam-rolex" class="hrv-url">Xem ngay</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>


                            <li>
                                <a href="/collections/dong-ho-nam-tissot" class="hrv-url">
                                    <img class="img-responsive"
                                         src="./theme.hstatic.net/1000177652/1000229231/14/slideshow_2.jpg?v=90"
                                         alt=""/>
                                </a>
                                <div id="hrv-banner-caption2" class="hrv-caption hrv-banner-caption">
                                    <div class="container">
                                        <div class="hrv-caption-inner">
                                            <div class="hrv-banner-content slider-2">
                                                <h2 class="hrv-title1">Tinh tế sang trọng</h2>
                                                <h3 class="hrv-title2">ĐỒNG HỒ TISSOT</h3>
                                                <a href="/collections/dong-ho-nam-tissot" class="hrv-url">Xem ngay</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>


                            <li>
                                <a href="/collections/cap-dong-ho-tinh-yeu" class="hrv-url">
                                    <img class="img-responsive"
                                         src="./theme.hstatic.net/1000177652/1000229231/14/slideshow_3.jpg?v=90"
                                         alt=""/>
                                </a>
                                <div id="hrv-banner-caption3" class="hrv-caption hrv-banner-caption">
                                    <div class="container">
                                        <div class="hrv-caption-inner">
                                            <div class="hrv-banner-content slider-3">
                                                <h2 class="hrv-title1">Món quà hạnh phúc</h2>
                                                <h3 class="hrv-title2">Tiết kiệm đến 50%</h3>
                                                <a href="/collections/cap-dong-ho-tinh-yeu" class="hrv-url">Xem ngay</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>


                        </ul>
                    </div>
                </div>
            </div>
            <!-- End slider -->


            <script>
                jQuery(document).ready(function () {
                    if ($('.slides li').size() > 0) {
                        $(".hrv-banner-container .slides").owlCarousel({
                            singleItem: true,
                            autoPlay: 5000,
                            items: 1,
                            itemsDesktop: [1199, 1],
                            itemsDesktopSmall: [980, 1],
                            itemsTablet: [768, 1],
                            itemsMobile: [479, 1],
                            slideSpeed: 500,
                            paginationSpeed: 500,
                            rewindSpeed: 500,
                            addClassActive: true,
                            navigation: true,
                            stopOnHover: true,
                            pagination: false,
                            scrollPerPage: true,
                            afterMove: nextslide,
                            afterInit: nextslide,
                        });

                        function nextslide() {
                            $(".hrv-banner-container .owl-item .hrv-banner-caption").css('display', 'none');
                            $(".hrv-banner-container .owl-item .hrv-banner-caption").removeClass('hrv-caption')
                            $(".hrv-banner-container .owl-item.active .hrv-banner-caption").css('display', 'block');

                            var heading = $('.hrv-banner-container .owl-item.active .hrv-banner-caption').clone().removeClass();
                            $('.hrv-banner-container .owl-item.active .hrv-banner-caption').remove();
                            $('.hrv-banner-container .owl-item.active>li').append(heading);
                            $('.hrv-banner-container .owl-item.active>li>div').addClass('hrv-banner-caption hrv-caption');
                        }

                    }
                })

            </script>


        </div>
        <section id="content" class="clearfix container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <!-- Content-->
                    <div class="main-content">
                        <!-- Sản phẩm trang chủ -->


                        <div class="product-list clearfix">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <aside class="styled_header  use_icon ">
                                        <h2>What hot</h2>

                                        <h3>Sản phẩm bán chạy</h3>
                                        <span class="icon"><img
                                                    src="./theme.hstatic.net/1000177652/1000229231/14/icon_featured.png?v=90"
                                                    alt=""></span>

                                    </aside>
                                </div>
                            </div>
                            <!--Product loop-->
                            <div class="row content-product-list products-resize">

                                <div class="col-md-3 col-sm-6 col-xs-6 pro-loop">


                                    <div class="product-block product-resize">
                                        <div class="product-img image-resize view view-third">

                                            <div class="product-sale">
                                                <span><label class="sale-lb">- </label> 29%</span>
                                            </div>


                                            <a href="/products/dong-ho-nam-skmei-kim-xanh-duong"
                                               title="ĐỒNG HỒ NAM SKMEI KIM XANH DƯƠNG">
                                                <img class="first-image  has-img"
                                                     alt=" ĐỒNG HỒ NAM SKMEI KIM XANH DƯƠNG "
                                                     src="./product.hstatic.net/1000177652/product/1_e0ed7c0240734782a8268793dce0b9b8_large.jpg"/>

                                                <img class="second-image"
                                                     src="./product.hstatic.net/1000177652/product/2_85fc5908867e488da92b768cb240477d_large.jpg"
                                                     alt=" ĐỒNG HỒ NAM SKMEI KIM XANH DƯƠNG "/>

                                            </a>
                                            <div class="actionss">
                                                <div class="btn-cart-products">
                                                    <a href="xemgiohang.html">
                                                        <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                                <div class="view-details">
                                                    <a href="chitietsanpham.html" class="view-detail">
                                                        <span><i class="fa fa-clone"> </i></span>
                                                    </a>
                                                </div>
                                                <div class="btn-quickview-products">
                                                    <a href="javascript:void(0);" class="quickview"
                                                       data-handle="/products/dong-ho-nam-skmei-kim-xanh-duong"><i
                                                                class="fa fa-eye"></i></a>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="product-detail clearfix">


                                            <!-- sử dụng pull-left -->
                                            <h3 class="pro-name"><a href="/products/dong-ho-nam-skmei-kim-xanh-duong"
                                                                    title="ĐỒNG HỒ NAM SKMEI KIM XANH DƯƠNG">ĐỒNG HỒ NAM
                                                    SKMEI KIM XANH DƯƠNG </a></h3>
                                            <div class="pro-prices">
                                                <p class="pro-price">499,000₫</p>
                                                <p class="pro-price-del text-left">
                                                    <del class="compare-price">700,000₫</del>
                                                </p>


                                            </div>


                                        </div>
                                    </div>

                                </div>

                                <div class="col-md-3 col-sm-6 col-xs-6 pro-loop">


                                    <div class="product-block product-resize">
                                        <div class="product-img image-resize view view-third">

                                            <div class="product-sale">
                                                <span><label class="sale-lb">- </label> 33%</span>
                                            </div>


                                            <a href="/products/dong-ho-nam-tevise-1952-chay-co-cuc-chat"
                                               title="ĐỒNG HỒ NAM TEVISE 1952 CHẠY CƠ CỰC CHẤT">
                                                <img class="first-image  has-img"
                                                     alt=" ĐỒNG HỒ NAM TEVISE 1952 CHẠY CƠ CỰC CHẤT "
                                                     src="./product.hstatic.net/1000177652/product/7_0590d26379fb4da3ba8d9b57564ee6b0_large.jpg"/>

                                                <img class="second-image"
                                                     src="./product.hstatic.net/1000177652/product/10_large.jpg"
                                                     alt=" ĐỒNG HỒ NAM TEVISE 1952 CHẠY CƠ CỰC CHẤT "/>

                                            </a>
                                            <div class="actionss">
                                                <div class="btn-cart-products">
                                                    <a href="javascript:void(0);"
                                                       onclick="add_item_show_modalCart(1012006173)">
                                                        <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                                <div class="view-details">
                                                    <a href="/products/dong-ho-nam-tevise-1952-chay-co-cuc-chat"
                                                       class="view-detail">
                                                        <span><i class="fa fa-clone"> </i></span>
                                                    </a>
                                                </div>
                                                <div class="btn-quickview-products">
                                                    <a href="javascript:void(0);" class="quickview"
                                                       data-handle="/products/dong-ho-nam-tevise-1952-chay-co-cuc-chat"><i
                                                                class="fa fa-eye"></i></a>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="product-detail clearfix">


                                            <!-- sử dụng pull-right -->
                                            <h3 class="pro-name"><a
                                                        href="/products/dong-ho-nam-tevise-1952-chay-co-cuc-chat"
                                                        title="ĐỒNG HỒ NAM TEVISE 1952 CHẠY CƠ CỰC CHẤT">ĐỒNG HỒ NAM
                                                    TEVISE 1952 CHẠY CƠ CỰC CHẤT </a></h3>
                                            <div class="pro-prices">
                                                <p class="pro-price">800,000₫</p>
                                                <p class="pro-price-del text-left">
                                                    <del class="compare-price">1,200,000₫</del>
                                                </p>


                                            </div>


                                        </div>
                                    </div>

                                </div>

                                <div class="col-md-3 col-sm-6 col-xs-6 pro-loop">


                                    <div class="product-block product-resize">
                                        <div class="product-img image-resize view view-third">

                                            <div class="product-sale">
                                                <span><label class="sale-lb">- </label> 33%</span>
                                            </div>


                                            <a href="/products/dong-ho-nam-tevise-chay-co-mat-cham-rong-cuc-sang"
                                               title="ĐỒNG HỒ NAM TEVISE CHẠY CƠ MẶT CHẠM RỘNG CỰC SANG.">
                                                <img class="first-image  has-img"
                                                     alt=" ĐỒNG HỒ NAM TEVISE CHẠY CƠ MẶT CHẠM RỘNG CỰC SANG. "
                                                     src="./product.hstatic.net/1000177652/product/1_ce1a513f5b4e432fa372126291449cac_large.jpg"/>

                                                <img class="second-image"
                                                     src="./product.hstatic.net/1000177652/product/4_4f633974980d4c87b3652a202a3f1f38_large.jpg"
                                                     alt=" ĐỒNG HỒ NAM TEVISE CHẠY CƠ MẶT CHẠM RỘNG CỰC SANG. "/>

                                            </a>
                                            <div class="actionss">
                                                <div class="btn-cart-products">
                                                    <a href="javascript:void(0);"
                                                       onclick="add_item_show_modalCart(1012006066)">
                                                        <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                                <div class="view-details">
                                                    <a href="/products/dong-ho-nam-tevise-chay-co-mat-cham-rong-cuc-sang"
                                                       class="view-detail">
                                                        <span><i class="fa fa-clone"> </i></span>
                                                    </a>
                                                </div>
                                                <div class="btn-quickview-products">
                                                    <a href="javascript:void(0);" class="quickview"
                                                       data-handle="/products/dong-ho-nam-tevise-chay-co-mat-cham-rong-cuc-sang"><i
                                                                class="fa fa-eye"></i></a>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="product-detail clearfix">


                                            <!-- sử dụng pull-left -->
                                            <h3 class="pro-name"><a
                                                        href="/products/dong-ho-nam-tevise-chay-co-mat-cham-rong-cuc-sang"
                                                        title="ĐỒNG HỒ NAM TEVISE CHẠY CƠ MẶT CHẠM RỘNG CỰC SANG.">ĐỒNG
                                                    HỒ NAM TEVISE CHẠY CƠ MẶT CHẠM RỘNG CỰC SANG. </a></h3>
                                            <div class="pro-prices">
                                                <p class="pro-price">1,200,000₫</p>
                                                <p class="pro-price-del text-left">
                                                    <del class="compare-price">1,800,000₫</del>
                                                </p>


                                            </div>


                                        </div>
                                    </div>

                                </div>

                                <div class="col-md-3 col-sm-6 col-xs-6 pro-loop">


                                    <div class="product-block product-resize">
                                        <div class="product-img image-resize view view-third">

                                            <div class="product-sale">
                                                <span><label class="sale-lb">- </label> 33%</span>
                                            </div>


                                            <a href="/products/dong-ho-nam-tevise-chay-co-mat-cham-rong-cuc-sang-1"
                                               title="ĐỒNG HỒ NAM TEVISE CHẠY CƠ MẶT CHẠM RỘNG CỰC SANG.">
                                                <img class="first-image  has-img"
                                                     alt=" ĐỒNG HỒ NAM TEVISE CHẠY CƠ MẶT CHẠM RỘNG CỰC SANG. "
                                                     src="./product.hstatic.net/1000177652/product/582a59a31d974d1dc5b1fec7-3-original_large.jpg"/>

                                                <img class="second-image"
                                                     src="./product.hstatic.net/1000177652/product/58a8390735d131532b2a8cf4-6-original_large.jpg"
                                                     alt=" ĐỒNG HỒ NAM TEVISE CHẠY CƠ MẶT CHẠM RỘNG CỰC SANG. "/>

                                            </a>
                                            <div class="actionss">
                                                <div class="btn-cart-products">
                                                    <a href="javascript:void(0);"
                                                       onclick="add_item_show_modalCart(1012030907)">
                                                        <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                                <div class="view-details">
                                                    <a href="/products/dong-ho-nam-tevise-chay-co-mat-cham-rong-cuc-sang-1"
                                                       class="view-detail">
                                                        <span><i class="fa fa-clone"> </i></span>
                                                    </a>
                                                </div>
                                                <div class="btn-quickview-products">
                                                    <a href="javascript:void(0);" class="quickview"
                                                       data-handle="/products/dong-ho-nam-tevise-chay-co-mat-cham-rong-cuc-sang-1"><i
                                                                class="fa fa-eye"></i></a>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="product-detail clearfix">


                                            <!-- sử dụng pull-right -->
                                            <h3 class="pro-name"><a
                                                        href="/products/dong-ho-nam-tevise-chay-co-mat-cham-rong-cuc-sang-1"
                                                        title="ĐỒNG HỒ NAM TEVISE CHẠY CƠ MẶT CHẠM RỘNG CỰC SANG.">ĐỒNG
                                                    HỒ NAM TEVISE CHẠY CƠ MẶT CHẠM RỘNG CỰC SANG. </a></h3>
                                            <div class="pro-prices">
                                                <p class="pro-price">1,200,000₫</p>
                                                <p class="pro-price-del text-left">
                                                    <del class="compare-price">1,800,000₫</del>
                                                </p>


                                            </div>


                                        </div>
                                    </div>

                                </div>

                                <div class="col-md-3 col-sm-6 col-xs-6 pro-loop">


                                    <div class="product-block product-resize">
                                        <div class="product-img image-resize view view-third">

                                            <div class="product-sale">
                                                <span><label class="sale-lb">- </label> 33%</span>
                                            </div>


                                            <a href="/products/dong-ho-nam-tevise-mat-trang-chay-co-cuc-chat"
                                               title="ĐỒNG HỒ NAM TEVISE MẶT TRẮNG CHẠY CƠ CỰC CHẤT">
                                                <img class="first-image  has-img"
                                                     alt=" ĐỒNG HỒ NAM TEVISE MẶT TRẮNG CHẠY CƠ CỰC CHẤT "
                                                     src="./product.hstatic.net/1000177652/product/1_ab30605be61d4f99bd2306a6a537cfb7_large.jpg"/>

                                                <img class="second-image"
                                                     src="./product.hstatic.net/1000177652/product/2_688f14ff08684d938f519838b561e591_large.jpg"
                                                     alt=" ĐỒNG HỒ NAM TEVISE MẶT TRẮNG CHẠY CƠ CỰC CHẤT "/>

                                            </a>
                                            <div class="actionss">
                                                <div class="btn-cart-products">
                                                    <a href="javascript:void(0);"
                                                       onclick="add_item_show_modalCart(1012006083)">
                                                        <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                                <div class="view-details">
                                                    <a href="/products/dong-ho-nam-tevise-mat-trang-chay-co-cuc-chat"
                                                       class="view-detail">
                                                        <span><i class="fa fa-clone"> </i></span>
                                                    </a>
                                                </div>
                                                <div class="btn-quickview-products">
                                                    <a href="javascript:void(0);" class="quickview"
                                                       data-handle="/products/dong-ho-nam-tevise-mat-trang-chay-co-cuc-chat"><i
                                                                class="fa fa-eye"></i></a>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="product-detail clearfix">


                                            <!-- sử dụng pull-left -->
                                            <h3 class="pro-name"><a
                                                        href="/products/dong-ho-nam-tevise-mat-trang-chay-co-cuc-chat"
                                                        title="ĐỒNG HỒ NAM TEVISE MẶT TRẮNG CHẠY CƠ CỰC CHẤT">ĐỒNG HỒ
                                                    NAM TEVISE MẶT TRẮNG CHẠY CƠ CỰC CHẤT </a></h3>
                                            <div class="pro-prices">
                                                <p class="pro-price">800,000₫</p>
                                                <p class="pro-price-del text-left">
                                                    <del class="compare-price">1,200,000₫</del>
                                                </p>


                                            </div>


                                        </div>
                                    </div>

                                </div>

                                <div class="col-md-3 col-sm-6 col-xs-6 pro-loop">


                                    <div class="product-block product-resize">
                                        <div class="product-img image-resize view view-third">

                                            <div class="product-sale">
                                                <span><label class="sale-lb">- </label> 30%</span>
                                            </div>


                                            <a href="/products/dong-ho-nu-halei-mat-trang-cuc-sang-trong"
                                               title="ĐỒNG HỒ NỮ HALEI MẶT TRẮNG CỰC SANG TRỌNG">
                                                <img class="first-image  has-img"
                                                     alt=" ĐỒNG HỒ NỮ HALEI MẶT TRẮNG CỰC SANG TRỌNG "
                                                     src="./product.hstatic.net/1000177652/product/2_7453709ca9af4307986c2baae91c627e_large.jpg"/>

                                                <img class="second-image"
                                                     src="./product.hstatic.net/1000177652/product/1_d7ec19b25d62457fa22b91efb86fc494_large.jpg"
                                                     alt=" ĐỒNG HỒ NỮ HALEI MẶT TRẮNG CỰC SANG TRỌNG "/>

                                            </a>
                                            <div class="actionss">
                                                <div class="btn-cart-products">
                                                    <a href="javascript:void(0);"
                                                       onclick="add_item_show_modalCart(1012030267)">
                                                        <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                                <div class="view-details">
                                                    <a href="/products/dong-ho-nu-halei-mat-trang-cuc-sang-trong"
                                                       class="view-detail">
                                                        <span><i class="fa fa-clone"> </i></span>
                                                    </a>
                                                </div>
                                                <div class="btn-quickview-products">
                                                    <a href="javascript:void(0);" class="quickview"
                                                       data-handle="/products/dong-ho-nu-halei-mat-trang-cuc-sang-trong"><i
                                                                class="fa fa-eye"></i></a>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="product-detail clearfix">


                                            <!-- sử dụng pull-right -->
                                            <h3 class="pro-name"><a
                                                        href="/products/dong-ho-nu-halei-mat-trang-cuc-sang-trong"
                                                        title="ĐỒNG HỒ NỮ HALEI MẶT TRẮNG CỰC SANG TRỌNG">ĐỒNG HỒ NỮ
                                                    HALEI MẶT TRẮNG CỰC SANG TRỌNG </a></h3>
                                            <div class="pro-prices">
                                                <p class="pro-price">300,000₫</p>
                                                <p class="pro-price-del text-left">
                                                    <del class="compare-price">430,000₫</del>
                                                </p>


                                            </div>


                                        </div>
                                    </div>

                                </div>

                                <div class="col-md-3 col-sm-6 col-xs-6 pro-loop">


                                    <div class="product-block product-resize">
                                        <div class="product-img image-resize view view-third">

                                            <div class="product-sale">
                                                <span><label class="sale-lb">- </label> 35%</span>
                                            </div>


                                            <a href="/products/dong-ho-nu-skmei-1281-day-da-mau-do-gan-da-cuc-xinh"
                                               title="Đồng hồ nữ Skmei 1281 dây da màu đỏ gắn đá cực xinh">
                                                <img class="first-image  has-img"
                                                     alt=" Đồng hồ nữ Skmei 1281 dây da màu đỏ gắn đá cực xinh "
                                                     src="./product.hstatic.net/1000177652/product/593f6b19f853ce46eeb4d29e-contest_large.jpg"/>

                                                <img class="second-image"
                                                     src="./product.hstatic.net/1000177652/product/593f6b19f853ce46eeb4d29e-2-contest_large.jpg"
                                                     alt=" Đồng hồ nữ Skmei 1281 dây da màu đỏ gắn đá cực xinh "/>

                                            </a>
                                            <div class="actionss">
                                                <div class="btn-cart-products">
                                                    <a href="javascript:void(0);"
                                                       onclick="add_item_show_modalCart(1013973209)">
                                                        <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                                <div class="view-details">
                                                    <a href="/products/dong-ho-nu-skmei-1281-day-da-mau-do-gan-da-cuc-xinh"
                                                       class="view-detail">
                                                        <span><i class="fa fa-clone"> </i></span>
                                                    </a>
                                                </div>
                                                <div class="btn-quickview-products">
                                                    <a href="javascript:void(0);" class="quickview"
                                                       data-handle="/products/dong-ho-nu-skmei-1281-day-da-mau-do-gan-da-cuc-xinh"><i
                                                                class="fa fa-eye"></i></a>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="product-detail clearfix">


                                            <!-- sử dụng pull-left -->
                                            <h3 class="pro-name"><a
                                                        href="/products/dong-ho-nu-skmei-1281-day-da-mau-do-gan-da-cuc-xinh"
                                                        title="Đồng hồ nữ Skmei 1281 dây da màu đỏ gắn đá cực xinh">Đồng
                                                    hồ nữ Skmei 1281 dây da màu đỏ gắn đá cực xinh </a></h3>
                                            <div class="pro-prices">
                                                <p class="pro-price">350,000₫</p>
                                                <p class="pro-price-del text-left">
                                                    <del class="compare-price">540,000₫</del>
                                                </p>


                                            </div>


                                        </div>
                                    </div>

                                </div>

                                <div class="col-md-3 col-sm-6 col-xs-6 pro-loop">


                                    <div class="product-block product-resize">
                                        <div class="product-img image-resize view view-third">

                                            <div class="product-sale">
                                                <span><label class="sale-lb">- </label> 39%</span>
                                            </div>


                                            <a href="/products/dong-ho-skmei-day-da-cuc-men"
                                               title="ĐỒNG HỒ SKMEI DÂY DA CỰC MEN">
                                                <img class="first-image  has-img" alt=" ĐỒNG HỒ SKMEI DÂY DA CỰC MEN "
                                                     src="./product.hstatic.net/1000177652/product/1_724cffaf3cd6490c82fc9d5feea7f60b_large.jpg"/>

                                                <img class="second-image"
                                                     src="./product.hstatic.net/1000177652/product/2_7fdf2cba3a9c47b086f8f314ec99382b_large.jpg"
                                                     alt=" ĐỒNG HỒ SKMEI DÂY DA CỰC MEN "/>

                                            </a>
                                            <div class="actionss">
                                                <div class="btn-cart-products">
                                                    <a href="javascript:void(0);"
                                                       onclick="add_item_show_modalCart(1012030908)">
                                                        <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                                <div class="view-details">
                                                    <a href="/products/dong-ho-skmei-day-da-cuc-men"
                                                       class="view-detail">
                                                        <span><i class="fa fa-clone"> </i></span>
                                                    </a>
                                                </div>
                                                <div class="btn-quickview-products">
                                                    <a href="javascript:void(0);" class="quickview"
                                                       data-handle="/products/dong-ho-skmei-day-da-cuc-men"><i
                                                                class="fa fa-eye"></i></a>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="product-detail clearfix">


                                            <!-- sử dụng pull-right -->
                                            <h3 class="pro-name"><a href="/products/dong-ho-skmei-day-da-cuc-men"
                                                                    title="ĐỒNG HỒ SKMEI DÂY DA CỰC MEN">ĐỒNG HỒ SKMEI
                                                    DÂY DA CỰC MEN </a></h3>
                                            <div class="pro-prices">
                                                <p class="pro-price">490,000₫</p>
                                                <p class="pro-price-del text-left">
                                                    <del class="compare-price">800,000₫</del>
                                                </p>


                                            </div>


                                        </div>
                                    </div>

                                </div>

                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-sm-12 col-xs-12  pull-center center">


                                    <a class="btn btn-readmore" href="/collections/dong-ho-chong-nuoc" role="button">Xem
                                        thêm</a>


                                </div>
                            </div>
                        </div>
                        <!--Product loop-->


                        <div class="row">
                            <div class="col-lg-12 col-sm-12 col-xs-12">
                                <div class="animation fade-in home-banner-1">
                                    <aside class="banner-home-1">

                                        <div class="divcontent"><span class="ad_banner_1">Miễn phí vận chuyển<strong
                                                        class="ad_banner_2">Với tất cả đơn hàng trên 500k thành phố Hà Nội</strong></span>
                                            <span class="ad_banner_desc">Miễn phí 2 ngày vận chuyển với đơn hàng trên 500k trừ trực tiếp khi thanh toán</span>
                                        </div>
                                        <div class="divstyle" style="border-color:;"></div>
                                    </aside>
                                </div>
                            </div>
                        </div>


                        <div class="product-list clearfix ">
                            <div class="row">
                                <div class="col-lg-12 col-sm-12 col-xs-12">
                                    <aside class="styled_header  use_icon ">


                                        <h3>Sản phẩm mới</h3>
                                        <span class="icon"><img
                                                    src="./theme.hstatic.net/1000177652/1000229231/14/icon_sale.png?v=90"
                                                    alt="Newest trends"></span>

                                    </aside>


                                </div>
                            </div>

                            <div class="row content-product-list products-resize">

                                <div class="col-md-3 col-sm-6 col-xs-6 pro-loop">


                                    <div class="product-block product-resize">
                                        <div class="product-img image-resize view view-third">

                                            <div class="product-sale">
                                                <span><label class="sale-lb">- </label> 50%</span>
                                            </div>


                                            <a href="/products/dong-ho-nam-skmei-co-lich-mo-rong"
                                               title="ĐỒNG HỒ NAM SKMEI CÓ LỊCH MỎ RỘNG">
                                                <img class="first-image  has-img"
                                                     alt=" ĐỒNG HỒ NAM SKMEI CÓ LỊCH MỎ RỘNG "
                                                     src="./product.hstatic.net/1000177652/product/1_8dc682692fec4967843d81915f827888_large.jpg"/>

                                                <img class="second-image"
                                                     src="./product.hstatic.net/1000177652/product/2_38d65a0a0c1a483cbeb02046b329a2ed_large.jpg"
                                                     alt=" ĐỒNG HỒ NAM SKMEI CÓ LỊCH MỎ RỘNG "/>

                                            </a>
                                            <div class="actionss">
                                                <div class="btn-cart-products">
                                                    <a href="javascript:void(0);"
                                                       onclick="add_item_show_modalCart(1012006226)">
                                                        <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                                <div class="view-details">
                                                    <a href="/products/dong-ho-nam-skmei-co-lich-mo-rong"
                                                       class="view-detail">
                                                        <span><i class="fa fa-clone"> </i></span>
                                                    </a>
                                                </div>
                                                <div class="btn-quickview-products">
                                                    <a href="javascript:void(0);" class="quickview"
                                                       data-handle="/products/dong-ho-nam-skmei-co-lich-mo-rong"><i
                                                                class="fa fa-eye"></i></a>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="product-detail clearfix">


                                            <!-- sử dụng pull-left -->
                                            <h3 class="pro-name"><a href="/products/dong-ho-nam-skmei-co-lich-mo-rong"
                                                                    title="ĐỒNG HỒ NAM SKMEI CÓ LỊCH MỎ RỘNG">ĐỒNG HỒ
                                                    NAM SKMEI CÓ LỊCH MỎ RỘNG </a></h3>
                                            <div class="pro-prices">
                                                <p class="pro-price">350,000₫</p>
                                                <p class="pro-price-del text-left">
                                                    <del class="compare-price">700,000₫</del>
                                                </p>


                                            </div>


                                        </div>
                                    </div>

                                </div>

                                <div class="col-md-3 col-sm-6 col-xs-6 pro-loop">


                                    <div class="product-block product-resize">
                                        <div class="product-img image-resize view view-third">

                                            <div class="product-sale">
                                                <span><label class="sale-lb">- </label> 38%</span>
                                            </div>


                                            <a href="/products/dong-ho-nam-skmei-cuc-dep-cuc-cuon-hut"
                                               title="ĐỒNG HỒ NAM SKMEI CỰC ĐẸP CỰC CUỐN HÚT">
                                                <img class="first-image  has-img"
                                                     alt=" ĐỒNG HỒ NAM SKMEI CỰC ĐẸP CỰC CUỐN HÚT "
                                                     src="./product.hstatic.net/1000177652/product/1_96f3e1495bac48dd831ec86597085a04_large.jpg"/>

                                                <img class="second-image"
                                                     src="./product.hstatic.net/1000177652/product/2_0692671689314bd8aeeaf160563abacd_large.jpg"
                                                     alt=" ĐỒNG HỒ NAM SKMEI CỰC ĐẸP CỰC CUỐN HÚT "/>

                                            </a>
                                            <div class="actionss">
                                                <div class="btn-cart-products">
                                                    <a href="javascript:void(0);"
                                                       onclick="add_item_show_modalCart(1012030840)">
                                                        <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                                <div class="view-details">
                                                    <a href="/products/dong-ho-nam-skmei-cuc-dep-cuc-cuon-hut"
                                                       class="view-detail">
                                                        <span><i class="fa fa-clone"> </i></span>
                                                    </a>
                                                </div>
                                                <div class="btn-quickview-products">
                                                    <a href="javascript:void(0);" class="quickview"
                                                       data-handle="/products/dong-ho-nam-skmei-cuc-dep-cuc-cuon-hut"><i
                                                                class="fa fa-eye"></i></a>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="product-detail clearfix">


                                            <!-- sử dụng pull-right -->
                                            <h3 class="pro-name"><a
                                                        href="/products/dong-ho-nam-skmei-cuc-dep-cuc-cuon-hut"
                                                        title="ĐỒNG HỒ NAM SKMEI CỰC ĐẸP CỰC CUỐN HÚT">ĐỒNG HỒ NAM SKMEI
                                                    CỰC ĐẸP CỰC CUỐN HÚT </a></h3>
                                            <div class="pro-prices">
                                                <p class="pro-price">500,000₫</p>
                                                <p class="pro-price-del text-left">
                                                    <del class="compare-price">800,000₫</del>
                                                </p>


                                            </div>


                                        </div>
                                    </div>

                                </div>

                                <div class="col-md-3 col-sm-6 col-xs-6 pro-loop">


                                    <div class="product-block product-resize">
                                        <div class="product-img image-resize view view-third">

                                            <div class="product-sale">
                                                <span><label class="sale-lb">- </label> 35%</span>
                                            </div>


                                            <a href="/products/dong-ho-nu-beesister-mat-dinh-da-cuc-sang"
                                               title="ĐỒNG HỒ NỮ BEESISTER MẶT ĐÍNH ĐÁ CỨC SANG">
                                                <img class="first-image  has-img"
                                                     alt=" ĐỒNG HỒ NỮ BEESISTER MẶT ĐÍNH ĐÁ CỨC SANG "
                                                     src="./product.hstatic.net/1000177652/product/1_e7ec8d67eafb460db8865a5747c89a24_large.jpg"/>

                                                <img class="second-image"
                                                     src="./product.hstatic.net/1000177652/product/2_8e8c976ba38243b098a8b827273cb5bc_large.jpg"
                                                     alt=" ĐỒNG HỒ NỮ BEESISTER MẶT ĐÍNH ĐÁ CỨC SANG "/>

                                            </a>
                                            <div class="actionss">
                                                <div class="btn-cart-products">
                                                    <a href="javascript:void(0);"
                                                       onclick="add_item_show_modalCart(1012006306)">
                                                        <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                                <div class="view-details">
                                                    <a href="/products/dong-ho-nu-beesister-mat-dinh-da-cuc-sang"
                                                       class="view-detail">
                                                        <span><i class="fa fa-clone"> </i></span>
                                                    </a>
                                                </div>
                                                <div class="btn-quickview-products">
                                                    <a href="javascript:void(0);" class="quickview"
                                                       data-handle="/products/dong-ho-nu-beesister-mat-dinh-da-cuc-sang"><i
                                                                class="fa fa-eye"></i></a>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="product-detail clearfix">


                                            <!-- sử dụng pull-left -->
                                            <h3 class="pro-name"><a
                                                        href="/products/dong-ho-nu-beesister-mat-dinh-da-cuc-sang"
                                                        title="ĐỒNG HỒ NỮ BEESISTER MẶT ĐÍNH ĐÁ CỨC SANG">ĐỒNG HỒ NỮ
                                                    BEESISTER MẶT ĐÍNH ĐÁ CỨC SANG </a></h3>
                                            <div class="pro-prices">
                                                <p class="pro-price">390,000₫</p>
                                                <p class="pro-price-del text-left">
                                                    <del class="compare-price">600,000₫</del>
                                                </p>


                                            </div>


                                        </div>
                                    </div>

                                </div>

                                <div class="col-md-3 col-sm-6 col-xs-6 pro-loop">


                                    <div class="product-block product-resize">
                                        <div class="product-img image-resize view view-third">

                                            <div class="product-sale">
                                                <span><label class="sale-lb">- </label> 35%</span>
                                            </div>


                                            <a href="/products/dong-ho-nu-beesister-mau-vang-mat-tron-cuc-sang"
                                               title="ĐỒNG HỒ NỮ BEESISTER MÀU VÀNG MẶT TRÒN CỰC SANG">
                                                <img class="first-image  has-img"
                                                     alt=" ĐỒNG HỒ NỮ BEESISTER MÀU VÀNG MẶT TRÒN CỰC SANG "
                                                     src="./product.hstatic.net/1000177652/product/6_f20ebeefb7744b3e959e44c455b9387a_large.jpg"/>

                                                <img class="second-image"
                                                     src="./product.hstatic.net/1000177652/product/7_88220065b60b45c29c0aa3ca9f76c6c4_large.jpg"
                                                     alt=" ĐỒNG HỒ NỮ BEESISTER MÀU VÀNG MẶT TRÒN CỰC SANG "/>

                                            </a>
                                            <div class="actionss">
                                                <div class="btn-cart-products">
                                                    <a href="javascript:void(0);"
                                                       onclick="add_item_show_modalCart(1012006440)">
                                                        <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                                <div class="view-details">
                                                    <a href="/products/dong-ho-nu-beesister-mau-vang-mat-tron-cuc-sang"
                                                       class="view-detail">
                                                        <span><i class="fa fa-clone"> </i></span>
                                                    </a>
                                                </div>
                                                <div class="btn-quickview-products">
                                                    <a href="javascript:void(0);" class="quickview"
                                                       data-handle="/products/dong-ho-nu-beesister-mau-vang-mat-tron-cuc-sang"><i
                                                                class="fa fa-eye"></i></a>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="product-detail clearfix">


                                            <!-- sử dụng pull-right -->
                                            <h3 class="pro-name"><a
                                                        href="/products/dong-ho-nu-beesister-mau-vang-mat-tron-cuc-sang"
                                                        title="ĐỒNG HỒ NỮ BEESISTER MÀU VÀNG MẶT TRÒN CỰC SANG">ĐỒNG HỒ
                                                    NỮ BEESISTER MÀU VÀNG MẶT TRÒN CỰC SANG </a></h3>
                                            <div class="pro-prices">
                                                <p class="pro-price">390,000₫</p>
                                                <p class="pro-price-del text-left">
                                                    <del class="compare-price">600,000₫</del>
                                                </p>


                                            </div>


                                        </div>
                                    </div>

                                </div>

                                <div class="col-md-3 col-sm-6 col-xs-6 pro-loop">


                                    <div class="product-block product-resize">
                                        <div class="product-img image-resize view view-third">

                                            <div class="product-sale">
                                                <span><label class="sale-lb">- </label> 35%</span>
                                            </div>


                                            <a href="/products/dong-ho-nu-bs-mat-chu-nhat-gan-da-cuc-chat"
                                               title="ĐỒNG HỒ NỮ BS MẶT CHỮ NHẬT GẮN ĐÁ CỰC CHẤT">
                                                <img class="first-image  has-img"
                                                     alt=" ĐỒNG HỒ NỮ BS MẶT CHỮ NHẬT GẮN ĐÁ CỰC CHẤT "
                                                     src="./product.hstatic.net/1000177652/product/4_1f54cfe4261847f5806805b49ff2c0a3_large.jpg"/>

                                                <img class="second-image"
                                                     src="./product.hstatic.net/1000177652/product/efeb2317f2344d244abdb6b0dafb6f8d_large.jpg"
                                                     alt=" ĐỒNG HỒ NỮ BS MẶT CHỮ NHẬT GẮN ĐÁ CỰC CHẤT "/>

                                            </a>
                                            <div class="actionss">
                                                <div class="btn-cart-products">
                                                    <a href="javascript:void(0);"
                                                       onclick="add_item_show_modalCart(1012006312)">
                                                        <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                                <div class="view-details">
                                                    <a href="/products/dong-ho-nu-bs-mat-chu-nhat-gan-da-cuc-chat"
                                                       class="view-detail">
                                                        <span><i class="fa fa-clone"> </i></span>
                                                    </a>
                                                </div>
                                                <div class="btn-quickview-products">
                                                    <a href="javascript:void(0);" class="quickview"
                                                       data-handle="/products/dong-ho-nu-bs-mat-chu-nhat-gan-da-cuc-chat"><i
                                                                class="fa fa-eye"></i></a>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="product-detail clearfix">


                                            <!-- sử dụng pull-left -->
                                            <h3 class="pro-name"><a
                                                        href="/products/dong-ho-nu-bs-mat-chu-nhat-gan-da-cuc-chat"
                                                        title="ĐỒNG HỒ NỮ BS MẶT CHỮ NHẬT GẮN ĐÁ CỰC CHẤT">ĐỒNG HỒ NỮ BS
                                                    MẶT CHỮ NHẬT GẮN ĐÁ CỰC CHẤT </a></h3>
                                            <div class="pro-prices">
                                                <p class="pro-price">390,000₫</p>
                                                <p class="pro-price-del text-left">
                                                    <del class="compare-price">600,000₫</del>
                                                </p>


                                            </div>


                                        </div>
                                    </div>

                                </div>

                                <div class="col-md-3 col-sm-6 col-xs-6 pro-loop">


                                    <div class="product-block product-resize">
                                        <div class="product-img image-resize view view-third">

                                            <div class="product-sale">
                                                <span><label class="sale-lb">- </label> 30%</span>
                                            </div>


                                            <a href="/products/dong-ho-nu-halei-mat-trang-cuc-sang-trong"
                                               title="ĐỒNG HỒ NỮ HALEI MẶT TRẮNG CỰC SANG TRỌNG">
                                                <img class="first-image  has-img"
                                                     alt=" ĐỒNG HỒ NỮ HALEI MẶT TRẮNG CỰC SANG TRỌNG "
                                                     src="./product.hstatic.net/1000177652/product/2_7453709ca9af4307986c2baae91c627e_large.jpg"/>

                                                <img class="second-image"
                                                     src="./product.hstatic.net/1000177652/product/1_d7ec19b25d62457fa22b91efb86fc494_large.jpg"
                                                     alt=" ĐỒNG HỒ NỮ HALEI MẶT TRẮNG CỰC SANG TRỌNG "/>

                                            </a>
                                            <div class="actionss">
                                                <div class="btn-cart-products">
                                                    <a href="javascript:void(0);"
                                                       onclick="add_item_show_modalCart(1012030267)">
                                                        <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                                <div class="view-details">
                                                    <a href="/products/dong-ho-nu-halei-mat-trang-cuc-sang-trong"
                                                       class="view-detail">
                                                        <span><i class="fa fa-clone"> </i></span>
                                                    </a>
                                                </div>
                                                <div class="btn-quickview-products">
                                                    <a href="javascript:void(0);" class="quickview"
                                                       data-handle="/products/dong-ho-nu-halei-mat-trang-cuc-sang-trong"><i
                                                                class="fa fa-eye"></i></a>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="product-detail clearfix">


                                            <!-- sử dụng pull-right -->
                                            <h3 class="pro-name"><a
                                                        href="/products/dong-ho-nu-halei-mat-trang-cuc-sang-trong"
                                                        title="ĐỒNG HỒ NỮ HALEI MẶT TRẮNG CỰC SANG TRỌNG">ĐỒNG HỒ NỮ
                                                    HALEI MẶT TRẮNG CỰC SANG TRỌNG </a></h3>
                                            <div class="pro-prices">
                                                <p class="pro-price">300,000₫</p>
                                                <p class="pro-price-del text-left">
                                                    <del class="compare-price">430,000₫</del>
                                                </p>


                                            </div>


                                        </div>
                                    </div>

                                </div>

                                <div class="col-md-3 col-sm-6 col-xs-6 pro-loop">


                                    <div class="product-block product-resize">
                                        <div class="product-img image-resize view view-third">

                                            <div class="product-sale">
                                                <span><label class="sale-lb">- </label> 35%</span>
                                            </div>


                                            <a href="/products/dong-ho-nu-skmei-1281-day-da-mau-do-gan-da-cuc-xinh"
                                               title="Đồng hồ nữ Skmei 1281 dây da màu đỏ gắn đá cực xinh">
                                                <img class="first-image  has-img"
                                                     alt=" Đồng hồ nữ Skmei 1281 dây da màu đỏ gắn đá cực xinh "
                                                     src="./product.hstatic.net/1000177652/product/593f6b19f853ce46eeb4d29e-contest_large.jpg"/>

                                                <img class="second-image"
                                                     src="./product.hstatic.net/1000177652/product/593f6b19f853ce46eeb4d29e-2-contest_large.jpg"
                                                     alt=" Đồng hồ nữ Skmei 1281 dây da màu đỏ gắn đá cực xinh "/>

                                            </a>
                                            <div class="actionss">
                                                <div class="btn-cart-products">
                                                    <a href="javascript:void(0);"
                                                       onclick="add_item_show_modalCart(1013973209)">
                                                        <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                                <div class="view-details">
                                                    <a href="/products/dong-ho-nu-skmei-1281-day-da-mau-do-gan-da-cuc-xinh"
                                                       class="view-detail">
                                                        <span><i class="fa fa-clone"> </i></span>
                                                    </a>
                                                </div>
                                                <div class="btn-quickview-products">
                                                    <a href="javascript:void(0);" class="quickview"
                                                       data-handle="/products/dong-ho-nu-skmei-1281-day-da-mau-do-gan-da-cuc-xinh"><i
                                                                class="fa fa-eye"></i></a>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="product-detail clearfix">


                                            <!-- sử dụng pull-left -->
                                            <h3 class="pro-name"><a
                                                        href="/products/dong-ho-nu-skmei-1281-day-da-mau-do-gan-da-cuc-xinh"
                                                        title="Đồng hồ nữ Skmei 1281 dây da màu đỏ gắn đá cực xinh">Đồng
                                                    hồ nữ Skmei 1281 dây da màu đỏ gắn đá cực xinh </a></h3>
                                            <div class="pro-prices">
                                                <p class="pro-price">350,000₫</p>
                                                <p class="pro-price-del text-left">
                                                    <del class="compare-price">540,000₫</del>
                                                </p>


                                            </div>


                                        </div>
                                    </div>

                                </div>

                                <div class="col-md-3 col-sm-6 col-xs-6 pro-loop">


                                    <div class="product-block product-resize">
                                        <div class="product-img image-resize view view-third">

                                            <div class="product-sale">
                                                <span><label class="sale-lb">- </label> 50%</span>
                                            </div>


                                            <a href="/products/dong-ho-skmei-day-da-mau-dh01-2"
                                               title="ĐỒNG HỒ SKMEI DÂY DA MẪU DH03 CHẠY FULL KIM">
                                                <img class="first-image  has-img"
                                                     alt=" ĐỒNG HỒ SKMEI DÂY DA MẪU DH03 CHẠY FULL KIM "
                                                     src="./product.hstatic.net/1000177652/product/1_cfd2a2d52eb44e74b0ad5da426f861a7_large.jpg"/>

                                                <img class="second-image"
                                                     src="./product.hstatic.net/1000177652/product/2_78b0f26f2bca4105b2b1cc08f29414e0_large.jpg"
                                                     alt=" ĐỒNG HỒ SKMEI DÂY DA MẪU DH03 CHẠY FULL KIM "/>

                                            </a>
                                            <div class="actionss">
                                                <div class="btn-cart-products">
                                                    <a href="javascript:void(0);"
                                                       onclick="add_item_show_modalCart(1012031062)">
                                                        <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                                <div class="view-details">
                                                    <a href="/products/dong-ho-skmei-day-da-mau-dh01-2"
                                                       class="view-detail">
                                                        <span><i class="fa fa-clone"> </i></span>
                                                    </a>
                                                </div>
                                                <div class="btn-quickview-products">
                                                    <a href="javascript:void(0);" class="quickview"
                                                       data-handle="/products/dong-ho-skmei-day-da-mau-dh01-2"><i
                                                                class="fa fa-eye"></i></a>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="product-detail clearfix">


                                            <!-- sử dụng pull-right -->
                                            <h3 class="pro-name"><a href="/products/dong-ho-skmei-day-da-mau-dh01-2"
                                                                    title="ĐỒNG HỒ SKMEI DÂY DA MẪU DH03 CHẠY FULL KIM">ĐỒNG
                                                    HỒ SKMEI DÂY DA MẪU DH03 CHẠY FULL KIM </a></h3>
                                            <div class="pro-prices">
                                                <p class="pro-price">500,000₫</p>
                                                <p class="pro-price-del text-left">
                                                    <del class="compare-price">1,000,000₫</del>
                                                </p>


                                            </div>


                                        </div>
                                    </div>

                                </div>

                            </div>
                            <div class="row">
                                <div class="col-lg-12 pull-center center ">


                                    <a class="btn btn-readmore" href="/collections/dong-ho-cao-cap" role="button">Xem
                                        thêm</a>


                                </div>
                            </div>
                        </div>

                        <div class="banner-bottom">
                            <div class="row">

                                <div class="col-xs-12 col-sm-6 home-category-item-2">
                                    <div class="block-home-category">
                                        <a href="http://happylive.vn/collections/dong-ho-nam">
                                            <img class="b-lazy b-loaded"
                                                 src="./theme.hstatic.net/1000177652/1000229231/14/block_home_category1.jpg?v=90"
                                                 alt="nam">
                                        </a>
                                    </div>
                                </div>


                                <div class="col-xs-12 col-sm-6 home-category-item-3">
                                    <div class="block-home-category">
                                        <a href="http://happylive.vn/collections/dong-ho-nu">
                                            <img class="b-lazy b-loaded"
                                                 src="./theme.hstatic.net/1000177652/1000229231/14/block_home_category2.jpg?v=90"
                                                 alt="nữ">
                                        </a>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                    <!-- end Content-->
                </div>
            </div>
        </section>
        <footer id="footer">
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">

                        <div class="col-sm-6 col-md-3 col-xs-12 clear-sm">
                            <div class="widget-wrapper animated">

                                <h3 class="title title_left">Giới thiệu</h3>

                                <div class="inner about_us">

                                    <p class="message">OXYWATCH cam kết, tất cả đồng hồ được bán trực tiếp tại hệ thống
                                        các cửa hàng của chúng tôi và bán Online đều là hàng chính hãng 100%</p>

                                    <ul class="list-unstyled">

                                        <li>
                                            <i class="fa fa-home"></i>Quận Bắc Từ Liêm, Hà Nội
                                        </li>


                                        <li>
                                            <i class="fa fa-envelope-o"></i> <a href="mailto:Suport@oxywatch.vn">Suport@oxywatch.vn</a>
                                        </li>


                                        <li>
                                            <i class="fa fa-phone"></i>0978.825.365
                                        </li>


                                    </ul>
                                </div>
                            </div>
                        </div>


                        <div class="col-sm-6 col-md-2 col-xs-12 clear-sm">
                            <div class="widget-wrapper animated">

                                <h3 class="title title_left">Liên kết</h3>

                                <div class="inner">

                                    <ul class="list-unstyled list-styled">

                                        <li>
                                            <a href="/">Trang chủ</a>
                                        </li>

                                        <li>
                                            <a href="/collections/dong-ho-nam">Đồng hồ nam</a>
                                        </li>

                                        <li>
                                            <a href="/collections/dong-ho-nu">Đồng hồ nữ</a>
                                        </li>

                                        <li>
                                            <a href="/pages/dich-vu">Dịch vụ</a>
                                        </li>

                                        <li>
                                            <a href="/pages/gioi-thieu">Giới thiệu</a>
                                        </li>

                                        <li>
                                            <a href="/blogs/news">Blog</a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>


                        <div class="col-sm-6 col-md-3 col-xs-12 clear-sm">
                            <div class="widget-wrapper animated">


                                <h3 class="title title_left">Đăng kí nhận tin</h3>

                                <div class="inner">


                                    <form accept-charset='UTF-8' action='/account/contact' class='contact-form'
                                          method='post'>
                                        <input name='form_type' type='hidden' value='customer'>
                                        <input name='utf8' type='hidden' value='✓'>

                                        <div class="group-input">
                                            <input type="hidden" id="contact_tags" name="contact[tags]"
                                                   value="khách hàng tiềm năng, bản tin"/>
                                            <input type="email" required="required" name="contact[email]"
                                                   id="contact_email"/>
                                            <span class="bar"></span>
                                            <label>Nhập email của bạn</label>
                                            <button type="submit"><i class="fa fa-paper-plane-o"></i></button>
                                        </div>


                                    </form>


                                    <div class="caption">Hãy nhập email của bạn vào đây để nhận tin!</div>

                                </div>


                                <div id="widget-social" class="social-icons">
                                    <ul class="list-inline">

                                        <li>
                                            <a target="_blank" href="/" class="social-wrapper facebook">
        <span class="social-icon">
          <i class="fa fa-facebook"></i>
        </span>
                                            </a>
                                        </li>


                                        <li>
                                            <a target="_blank" href="/" class="social-wrapper twitter">
        <span class="social-icon">
          <i class="fa fa-twitter"></i>
        </span>
                                            </a>
                                        </li>


                                        <li>
                                            <a target="_blank" href="/" class="social-wrapper pinterest">
        <span class="social-icon">
          <i class="fa fa-pinterest"></i>
        </span>
                                            </a>
                                        </li>


                                        <li>
                                            <a target="_blank" href="/" class="social-wrapper google">
        <span class="social-icon">
          <i class="fa fa-google-plus"></i>
        </span>
                                            </a>
                                        </li>


                                        <li>
                                            <a target="_blank" href="/" class="social-wrapper youtube">
        <span class="social-icon">
          <i class="fa fa-youtube"></i>
        </span>
                                            </a>
                                        </li>


                                        <li>
                                            <a target="_blank" href="/" class="social-wrapper instagram">
        <span class="social-icon">
          <i class="fa fa-instagram"></i>
        </span>
                                            </a>
                                        </li>

                                    </ul>
                                </div>


                            </div>
                        </div>


                        <div class="col-sm-6 col-md-4 col-xs-12 clear-sm">
                            <div class="widget-wrapper animated">

                                <h3 class="title title_left">Kết nối với chúng tôi</h3>

                                <div class="inner">
                                    <!-- Facebook widget -->

                                    <div class="footer-static-content">
                                        <div class="fb-page" data-href="https://www.facebook.com/happylive.vn"
                                             data-height="300" data-small-header="false"
                                             data-adapt-container-width="true" data-hide-cover="false"
                                             data-show-facepile="true" data-show-posts="false"></div>
                                    </div>
                                    <div style="clear:both;">

                                    </div>

                                    <!-- #Facebook widget -->
                                    <script>
                                        (function (d, s, id) {
                                            var js, fjs = d.getElementsByTagName(s)[0];
                                            if (d.getElementById(id)) return;
                                            js = d.createElement(s);
                                            js.id = id;
                                            js.src = "./connect.facebook.net/en_US/sdk.js#xfbml=1&appId=263266547210244&version=v2.0";
                                            fjs.parentNode.insertBefore(js, fjs);
                                        }(document, 'script', 'facebook-jssdk'));
                                    </script>

                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>

            <div class="footer-copyright">
                <div class="container copyright">
                    <p>Copyright &copy; 2017 OxyWatch. <a target='_blank' href='https://www.haravan.com'>Powered by
                            Haravan</a>.</p>

                </div>
            </div>
        </footer>
        <a href="#" class="scrollToTop show">
            <i class="fa fa-chevron-up"></i>
        </a>

        <!--Scroll to Top-->
        <div style="display:none" id="myCart" class="modal fade bs-example-modal-lg in" tabindex="-1" role="dialog"
             aria-labelledby="myLargeModalLabel" aria-hidden="false" style="display: block;">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="exampleModalLabel">Bạn có 9 sản phẩm trong giỏ hàng.</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span class="hrv-close-modal"></span>
                        </button>
                    </div>
                    <form action="/cart" method="post" id="cartform" style="display: block;">
                        <div class="modal-body">
                            <table style="width:100%;" id="cart-table">
                                <tbody>
                                <tr>
                                    <th></th>
                                    <th>Tên sản phẩm</th>
                                    <th>Số lượng</th>
                                    <th>Giá tiền</th>
                                    <th></th>
                                </tr>
                                <tr class="line-item original">
                                    <td class="item-image"></td>
                                    <td class="item-title">
                                        <a></a>
                                    </td>
                                    <td class="item-quantity"></td>
                                    <td class="item-price"></td>
                                    <td class="item-delete text-center"></td>
                                </tr>
                                <tr class="line-item">
                                    <td class="item-image"><img
                                                src="./product.hstatic.net/1000177652/product/7_0590d26379fb4da3ba8d9b57564ee6b0_small.jpg">
                                    </td>
                                    <td class="item-title">
                                        <a href="/products/dong-ho-nam-tevise-1952-chay-co-cuc-chat">ĐỒNG HỒ NAM TEVISE
                                            1952 CHẠY CƠ CỰC CHẤT<br><span></span></a>
                                    </td>
                                    <td class="item-quantity"><input id="quantity1" name="updates[]" min="1"
                                                                     type="number" value="3" class=""></td>
                                    <td class="item-price">2,400,000₫</td>
                                    <td class="item-delete text-center"><a href="javascript:void(0);"
                                                                           onclick="deleteCart(1012006173)"><i
                                                    class="fa fa-times"></i></a></td>
                                </tr>
                                <tr class="line-item">
                                    <td class="item-image"><img
                                                src="./product.hstatic.net/1000177652/product/1_e0ed7c0240734782a8268793dce0b9b8_small.jpg">
                                    </td>
                                    <td class="item-title">
                                        <a href="/products/dong-ho-nam-skmei-kim-xanh-duong">ĐỒNG HỒ NAM SKMEI KIM XANH
                                            DƯƠNG<br><span></span></a>
                                    </td>
                                    <td class="item-quantity"><input id="quantity1" name="updates[]" min="1"
                                                                     type="number" value="6" class=""></td>
                                    <td class="item-price">2,994,000₫</td>
                                    <td class="item-delete text-center"><a href="javascript:void(0);"
                                                                           onclick="deleteCart(1012030836)"><i
                                                    class="fa fa-times"></i></a></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="modal-footer">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="modal-note">
                                        <textarea placeholder="Viết ghi chú" id="note" name="note" rows="5"></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="total-price-modal">
                                        Tổng cộng : <span class="item-total">5,394,000₫</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row" style="margin-top:10px;">
                                <div class="col-lg-6">
                                    <div class="comeback">
                                        <a href="/collections/all">
                                            <i class="fa fa-caret-left mr10"></i>Tiếp tục mua hàng
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-6 text-right">
                                    <div class="buttons btn-modal-cart">
                                        <button type="submit" class="button-default" id="checkout" name="checkout">
                                            Đặt hàng
                                            <i class="fa fa-caret-right"></i>
                                        </button>
                                    </div>

                                    <div class="buttons btn-modal-cart">
                                        <button type="submit" class="button-default" id="update-cart-modal" name="">
                                            <i class="fa fa-caret-left"></i>
                                            Cập nhật
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" class="hidden">
            <symbol id="icon-add-cart">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                     viewBox="0 0 512 512" enable-background="new 0 0 512 512">
                    <g>
                        <g>
                            <polygon
                                    points="447.992,336 181.555,336 69.539,80 0.008,80 0.008,48 90.477,48 202.492,304 447.992,304 		"/>
                        </g>
                        <path d="M287.992,416c0,26.5-21.5,48-48,48s-48-21.5-48-48s21.5-48,48-48S287.992,389.5,287.992,416z"/>
                        <path d="M447.992,416c0,26.5-21.5,48-48,48s-48-21.5-48-48s21.5-48,48-48S447.992,389.5,447.992,416z"/>
                        <g>
                            <polygon points="499.18,144 511.992,112 160.008,112 172.805,144 		"/>
                            <polygon points="211.195,240 223.992,272 447.992,272 460.805,240 		"/>
                            <polygon points="486.398,176 185.602,176 198.398,208 473.586,208 		"/>
                        </g>
                    </g>
                </svg>
            </symbol>
            <symbol id="icon-list-switch">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                     viewBox="0 0 194.828 194.828" style="enable-background:new 0 0 194.828 194.828;"
                     xml:space="preserve">
			<g>
                <g>
                    <g>
                        <path d="M190.931,17.534H3.897C1.745,17.534,0,19.279,0,21.431v19.483c0,2.152,1.745,3.897,3.897,3.897h187.034
										 c2.152,0,3.897-1.745,3.897-3.897V21.431C194.828,19.279,193.083,17.534,190.931,17.534z M187.034,37.017H7.793v-11.69h179.241
										 V37.017z"/>
                        <path d="M190.931,64.293H3.897C1.745,64.293,0,66.038,0,68.19v31.172c0,2.152,1.745,3.897,3.897,3.897h187.034
										 c2.152,0,3.897-1.745,3.897-3.897V68.19C194.828,66.038,193.083,64.293,190.931,64.293z M187.034,95.466H7.793v-23.38h179.241
										 V95.466z"/>
                        <path d="M190.931,122.741H3.897c-2.152,0-3.897,1.745-3.897,3.897v46.759c0,2.152,1.745,3.897,3.897,3.897h187.034
										 c2.152,0,3.897-1.745,3.897-3.897v-46.759C194.828,124.486,193.083,122.741,190.931,122.741z M187.034,169.5H7.793v-38.966
										 h179.241V169.5z"/>
                    </g>
                </g>
            </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
		</svg>

            </symbol>
            <symbol id="icon-sort-by">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                     viewBox="0 0 490 490" style="enable-background:new 0 0 490 490;" xml:space="preserve">
			<g>
                <polygon points="85.877,154.014 85.877,428.309 131.706,428.309 131.706,154.014 180.497,221.213 217.584,194.27 108.792,44.46
												 0,194.27 37.087,221.213 	"/>
                <polygon points="404.13,335.988 404.13,61.691 358.301,61.691 358.301,335.99 309.503,268.787 272.416,295.73 381.216,445.54
												 490,295.715 452.913,268.802 	"/>
            </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
		</svg>
            </symbol>
            <symbol id="icon-search_white" viewBox="0 0 1024 1024">
                <path class="path1"
                      d="M1014.176 968.256l-264.32-260.128c69.184-75.264 111.68-174.688 111.68-284.128 0-234.080-192.8-423.872-430.688-423.872s-430.72 189.792-430.72 423.872c0 234.112 192.864 423.872 430.72 423.872 102.752 0 197.088-35.552 271.072-94.688l265.376 261.12c12.928 12.736 33.952 12.736 46.88 0 12.96-12.672 12.96-33.376 0-46.048zM430.848 782.688c-201.312 0-364.48-160.64-364.48-358.688 0-198.080 163.168-358.656 364.48-358.656 201.28 0 364.448 160.576 364.448 358.656 0.032 198.048-163.168 358.688-364.448 358.688z"></path>
            </symbol>
            <symbol id="icon-user" viewBox="0 0 1024 1024">
                <title>user</title>
                <path class="path1"
                      d="M622.826 702.736c-22.11-3.518-22.614-64.314-22.614-64.314s64.968-64.316 79.128-150.802c38.090 0 61.618-91.946 23.522-124.296 1.59-34.054 48.96-267.324-190.862-267.324s-192.45 233.27-190.864 267.324c-38.094 32.35-14.57 124.296 23.522 124.296 14.158 86.486 79.128 150.802 79.128 150.802s-0.504 60.796-22.614 64.314c-71.22 11.332-337.172 128.634-337.172 257.264h896c0-128.63-265.952-245.932-337.174-257.264z"></path>
            </symbol>
        </svg>
</div>
</section> </div>
</body>
</html>
