@extends('app')

@section('content')
    <!-- Модель окна -->

    <div>
        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel">Контактные данные</h4>
                    </div>
                    <div class="modal-body">
                        <div class="address_window">
                            <p><i class="fa fa-share" aria-hidden="true"></i> vgkunt@vlgmail.ru</p>
                            <p><i class="fa fa-phone-square" aria-hidden="true"></i> (8442) 70-72-02</p>
                            <p><i class="fa fa-location-arrow" aria-hidden="true"></i> 400125, г. Волгоград, ул. им. Грамши, 53.</p>
                            <?php
                            include $_SERVER['DOCUMENT_ROOT'].'/widget/map.php';
                            ?>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Меню -->



    <nav>

        <div class="container">

            <div class="bookmark">

                <h2><i class="fa fa-bars" aria-hidden="true"></i> Сведения об образовательной организации</h2>

            </div>



            <div class="row">

                <div class="col-md-4">

                    <ul class="menu">

                        <li><a href="index.php?id=menu/information">Основные сведения</a></li>

                        <li><a href="index.php?id=menu/bodies">Структура и органы управления ОО</a></li>

                        <li><a href="index.php?id=menu/document">Документы</a></li>

                        <li><a href="index.php?id=menu/education2">Образование</a></li>

                        <li><a href="index.php?id=menu/education">Образовательные стандарты</a></li>

                        <li><a href="index.php?id=menu/prepodavateli">Руководство. Педагогический состав</a></li>

                    </ul>

                </div>

                <div class="col-md-4">

                    <ul class="menu">

                        <li><a href="index.php?id=menu/technology">Материально-техническое обеспечение и оснащенность образовательного процесса</a></li>

                        <li><a href="index.php?id=menu/money">Стипендии и иные виды материальной поддержки</a></li>

                    </ul>

                </div>

                <div class="col-md-4">

                    <ul class="menu">

                        <li><a href="index.php?id=menu/pay">Платные образовательные услуги</a></li>

                        <li><a href="index.php?id=menu/services">Финансово-хозяйственная деятельность</a></li>

                        <li><a href="index.php?id=menu/places">Вакантные места для приема (перевода)</a></li>

                    </ul>

                </div>

            </div>

        </div>

    </nav>















    <!-- Новости -->



    <article>

        <div class="fon">

            <div class="container">

                <div class="bookmark">

                    <h2><i class="fa fa-newspaper-o" aria-hidden="true"></i> Новости</h2>

                </div>

                <div class="row">

                    <div class="col-md-4">



                        <a href="news/1">

                            <div class="new">

                                <h3>Демонстрация профсоюзов</h3>

                                <div class="new-fon">

                                    <center>

                                        <img src="images/news/1.jpg" width="270px" height="150px" />

                                    </center>

                                </div>

                            </div>

                        </a>



                    </div>

                    <div class="col-md-4">



                        <?php

                        include $_SERVER['DOCUMENT_ROOT'].'/content/news/main/2.php';

                        ?>



                    </div>

                    <div class="col-md-4">



                        <?php

                        include $_SERVER['DOCUMENT_ROOT'].'/content/news/main/3.php';

                        ?>



                    </div>



                    <div>

                        <p class="text-center"><a href="/news-all">Все новости</a></p>

                    </div>

                </div>

            </div>

        </div>

    </article>











    <!-- Приемная комиссия -->



    <article>

        <div class="container">

            <div class="bookmark">

                <h2><i class="fa fa-users" aria-hidden="true"></i> Приемная комиссия</h2>

            </div>



            <div class="row">

                <div class="col-md-4">

                    <div class="info">

                        <h3>Документы для поступления</h3>

                        <div>

                            <ol>

                                <li>Паспорт, 2 ксерокопии паспорта</li>

                                <li>Документ об образовании (подлинник и ксерокопия)</li>

                                <li>Фотографии для документов размером 3х4 см. в количестве 6 штук</li>

                                <li>Медицинская справка по форме 086-у (для очной формы обучения)</li>

                                <li>Выписка из трудовой книжки (для заочной формы обучения)</li>

                                <li>Заявление по прилагаемой форме <a href="documents/commission/1.pdf">.pdf</a> <a href="documents/commission/1.doc">.doc</a></li>

                            </ol>

                        </div>

                    </div>

                </div>

                <div class="col-md-4">

                    <div class="info">

                        <h3>Контактные данные</h3>

                        <div>

                            <p><i class="fa fa-phone-square" aria-hidden="true"></i> (8442) 70-65-00 - Приемная комиссия</p>

                            <p><i class="fa fa-phone-square" aria-hidden="true"></i> (8442) 52-53-91 - Приемная комиссия</p>

                            <p><i class="fa fa-phone-square" aria-hidden="true"></i> (8442) 52-58-64 - Cправка</p>

                            <p><i class="fa fa-location-arrow" aria-hidden="true"></i> <a href="mailto:prkom-vkuint@mail.ru">prkom-vkuint@mail.ru</a> - E-mail</p>

                        </div>

                    </div>

                </div>

                <div class="col-md-4">

                    <div class="info">

                        <h3>График приема</h3>

                        <div>

                            <p class="text-center">С <strong>26.05.2016</strong> Прием документов</p>

                            <p class="text-left" id="info-top">Понедельник - пятница: с <strong>08-00</strong> до <strong>16-30</strong><br>Суббота, воскресение: <strong>Выходные дни</strong></p>

                        </div>

                    </div>

                </div>



            </div>



            <div>

                <p class="text-center"><a href="/commission">Подробнее</a></p>

            </div>



        </div>

    </article>













    <!-- Слайд шоу -->



    <article>



        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

            <!-- Indicators -->

            <ol class="carousel-indicators">

                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>

                <li data-target="#carousel-example-generic" data-slide-to="1"></li>

                <li data-target="#carousel-example-generic" data-slide-to="2"></li>

                <li data-target="#carousel-example-generic" data-slide-to="3"></li>

                <li data-target="#carousel-example-generic" data-slide-to="4"></li>

                <li data-target="#carousel-example-generic" data-slide-to="5"></li>

                <li data-target="#carousel-example-generic" data-slide-to="6"></li>

            </ol>



            <!-- Wrapper for slides -->

            <div class="carousel-inner">

                <div class="item active">

                    <img src="images/slide/1.png" alt="Слайд 1">

                    <div class="carousel-caption">

                        <h2 class="text-center slide-text"><a href="index.php?id=slide/1">Обучение лиц с ограниченными возможностьями здоровья <i class="fa fa-arrow-circle-o-down" aria-hidden="true"></i></a></h2>

                    </div>

                </div>



                <div class="item">

                    <img src="images/slide/2.png" alt="Слайд 2">

                    <div class="carousel-caption">

                        <h2 class="text-center slide-text"><a href="index.php?id=slide/2">Многофункциональный центр прикладных квалификации <i class="fa fa-arrow-circle-o-down" aria-hidden="true"></i></a></h2>

                    </div>

                </div>



                <div class="item">

                    <img src="images/slide/3.png" alt="Слайд 3">

                    <div class="carousel-caption">

                        <h2 class="text-center slide-text"><a href="index.php?id=slide/3">Дополнительные услуги <i class="fa fa-arrow-circle-o-down" aria-hidden="true"></i></a></h2>

                    </div>

                </div>



                <div class="item">

                    <img src="images/slide/4.jpg" alt="Слайд 4">

                    <div class="carousel-caption">

                        <h2 class="text-center slide-text"><a href="index.php?id=slide/4">Дуальное образование <i class="fa fa-arrow-circle-o-down" aria-hidden="true"></i></a></h2>

                    </div>

                </div>



                <div class="item">

                    <img src="images/slide/5.jpg" alt="Слайд 5">

                    <div class="carousel-caption">

                        <h2 class="text-center slide-text"><a href="index.php?id=slide/5">Методическая работа <i class="fa fa-arrow-circle-o-down" aria-hidden="true"></i></a></h2>

                    </div>

                </div>



                <div class="item">

                    <img src="images/slide/6.jpg" alt="Слайд 6">

                    <div class="carousel-caption">

                        <h2 class="text-center slide-text"><a href="index.php?id=slide/6">Социальное партнерство <i class="fa fa-arrow-circle-o-down" aria-hidden="true"></i></a></h2>

                    </div>

                </div>



                <div class="item">

                    <img src="images/slide/7.jpg" alt="Слайд 7">

                    <div class="carousel-caption">

                        <h2 class="text-center slide-text"><a href="index.php?id=slide/7">Трудоустройство выпустников <i class="fa fa-arrow-circle-o-down" aria-hidden="true"></i></a></h2>

                    </div>

                </div>









            </div>



            <!-- Controls -->

            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">

                <span class="glyphicon glyphicon-chevron-left"></span>

            </a>

            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">

                <span class="glyphicon glyphicon-chevron-right"></span>

            </a>

        </div>



    </article>

















    <!-- Специальности -->



    <article>

        <div class="container">

            <div class="bookmark">

                <h2><i class="fa fa-bookmark" aria-hidden="true"></i> Специальности</h2>

            </div>



            <div class="row" id="specialty-top">

                <div class="col-md-4">

                    <a href="index.php?id=specialty/1">

                        <div class="specialty">

                            <div class="specialty_icon" id="icon_1">

                                <img src="images/icon/1.png" />

                            </div>

                            <div class="specialty_text">

                                <p class="text-right">Правоохранительная деятельность</p>

                            </div>

                        </div>

                    </a>

                </div>



                <div class="col-md-4">

                    <a href="index.php?id=specialty/2">

                        <div class="specialty">

                            <div class="specialty_icon" id="icon_2">

                                <img src="images/icon/2.png" />

                            </div>

                            <div class="specialty_text">

                                <p class="text-right">Банковское дело</p>

                            </div>

                        </div>

                    </a>

                </div>



                <div class="col-md-4">

                    <a href="index.php?id=specialty/3">

                        <div class="specialty">

                            <div class="specialty_icon" id="icon_3">

                                <img src="images/icon/3.png" />

                            </div>

                            <div class="specialty_text">

                                <p class="text-right">Экономика и бухгалтерский учет</p>

                            </div>

                        </div>

                    </a>

                </div>

            </div>





            <div class="row">

                <div class="col-md-4">

                    <a href="index.php?id=specialty/4">

                        <div class="specialty">

                            <div class="specialty_icon" id="icon_4">

                                <img src="images/icon/4.png" />

                            </div>

                            <div class="specialty_text">

                                <p class="text-right">Гостиничный сервис</p>

                            </div>

                        </div>

                    </a>

                </div>



                <div class="col-md-4">

                    <a href="index.php?id=specialty/5">

                        <div class="specialty">

                            <div class="specialty_icon" id="icon_5">

                                <img src="images/icon/5.png" />

                            </div>

                            <div class="specialty_text">

                                <p class="text-right">Технология машиностроения</p>

                            </div>

                        </div>

                    </a>

                </div>



                <div class="col-md-4">

                    <a href="index.php?id=specialty/6">

                        <div class="specialty">

                            <div class="specialty_icon" id="icon_6">

                                <img src="images/icon/6.png" />

                            </div>

                            <div class="specialty_text">

                                <p class="text-right">Право и организация социального обеспечения</p>

                            </div>

                        </div>

                    </a>

                </div>

            </div>



            <div class="row">

                <div class="col-md-4">

                    <a href="index.php?id=specialty/7">

                        <div class="specialty">

                            <div class="specialty_icon" id="icon_7">

                                <img src="images/icon/7.png" />

                            </div>

                            <div class="specialty_text">

                                <p class="text-right">Автомобиле и тракторостроение</p>

                            </div>

                        </div>

                    </a>

                </div>



                <div class="col-md-4">

                    <a href="index.php?id=specialty/8">

                        <div class="specialty">

                            <div class="specialty_icon" id="icon_8">

                                <img src="images/icon/8.png" />

                            </div>

                            <div class="specialty_text">

                                <p class="text-right">Техническое обслуживание и ремонт автомобильного транспорта</p>

                            </div>

                        </div>

                    </a>

                </div>



                <div class="col-md-4">

                    <a href="index.php?id=specialty/9">

                        <div class="specialty">

                            <div class="specialty_icon" id="icon_9">

                                <img src="images/icon/9.png" />

                            </div>

                            <div class="specialty_text">

                                <p class="text-right">Программирование в компьютерных системах</p>

                            </div>

                        </div>

                    </a>

                </div>

            </div>



            <div class="row">

                <div class="col-md-4">

                    <a href="index.php?id=specialty/10">

                        <div class="specialty">

                            <div class="specialty_icon" id="icon_10">

                                <img src="images/icon/10.png" />

                            </div>

                            <div class="specialty_text">

                                <p class="text-right">Радиоаппаратостроение</p>

                            </div>

                        </div>

                    </a>

                </div>

            </div>







        </div>

    </article>




    <!-- Профессии -->



    <article>

        <div class="container">

            <div class="bookmark">

                <h2><i class="fa fa-bookmark" aria-hidden="true"></i> Профессии</h2>

            </div>



            <div class="row" id="specialty-top">

                <div class="col-md-4">

                    <a href="index.php?id=specialty/1">

                        <div class="specialty">

                            <div class="specialty_icon" id="icon_1">

                                <img src="images/icon/1.png" />

                            </div>

                            <div class="specialty_text">

                                <p class="text-right">Правоохранительная деятельность</p>

                            </div>

                        </div>

                    </a>

                </div>



                <div class="col-md-4">

                    <a href="index.php?id=specialty/2">

                        <div class="specialty">

                            <div class="specialty_icon" id="icon_2">

                                <img src="images/icon/2.png" />

                            </div>

                            <div class="specialty_text">

                                <p class="text-right">Банковское дело</p>

                            </div>

                        </div>

                    </a>

                </div>



                <div class="col-md-4">

                    <a href="index.php?id=specialty/3">

                        <div class="specialty">

                            <div class="specialty_icon" id="icon_3">

                                <img src="images/icon/3.png" />

                            </div>

                            <div class="specialty_text">

                                <p class="text-right">Экономика и бухгалтерский учет</p>

                            </div>

                        </div>

                    </a>

                </div>

            </div>





            <div class="row">

                <div class="col-md-4">

                    <a href="index.php?id=specialty/4">

                        <div class="specialty">

                            <div class="specialty_icon" id="icon_4">

                                <img src="images/icon/4.png" />

                            </div>

                            <div class="specialty_text">

                                <p class="text-right">Гостиничный сервис</p>

                            </div>

                        </div>

                    </a>

                </div>



                <div class="col-md-4">

                    <a href="index.php?id=specialty/5">

                        <div class="specialty">

                            <div class="specialty_icon" id="icon_5">

                                <img src="images/icon/5.png" />

                            </div>

                            <div class="specialty_text">

                                <p class="text-right">Технология машиностроения</p>

                            </div>

                        </div>

                    </a>

                </div>



                <div class="col-md-4">

                    <a href="index.php?id=specialty/6">

                        <div class="specialty">

                            <div class="specialty_icon" id="icon_6">

                                <img src="images/icon/6.png" />

                            </div>

                            <div class="specialty_text">

                                <p class="text-right">Право и организация социального обеспечения</p>

                            </div>

                        </div>

                    </a>

                </div>

            </div>



            <div class="row">

                <div class="col-md-4">

                    <a href="index.php?id=specialty/7">

                        <div class="specialty">

                            <div class="specialty_icon" id="icon_7">

                                <img src="images/icon/7.png" />

                            </div>

                            <div class="specialty_text">

                                <p class="text-right">Автомобиле и тракторостроение</p>

                            </div>

                        </div>

                    </a>

                </div>



                <div class="col-md-4">

                    <a href="index.php?id=specialty/8">

                        <div class="specialty">

                            <div class="specialty_icon" id="icon_8">

                                <img src="images/icon/8.png" />

                            </div>

                            <div class="specialty_text">

                                <p class="text-right">Техническое обслуживание и ремонт автомобильного транспорта</p>

                            </div>

                        </div>

                    </a>

                </div>



                <div class="col-md-4">

                    <a href="index.php?id=specialty/9">

                        <div class="specialty">

                            <div class="specialty_icon" id="icon_9">

                                <img src="images/icon/9.png" />

                            </div>

                            <div class="specialty_text">

                                <p class="text-right">Программирование в компьютерных системах</p>

                            </div>

                        </div>

                    </a>

                </div>

            </div>



            <div class="row">

                <div class="col-md-4">

                    <a href="index.php?id=specialty/10">

                        <div class="specialty">

                            <div class="specialty_icon" id="icon_10">

                                <img src="images/icon/10.png" />

                            </div>

                            <div class="specialty_text">

                                <p class="text-right">Радиоаппаратостроение</p>

                            </div>

                        </div>

                    </a>

                </div>

            </div>







        </div>

    </article>










    <!-- Воспитательная деятельность -->



    <article>

        <div class="container">

            <div class="bookmark">

                <h2><i class="fa fa-user" aria-hidden="true"></i> Воспитательная деятельность</h2>

            </div>

            <div class="row">

                <div class="col-md-4">

                    <ul class="menu">

                        <li><a href="index.php?id=educational/plan">План работы</a></li>

                        <li><a href="index.php?id=educational/schedule">Расписание кружков и секций</a></li>

                        <li><a href="index.php?id=educational/enterprises">Студенческие объединения</a></li>

                    </ul>

                </div>

                <div class="col-md-4">

                    <ul class="menu">

                        <li><a href="index.php?id=educational/psychological">Психологическая служба</a></li>

                        <li><a href="index.php?id=educational/social">Социальная работа</a></li>

                        <li><a href="index.php?id=educational/newspaper">Студ.газета "Антарес"</a></li>

                    </ul>

                </div>

                <div class="col-md-4">

                    <ul class="menu">

                        <li><a href="index.php?id=educational/prevention">Профилактика асоциального поведения</a></li>

                        <li><a href="index.php?id=educational/achievements">Наши достижения</a></li>

                        <li><a href="index.php?id=educational/hostel">Общежитие</a></li>

                    </ul>

                </div>

            </div>

        </div>

    </article>
@stop
