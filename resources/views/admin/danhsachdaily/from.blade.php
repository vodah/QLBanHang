@extends('layouts.home')
@section('content')

<form action="{{route('dsdaily.luu')}}" method="post" class="col-sm-6 col-lg-offset-3  form" novalidate>
    {{csrf_field()}}
    <input type="hidden" name="id" value="{{$them->id}}">
    <div class="form-group">
        <label for="TenDaiLy">Tên Đại Lý</label>
        <input type="text" class="form-control" autofocus="" value="{{$them->TenDaiLy}}" id="TenDaiLy" name="TenDaiLy"
               placeholder="Nhập Tên">
        @if(asset($errors->first('TenDaiLy')))
        <span class="text-danger">{{$errors->first('TenDaiLy')}}</span>
        @endif
    </div>

    <div class="form-group">

        <input type="hidden" name="date" value="<?= date("y-m-d") ?>">

    </div>

    <div class="form-group required">
        <label for="Email">Email</label>
        <input type="Email" class="form-control" value="{{$them->Email}}" id="Email" name="Email"
               placeholder="Email@gmail.com">
        @if(asset($errors->first('Email')))
        <span class="text-danger">{{$errors->first('Email')}}</span>
        @endif

    </div>
    <div class="form-group">
        <label for="Password">Password</label>
        <input type="Password" class="form-control" id="Password" name="Password"
               placeholder="Mật Khẩu">
        @if(asset($errors->first('Password')))
        <span class="text-danger">{{$errors->first('Password')}}</span>
        @endif

    </div>

    <div class="form-group">
        <label for="DiaChi">Địa Chỉ</label>
        <input type="text" class="form-control" value="{{$them->DiaChi}}" onfocus="geolocate()" id="DiaChi" name="DiaChi"
               placeholder="Địa Chỉ">
        @if(asset($errors->first('DiaChi')))
        <span class="text-danger">{{$errors->first('DiaChi')}}</span>
        @endif

    </div>
    <div class="form-group">
        <label for="SDT">Số Điện Thoại</label>
        <input type="text" class="form-control" value="{{$them->SDT}}" id="SDT" name="SDT">
        @if(asset($errors->first('SDT')))
        <span class="text-danger">{{$errors->first('SDT')}}</span>
        @endif

    </div>
    <div class="form-group">
        <label for="NVQuanLy">Nhân Viên Quản Lý</label>
        <input type="text" class="form-control" value="{{$them->NVQuanLy}}" id="NVQuanLy" name="NVQuanLy"
               placeholder="Leader">
        @if(asset($errors->first('NVQuanLy')))
        <span class="text-danger">{{$errors->first('NVQuanLy')}}</span>
        @endif

    </div>

    <div class="form-group text-center">
        <button type="submit" class="btn btn-sm btn-success">
            <i class="fa fa-save"></i> Save
        </button>
        <a href="{{route('dsdaily.list')}}" class="btn btn-sm btn-danger">
            <i class="fa fa-remove"></i> Cancel
        </a>
    </div>


</form>

<!--<div class="col-sm-5 maps_location" id="map">-->
<!---->
<!--</div>-->

<!--<script>-->
<!--    -->
<!--</script>-->
<!-- jQuery 2.2.3 -->
<script src="{{asset('plugins/jQuery/jquery-2.2.3.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('plugins/jQueryUI/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.min.js')}}"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="{{asset('plugins/morris/morris.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('plugins/sparkline/jquery.sparkline.min.js')}}"></script>
<!-- jvectormap -->
<script src="{{asset('plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
<script src="{{asset('plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('plugins/knob/jquery.knob.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset('plugins/daterangepicker/moment.min.js')}}"></script>
<script src="{{asset('plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- datepicker -->
<script src="{{asset('plugins/datepicker/bootstrap-datepicker.js')}}"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
<!-- Slimscroll -->
<script src="{{asset('plugins/slimScroll/jquery.slimscroll.min.js')}}"></script>
<!-- FastClick -->
<script src="{{asset('plugins/fastclick/fastclick.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('admin-assets/js/app.min.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('admin-assets/js/pages/dashboard.js')}}"></script>
<script src="{{asset('js/autocomplete.js')}}"></script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBnIxZqv9zKV0_bXY9MssjhQtwUfdFxQ4w&libraries=places&callback=initAutocomplete"
        async defer>

</script>

@endsection