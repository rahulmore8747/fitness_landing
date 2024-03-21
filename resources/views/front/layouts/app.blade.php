<!DOCTYPE html>

<html dir="ltr" lang="en-US">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="SemiColonWeb" />
    <!-- Stylesheets ============================================= -->
    {{-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>  --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="template/front/css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="template/front/style.css" type="text/css" />
    <link rel="stylesheet" href="template/front/css/dark.css" type="text/css" />
    <link rel="stylesheet" href="template/front/css/font-icons.css" type="text/css" />
    <link rel="stylesheet" href="template/front/css/animate.css" type="text/css" />
    <link rel="stylesheet" href="template/front/css/magnific-popup.css" type="text/css" />
    <!-- Landing Demo Specific Stylesheet -->
    <link rel="stylesheet" href="template/front/demos/landing/landing.css" type="text/css" />
    <link rel="stylesheet" href="template/front/demos/landing/css/fonts.css" type="text/css" />
    <link rel="stylesheet" href="template/front/css/custom.css" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="template/front/css/colors.php?color=3D80E4" type="text/css" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <!-- Document Title============================================= -->
        <title>Studio Sunlife</title>
        <link rel="icon" type="image/jpeg" href="template/front/demos/landing/images/fitness/logo2.png">
</head>
<body class="stretched">
    <!-- Document Wrapper
============================================= -->
    <div id="wrapper" class="clearfix">
 <!-- Header ============================================= -->
        <header id="header" class="transparent-header" data-responsive-class="not-dark">
            <div id="header-wrap">
                <div class="container hidden" style="display:none;">
                    <div class="header-row">
                        <!-- Logo ============================================= -->
                        <div id="logo" class="border-right-2">
                            <a href="" class="standard-logo"
                                data-dark-logo="template/front/images/logo-dark.png"><img  src="template/front/images/logo-dark.png" alt="Logo"></a>
                            <a href="" class="retina-logo" data-dark-logo="template/front/images/logo-dark.png"><img src="template/front/images/logo-dark.png" alt="Logo"></a>
                        </div><!-- #logo end -->
                        <div id="primary-menu-trigger">
                            <svg class="svg-trigger" viewBox="0 0 100 100">
                                <path
                                    d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20">
                                </path>
                                <path d="m 30,50 h 40"></path>
                                <path
                                    d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20">
                                </path>
                            </svg>
                        </div>
                          <!-- Primary Navigation ============================================= -->
                        <nav class="primary-menu not-dark with-arrows">
                            <ul class="mr-0 border-0 menu-container">
                                <li class="menu-item"><a class="menu-link" href="">
                                        <div>Home</div>
                                    </a></li>
                            </ul>
                        </nav>
                        <!-- #primary-menu end -->
                    </div>
                </div>
            </div>
            <div class="header-wrap-clone"></div>
        </header><!-- #header end -->
        @yield('content')
        <!-- Footer ============================================= -->
        <footer id="footer">        
            <div id="copyrights" class="bg-color dark py-5">
                <div class="container">
                    <div class="row col-mb-30">
                        <div class="col-md-6  text-md-left pl-md-3 pr-md-5"> <!-- Added padding classes -->
                            Copyrights &copy; 2024 All Rights Reserved by <a href="{{ route('home') }}" style="color: white;"><u>Studio Sunlife</u></a><br>
                            <div class="copyright-links"><a href="terms" class="text-white-50">Terms of Use</a> / <a href="privacypolicy" class="text-white-50">Privacy Policy</a></div>
                        </div>
                        <div class="col-md-6  text-md-right pl-md-3 pr-md-3"> <!-- Added padding classes -->
                             {{-- ios store app link --}}
                            <a href="#" class="btn color bg-white rounded px-3 py-2 nott ls0 shadow-sm"><i class="icon-apple1 mr-2"></i>App Store</a>
                            {{-- google play store app link --}}
                            <a href="#" class="btn color bg-white rounded px-3 py-2 nott ls0 shadow-sm ml-2"><i class="icon-google-play mr-2"></i>Play Store</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- #footer end -->
    </div><!-- #wrapper end -->
    <!-- Go To Top============================================= -->
     <div id="gotoTop" class="icon-angle-up"></div>
    <!-- JavaScripts============================================= -->
    <script src="template/front/js/jquery.js"></script>
    <script src="template/front/js/plugins.min.js"></script>
    <!-- Footer Scripts============================================= -->
    <script src="template/front/js/functions.js"></script>
    <script src="template/front/js/sweetalert.min.js"></script>
</body>
</html>
