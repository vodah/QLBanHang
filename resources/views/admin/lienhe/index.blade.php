@extends('layouts.home')
@section('content')

<div class="box-body table-responsive no-padding">
    @if (session('status'))
    <div class="alert text-danger" style="font-size: 20px">
        <strong>{{session('status')}}</strong>
    </div>
    @endif

    <table class="table text-center table-hover">
        <tbody>
        <tr>
            <th>STT</th>
            <th>Tên Người Quản Trị</th>
            <th>Email</th>
            <th>Địa Chỉ Cửa Hàng</th>
            <th>Số Điện Thoại</th>

<!--            <th>-->
<!--                <a href="{{route('loaisp.them')}}" class="btn btn-success btn-sm">-->
<!--                    <i class="fa fa-plus"></i> Thêm Sản Phẩm-->
<!--                </a>-->
<!--            </th>-->
        </tr>
        @if($lienhe->count())
        @foreach ($lienhe as $key => $element)


        <tr id="tr_{{$element->id}}">
            <td>{{ ++$key }}</td>
            <td>{{$element->name}}</td>
            <td>{{$element->email}}</td>
            <td>{{$element->address}}</td>
            <td>{{$element->phone}}</td>

            <td>
                <a href="{{route('lienhe.sua', ['id'=> $element->id])}}" class="  btn btn-info btn-sm">
                    <i class="fa fa-pencil"></i> Cập Nhật
                </a>
            </td>

        </tr>
        @endforeach
        @endif
        </tbody>
    </table>
</div>

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
@endsection