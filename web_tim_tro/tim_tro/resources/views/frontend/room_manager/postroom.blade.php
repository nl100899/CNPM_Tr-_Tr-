@extends('frontend.layouts.main_layout')
@section('title')
    Trang chủ
@endsection
@section('style')
    <style type="text/css">
        .tt ul
        {

        }
        .tt ul li
        {
            list-style: none;

        }
    </style>

@endsection
@section('content')
    <div class="banner-silder">
        <div id="JiSlider" class="jislider">
            <ul>
                <li>
                    <div class="w3layouts-banner-top">
                        <div class="bs-slider-overlay">
                            <div class="container">
                                <!-- Slide Text Layer -->
                                <div class="w3l-slide-text text-center">
                                    <h1 class="text-uppercase pt-4 pb-3">DỊch vụ của chúng tôi</h1>
                                    <p class="heading_bottom mb-4">Chúng tôi luôn nỗ lực cố gắng mang đến cho bạn sự lựa chọn hoàn hảo
                                        và tốt nhất.
                                    </p>
                                    <a href="about.html" class="text-capitalize button-style1" data-toggle="modal" data-target="#exampleModalCenter" role="button">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="w3layouts-banner-top w3layouts-banner-top1">
                        <div class="bs-slider-overlay">
                            <div class="container">
                                <!-- Slide Text Layer -->
                                <div class="w3l-slide-text text-center">
                                    <h2 class="text-uppercase pt-4 pb-3">Những phòng luôn được chúng tôi chọn lựa kĩ càng</h2>
                                    <p class="heading_bottom mb-4">Những phòng bạn được nhìn thấy trên website đã được đội ngũ chúng
                                        tôi chọn lựa kĩ càng và cẩn thận.</p>
                                    <a href="about.html" class="text-capitalize button-style1" data-toggle="modal" data-target="#exampleModalCenter" role="button">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="w3layouts-banner-top w3layouts-banner-top2">
                        <div class="bs-slider-overlay">
                            <div class="container">
                                <!-- Slide Text Layer -->
                                <div class="w3l-slide-text text-center">
                                    <h3 class="text-uppercase pt-4 pb-3">Phương châm làm việc của nhóm chúng tôi</h3>
                                    <p class="heading_bottom mb-4">Chúng tôi luôn tâm niệm mang đến cho các bạn những sản phẩm Tốt, Chất
                                        Lương, và giá cả chuẩn chính xác nhất,
                                    </p>

                                    <a href="about.html" class="text-capitalize button-style1" data-toggle="modal" data-target="#exampleModalCenter" role="button">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="w3layouts-banner-top w3layouts-banner-top3">
                        <div class="bs-slider-overlay">
                            <div class="container">
                                <!-- Slide Text Layer -->
                                <div class="w3l-slide-text text-center">
                                    <h3 class="text-uppercase pt-4 pb-3">Bạn hãy tin tưởng ở chũng tôi</h3>
                                    <p class="heading_bottom mb-4">Chúc bạn có được sự lựa chọn ưng ý nhất</p>

                                    <a href="about.html" class="text-capitalize button-style1" data-toggle="modal" data-target="#exampleModalCenter" role="button">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

            </ul>
        </div>
    </div>
    <div style="height: 50px; background-color: brown">
    </div>
    <div class="row list_room">
        <div class="container">
            <div class="row">
                <div class="col-sm-3 category">
                    <p style="font-size: 25px; color: red; margin-top: 10px;margin-left: 20px"><i class="fa fa-home" aria-hidden="true"></i> Danh
                        Mục</p>
                    <div  class="tt" style=" margin-top: 30px">
                        <ul>
                            <li>
                                <a href="#" style="margin-left: 0px; font-size: 18px;"> Vị trí</a><br>
                                <ul>
                                    <li><a href="#" style="margin-left: 20px;font-size: 16px;color: black">Quận Thanh Xuân</a></li>
                                    <li><a href="#" style="margin-left: 20px;font-size: 16px;color: black">Quận Cầu Giấy</a></li>
                                    <li><a href="#" style="margin-left: 20px;font-size: 16px;color: black">Quận Ba Đình</a></li>
                                </ul>
                            </li>
                            <li style="margin-top:10px">
                                <a href="#" style="margin-left: 0px; font-size: 18px">Loại Phòng</a><br>
                                <ul>
                                    <li><a href="#" style="margin-left: 20px;font-size: 16px;color: black">Phòng đơn</a></li>
                                    <li><a href="#" style="margin-left: 20px;font-size: 16px;color: black">Phòng đôi</a></li>
                                    <li><a href="#" style="margin-left: 20px;font-size: 16px;color: black">Phòng nhiều người</a></li>
                                </ul>
                            </li>
                            <li style="margin-top:10px">
                                <a href="#" style="margin-left: 0px; font-size: 18px">Giá Tiền</a><br>
                                <ul>
                                    <li><a href="#" style="margin-left: 20px;font-size: 16px;color: black">1 000 000 VNĐ</a></li>
                                    <li><a href="#" style="margin-left: 20px;font-size: 16px;color: black">5 000 000 VNĐ</a></li>
                                    <li><a href="#" style="margin-left: 20px;font-size: 16px;color: black">10 000 000 VNĐ</a></li>
                                </ul>
                            </li>
                            <li style="margin-top:10px">
                                <a href="#" style="margin-left: 0px; font-size: 18px">Diện tích</a><br>
                                <ul>
                                    <li><a href="#" style="margin-left: 20px;font-size: 16px;color: black">nhỏ hơn 20m^2</a></li>
                                    <li><a href="#" style="margin-left: 20px;font-size: 16px;color: black">nhỏ hơn 40m^2</a></li>
                                    <li><a href="#" style="margin-left: 20px;font-size: 16px;color: black">nhỏ hơn 50m^2</a></li>
                                </ul>
                            </li>


                        </ul>

                    </div>

                </div>
                <div class="col-sm-9 list1">
                    <p style="color: red; font-size: 28px;text-align: center;margin-top:30px">Đăng Bài </p><br>

                         <form name="post_room" action="{{ url('/postroom') }}" enctype="multipart/form-data" method="post" class="form-horizontal"
                          style="border: 3px solid green">
                        @csrf
                             <div class="row form-group">
                                 <label for="focusedinput" class="col-sm-2 control-label">Người Đăng</label>
                                 <div class="col-sm-8">
                                     <input type="text" name="nguoi_dang" value="{{ old('nguoi_dang') }}" class="form-control1" id="focusedinput"
                                            placeholder="Default Input">
                                 </div>
                             </div>
                        <div class="row form-group">
                            <label for="focusedinput" class="col-md-2 control-label">Vị trí : </label>
                            <div class="col-md-8">
                                <input type="text" name="vi_tri" value="{{ old('vi_tri') }}" class="form-control1" id="focusedinput"
                                       placeholder="Default
                                Input">
                            </div>
                        </div>
                             <div class="row form-group">
                                 <label for="focusedinput" class="col-md-2 control-label">Giá: </label>
                                 <div class="col-md-8">
                                     <input type="text" name="gia_tien" value="{{ old('gia_tien') }}" class="form-control1" id="focusedinput"
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
                                <input type="file" name="anh" required="true">
                            </div>
                        </div>
                        <div class="row form-group">
                            <label for="focusedinput" class="col-sm-2 control-label">Date Update</label>
                            <div class="col-sm-8">
                                <input type="date" name="ngay_dang" required="true">
                            </div>
                        </div>
                        <div class="row form-group">
                            <label for="txtarea1" class="col-sm-2 control-label">Desc</label>
                            <div class="col-sm-8">
                                <textarea name="mota" id="txtarea1" cols="50" rows="4" class="form-control1 mytinymce"></textarea>{{ old('mota')
                                }}</div>
                        </div>

                        <div class="col-sm-offset-2">
                            <button type="submit" class="btn btn-success" style="margin-left: 100px">Submit</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>



@endsection
