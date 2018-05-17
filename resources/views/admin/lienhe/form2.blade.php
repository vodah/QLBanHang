@extends('layouts.home')
@section('content')


<form action="{{route('cauhinh.luu')}}" method="post" class="form" novalidate>
    {{csrf_field()}}
    <?php if ($tt == 1) {
        $a = "";
        $b = "hidden";
        }
        else {

        $a = "hidden";
        $b = "";
        }
    ?>
    <input type="hidden" name="id" value="{{$sua->id}}">
    <div class="col-sm-6 col-lg-offset-3 form-group {{$a}}">
        <label for="Ten">Tên Shop<span class="text-danger span_required"> * </span></label>
        <input type="text" class="form-control" autofocus="" value="{{$sua->Ten}}" id="Ten" name="Ten"
               placeholder="Nhập Tên">
        @if(asset($errors->first('Ten')))
        <span class="text-danger">{{$errors->first('Ten')}}</span>
        @endif
    </div>

    <div class="col-sm-6 col-lg-offset-3 form-group required {{$a}}">
        <label for="Email">Email<span class="text-danger span_required"> * </span></label>
        <input type="email" class="form-control" value="{{$sua->Email}}" id="Email" name="Email"
               placeholder="Email@gmail.com">
        @if(asset($errors->first('Email')))
        <span class="text-danger">{{$errors->first('Email')}}</span>
        @endif

    </div>

    <div class="col-sm-6 col-lg-offset-3 form-group {{$a}}">
        <label for="DiaChi">Địa Chỉ Cửa Hàng<span class="text-danger span_required"> * </span></label>
        <input type="text" class="form-control" value="{{$sua->DiaChi}}" onfocus="geolocate()" id="DiaChi"
               name="DiaChi"
               placeholder="Địa Chỉ">
        @if(asset($errors->first('DiaChi')))
        <span class="text-danger">{{$errors->first('DiaChi')}}</span>
        @endif

    </div>
    <div class="col-sm-6 col-lg-offset-3 form-group {{$a}}">
        <label for="Sdt">Số Điện Thoại<span class="text-danger span_required"> * </span></label>
        <input type="text" class="form-control" value="{{$sua->Sdt}}" id="Sdt" name="Sdt">
        @if(asset($errors->first('Sdt')))
        <span class="text-danger">{{$errors->first('Sdt')}}</span>
        @endif

    </div>

    <div class="form-group {{$b}}">
        <label for="MoTa">Mô Tả<span class="text-danger span_required"> * </span></label>
        <textarea class="form-control" name="MoTa" id="MoTa" rows="20">{{$sua->MoTa}}</textarea>

        <script type="text/javascript">
            var editor = CKEDITOR.replace('MoTa',{
                language:'vi',
                filebrowserBrowseUrl :'/admin-assets/js/plugin/ckfinder/ckfinder.html',
                filebrowserImageBrowseUrl : '/admin-assets/js/plugin/ckfinder/ckfinder.html?type=Images',
                filebrowserFlashBrowseUrl : '/admin-assets/js/plugin/ckfinder/ckfinder.html?type=Flash',
                filebrowserUploadUrl : '/admin-assets/js/plugin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
                filebrowserImageUploadUrl : '/admin-assets/js/plugin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                filebrowserFlashUploadUrl : '/admin-assets/js/plugin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
            });
        </script>﻿
        @if(asset($errors->first('MoTa')))
        <span class="text-danger">{{$errors->first('MoTa')}}</span>
        @endif

    </div>


    <div class="col-sm-6 col-lg-offset-3 form-group text-center">
        <button type="submit" class="btn btn-sm btn-success">
            <i class="fa fa-save"></i> Lưu
        </button>
        <a href="{{route('cauhinh.thongtin')}}" class="btn btn-sm btn-danger">
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