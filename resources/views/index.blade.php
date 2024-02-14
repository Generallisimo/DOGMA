<!doctype html>

<html lang="ru">

<head>
    <!-- Обязательные метатеги -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('css/dogma.css') }}">

    <title>DOGMA</title>

    <!-- Подключение Bootstrap и jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

</head>

<body>

    <!-- Модальное окно для поиска -->
    <div class="modal fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <!-- Форма поиска -->
                    <form class="d-flex">
                        <input type="text" class="form-control" placeholder="Введите ваш запрос...">
                        <button type="submit" class="btn btn-primary">Найти</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Ваша шапка с навигацией -->
    <nav class="navbar navbar-expand-xl navbar-dark bg-dark nav_dogma fixed-top" >
        <div class="cont_nav">
            <div class="d-flex">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample06" aria-controls="navbarsExample06" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon span_toggler_nav"></span>
                </button>
                <div>
                    <img class=" dnone2 logo_img logo_img2" src="{{ asset('image/logo.png') }}" alt="">
                </div>
            </div>
            <div class="collapse navbar-collapse" id="navbarsExample06">
                <ul class="navbar-nav  mb-2 mb-xl-0">
                    <li class="nav-item">
                        <a class="nav-link nav_h1" href="#1">о студии</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav_h1" href="#2">этапы</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav_h1" href="#3">портфолио</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav_h1" href="#4">процесс</a>
                    </li>
                </ul>

                <div class="dnone">
                    <img class="logo_img" src="{{ asset('image/logo.png') }}" alt="">
                </div>

                <ul class="navbar-nav  mb-2 mb-xl-0">
                    <li class="nav-item">
                        <a class="nav-link nav_h1" href="#5">команда</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav_h1" href="#6">контакты</a>
                    </li>
                    <li>
                        <!-- Иконка для открытия модального окна -->
                        <img class="search" src="{{asset ('image/search.png')}}" alt="" data-toggle="modal" data-target="#searchModal">
                    </li>
                </ul>


                
            </div>
        </div>
    </nav>







    <!-- block 1 -->
    <div class="d-flex div_1" >
        <div class="div_bl1 dnone">
            <h1 id="1" class="h1_1 mt-5">Design <br> interiors</h1>
            <p class="p_1">Создание функционального, стильного интерьера для жилых и общественных помещений,<b> от идеи до воплощения.</b></p>
        </div>
        <div class="div_bl12 dnone2">
            <h1 id="1" class="h1_1 mt-5">Design <br> interiors</h1>
            <p class="p_1">Создание функционального, стильного интерьера для жилых и общественных помещений,<b> от идеи до воплощения.</b></p>
        </div>
        <div class="div_bl1_2">
            <p class="line_div"></p>
        </div>
        <div class="carousel-item active div_bl1_img">
            <img src="{{asset('image/one.png')}}" class="d-block w-100 img_bl1" alt="...">
        </div>
    </div>


    <!-- block 2 -->

    <div class="block02">

        <h1 class="h1_2 mt-5" id="2">наши<br> преимущества<p class="line"></p>
        </h1>
        <div class="d-flex">
            <div class="div_img_bl2_p">
                <img class="img_bl2" src="{{asset ('image/two.png')}}" alt="">
                <p class="line_div_bl2"></p>
            </div>

            <div class="dnone">

                <div class="div_bl2 mt-5">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <p class="numb_h2">01</p>
                                <p class="desc_bl2">Опыт работы от проектирования до строительства коттеджей. Как в стране, так и за рубежом. Включая индивидуальную разработку дизайна и элементов декора.</p>
                                <p class="line"></p>
                            </div>
                            <div class="col">
                                <p class="numb_h2">04</p>
                                <p class="desc_bl2">Опыт работы от проектирования до строительства коттеджей. Как в стране, так и за рубежом. Включая индивидуальную разработку дизайна и элементов декора.</p>
                                <p class="line"></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="div_bl2">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <p class="numb_h2">02</p>
                                <p class="desc_bl2">Опыт работы от проектирования до строительства коттеджей. Как в стране, так и за рубежом. Включая индивидуальную разработку дизайна и элементов декора.</p>
                                <p class="line"></p>
                            </div>
                            <div class="col">
                                <p class="numb_h2">05</p>
                                <p class="desc_bl2">Опыт работы от проектирования до строительства коттеджей. Как в стране, так и за рубежом. Включая индивидуальную разработку дизайна и элементов декора.</p>
                                <p class="line"></p>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="div_bl2">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <p class="numb_h2">03</p>
                                <p class="desc_bl2">Опыт работы от проектирования до строительства коттеджей. Как в стране, так и за рубежом. Включая индивидуальную разработку дизайна и элементов декора.</p>
                            </div>
                            <div class="col">
                                <p class="numb_h2">06</p>
                                <p class="desc_bl2">Опыт работы от проектирования до строительства коттеджей. Как в стране, так и за рубежом. Включая индивидуальную разработку дизайна и элементов декора.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            
            
            <div class="dnone2">

                <div class="div_bl2 mt-5">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <p class="numb_h2">01</p>
                                <p class="desc_bl2">Опыт работы от проектирования до строительства коттеджей. Как в стране, так и за рубежом. Включая индивидуальную разработку дизайна и элементов декора.</p>
                                <p class="line"></p>
                            </div>
                            <div class="col">
                                <p class="numb_h2">02</p>
                                <p class="desc_bl2">Опыт работы от проектирования до строительства коттеджей. Как в стране, так и за рубежом. Включая индивидуальную разработку дизайна и элементов декора.</p>
                                <p class="line"></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="div_bl2">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <p class="numb_h2">03</p>
                                <p class="desc_bl2">Опыт работы от проектирования до строительства коттеджей. Как в стране, так и за рубежом. Включая индивидуальную разработку дизайна и элементов декора.</p>
                                <p class="line"></p>
                            </div>
                            <div class="col">
                                <p class="numb_h2">04</p>
                                <p class="desc_bl2">Опыт работы от проектирования до строительства коттеджей. Как в стране, так и за рубежом. Включая индивидуальную разработку дизайна и элементов декора.</p>
                                <p class="line"></p>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="div_bl2">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <p class="numb_h2">05</p>
                                <p class="desc_bl2">Опыт работы от проектирования до строительства коттеджей. Как в стране, так и за рубежом. Включая индивидуальную разработку дизайна и элементов декора.</p>
                            </div>
                            <div class="col">
                                <p class="numb_h2">06</p>
                                <p class="desc_bl2">Опыт работы от проектирования до строительства коттеджей. Как в стране, так и за рубежом. Включая индивидуальную разработку дизайна и элементов декора.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- block 3 -->

    <h1 class="h1_2" id="3">портфолио<p class="line"></p>
    </h1>


    <!-- Карусель с изображениями -->
    <div id="carouselExampleControls" class="carousel slide dnone" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="d-flex div_bl3_cor">
                    <div class="div_img_bl3">
                        <a href="/collage">
                            <img class="d-block img_bl3" src="{{asset ('image/three1.png')}}" alt="Первое изображение">
                        </a>
                    </div>
                    <div class="div_img_bl3">
                        <a href="/collage">
                            <img class="d-block img_bl3" src="{{asset ('image/three2.png')}}" alt="Второе изображение">
                            <p class="p_bl3_1">Остоженка</p>
                            <p class="p_bl3_2">Смотреть</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="carousel-item ">
                <div class="d-flex div_bl3_cor">
                    <div class="div_img_bl3">
                        <a href="/collage">
                            <img class="d-block img_bl3" src="{{asset ('image/three1.png')}}" alt="Первое изображение">
                        </a>
                    </div>
                    <div class="div_img_bl3">
                        <a href="/collage">
                            <img class="d-block img_bl3" src="{{asset ('image/three2.png')}}" alt="Второе изображение">
                            <p class="p_bl3_1">Остоженка</p>
                            <p class="p_bl3_2">Смотреть</p>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Добавьте другие элементы слайдов здесь, если это необходимо -->
        </div>
        <!-- Стрелки для перемотки слайдов -->
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only" style="color: black;"></span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only" style="color: black;"></span>
        </a>
    </div>






    <!-- Карусель с изображениями -->
    <div id="carouselExampleControls4" class="carousel slide dnone2" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <a href="/collage">
                    <div class="div_img_bl3">
                        <img class="d-block img_bl3" src="{{asset ('image/three1.png')}}" alt="Первое изображение">
                    </div>
                </a>
            </div>
            <div class="carousel-item">
                <a href="/collage">
                    <div class="div_img_bl3">
                        <img class="d-block img_bl3" src="{{asset ('image/three2.png')}}" alt="Второе изображение">
                        <p class="p_bl3_1">Остоженка</p>
                        <p class="p_bl3_2">Смотреть</p>
                    </div>
                </a>
            </div>
            <!-- Добавьте другие элементы слайдов здесь, если это необходимо -->
        </div>
        <!-- Стрелки для перемотки слайдов -->
        <a class="carousel-control-prev" href="#carouselExampleControls4" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only" style="color: black;"></span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls4" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only" style="color: black;"></span>
        </a>
    </div>





    <!-- block 4 -->

    <h1 class="h1_4">предварительный
        просчёт вашего объекта
        <p class="line_bl4"></p>
    </h1>
    <h1 class="h1_4_2">Напишите нам сообщение
        и мы ответим на Ваши вопросы</h1>
    <div>

    </div>
    <!-- Кнопка для открытия модального окна -->
    <button type="button" class="h1_bl4 mt-4" data-toggle="modal" data-target="#exampleModal">
        <h1 class="h1_4_3">Связаться с нами</h1>
    </button>

    <!-- Модальное окно -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">РАСЧЕТ СТОИМОСТИ ПРОЕКТА</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Здесь можете разместить форму обратной связи или другой контент -->
                    <!-- <p>Мы рады вашему обращению! Заполните форму ниже и мы свяжемся с вами в ближайшее время.</p> -->
                    <!-- Пример формы обратной связи -->
                    <form>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Как Вас зовут?</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">В каком городе находится объект?</label>
                            <input type="email" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Какая площадь объекта?</label>
                            <input class="form-control" id="exampleFormControlTextarea1" rows="3">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Тип объекта?</label>
                            <input class="form-control" id="exampleFormControlTextarea1" rows="3">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">В каком районе находится объект?</label>
                            <input class="form-control" id="exampleFormControlTextarea1" rows="3">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Ваш номер телефона?</label>
                            <input class="form-control" id="exampleFormControlTextarea1" rows="3">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Как с вами связаться?</label>
                            <input class="form-control" id="exampleFormControlTextarea1" rows="3">
                        </div>
                        <button type="submit" class="btn btn-primary btn_send">Отправить</button>
                    </form>
                </div>
                <!-- Можно добавить опциональный футер модального окна -->
            </div>
        </div>
    </div>


    <!-- block 5 -->
    <div class="backg dnone">
        <div class="fon_ton_2">
            
            <h1 class="h1_2" id="4">процесс работы<p class="line"></p>
            </h1>
            <!-- Карусель -->
            <div id="carouselExampleControls2" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <!-- Первый слайд -->
                    <div class="carousel-item active">
                        <div class="d-flex">
                            <div>
                                <img class="img_5" src="{{asset ('image/five.png')}}" alt="">
                            </div>
                            <div class="div_text_bl5 ">
                                <div class="text_bl5">
                                    <h1>визуализация интерьера 1</h1>
                                    <p class="line_intr"></p>
                                    <p>– разрабатываем 3D модель на основании утвержденной планировки.</p>
                                    <p>– сверяем визуализации с рабочими чертежами.</p>
                                    <p>– выдаем фотореалистичные изображения будущего интерьера для основных помещений.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Второй слайд -->
                    <div class="carousel-item">
                        <div class="d-flex">
                            <div>
                                <img class="img_5" src="{{asset ('image/five.png')}}" alt="">
                            </div>
                            <div class="div_text_bl5">
                                <div class="text_bl5">
                                    <h1>визуализация интерьера 2</h1>
                                    <p class="line_intr"></p>
                                    <p>– разрабатываем 3D модель на основании утвержденной планировки.</p>
                                    <p>– сверяем визуализации с рабочими чертежами.</p>
                                    <p>– выдаем фотореалистичные изображения будущего интерьера для основных помещений.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Точки навигации -->
                <ol class="carousel-indicators ">
                    <li data-target="#carouselExampleControls2" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleControls2" data-slide-to="1"></li>
                </ol>
                <!-- Стрелки для перемотки слайдов -->
                <div class="div_cont">
                    <a class="carousel-control-prev bl5_con" href="#carouselExampleControls2" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon sr-only" aria-hidden="true"></span>
                    </a>
                    <a class="carousel-control-next bl5_con" href="#carouselExampleControls2" role="button" data-slide="next">
                        <span class="carousel-control-next-icon sr-only" aria-hidden="true"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    
    
    
    
    <div class="backg_2 dnone2">
        <div class="fon_ton_2">
            
            <h1 class="h1_2" id="4">процесс работы<p class="line"></p>
            </h1>
            <!-- Карусель -->
            <div id="carouselExampleControls3" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <!-- Первый слайд -->
                    <div class="carousel-item active">
                        <div class="d-block">
                            <div class="img_bl5_div">
                                <img class="img_5_2" src="{{asset ('image/five.png')}}" alt="">
                            </div>
                            <div class="div_text_bl5_2 mt-5">
                                <div class="text_bl5_2">
                                    <h1>визуализация интерьера 1</h1>
                                    <p class="line_intr_2"></p>
                                    <p>– разрабатываем 3D модель на основании утвержденной планировки.</p>
                                    <p>– сверяем визуализации с рабочими чертежами.</p>
                                    <p>– выдаем фотореалистичные изображения будущего интерьера для основных помещений.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <div class="d-block">
                            <div class="img_bl5_div" >
                                <img class="img_5_2" src="{{asset ('image/five.png')}}" alt="" >
                            </div>
                            <div class="div_text_bl5_2 mt-5" >
                                <div class="text_bl5_2">
                                    <h1>визуализация интерьера 2</h1>
                                    <p class="line_intr_2"></p>
                                    <p>– разрабатываем 3D модель на основании утвержденной планировки.</p>
                                    <p>– сверяем визуализации с рабочими чертежами.</p>
                                    <p>– выдаем фотореалистичные изображения будущего интерьера для основных помещений.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Второй слайд -->
                </div>
                <div>
    
                    <!-- Точки навигации -->
                    <ol class="carousel-indicators ">
                        <li data-target="#carouselExampleControls3" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleControls3" data-slide-to="1"></li>
                    </ol>
                    <!-- Стрелки для перемотки слайдов -->
                    <!-- <div class="div_cont">
                        <a class="carousel-control-prev bl5_con" href="#carouselExampleControls3" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon sr-only" aria-hidden="true"></span>
                        </a>
                        <a class="carousel-control-next bl5_con" href="#carouselExampleControls3" role="button" data-slide="next">
                            <span class="carousel-control-next-icon sr-only" aria-hidden="true"></span>
                        </a>
                    </div> -->
                </div>
            </div>
        </div>
    </div>

    <!-- block 6 -->

    <h1 class="h1_2" id="5">наша команда<p class="line"></p></h1>
    
    
    <div class="div_bl6 dnone">
        <div class="row">
            <div class="col div_col_prof">
                <div class="img_bl6">
                    <img class="img_col_2" src="{{asset ('image/prof1.png')}}" alt="">
                    <p class="line_img_bl6"></p>
                </div>
                <h1 class="mt-3">Елена Солдатова</h1>
                <p>Генеральный директор</p>
            </div>
            <div class="col div_col_prof">
                <div class="img_bl6">
                    <img class="img_col_2" src="{{asset ('image/four.png')}}" alt="">
                    <p class="line_img_bl6"></p>
                </div>
                <h1 class="mt-3">Инга Моисеева</h1>
                <p>Руководитель студии</p>
            </div>
            <div class="col div_col_prof">
                <div class="img_bl6">
                    <img class="img_col_2" src="{{asset ('image/prof2.png')}}" alt="">
                    <p class="line_img_bl6"></p>
                </div>
                <h1 class="mt-3">Андрей Баранов</h1>
                <p>Технический директор</p>
            </div>
            <div class="col div_col_prof">
                <div class="img_bl6">
                    <img class="img_col_2" src="{{asset ('image/prof3.png')}}" alt="">
                    <p class="line_img_bl6"></p>
                </div>
                <h1 class="mt-3">Камилла Саакян</h1>
                <p>Дизайнер-декоратор</p>
            </div>
            <div class="col div_col_prof">
                <div class="img_bl6">
                    <img class="img_col_2" src="{{asset ('image/prof4.png')}}" alt="">
                    <p class="line_img_bl6"></p>
                </div>
                <h1>Марианна Мискуева</h1>
                <p>Главный офис-менеджер</p>
            </div>
        </div>
    </div>


    <div id="carouselExampleControls5" class="carousel slide dnone2" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="col div_col_prof">
                    <div class="img_bl6">
                        <img class="img_col_2" src="{{asset ('image/prof1.png')}}" alt="">
                        <p class="line_img_bl6"></p>
                    </div>
                    <h1 class="mt-3">Елена Солдатова</h1>
                    <p>Генеральный директор</p>
                </div>
            </div>
            <div class="carousel-item ">
                <div class="col div_col_prof">
                    <div class="img_bl6">
                        <img class="img_col_2" src="{{asset ('image/four.png')}}" alt="">
                        <p class="line_img_bl6"></p>
                    </div>
                    <h1 class="mt-3">Инга Моисеева</h1>
                    <p>Руководитель студии</p>
                </div>
            </div>
            <div class="carousel-item ">
                <div class="col div_col_prof">
                    <div class="img_bl6">
                        <img class="img_col_2" src="{{asset ('image/prof2.png')}}" alt="">
                        <p class="line_img_bl6"></p>
                    </div>
                    <h1 class="mt-3">Андрей Баранов</h1>
                    <p>Технический директор</p>
                </div>
            </div>
            <div class="carousel-item ">
                <div class="col div_col_prof">
                    <div class="img_bl6">
                        <img class="img_col_2" src="{{asset ('image/prof3.png')}}" alt="">
                        <p class="line_img_bl6"></p>
                    </div>
                    <h1 class="mt-3">Камилла Саакян</h1>
                    <p>Дизайнер-декоратор</p>
                </div>
            </div>
            <div class="carousel-item ">
                <div class="col div_col_prof">
                    <div class="img_bl6">
                        <img class="img_col_2" src="{{asset ('image/prof4.png')}}" alt="">
                        <p class="line_img_bl6"></p>
                    </div>
                    <h1>Марианна Мискуева</h1>
                    <p>Главный офис-менеджер</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls5" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only" style="color: black;"></span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls5" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only" style="color: black;"></span>
        </a>
    </div>
    

    <!-- block 7 -->
    

    <h1 class="h1_2" id="6">контакты<p class="line"></p>
    </h1>
    <div class="backg backg2 ">
        <div class="fon_ton">
            <div class="d-flex backg2block">
                <div class="img_cen">
                    <img class="img_bl7" src="{{asset ('image/us.png')}}" alt="">
                </div>
                <div class="div_bl7">
                    <h1 class="h1_7">Пишите в личные сообщения, звоните
                        и мы ответим на Ваши вопросы.</br>
                        С удовольствием возьмёмся за разработку</br>
                        <b>Вашего индивидуального интерьера!</b>
                        <p class="line_bl7"></p>
                    </h1>

                    <div class="container div_fot_h1 dnone">
                        <div class="row">
                            <div class="col d-flex">
                                <img class="img_bl7_fot" src="{{asset ('image/home.png')}}" alt="">
                                <p>Москва, Шаболовка 19</p>
                            </div>
                            <div class="col d-flex">
                                <img class="img_bl7_fot" src="{{asset ('image/tg.png')}}" alt="">
                                <p>telegram</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col d-flex">
                                <img class="img_bl7_fot" src="{{asset ('image/call.png')}}" alt="">
                                <p>+7 958 578-17-25</p>
                            </div>
                            <div class="col d-flex">
                                <img class="img_bl7_fot" src="{{asset ('image/vk.png')}}" alt="">
                                <p>vkontakte</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col d-flex">
                                <img class="img_bl7_fot" src="{{asset ('image/mail.png')}}" alt="">
                                <p>dogmainterior@mail.ru</p>
                            </div>
                        </div>
                    </div>


                    <div class="container div_fot_h1 dnone2">
                        
                            <div class="col d-flex">
                                <img class="img_bl7_fot" src="{{asset ('image/home.png')}}" alt="">
                                <p>Москва, Шаболовка 19</p>
                            </div>
                            <div class="col d-flex">
                                <img class="img_bl7_fot" src="{{asset ('image/tg.png')}}" alt="">
                                <p>telegram</p>
                            </div>


                            <div class="col d-flex">
                                <img class="img_bl7_fot" src="{{asset ('image/call.png')}}" alt="">
                                <p>+7 958 578-17-25</p>
                            </div>
                            <div class="col d-flex">
                                <img class="img_bl7_fot" src="{{asset ('image/vk.png')}}" alt="">
                                <p>vkontakte</p>
                            </div>


                            <div class="col d-flex">
                                <img class="img_bl7_fot" src="{{asset ('image/mail.png')}}" alt="">
                                <p>dogmainterior@mail.ru</p>
                            </div>

                    </div>



                </div>
            </div>
            <div class="line_footer"></div>
            <div class="foot d-flex">
                <div>
                    <p class="f1">© 2023 Dogma design</p>
                </div>
                <div>
                    <img class="fot_img" src="{{asset ('image/wp.png')}}" alt="">
                    <img class="fot_img" src="{{asset ('image/inst.png')}}" alt="">
                    <img class="fot_img" src="{{asset ('image/telegram.png')}}" alt="">
                    <img class="fot_img" src="{{asset ('image/fb.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>

    <!-- Необязательный JavaScript; выберите один из двух! -->

    <!-- Вариант 1: пакет Bootstrap с Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</body>

</html>