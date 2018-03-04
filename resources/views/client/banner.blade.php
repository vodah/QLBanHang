<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    @if($banner->count())
                    @foreach ($banner as $key => $item)
                    <? ++$key ?>
                    @if($key==1)

                    <li data-target="#slider-carousel"
                        data-slide-to="{{ $key }}" class="active"></li>
                    @endif
                    @if($key!=1)

                    <li data-target="#slider-carousel"
                        data-slide-to="{{ $key }}"></li>
                    @endif
                    @endforeach
                    @endif


                </ol>

                <div class="carousel-inner">
                    @if($banner->count())
                    @foreach ($banner as $element => $item )

                    <? ++$element ?>
                    @if($element==1)


                    <div class="item active">
                        <div class="col-sm-4">
                            <h1>{{ $item->TenBanner}}</h1>

                            <p>{{ $item->MoTa}}</p>
                            <button type="button" class="btn btn-default get">Mua ngay</button>
                        </div>
                        <div class="col-sm-8">
                            <img src="{{asset($item->AnhBanner)}}" class="girl img-responsive"
                                 alt=""/>
                        </div>
                    </div>
                    @endif
                    @if($element!=1)
                    <div class="item">
                        <div class="col-sm-4">
                            <h1>{{ $item->TenBanner}}</h1>

                            <p>{{ $item->MoTa}}</p>
                            <button type="button" class="btn btn-default get">Mua ngay</button>
                        </div>
                        <div class="col-sm-8">
                            <img src="{{asset($item->AnhBanner)}}" class="girl img-responsive"
                                 alt=""/>
                        </div>
                    </div>
                    @endif
                    @endforeach
                    @endif


                </div>

                <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                    <i class="fa fa-angle-left"></i>
                </a>
                <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                    <i class="fa fa-angle-right"></i>
                </a>
            </div>

        </div>

    </div>
</div>