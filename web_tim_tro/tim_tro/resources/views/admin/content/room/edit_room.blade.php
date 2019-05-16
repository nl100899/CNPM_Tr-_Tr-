@extends('admin.layouts.glance')
@section('title')
    Sửa thông tin phòng
@endsection
@section('content')
    <h1> Sửa thông tin phòng {{ $room->id . ' : '}}</h1>

    <div class="row">
        <div class="form-three widget-shadow">

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

                <form name="post_room" action="{{ url('admin/room/'.$room->id.'/edit') }}" enctype="multipart/form-data" method="post"
                      class="form-horizontal"
                      style="border: 3px solid green">
                    @csrf
                    <div class="row form-group">
                        <label for="focusedinput" class="col-sm-2 control-label">Người Đăng</label>
                        <div class="col-sm-8">
                            <input type="text" name="nguoi_dang" value="{{$room->nguoi_dang}}" class="form-control1" id="focusedinput"
                                   placeholder="Default Input">
                        </div>
                    </div>
                    <div class="row form-group">
                        <label for="focusedinput" class="col-md-2 control-label">Vị trí : </label>
                        <div class="col-md-8">
                            <input type="text" name="vi_tri" value="{{$room->vi_tri}}" class="form-control1" id="focusedinput"
                                   placeholder="Default
                                Input">
                        </div>
                    </div>
                    <div class="row form-group">
                        <label for="focusedinput" class="col-md-2 control-label">Giá: </label>
                        <div class="col-md-8">
                            <input type="text" name="gia_tien" value="{{$room->gia_tien}}" class="form-control1" id="focusedinput"
                                   placeholder="Default
                                Input">
                        </div>
                    </div>


                    <div class="row form-group">
                        <label for="focusedinput" class="col-sm-2 control-label">Kiểu Phòng</label>
                        <div class="col-sm-8">
                            <select name="kieu_phong">
                                <option value="1">Phòng đơn</option>
                                <option value="2">Phòng đôi</option>
                                <option value="3">Phòng đa</option>

                            </select>
                        </div>
                    </div>


                    <div class="row form-group">
                        <label for="focusedinput" class="col-sm-2 control-label">Ảnh</label>
                        <div class="col-sm-8">
                            <input type="file" name="anh" required="true" value="{{$room->anh}}">
                        </div>
                    </div>
                    <div class="row form-group">
                        <label for="focusedinput" class="col-sm-2 control-label">Date Update</label>
                        <div class="col-sm-8">
                            <input type="date" name="ngay_dang" required="true" value="{{$room->ngay_dang}}">
                        </div>
                    </div>
                    <div class="row form-group">
                        <label for="txtarea1" class="col-sm-2 control-label">Desc</label>
                        <div class="col-sm-8">
                            <textarea name="mota" id="txtarea1" cols="50" rows="4" class="form-control1 mytinymce"></textarea>{{$room->mo_ta}}</div>
                    </div>

                    <div class="col-sm-offset-2">
                        <button type="submit" class="btn btn-success" style="margin-left: 100px">Submit</button>
                    </div>
                </form>
        </div>
    </div>


@endsection
