@extends('frontend.layouts.main_layout')
@section('title')
    Trang chủ
@endsection

@section('content')
    <!-- banner slider-->
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
    <!-- //banner slider -->
    <!--/banner-bottom-->
    <section class="bottom-banner py-5" id="about">
        <div class="container-fluid py-md-3">
            <div class="row">
                <div class="col-lg-6 about-info text-left">
                    <div class="ab-info-text" data-aos="fade-left">
                        <h4 class="sub-hd mb-4">Luôn đồng hành cùng bạn </h4>
                        <p>Tìm phòng là app giúp chủ nhà và người thuê nhà xích lại gần nhau hơn, không phải thông qua các kèo
                            trung gian, giảm thiểu các chi phí giữa 2 người.</p>
                        <p class="sup-para mt-2">Chúng tôi luôn cam kết đưa đến các bạn nhưng phòng đẹp và có chất lượng tốt nhất,
                            phù hợp với bạn</p>

                        <div class="read inner mt-4">
                            <a href="#" class="btn btn-sm animated-button victoria-two button-style1 button-style2" data-toggle="modal" data-target="#exampleModalCenter">Read More</a>
                        </div>
                    </div>
                    <img src="images/ab2.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 about-img">
                </div>
            </div>
        </div>
    </section>
    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h5 class="modal-title text-center" id="exampleModalLongTitle">Interior spa</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img src="images/g6.jpg" class="img-fluid" alt="">
                    <h4>Interior</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo eiusmod tempor incididunt ut labore et dolore magna
                        aliqua uta enim ad minim ven iam quis nostrud exercitation ullamco.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <!--//banner-bottom-->



    <!--/Projects-->
    <section class="services py-5" id="projects">
        <div class="container py-md-3">
            <div class="w3-head-all mb-3">
                <h3>Các phòng chất lượng cao</h3>
            </div>
            <div class="row inner-sec-w3layouts-agileinfo">

                <div class="col-md-4  proj_gallery_grid" data-aos="zoom-in">
                    <div class="section_1_gallery_grid">
                        <a title="Donec sapien massa, placerat ac sodales ac, feugiat quis est." href="{{asset('frontend_assets/images/g1.jpg')}}">
                            <div class="section_1_gallery_grid1">
                                <img src="{{asset('frontend_assets/images/g1.jpg')}}" alt=" " class="img-responsive" />
                                <div class="proj_gallery_grid1_pos">
                                    <h3></h3>
                                    <p>xem thêm</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="section_1_gallery_grid" data-aos="zoom-in">
                        <a title="Donec sapien massa, placerat ac sodales ac, feugiat quis est." href="{{asset('frontend_assets/images/g2.jpg')}}">
                            <div class="section_1_gallery_grid1">
                                <img src="{{asset('frontend_assets/images/g2.jpg')}}" alt=" " class="img-responsive" />
                                <div class="proj_gallery_grid1_pos">
                                    <h3></h3>
                                    <p>xem thêm</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="section_1_gallery_grid" data-aos="zoom-in">
                        <a title="Donec sapien massa, placerat ac sodales ac, feugiat quis est." href="{{asset('frontend_assets/images/g3.jpg')}}">
                            <div class="section_1_gallery_grid1">
                                <img src="{{asset('frontend_assets/images/g3.jpg')}}" alt=" " class="img-responsive" />
                                <div class="proj_gallery_grid1_pos">
                                    <h3></h3>
                                    <p>xem thêm</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4  proj_gallery_grid" data-aos="zoom-in">
                    <div class="section_1_gallery_grid">
                        <a title="Donec sapien massa, placerat ac sodales ac, feugiat quis est." href="{{asset('frontend_assets/images/g4.jpg')}}">
                            <div class="section_1_gallery_grid1">
                                <img src="{{asset('frontend_assets/images/g4.jpg')}}" alt=" " class="img-responsive" />
                                <div class="proj_gallery_grid1_pos">
                                    <h3></h3>
                                    <p>xem thêm</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="section_1_gallery_grid" data-aos="zoom-in">
                        <a title="Donec sapien massa, placerat ac sodales ac, feugiat quis est." href="{{asset('frontend_assets/images/g5.jpg')}}">
                            <div class="section_1_gallery_grid1">
                                <img src="{{asset('frontend_assets/images/g5.jpg')}}" alt=" " class="img-responsive" />
                                <div class="proj_gallery_grid1_pos">
                                    <h3></h3>
                                    <p>xem thêm</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="section_1_gallery_grid" data-aos="zoom-in">
                        <a title="Donec sapien massa, placerat ac sodales ac, feugiat quis est." href="{{asset('frontend_assets/images/g6.jpg')}}">
                            <div class="section_1_gallery_grid1">
                                <img src="{{asset('frontend_assets/images/g6.jpg')}}" alt=" " class="img-responsive" />
                                <div class="proj_gallery_grid1_pos">
                                    <h3></h3>
                                    <p>xem thêm</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4  proj_gallery_grid" data-aos="zoom-in">
                    <div class="section_1_gallery_grid">
                        <a title="Donec sapien massa, placerat ac sodales ac, feugiat quis est." href="{{asset('frontend_assets/images/g7.jpg')}}">
                            <div class="section_1_gallery_grid1">
                                <img src="{{asset('frontend_assets/images/g7.jpg')}}" alt=" " class="img-responsive" />
                                <div class="proj_gallery_grid1_pos">
                                    <h3></h3>
                                    <p>xem thêm</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="section_1_gallery_grid" data-aos="zoom-in">
                        <a title="Donec sapien massa, placerat ac sodales ac, feugiat quis est." href="{{asset('frontend_assets/images/images/g8.jpg')}}">
                            <div class="section_1_gallery_grid1">
                                <img src="{{asset('frontend_assets/images/g8.jpg')}}" alt=" " class="img-responsive" />
                                <div class="proj_gallery_grid1_pos">
                                    <h3></h3>
                                    <p>xem thêm</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="section_1_gallery_grid" data-aos="zoom-in">
                        <a title="Donec sapien massa, placerat ac sodales ac, feugiat quis est." href="{{asset('frontend_assets/images/g9.jpg')}}">
                            <div class="section_1_gallery_grid1">
                                <img src="{{asset('frontend_assets/images/g9.jpg')}}" alt=" " class="img-responsive" />
                                <div class="proj_gallery_grid1_pos">
                                    <h3></h3>
                                    <p>xem thêm</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//Projects-->
    <!-- team -->


    <div class="mail py-5" id="contact">
        <div class="container py-md-3">
            <div class="w3-head-all mb-3 contact-head">
                <h3>Liên hệ</h3>
            </div>
            <div class="mail_grids_wthree_agile_info row">
                <div class="col-md-5 contact-left">
                    <h5>Thông liên hệ</h5>
                    <div class="visit">
                        <div class="col-md-2 col-sm-2 col-xs-2 contact-icon">
                            <span class="fa fa-home" aria-hidden="true"></span>
                        </div>
                        <div class="col-md-10 col-sm-10 col-xs-10 contact-text">
                            <h4>Địa chỉ</h4>
                            <p> 144 Xuân Thủy- Dịch Vọng Hậu- Cầu Giấy- Hà Nội</p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="mail-us">
                        <div class="col-md-2 col-sm-2 col-xs-2 contact-icon">
                            <span class="fa fa-envelope" aria-hidden="true"></span>
                        </div>
                        <div class="col-md-10 col-sm-10 col-xs-10 contact-text">
                            <h4>Gmail</h4>
                            <p><a href="mailto:info@example.com">cnpm1234@gmail.com</a></p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="call">
                        <div class="col-md-2 col-sm-2 col-xs-2 contact-icon">
                            <span class="fa fa-phone" aria-hidden="true"></span>
                        </div>
                        <div class="col-md-10 col-sm-10 col-xs-10 contact-text">
                            <h4>Số đt</h4>
                            <p>0968424588</p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="col-md-7 mail_grid_right_agileits_w3">
                    <h5>Hãy liên hệ với chúng tôi</h5>
                    <form action="#" method="post">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 contact_left_grid">
                                <input type="text" name="Name" placeholder="Name" required="">
                                <input type="email" name="Email" placeholder="Email" required="">
                            </div>
                            <div class="col-md-6 col-sm-6 contact_left_grid">
                                <input type="text" name="Telephone" placeholder="Telephone" required="">
                                <input type="text" name="Subject" placeholder="Subject" required="">
                            </div>
                        </div>
                        <div class="clearfix"> </div>
                        <textarea name="Message" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required="">Message...</textarea>
                        <input type="submit" value="Submit">
                        <input type="reset" value="Clear">
                    </form>
                </div>
                <div class="clearfix"> </div>
            </div>

        </div>
    </div>
@endsection
