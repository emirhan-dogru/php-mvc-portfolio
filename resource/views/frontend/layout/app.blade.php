<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="tr">
<!--<![endif]-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="description" content="Name of your web site">
    <meta name="author" content="Marketify">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Cavani | Home</title>
    <base href="{{ config('BASE_FRONTEND_ASSET') }}">

    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&amp;display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/plugins.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
    <!--[if lt IE 9]> <script type="text/javascript" src="js/modernizr.custom.js"></script> <![endif]-->

</head>

<body>




    <div class="cavani_tm_all_wrap" data-magic-cursor="show" data-enter="fadeInUp" data-exit="">

        <div class="cavani_tm_modalbox">
            <div class="box_inner">
                <div class="close">
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 511.995 511.995" style="enable-background:new 0 0 511.995 511.995;" xml:space="preserve" class="svg replaced-svg">
                            <g>
                                <g>
                                    <path d="M437.126,74.939c-99.826-99.826-262.307-99.826-362.133,0C26.637,123.314,0,187.617,0,256.005    s26.637,132.691,74.993,181.047c49.923,49.923,115.495,74.874,181.066,74.874s131.144-24.951,181.066-74.874    C536.951,337.226,536.951,174.784,437.126,74.939z M409.08,409.006c-84.375,84.375-221.667,84.375-306.042,0    c-40.858-40.858-63.37-95.204-63.37-153.001s22.512-112.143,63.37-153.021c84.375-84.375,221.667-84.355,306.042,0    C493.435,187.359,493.435,324.651,409.08,409.006z"></path>
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path d="M341.525,310.827l-56.151-56.071l56.151-56.071c7.735-7.735,7.735-20.29,0.02-28.046    c-7.755-7.775-20.31-7.755-28.065-0.02l-56.19,56.111l-56.19-56.111c-7.755-7.735-20.31-7.755-28.065,0.02    c-7.735,7.755-7.735,20.31,0.02,28.046l56.151,56.071l-56.151,56.071c-7.755,7.735-7.755,20.29-0.02,28.046    c3.868,3.887,8.965,5.811,14.043,5.811s10.155-1.944,14.023-5.792l56.19-56.111l56.19,56.111    c3.868,3.868,8.945,5.792,14.023,5.792c5.078,0,10.175-1.944,14.043-5.811C349.28,331.117,349.28,318.562,341.525,310.827z"></path>
                                </g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            </svg>
                    </a>
                </div>
                <div class="description_wrap"></div>
            </div>
        </div>


        <div class="cavani_tm_header">
            <div class="logo">
                <a href="#"><img src="assets/img/logo/dark.png" alt="" /></a>
            </div>
            <div class="menu">
               @include('frontend.layout.navbar')
                <span class="ccc"></span>
            </div>
        </div>

        <div class="cavani_tm_left_border"></div>
        <div class="cavani_tm_right_border"></div>

        <div class="cavani_tm_topbar">
            <div class="topbar_inner">
                <div class="logo">
                    <a href="#"><img src="assets/img/logo/dark.png" alt="" /></a>
                </div>
                <div class="trigger">
                    <div class="hamburger hamburger--slider">
                        <div class="hamburger-box">
                            <div class="hamburger-inner"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="cavani_tm_mobile_menu">
            <div class="inner">
                <div class="wrapper">
                    <div class="avatar">
                        <div class="image" data-img-url="assets/img/about/1.jpg"></div>
                    </div>
                    <div class="menu_list">
                        @include('frontend.layout.navbar')
                    </div>
                    <div class="social">
                        @include('frontend.layout.social-icons')
                    </div>
                    <div class="copyright">
                        <p>Copyright &copy; 2021</p>
                    </div>
                </div>
            </div>
        </div>


        <div class="cavani_tm_mainpart">
            <div class="author_image">
                <div class="main" data-img-url="assets/img/about/1.jpg"></div>
            </div>
            <div class="main_content">

                @yield('content')

            </div>
        </div>


        <div class="cavani_tm_footer">
            <div class="copyright">
                <p>Copyright &copy; 2021</p>
            </div>
            <div class="social">
                @include('frontend.layout.social-icons')
            </div>
        </div>


        <div class="mouse-cursor cursor-outer"></div>
        <div class="mouse-cursor cursor-inner"></div>

    </div>


    <script src="assets/js/jquery.js"></script>
    <!--[if lt IE 10]> <script type="text/javascript" src="js/ie8.js"></script> <![endif]-->
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/init.js"></script>
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA5bpEs3xlB8vhxNFErwoo3MXR64uavf6Y&amp;callback=initMap">
    </script>

</body>

</html>