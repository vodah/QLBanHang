<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="left-sidebar">
                    <h2>Hãng</h2>
                    <div class="panel-group category-products" id="accordian"><!--category-productsr-->

                        @foreach($hang as $item)
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a href="#">{{$item->TenNhaSanXuat}}</a></h4>
                            </div>
                        </div>
                        @endforeach

                    </div><!--/category-products-->

                    <div class="brands_products"><!--brands_products-->
                        <h2>Giá Bán</h2>
                        <div class="brands-name">
                            <ul class="nav nav-pills nav-stacked">
                                <li class="li_price"><a href="#">Trên 20 Triệu</a></li>
                                <li class="li_price"><a href="#"> Từ 15 - 20 Triệu</a></li>
                                <li class="li_price"><a href="#"> Từ 10 - 15 Triệu</a></li>
                                <li class="li_price"><a href="#"> Từ 7 - 10 Triệu</a></li>
                                <li class="li_price"><a href="#"> Từ 5 - 7 Triệu</a></li>
                                <li class="li_price"><a href="#"> Dưới 5 Driệu</a></li>

                            </ul>
                        </div>
                    </div><!--/brands_products-->

                    <!--                    <div class="price-range"><!--price-range-->
                    <!--                        <h2>Giá</h2>-->
                    <!--                        <div class="well text-center">-->
                    <!--                            <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600"-->
                    <!--                                   data-slider-step="5" data-slider-value="[250,450]" id="sl2"><br/>-->
                    <!--                            <b class="pull-left">$ 0</b> <b class="pull-right">$ 600</b>-->
                    <!--                        </div>-->
                    <!--                    </div><!--/price-range-->

                    <div class="shipping text-center"><!--shipping-->
                        <!--                        <img src="images/home/shipping.jpg" alt=""/>-->
                    </div><!--/shipping-->

                </div>
            </div>

            <div class="col-sm-9 padding-right">
                <div class="features_items"><!--features_items-->
                    <h2 class="title text-center">Nổi Bật</h2>
                    @foreach ($hanghoa as $item)

                    @if($item->NoiBat ==1)
                            <div class="col-sm-4">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="{{asset($item->AnhSP)}}" alt=""/>
                                            <h2><?php $aaa = $item->DonGia;
                                                $abc = number_format($aaa, 0, ',', '.');
                                                echo $abc . "đ";
                                                ?></h2>
                                            <p class="p_namesp">{{$item->TenHH}}</p>
                                            <a href="{{$item->slug}}" class="btn btn-default add-to-cart"><i class="fa fa-info-circle"></i>Chi tiết</a>
                                            <a href="#" class="btn btn-default add-to-cart"><i
                                                        class="fa fa-shopping-cart"></i>Thêm</a>
                                        </div>
                                        <div class="product-overlay">
                                            <div class="overlay-content">
                                                <h2><?php $aaa = $item->DonGia;
                                                    $abc = number_format($aaa, 0, ',', '.');
                                                    echo $abc . "đ";
                                                    ?></h2>
                                                <p class="p_namesp">{{$item->TenHH}}</p>
                                                <a href="{{$item->slug}}" class="btn btn-default add-to-cart"><i class="fa fa-info-circle"></i>Chi tiết</a>
                                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm</a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    @endif
                    @endforeach


                </div><!--features_items-->

                <div class="category-tab"><!--category-tab-->
                    @foreach ($loai as $a)
                    <div class="col-sm-12">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="{{$a->TenLoaiHH}}" data-toggle="tab">{{$a->TenLoaiHH}}</a></li>
                            <div class="col-sm-2 continue_div"><a href="" class="continue_a"> xem thêm >></a></div>
                        </ul>

                    </div>
                    <div class="tab-content">

                        <div class="tab-pane fade active in">
                            @foreach ($hanghoa as $item)
                            <?php if( $item->TenLoaiHH == $a->TenLoaiHH) { ?>

                            <div class="col-sm-3">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="{{asset($item->AnhSP)}}" alt=""/>
                                            <h2><?php $aaa = $item->DonGia;
                                                $abc = number_format($aaa, 0, ',', '.');
                                                echo $abc . "đ";
                                                ?></h2>
                                            <p class="p_namesp">{{$item->TenHH}}</p>
                                            <a href="{{$item->slug}}" class="btn btn-default add-to-cart"><i
                                                        class="fa fa-info-circle"></i>Chi Tiết</a>
                                            <a href="" class="btn btn-default add-to-cart"><i
                                                        class="fa fa-shopping-cart"></i>Thêm</a>

                                        </div>

                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                            @endforeach
                        </div>



                </div><!--/category-tab-->
                    @endforeach

<!--                <div class="recommended_items"><!--recommended_items-->
<!--                    <h2 class="title text-center">recommended items</h2>-->
<!---->
<!--                    <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">-->
<!--                        <div class="carousel-inner">-->
<!--                            <div class="item active">-->
<!--                                <div class="col-sm-4">-->
<!--                                    <div class="product-image-wrapper">-->
<!--                                        <div class="single-products">-->
<!--                                            <div class="productinfo text-center">-->
<!--                                                <img src="images/home/recommend1.jpg" alt=""/>-->
<!--                                                <h2>$56</h2>-->
<!--                                                <p>Easy Polo Black Edition</p>-->
<!--                                                <a href="#" class="btn btn-default add-to-cart"><i-->
<!--                                                            class="fa fa-shopping-cart"></i>Add to cart</a>-->
<!--                                            </div>-->
<!---->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="col-sm-4">-->
<!--                                    <div class="product-image-wrapper">-->
<!--                                        <div class="single-products">-->
<!--                                            <div class="productinfo text-center">-->
<!--                                                <img src="images/home/recommend2.jpg" alt=""/>-->
<!--                                                <h2>$56</h2>-->
<!--                                                <p>Easy Polo Black Edition</p>-->
<!--                                                <a href="#" class="btn btn-default add-to-cart"><i-->
<!--                                                            class="fa fa-shopping-cart"></i>Add to cart</a>-->
<!--                                            </div>-->
<!---->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="col-sm-4">-->
<!--                                    <div class="product-image-wrapper">-->
<!--                                        <div class="single-products">-->
<!--                                            <div class="productinfo text-center">-->
<!--                                                <img src="images/home/recommend3.jpg" alt=""/>-->
<!--                                                <h2>$56</h2>-->
<!--                                                <p>Easy Polo Black Edition</p>-->
<!--                                                <a href="#" class="btn btn-default add-to-cart"><i-->
<!--                                                            class="fa fa-shopping-cart"></i>Add to cart</a>-->
<!--                                            </div>-->
<!---->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="item">-->
<!--                                <div class="col-sm-4">-->
<!--                                    <div class="product-image-wrapper">-->
<!--                                        <div class="single-products">-->
<!--                                            <div class="productinfo text-center">-->
<!--                                                <img src="images/home/recommend1.jpg" alt=""/>-->
<!--                                                <h2>$56</h2>-->
<!--                                                <p>Easy Polo Black Edition</p>-->
<!--                                                <a href="#" class="btn btn-default add-to-cart"><i-->
<!--                                                            class="fa fa-shopping-cart"></i>Add to cart</a>-->
<!--                                            </div>-->
<!---->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="col-sm-4">-->
<!--                                    <div class="product-image-wrapper">-->
<!--                                        <div class="single-products">-->
<!--                                            <div class="productinfo text-center">-->
<!--                                                <img src="images/home/recommend2.jpg" alt=""/>-->
<!--                                                <h2>$56</h2>-->
<!--                                                <p>Easy Polo Black Edition</p>-->
<!--                                                <a href="#" class="btn btn-default add-to-cart"><i-->
<!--                                                            class="fa fa-shopping-cart"></i>Add to cart</a>-->
<!--                                            </div>-->
<!---->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="col-sm-4">-->
<!--                                    <div class="product-image-wrapper">-->
<!--                                        <div class="single-products">-->
<!--                                            <div class="productinfo text-center">-->
<!--                                                <img src="images/home/recommend3.jpg" alt=""/>-->
<!--                                                <h2>$56</h2>-->
<!--                                                <p>Easy Polo Black Edition</p>-->
<!--                                                <a href="#" class="btn btn-default add-to-cart"><i-->
<!--                                                            class="fa fa-shopping-cart"></i>Add to cart</a>-->
<!--                                            </div>-->
<!---->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">-->
<!--                            <i class="fa fa-angle-left"></i>-->
<!--                        </a>-->
<!--                        <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">-->
<!--                            <i class="fa fa-angle-right"></i>-->
<!--                        </a>-->
<!--                    </div>-->
<!--                </div><!--/recommended_items-->

            </div>
        </div>
    </div>
</section>