<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="themexriver">

    <!-- Page Title -->
    <title> Digital Transport </title>

    <!-- Icon fonts -->
    <link href="lp/css/font-awesome.min.css" rel="stylesheet">
    <link href="lp/css/flaticon.css" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="lp/css/bootstrap.min.css" rel="stylesheet">

    <!-- Plugins for this template -->
    <link href="lp/css/animate.css" rel="stylesheet">
    <link href="lp/css/owl.carousel.css" rel="stylesheet">
    <link href="lp/css/owl.theme.css" rel="stylesheet">
    <link href="lp/css/slick.css" rel="stylesheet">
    <link href="lp/css/slick-theme.css" rel="stylesheet">
    <link href="lp/css/owl.transitions.css" rel="stylesheet">
    <link href="lp/css/jquery.fancybox.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="lp/css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    @stack('css')
</head>

<body>

<!-- start page-wrapper -->
<div class="page-wrapper" id="home">
    <!-- start preloader -->
    <div class="preloader">
        <div class="dots">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <!-- end preloader -->
    <!-- Start header -->
    <header id="header" class="site-header header-style-1">
        <nav class="navigation navbar navbar-default">
            <div class="site-logo">
                <a href="#"><img src="lp/images/logo.jpg" alt></a>
            </div>
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="open-btn">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div id="navbar" class="navbar-collapse collapse navigation-holder">
                    <button class="close-navbar"><i class="fa fa-close"></i></button>
                    <ul class="nav navbar-nav">
                        <li><a href="#home">Главная</a></li>
                        <li><a href="#about">О Нас</a></li>
                        <li><a href="#services">Сервисы</a></li>
                        <li><a href="#portfolio">Наши работы</a></li>
                        <li><a href="#contact">Контакты</a></li>
                        <li><a href="{{route('login')}}">Войти</a></li>
                    </ul>
                </div><!-- end of nav-collapse -->
            </div><!-- end of container -->
        </nav>
    </header>
    <!-- end of header -->

    @yield('lp-content')

    <!-- start site-footer -->
    <footer class="site-footer">
        <div class="upper-footer">
            <div class="container">
                <div class="row">
                    <div class="col col-md-4 col-sm-6">
                        <div class="widget about-widget">
                            <div class="footer-logo">
                                <img src="lp/images/footer-logo.png" alt>
                            </div>
                            <p>Паспортизация автомобильных и городских дорог осуществляется для получения точных данных о наличии и состоянии дорог, их протяженности, технических характеристиках, инженерном оборудовании, обустройстве и условиях эксплуатации.</p>
                        </div>
                    </div>
                    <div class="col col-md-4 col-sm-6">
                        <div class="widget contact-widget">
                            <h3>Контакты</h3>
                            <ul class="contact-info">
                                <li><i class="fa fa-phone"></i> +123 (4567) 890</li>
                                <li><i class="fa fa-envelope"></i> info@agency.com</li>
                                <li><i class="fa fa-home"></i> 380 St Kilda Road, Sydeny VIC 3004, Australia</li>
                            </ul>
                        </div>
                    </div>

                    <div class="col col-md-4 col-sm-6">
                        <div class="widget quick-links-widget">
                            <h3>Быстрые ссылки</h3>
                            <ul>
                                <li><a href="#home">Главная</a></li>
                                <li><a href="#about">О Нас</a></li>
                                <li><a href="#services">Сервисы</a></li>
                                <li><a href="#portfolio">Наши работы</a></li>
                                <li><a href="#contact">Контакты</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end upper-footer -->
        <div class="copyright-info">
            <div class="container">
                <p>2024 &copy; All Rights Reserved </p>
            </div>
        </div>
    </footer>
    <!-- end site-footer -->

</div>
<!-- end of page-wrapper -->

<!-- All JavaScript files
================================================== -->
<script src="lp/js/jquery.min.js"></script>
<script src="lp/js/bootstrap.min.js"></script>

<!-- Plugins for this template -->
<script src="lp/js/jquery-plugin-collection.js"></script>

<!-- Custom script for this template -->
<script src="lp/js/script.js"></script>

@stack('js')
</body>
</html>
