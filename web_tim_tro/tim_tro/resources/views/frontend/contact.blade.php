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
            <div class="row" style="text-align: center">

                <div class="col-md-12">
                    <p style="font-size: 28px;text-align: center;"> Thông tin liên hệ</p>
                </div>
                <div class="">

                    <pre style="text-align: center; font-size: 20px">
                         Gmail: cnpm1234@gmail.com
                    SĐT: 0968424588
                    Địa chỉ: 144 Xuân Thủy- Dịch Vọng Hậu- Cầu Giấy- Hà Nội

                    </pre>
                </div>


            </div>
        </div>
    </div>



@endsection
