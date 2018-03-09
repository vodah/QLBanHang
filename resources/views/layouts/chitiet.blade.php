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

                    <h2>Hãng</h2>
                    <div class="panel-group category-products" ><!--category-productsr-->
                        @foreach($hang as $item)
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordian" href="#sportswear">
                                        {{$item->TenNhaSanXuat}}
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
                <div class="product-details"><!--product-details-->
                    <div class="col-sm-5">
                        <div class="view-product">
                            <img src="{{asset($hanghoa->AnhSP)}}" alt="" />
                            <h3>ZOOM</h3>
                        </div>
                        <div id="similar-product" class="carousel slide" data-ride="carousel">

                            <!-- Wrapper for slides -->
<!--                            <div class="carousel-inner">-->
<!--                                <div class="item active">-->
<!--                                    <a href=""><img src="images/product-details/similar1.jpg" alt=""></a>-->
<!--                                    <a href=""><img src="images/product-details/similar2.jpg" alt=""></a>-->
<!--                                    <a href=""><img src="images/product-details/similar3.jpg" alt=""></a>-->
<!--                                </div>-->
<!--                                <div class="item">-->
<!--                                    <a href=""><img src="images/product-details/similar1.jpg" alt=""></a>-->
<!--                                    <a href=""><img src="images/product-details/similar2.jpg" alt=""></a>-->
<!--                                    <a href=""><img src="images/product-details/similar3.jpg" alt=""></a>-->
<!--                                </div>-->
<!--                                <div class="item">-->
<!--                                    <a href=""><img src="images/product-details/similar1.jpg" alt=""></a>-->
<!--                                    <a href=""><img src="images/product-details/similar2.jpg" alt=""></a>-->
<!--                                    <a href=""><img src="images/product-details/similar3.jpg" alt=""></a>-->
<!--                                </div>-->
<!---->
<!--                            </div>-->

                            <!-- Controls -->
                            <a class="left item-control" href="#similar-product" data-slide="prev">
                                <i class="fa fa-angle-left"></i>
                            </a>
                            <a class="right item-control" href="#similar-product" data-slide="next">
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </div>

                    </div>
                    <div class="col-sm-7">
                        <div class="product-information"><!--/product-information-->
                            <img src="images/product-details/new.jpg" class="newarrival" alt="" />
                            <h2>{{$hanghoa->TenHH}}</h2>
                            <p>Mã Hàng: {{$hanghoa->MaHH}}</p>
                            <img src="images/product-details/rating.png" alt="" />
                            <span>
									<span><?php $aaa = $hanghoa->DonGia;
                                        $abc = number_format($aaa, 0, ',', '.');
                                        echo $abc . "đ";
                                        ?></span>
                                <br>
									<label>Số Lượng:</label>
									<input type="text" value="1" />
									<button type="button" class="btn btn-fefault cart">
										<i class="fa fa-shopping-cart"></i>
										Thêm
									</button>
								</span>
                            <p><b>Hãng Sản Xuất:</b> {{$hanghoa->NhaSanXuat}}</p>
<!--                            <p><b>Condition:</b> New</p>-->
                            <p><b>Số lượng còn trong kho:</b> {{$hanghoa->SoLuong}}</p>
                            <a href=""><img src="images/product-details/share.png" class="share img-responsive"  alt="" /></a>
                        </div><!--/product-information-->
                    </div>
                </div><!--/product-details-->

                <div class="category-tab shop-details-tab"><!--category-tab-->
                    <div class="col-sm-12">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#details" data-toggle="tab">Chi tiết sản phẩm</a></li>
                            <li><a href="#companyprofile" data-toggle="tab">Thông số sản phẩm</a></li>
<!--                            <li ><a href="#reviews" data-toggle="tab">Đánh giá</a></li>-->
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade active in" id="details" >
                            <div class="col-sm-12">
                                <?php echo $hanghoa->MoTa ?>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="companyprofile" >
                        </div>

<!--                        <div class="tab-pane fade" id="reviews" >-->
<!--                            <div class="col-sm-12">-->
<!--                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>-->
<!--                                <p><b>Write Your Review</b></p>-->
<!---->
<!--                                <form action="#">-->
<!--										<span>-->
<!--											<input type="text" placeholder="Your Name"/>-->
<!--											<input type="email" placeholder="Email Address"/>-->
<!--										</span>-->
<!--                                    <textarea name="" ></textarea>-->
<!--                                    <b>Rating: </b> <img src="images/product-details/rating.png" alt="" />-->
<!--                                    <button type="button" class="btn btn-default pull-right">-->
<!--                                        Submit-->
<!--                                    </button>-->
<!--                                </form>-->
<!--                            </div>-->
<!--                        </div>-->

                    </div>
                </div><!--/category-tab-->


            </div>
        </div>
    </div>
</section>