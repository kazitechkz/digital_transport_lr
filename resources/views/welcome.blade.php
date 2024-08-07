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


    <!-- start hero-section -->
    <section class="hero-section">
        <div class="hero-img">
            <img src="{{asset('lp/images/main_bg_1.jpg')}}" alt>
        </div>
        <div class="container">
            <div class="row">
                <div class="col col-md-7 col-sm-8">
                    <div class="content">
                        <h2>Мы трансформируем каждый проект в реальность</h2>
                        <p>Паспортизация дорог — это основа для безопасного и эффективного управления дорожной инфраструктурой. Наши услуги по паспортизации предоставляют детализированные данные о состоянии дорог, их технических характеристиках и инженерном оборудовании.</p>
                        <div class="btns">
                            <a href="#about" class="theme-btn">О Нас</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end hero-section -->


    <!-- start about-section -->
    <section class="about-section" id="about">
        <div class="content">
            <div class="left-grid" style='background-image: url("{{asset('lp/images/smart_city.jpg')}}")'></div>
            <div class="right-grid">
                <div class="inner">
                    <div class="section-title">
                        <span>О Нашей Компании</span>
                        <h2>Точные Данные для Управления Дорогами</h2>
                    </div>
                    <div class="details">
                        <p>Мы специализируемся на предоставлении детализированных данных о дорожной инфраструктуре, которые необходимы для безопасного и эффективного управления дорожными сетями. Наша компания выполняет работы по паспортизации в соответствии с самыми строгими стандартами и требованиями.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end about-section -->


    <!-- start services-section -->
    <section class="services-section section-padding" id="services">
        <div class="container">
            <div class="row">
                <div class="col col-md-5">
                    <div class="section-title-s2">
                        <span>Наши Услуги</span>
                        <h2>Услуги, Которые Мы Предоставляем</h2>
                    </div>
                    <div class="skills">
                        <div class="skill">
                            <h6>Паспортизация Дорог</h6>
                            <div class="progress">
                                <div class="progress-bar" data-percent="90"></div>
                            </div>
                        </div>
                        <div class="skill">
                            <h6>Анализ Инфраструктуры</h6>
                            <div class="progress">
                                <div class="progress-bar" data-percent="85"></div>
                            </div>
                        </div>
                        <div class="skill">
                            <h6>Технический Учет</h6>
                            <div class="progress">
                                <div class="progress-bar" data-percent="95"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col col-md-7">
                    <div class="services-detail-text">
                        <p>Мы обеспечиваем комплексный подход к анализу и учету дорожной инфраструктуры, предоставляя нашим клиентам только актуальные и точные данные.</p>
                        <p>Наша команда экспертов использует современные технологии, чтобы гарантировать высокое качество и точность наших услуг.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col col-xs-12">
                    <div class="service-features-grids">
                        <div class="grid">
                            <div class="icon">
                                <i class="fi flaticon-packaging"></i>
                            </div>
                            <h3>Инновационные Подходы</h3>
                            <p> Мы используем передовые технологии и методологии для сбора и анализа данных о дорожной инфраструктуре, обеспечивая нашим клиентам конкурентное преимущество.</p>
                        </div>
                        <div class="grid">
                            <div class="icon">
                                <i class="fi flaticon-website"></i>
                            </div>
                            <h3>Технический Анализ</h3>
                            <p> Наши специалисты проводят глубокий анализ состояния дорог, используя современные инструменты и оборудование, что позволяет нам предоставлять точные и надежные данные.</p>
                        </div>
                        <div class="grid">
                            <div class="icon">
                                <i class="fi flaticon-photo-camera"></i>
                            </div>
                            <h3>Мониторинг Состояния</h3>
                            <p> Систематический мониторинг дорог и дорожных сооружений обеспечивает их долговечность и безопасность. Наши решения позволяют выявлять потенциальные проблемы до их возникновения.</p>
                        </div>
                        <div class="grid">
                            <div class="icon">
                                <i class="fi flaticon-quality"></i>
                            </div>
                            <h3>Сертифицированные Стандарты</h3>
                            <p> Все наши процессы соответствуют международным стандартам качества и безопасности, гарантируя надежность и точность предоставляемых услуг.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end container -->
    </section>
    <!-- end services-section -->


    <!-- start portfolio-section -->
    <section class="portfolio-section" id="portfolio">
        <div class="portfolio-section-inner">
            <div class="portfolio-grids">
                <div class="grid">
                    <div class="img-details">
                        <div class="img-holder">
                            <img src="{{asset('lp/images/pr_3.jpg')}}" alt>
                        </div>
                        <div class="details">
                            <h3>KANBAN BOARD</h3>
                            <span class="cat">Легкое управление сотрудниками</span>

                        </div>
                    </div>
                </div>
                <div class="grid">
                    <div class="img-details">
                        <div class="img-holder">
                            <img src="{{asset('lp/images/pr_2.jpg')}}" alt>
                        </div>
                        <div class="details">
                            <h3>Чертежи и файлы</h3>
                            <span class="cat">Просмотр документов любого формата</span>

                        </div>
                    </div>
                </div>
                <div class="grid">
                    <div class="img-details">
                        <div class="img-holder">
                            <img src="{{asset('lp/images/pr_1.jpg')}}" alt>
                        </div>
                        <div class="details">
                            <h3>Ведомость</h3>
                            <span class="cat">Простое обращение с документами</span>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end portfolio-section -->


    <!-- start contact-section -->
    <section class="contact-section section-padding" id="contact">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <div class="section-title-s3">
                        <span>Контакты</span>
                        <h2>Оставить заявку</h2>
                    </div>
                </div>
            </div>

            <div class="row contact-form-info">
                <div class="col col-md-8">
                    <div class="contact-form">
                        <form id="contact-form" class="contact-validation-active">
                            <div>
                                <input type="text" id="name" name="name" class="form-control" placeholder="Full name..">
                            </div>
                            <div>
                                <input type="email" id="email" name="email" class="form-control" placeholder="Email address..">
                            </div>
                            <div>
                                <input type="text" id="subject" name="subject" class="form-control" placeholder="Subject..">
                            </div>
                            <div>
                                <input type="text" id="phone" name="phone" class="form-control" placeholder="Phone no..">
                            </div>
                            <div>
                                <textarea class="form-control" id="message" name="message" placeholder="Write.."></textarea>
                            </div>
                            <div class="submit">
                                <button type="submit">Отправить</button>
                                <div id="loader">
                                    <i class="fa fa-refresh fa-spin fa-3x fa-fw"></i>
                                </div>
                            </div>
                            <div class="error-handling-messages">
                                <div id="success">Thank you</div>
                                <div id="error"> Error occurred while sending email. Please try again later. </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col col-md-3 col-md-offset-1">
                    <div class="contact-info">
                        <div>
                            <h5>Адрес:</h5>
                            <p>380 St Kilda Road, Sydeny VIC 3004, Australia</p>
                        </div>
                        <div>
                            <h5>Контактные данные:</h5>
                            <p>+123 4567 890</p>
                        </div>
                        <div>
                            <h5>Email:</h5>
                            <p>info@agency.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end container -->
    </section>
    <!-- end contact-section -->


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
</body>
</html>
