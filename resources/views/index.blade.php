@extends('layout.lp')
@section('lp-content')
    <!-- start hero-section -->
    <section class="main-section" style='background-image: url("{{asset('lp/images/lp_main_bg.png')}}")'>
        <div class="container ">
            <h1 class="text-center">Цифровая паспортизация <br> дорог Астаны</h1>
            <p class="text-center" style="color: white">ПРОСМАТРИВАЙТЕ ДОРОГИ И УЧАСТКИ</p>
            <form>
                <div class="input-group" style="width: 50%; margin-left: auto; margin-right: auto">
                    <input type="text" class="form-control" placeholder="Улица, участок">
                    <span class="input-group-btn">
                       <button class="btn btn-default" type="button">поиск</button>
                    </span>
                </div>
            </form>
        </div>
    </section>
    <!-- end hero-section -->

    <!-- start about-section -->
    <section class="about-section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-md-6" style="margin-top: 30px">
                    <div class="mission-text">
                        <div>
                            <h3>Миссия проекта</h3>
                            <h1>Цифровой двойник <br> дорожной инфраструктуры</h1>
                            <p style="margin-top: 30px; font-weight: 500; font-size: 16px">
                                Мы занимаемся предоставлением подробной информации о дорожной инфраструктуре, необходимой для безопасного и эффективного управления дорожными сетями. Наша компания проводит паспортизацию в полном соответствии с высочайшими стандартами и требованиями.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mission-bg" style='background-image: url("{{asset('lp/images/lp_mission_bg.png')}}")'></div>
                </div>
            </div>
        </div>
    </section>
    <!-- end about-section -->

    <!-- start services-section -->
    <section class="services-section" style="margin-bottom: 20px; padding-bottom: 20px" id="services">
        <div class="container">
            <h1 class="text-center" style="margin-bottom: 35px">Функциональные <br> возможности платформы</h1>
            <div class="row">
                <div class="col-md-4">
                    <div class="service-bg" style='background-image: url("{{asset('lp/images/pr_3.jpg')}}")'></div>
                    <h3 class="text-center">Удобная система <br> создание ведомостей</h3>
                </div>
                <div class="col-md-4">
                    <div class="service-bg" style='background-image: url("{{asset('lp/images/pr_2.jpg')}}")'></div>
                    <h3 class="text-center">Просмотр чертежей и <br> сметных документаций</h3>
                </div>
                <div class="col-md-4">
                    <div class="service-bg" style='background-image: url("{{asset('lp/images/pr_4.png')}}")'></div>
                    <h3 class="text-center">Интерактивная карта <br> города</h3>
                </div>
            </div>
            <div class="row">
                <div class="col col-xs-12">
                    <div class="service-features-grids" style="margin-top: 50px">
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
    <section class="" id="portfolio">
        <div class="container">
            <h1 class="text-center" style="margin-bottom: 40px">Этапы проекта</h1>
            <div class="row">
                <div class="col-md-6">
                    <div class="step" style='background-image: url("{{asset('lp/images/lp_step_bg_1.png')}}")'>
                        <div>
                            <h2>Этап 1</h2>
                            <p style="margin-top: 30px; font-size: 24px; font-weight: bold">Паспортная цифровизация <br> всех автодорог и трасс города Астаны</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="step" style='background-image: url("{{asset('lp/images/lp_step_bg_2.png')}}")'>
                        <div>
                            <h2>Этап 2</h2>
                            <p style="margin-top: 30px; font-size: 24px; font-weight: bold">Лазерное сканирование <br> лидарами дороги
                                <br>
                                города Астаны</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top: 30px">
                <div class="col-md-12">
                    <div class="step" style='background-image: url("{{asset('lp/images/lp_step_bg_3.png')}}")'>
                        <div>
                            <h2>Этап 3</h2>
                            <p style="margin-top: 30px; font-size: 24px; font-weight: bold">Генеративный ИИ  - поможет составить ведомость без привлечения ресурсов, а компьютерное зрение указывать высокую точность</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end portfolio-section -->

    <!-- start info-section -->
    <section class="" id="info">
        <div class="container">
            <h1 class="text-center" style="margin-bottom: 40px">Цифровой двойник <br> дорожной инфраструктуры</h1>
            <h3 class="text-center" style="margin-bottom: 40px; font-weight: 500">Данные, собранные измерительными комплексами, объединяются в единой информационной системе для централизованного учета и обработки.</h3>
            <div class="row">
                <div class="col-md-4">
                    <div class="infoBlock">
                        <div>
                            <h3>Полная Электронная <br>
                                Ведомость</h3>
                            <p style="margin-top: 30px; font-size: 16px; color: black">Паспорта объектов, статистика изменений и их актуальные характеристики, подтвержденные фото- и видеоматериалами</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="infoBlock">
                        <div class="row" style="width: 100%">
                            <div class="col-md-8">
                                <h3 style="margin-top: 10px">Интерактивная <br> онлайн карта</h3>
                                <p style="margin-top: 30px; font-size: 16px; color: black">Передача и отображение в реальном времени данных о состоянии инфраструктуры, получаемых с программно-аппаратных комплексов</p>
                            </div>
                            <div class="col-md-4">
                                <div class="infoWithImg" style='background-image: url("{{asset('lp/images/lp-info-img.png')}}")'></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top: 20px; margin-bottom: 20px">
                <div class="col-md-8">
                    <div class="infoBlock">
                        <div class="row" style="width: 100%">
                            <div class="col-md-8">
                                <h3 style="margin-top: 10px">KANBAN доска</h3>
                                <p style="margin-top: 30px; font-size: 16px; color: black">Способствует повышению прозрачности процессов, улучшению коммуникации внутри команды и более эффективному управлению задачами, позволяя легко выявлять узкие места и оптимизировать рабочие потоки.</p>
                            </div>
                            <div class="col-md-4">
                                <div class="infoWithImg" style='background-image: url("{{asset('lp/images/pr_3.jpg')}}")'></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="infoBlock">
                        <div>
                            <h2>История автодорог</h2>
                            <p style="margin-top: 30px; font-size: 16px; color: black">История строительства и циклы технического обслуживания и ремонта. Возможность просмотра компаний, выполняющих работы и задачи.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="infoBlock">
                        <div>
                            <h2>Отчетность</h2>
                            <p style="margin-top: 30px; font-size: 18px; color: black">Интеграция с городскими и областными системами, а также возможность формирования различных видов пользовательских отчетов.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="infoBlock">
                        <div class="row" style="width: 100%">
                            <div class="col-md-8">
                                <h3 style="margin-top: 10px">Интерактивная <br> карта проектирования</h3>
                                <p style="margin-top: 30px; font-size: 18px; color: black">Универсальная  цифровая среда для визуализации изменений и подготовки проектной  документации</p>
                            </div>
                            <div class="col-md-4">
                                <div class="infoWithImg" style='background-image: url("{{asset('lp/images/lp_info_img_2.png')}}")'></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end info-section -->

    <!-- start object-section -->
    <section class="" id="objects">
        <div class="container">
            <h1 class="text-center" style="margin-bottom: 40px">Объекты оцифровки <br> дорожной инфраструктуры</h1>
            <h3 class="text-center" style="margin-bottom: 40px; font-weight: 500">Определение типов дорожной ведомости</h3>
            <div class="row">
                <div class="col-md-4">
                    <div class="objectBlock">
                        <div>
                            <div class="mini-object" style='background-image: url("{{asset('lp/images/lp_mini_obj_1.png')}}")'></div>
                            <h3 class="text-center">Дорожно-транспортная инфраструктура</h3>
                            <p style="margin-top: 30px; font-size: 14px; color: black; text-align: center">Знаки, разметка, уклоны и еще 50+ слоев</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="objectBlock">
                        <div>
                            <div class="mini-object" style='background-image: url("{{asset('lp/images/lp_mini_obj_2.png')}}")'></div>
                            <h3 class="text-center">Промышленность и энергетика</h3>
                            <p style="margin-top: 30px; font-size: 14px; color: black; text-align: center">Распределительные  сети, линии уличного освещения, инвентаризация объектов формирования  планов модернизации для энергосервисных контрактов</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="objectBlock">
                        <div>
                            <div class="mini-object" style='background-image: url("{{asset('lp/images/lp_mini_obj_3.png')}}")'></div>
                            <h3 class="text-center">Зеленые насаждения и лесные массивы</h3>
                            <p style="margin-top: 30px; font-size: 14px; color: black; text-align: center">Деревья, кустарники, газоны, видовой состав и т.д.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top: 30px">
                <div class="col-md-4">
                    <div class="objectBlock">
                        <div>
                            <div class="mini-object" style='background-image: url("{{asset('lp/images/lp_mini_obj_4.png')}}")'></div>
                            <h3 class="text-center">Железнодорожная инфраструктура</h3>
                            <p style="margin-top: 30px; font-size: 14px; color: black; text-align: center">Инвентаризация объектов инфраструктуры ЖД на пересечениях автодорог</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="objectBlock">
                        <div>
                            <div class="mini-object" style='background-image: url("{{asset('lp/images/lp_mini_obj_5.png')}}")'></div>
                            <h3 class="text-center">Архитектурные <br>
                                объекты</h3>
                            <p style="margin-top: 30px; font-size: 14px; color: black; text-align: center">Инвертизация архитектурных форм на автодорогах</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="objectBlock">
                        <div>
                            <div class="mini-object" style='background-image: url("{{asset('lp/images/lp_mini_obj_6.png')}}")'></div>
                            <h3 class="text-center">Пешеходные <br>
                                переходы и мосты</h3>
                            <p style="margin-top: 30px; font-size: 14px; color: black; text-align: center">Мостовые конструкции и пешеходные переходы, с учетом дорожных знаков</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end object-section -->

    <!-- start info-section -->
    <section class="" id="support">
        <div class="container">
            <h1 class="text-center" style="margin-bottom: 40px">При поддержке</h1>
            <div class="row">
                <div class="col-md-4">
                    <div class="supportBlock" style='background-image: url("{{asset('lp/images/astana_logo.png')}}")'></div>
                </div>
                <div class="col-md-4">
                    <div class="supportBlock" style='background-image: url("{{asset('lp/images/astana_innovation_logo.jpg')}}")'></div>
                </div>
                <div class="col-md-4">
                    <div class="supportBlock" style='background-image: url("{{asset('lp/images/astanahub_logo.png')}}")'></div>
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
                            <p>пр-т. Мангилик Ел. 55/8, Астана 020000</p>
                        </div>
                        <div>
                            <h5>Контактные данные:</h5>
                            <p>+7 707 500 1710</p>
                        </div>
                        <div>
                            <h5>Email:</h5>
                            <p>kazitech2023@gmail.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end container -->
    </section>
    <!-- end contact-section -->
@endsection
