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
                                    <li><a href="{{url('/thanhxuan')}}" style="margin-left: 20px;font-size: 16px;color: black">Quận Thanh
                                            Xuân</a></li>
                                    <li><a href="{{url('/caugiay')}}" style="margin-left: 20px;font-size: 16px;color: black">Quận Cầu Giấy</a></li>
                                    <li><a href="{{url('/badinh')}}" style="margin-left: 20px;font-size: 16px;color: black">Quận Ba Đình</a></li>
                                </ul>
                            </li>
                            <li style="margin-top:10px">
                                <a href="#" style="margin-left: 0px; font-size: 18px">Loại Phòng</a><br>
                                <ul>
                                    <li><a href="{{url('/don')}}" style="margin-left: 20px;font-size: 16px;color: black">Phòng đơn</a></li>
                                    <li><a href="{{url('/doi')}}" style="margin-left: 20px;font-size: 16px;color: black">Phòng đôi</a></li>
                                    <li><a href="{{url('/da')}}" style="margin-left: 20px;font-size: 16px;color: black">Phòng nhiều người</a></li>
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
                    <p style="color: red; font-size: 28px;text-align: center;margin-top:30px"> Danh sách các phòng trọ hiện có</p><br>

                    <section class="services py-5" id="projects">
                        <div class="container py-md-3">
                            <div class="w3-head-all mb-3">

                            </div>
                            <div class="row inner-sec-w3layouts-agileinfo">
                                @foreach ($rooms as $room)
                                <div class="col-md-4  proj_gallery_grid" data-aos="zoom-in">
                                    <div class="section_1_gallery_grid">
                                        <a title="Donec sapien massa, placerat ac sodales ac, feugiat quis est." href="{{asset($room->anh)}}">
                                            <div class="section_1_gallery_grid1">
                                                <img src="{{asset($room->anh)}}" alt=" " class="img-responsive" style="height: 150px;"/>
                                                <div class="proj_gallery_grid1_pos">
                                                    <h3>Vị trí:{{$room->vi_tri}} </h3>
                                                    <p>Giá: {{$room->gia_tien}}</p>
                                                    <p>Liên hệ: 08432233234</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                @endforeach
                                {{$rooms->links()}}
                            </div>
                        </div>
                    </section>
            </div>
        </div>
    </div>



@endsection
