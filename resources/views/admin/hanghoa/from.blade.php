@extends('layouts.home')
@section('content')

<form action="{{route('loaisp.luu')}}" method="POST" class="col-sm-6 col-sm-offset-3 form content_form" enctype="multipart/form-data" novalidate>
    {{csrf_field()}}
    <input type="hidden" name="id" value="{{$them->id}}">
    <div class="form-group">
        <label for="TenHH">Tên Hàng Hóa<span class="text-danger span_required"> * </span></label>
        <input type="text" class="form-control" autofocus="" value="{{$them->TenHH}}" id="TenHH" name="TenHH"
               placeholder="Nhập Tên">
        @if(asset($errors->first('TenHH')))
        <span class="text-danger">{{$errors->first('TenHH')}}</span>
        @endif

    </div>
    <div class="form-group">
        <label for="LoaiHH">Nhóm Sản Phẩm<span class="text-danger span_required"> * </span></label>
        <select name="LoaiHH" class="form-control">
            <!--            <option value="1">---Chọn Nhóm---</option>-->
            @foreach ($loaihang as $key => $value)
            <option value="{{$value->id}}">{{$value->TenLoaiHH}}</option>
            @endforeach
        </select>
        @if(asset($errors->first('TenLoaiHH')))
        <span class="text-danger">{{$errors->first('TenLoaiHH')}}</span>
        @endif
    </div>
    <div class="form-group">
        <label for="SoLuong">Số lượng<span class="text-danger span_required"> * </span></label>
        <input type="text" class="form-control" value="{{$them->SoLuong}}" id="SoLuong" name="SoLuong"
               placeholder="Số Lượng">
        @if(asset($errors->first('SoLuong')))
        <span class="text-danger">{{$errors->first('SoLuong')}}</span>
        @endif

    </div>
    <div class="form-group">
        <label for="DonGia">Đơn Giá<span class="text-danger span_required"> * </span></label>
        <input type="text" class="form-control" value="{{$them->DonGia}}" id="DonGia" name="DonGia"
               placeholder="Đơn Giá">
        @if(asset($errors->first('DonGia')))
        <span class="text-danger">{{$errors->first('DonGia')}}</span>
        @endif

    </div>

    <div class="image-preview">
        @if($them->AnhSP)
        <img width="250" id="profile-img-tag" src="{{asset($them->AnhSP)}}" alt="">
        @endif
    </div>
    <div class="form-group">
        <label for="AnhSP">Ảnh Sản Phẩm</label>
        <input type="file" name="AnhSP" id="AnhSP">

        @if(asset($errors->first('AnhSP')))
        <span class="text-danger">{{$errors->first('AnhSP')}}</span>
        @endif

    </div>

    <div class="form-group">
        <label for="MoTa">Mô Tả<span class="text-danger span_required"> * </span></label>
        <textarea class="form-control" name="MoTa" id="MoTa" rows="10">{{$them->MoTa}}</textarea>
        @if(asset($errors->first('MoTa')))
        <span class="text-danger">{{$errors->first('MoTa')}}</span>
        @endif

    </div>

    <script type="text/javascript">
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#profile-img-tag').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#AnhSP").change(function(){
            readURL(this);
        });
    </script>

    <div class="form-group text-center">
        <button type="submit" class="btn btn-sm btn-success">
            <i class="fa fa-save"></i> Save
        </button>
        <a href="{{route('loaisp.list')}}" class="btn btn-sm btn-danger">
            <i class="fa fa-remove"></i> Cancel
        </a>
    </div>


</form>

@endsection

<!-- jQuery 2.2.3 -->
<script src="{{asset('plugins/jQuery/jquery-2.2.3.min.js')}}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('plugins/jQueryUI/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip
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

<script src="http://malsup.github.com/jquery.form.js"></script>


