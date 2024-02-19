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
                <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample06" aria-controls="navbarsExample06" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon span_toggler_nav"></span>
                </button> -->
                <a class="dnone2 nav-link nav_h1" href="/">
                    <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M4.646 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L6.707 8l1.647 1.646a.5.5 0 1 1-.708.708l-3-3a.5.5 0 0 1 0-.708z"/>
                    </svg> 
                </a>
                <div>
                    <a href="/">
                        <img class=" dnone2 logo_img logo_img2" src="{{ asset('image/logo.png') }}" alt="">
                    </a>
                </div>
            </div>
            <div class="collapse navbar-collapse" id="navbarsExample06">

                <ul class="navbar-nav  mb-2 mb-xl-0">
                    <li class="nav-item">
                        <a class=" nav-link nav_h1" href="/">
                            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M4.646 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L6.707 8l1.647 1.646a.5.5 0 1 1-.708.708l-3-3a.5.5 0 0 1 0-.708z"/>
                            </svg> 
                            вернуться
                        </a>
                    </li>
                </ul>
                
                <div class="dnone" style="margin: 0 auto;">
                    <a href="/">
                        <img  class="logo_img" src="{{ asset('image/logo.png') }}" alt="">
                    </a>
                </div>




                
            </div>
        </div>
    </nav>







    <div style="margin-top:145px;">
        <h1 class="h1_2" id="3">галерея<p class="line"></p></h1>

        <div class="row dnone drow">
            @foreach ($products as $product)
                <div class="col-md-6">
                    <div class="d-flex">
                        <img class="img_gal" src="{{ asset('images/' . $product->image) }}" alt="" style="width: 100%; margin:10px; height:500px; border-bottom:2px solid black; padding-bottom:5px">
                    </div>
                </div>
            @endforeach
        </div>


        <div class="container dnone2">
            @foreach ($products as $product)
            <div class="col">
                <div class="d-flex">
                    <img class="img_gal" src="{{ asset('images/' . $product->image) }}" alt="" style="width: 80%; margin:10px auto; height:500px; border-bottom:2px solid black; padding-bottom:5px">
                </div>
            </div>
            @endforeach
       <!-- <div class="col">
                <div class="img_gal d-flex">
                    <img class="img_gal" src="{{asset ('image/6.png')}}" alt="" style="width: 80%; margin:10px auto; height:500px; border-bottom:2px solid black; padding-bottom:5px">
                </div>
            </div> -->
        </div>
    </div>
    

    <h1 class="h1_2" id="3">контакты<p class="line"></p></h1>
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