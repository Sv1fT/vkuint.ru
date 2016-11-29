<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="viewport" content="width=1170px" />

    <link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="/css/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="/css/style/style.css" rel="stylesheet" type="text/css"/>
    <link href="/css/style/default.css" rel="stylesheet" type="text/css"/>
    <link href="/css/style/news.css" rel="stylesheet" type="text/css"/>
    <script src="/js/js/slide.js"></script>

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

    <script src="/js/js/target.js"></script>
    <script src="/js/js/header.js"></script>
    <script src="/js/js/glasses.js"></script>

</head>
<body>

<header>
    <div class="header_block">
        <div class="header_shap">
            <div class="header_shap_logo">
                <div class="header_shap_logo_left">
                    <a href="/">
                        <img id="logo1" src="/images/logo.png" alt="Волгоградский Колледж Управления и Новых Технологий" />
                        <p id="block-logo" class="text-right">Волгоградский Колледж Управления<br> и Новых Технологий</p>
                        <img id="logo2" src="/images/logo.gif" alt="Логотип ВКУиНТ" />
                    </a>
                </div>
                <div class="header_shap_logo_right">
                    <ul>
                        <li><a href="index.php?id=college">Наш<br>Колледж</a></li>
                        <li><a href="http://www.do.vgkuint.ru" target="_blank">Дистанционное<br>обучение</a></li>
                    </ul>
                </div>
            </div>

            <div class="container">
                <div class="header_shap_text">
                    <div class="textrotator"></div>
                </div>
            </div>

            <div class="header_shap_logo">
                <div class="header_shap_logo_right">
                    <div class="address">
                        <button class="btn btn-primary btn-lg" id="model_window" data-toggle="modal" data-target="#myModal">Контакты</button>
                    </div>
                </div>
            </div>

        </div>
        <video loop="loop" muted="muted" autoplay="autoplay" poster="/video/header.jpg" class="header_video">
            <source src="/video/header.webm" type="video/webm" />
            <source src="/video/header.mp4" type="video/mp4" />
        </video>
    </div>
</header>

@yield('content')



<!-- Подвал сайта -->

<footer>
    <div class="content">
        <div class="container" id="footer">
            <div class="row">
                <div class="col-md-3">
                    <div class="footer_1">
                        <div>
                            <p><i class="fa fa-phone-square" aria-hidden="true"></i> (8442) 70-72-02</p>
                            <p><i class="fa fa-envelope" aria-hidden="true"></i> vgkunt@vlgmail.ru</p>
                            <p><i class="fa fa-location-arrow" aria-hidden="true"></i> 400125, г. Волгоград, ул. им. Грамши, 53.</p>
                        </div>
                    </div>
                </div>

                <!--
				<div class="col-md-3">
					<div class="footer_text">
						<ol>
							<li><a href="">Ссылки</a></li>
							<li><a href="">Ссылки</a></li>
							<li><a href="">Ссылки</a></li>
							<li><a href="">Ссылки</a></li>
						</ol>
					</div>
				</div>

				<div class="col-md-3">
					<div class="footer_text">
						<ol>
							<li><a href="">Ссылки</a></li>
							<li><a href="">Ссылки</a></li>
							<li><a href="">Ссылки</a></li>
							<li><a href="">Ссылки</a></li>
						</ol>
					</div>
				</div>

				<div class="col-md-3">
					<div class="footer_text">
						<ol>
							<li><a href="">Ссылки</a></li>
							<li><a href="">Ссылки</a></li>
							<li><a href="">Ссылки</a></li>
							<li><a href="">Ссылки</a></li>
						</ol>
					</div>
				</div>
		        -->
            </div>

            <div class="footer">
                <div class="row">
                    <div class="col-md-3">
                        <a href="http://soyuzmash.ru" target="_blank" title="Открыть">
                            <div class="banner">
                                <p>Союз машиностроителей Россия</p>
                                <span>soyuzmash.ru</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a href="http://fskn.gov.ru" target="_blank" title="Открыть">
                            <div class="banner">
                                <p>ФСКН Росии</p>
                                <span>fskn.gov.ru</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a href="http://gak.gov.ru" target="_blank" title="Открыть">
                            <div class="banner">
                                <p>ГАК</p>
                                <span>gak.gov.ru</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a href="http://www.leading-education.ru" target="_blank" title="Открыть">
                            <div class="banner">
                                <p>Национальный Реестр</p>
                                <span>leading-education.ru</span>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="row" id="footer-tiger">
                    <div class="col-md-3">
                        <a href="http://www.knorusmedia.ru" target="_blank" title="Открыть">
                            <div class="banner">
                                <p>Электронно-библиотечная система</p>
                                <span>knorusmedia.ru</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a href="http://www.prlib.ru" target="_blank" title="Открыть">
                            <div class="banner">
                                <p>Президентская библиотека</p>
                                <span>prlib.ru</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a href="http://www.telefondoveria.ru/info/article/7" target="_blank" title="Открыть">
                            <div class="banner">
                                <p>Телефон доверия</p>
                                <span>telefondoveria.ru</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a href="http://o-spide.ru/test/where/" target="_blank" title="Открыть">
                            <div class="banner">
                                <p>Проверься на Вич.<br>Бесплатно Анонимно</p>
                                <span>o-spide.ru</span>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="row" id="footer-tiger">
                    <div class="col-md-3">
                        <a href="http://pfo.fskn.ru/novosti/edinyy-antinarkoticheskiy-nomer" target="_blank" title="Открыть">
                            <div class="banner">
                                <p>Единый телефон Антинаркотический номер</p>
                                <span>pfo.fskn.ru</span>
                            </div>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</footer>

<div class="back-glasses">    <span></span></div><div class="glasses">    <img src="/images/1.png" /></div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
</body>
</html>
