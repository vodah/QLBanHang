@extends('layouts.home')
@section('content')


<form action="{{ route('nhomsp.luu') }}" method="post" class="col-sm-6 col-sm-offset-3 form" novalidate>
    {{csrf_field()}}
    <input type="hidden" name="token" value="{{csrf_token()}}">
    <div class="form-group">
        <label for="name">Tên Nhóm Hàng Hóa<span class="text-danger" style="font-size: 20px">*</label>
        <input type="hidden" name="id" id="id">
        <input type="text" class="form-control" autofocus="" id="TenLoaiHH" name="TenLoaiHH" placeholder="Nhập Tên Loại Hàng Hóa">
        @if(asset($errors->first('TenLoaiHH')))
        <span class="text-danger">{{$errors->first('TenLoaiHH')}}</span>
        @endif

    </div>
    <div class="form-group text-center">
        <button type="submit" class="btn btn-sm btn-success">
            <i class="fa fa-save"></i> Lưu
        </button>
        <a href="{{route('nhomsp.list')}}" class="btn btn-sm btn-danger">
            <i class="fa fa-remove"></i> Hủy
        </a>
    </div>


</form>

@endsection