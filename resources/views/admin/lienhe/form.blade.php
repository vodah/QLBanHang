@extends('layouts.home')
@section('content')


<form action="{{route('lienhe.luu')}}" method="post" class="col-sm-6 col-lg-offset-3  form" novalidate>
    {{csrf_field()}}

    <input type="hidden" name="id" value="{{$sua->id}}">
    <div class="form-group">
        <label for="name">Tên Người Quản Trị</label>
        <input type="text" class="form-control" autofocus="" value="{{$sua->name}}" id="name" name="name"
               placeholder="Nhập Tên">
        @if(asset($errors->first('name')))
        <span class="text-danger">{{$errors->first('name')}}</span>
        @endif
    </div>

    <div class="form-group required">
        <label for="email">Email</label>
        <input type="email" class="form-control" value="{{$sua->email}}" id="email" name="email"
               placeholder="Email@gmail.com">
        @if(asset($errors->first('email')))
        <span class="text-danger">{{$errors->first('email')}}</span>
        @endif

    </div>

    <div class="form-group">
        <label for="address">Địa Chỉ</label>
        <input type="text" class="form-control" value="{{$sua->address}}" onfocus="geolocate()" id="DiaChi"
               name="DiaChi"
               placeholder="Địa Chỉ">
        @if(asset($errors->first('address')))
        <span class="text-danger">{{$errors->first('address')}}</span>
        @endif

    </div>
    <div class="form-group">
        <label for="phone">Số Điện Thoại</label>
        <input type="text" class="form-control" value="{{$sua->phone}}" id="phone" name="phone">
        @if(asset($errors->first('phone')))
        <span class="text-danger">{{$errors->first('phone')}}</span>
        @endif

    </div>

    <div class="form-group">
        <label for="password">Mật Khẩu</label>

        <input type="password" class="form-control" id="password" name="password"
               placeholder="nhập mật khẩu để thực hiện thay đổi">
        @if(asset($errors->first('password')))
        <span class="text-danger">{{$errors->first('password')}}</span>
        @endif
        @if (session('status'))
        <div class="alert text-danger" style="font-size: 15px">
            <strong>{{session('status')}}</strong>
        </div>
        @endif


    </div>

    <div class="form-group text-center">
        <button type="submit" class="btn btn-sm btn-success">
            <i class="fa fa-save"></i> Lưu
        </button>
        <a href="{{route('lienhe.chitiet')}}" class="btn btn-sm btn-danger">
            <i class="fa fa-remove"></i> Hủy
        </a>
    </div>


</form>

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