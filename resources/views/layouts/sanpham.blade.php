<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="left-sidebar">
                    <h2>Danh Mục</h2>
                    <div class="panel-group category-products" id="accordian"><!--category-productsr-->
                        @foreach($loai as $item)
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordian" href="#sportswear">
                                        {{$item->TenLoaiHH}}
                                    </a>
                                </h4>
                            </div>
                        </div>
                        @endforeach
                    </div><!--/category-productsr-->

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





                </div>
            </div>

            <div class="col-sm-9 padding-right">
                <div class="features_items"><!--features_items-->
                    <h2 class="title text-center">Danh mục sản phẩm</h2>
                    @foreach ($hanghoa as $item)
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="{{asset($item->AnhSP)}}" alt="" />
                                    <h2><?php $aaa = $item->DonGia;
                                        $abc = number_format($aaa, 0, ',', '.');
                                        echo $abc . "đ";
                                        ?></h2>
                                    <p>{{$item->TenHH}}</p>
                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-info-circle"></i>Chi tiết</a>
                                    <a href="#" class="btn btn-default add-to-cart"><i
                                            class="fa fa-shopping-cart"></i>Thêm</a>
                                </div>
                                <div class="product-overlay">
                                    <div class="overlay-content">
                                        <h2><?php $aaa = $item->DonGia;
                                            $abc = number_format($aaa, 0, ',', '.');
                                            echo $abc . "đ";
                                            ?></h2>
                                        <p>{{$item->TenHH}}</p>
                                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-info-circle"></i>Chi tiết</a>
                                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm</a>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    @endforeach

                    <div class="pagination">
                        {!! $hanghoa->render() !!}
                    </div>

                </div><!--features_items-->
            </div>
        </div>
    </div>
</section>