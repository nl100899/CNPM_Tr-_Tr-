<!-- header -->
<header class="top-head">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="index.html">
                Tim Phong
            </a>
            <button class="navbar-toggler ml-md-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto text-center">
                    <li class="nav-item active  mr-lg-3">
                        <a class="nav-link" href="{{url('/')}}">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item  mr-lg-3">
                        <a class="nav-link " href="{{url('/listroom')}}">Danh sách phòng</a>
                    </li>
                    <li class="nav-item  mr-lg-3">
                        <a class="nav-link " href="{{url('/postphong')}}">Đăng Bài</a>
                    </li>
                    <li class="nav-item  mr-lg-3">
                        <a class="nav-link " href="/about">Thông tin</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="/contact">Liên Hệ</a>
                    </li>
                </ul>
                <?php
                use Illuminate\Support\Facades\Auth;
                if (Auth::check())
                    {?>
                        <div class="buttons">
                    <button type="button" class="btn btn-info btn-lg-block w3ls-btn1 px-4 text-uppercase" data-toggle="modal"
                            aria-pressed="false" data-target="#exampleModal1">
                        <a href="{{route('logout')}}">Logout</a>
                    </button>
                </div>

                 <?php }
                else
                    {?>


                <div class="buttons">
                    <button type="button" class="btn btn-info btn-lg-block w3ls-btn1 px-4 text-uppercase" data-toggle="modal"
                            aria-pressed="false" data-target="#exampleModal1">
                        <a href="{{route('login')}}">Login</a>
                    </button>
                </div>
                <?php }
                ?>

            </div>
        </nav>
    </div>
</header>
<!-- //header -->
