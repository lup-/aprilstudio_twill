<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="p:domain_verify" content="6cc217c99f01ffe595cadc0c77cd4e97"/>
        <title>Just Imagine!</title>

        <meta property="og:title" content="Union⁴" />
        <meta property="og:url" content="//www.union4.ru/" />
        <meta property="og:image" content="https://union4.ru/images/unionlogo_square.png" />
        <meta property="og:description" content="Разработка дизайна сайтов и мобильных приложений">

        <link rel="stylesheet" href="/css/frontend.css">
        <link rel="stylesheet" href="/css/bootstrap-modal.css">
        <link rel="stylesheet" href="/css/union.css">
        <link rel="stylesheet" href="/css/buttons.css">
        <link rel="stylesheet" href="/css/welcome_media.css">
    </head>
    

    <body class="welcomePage">

        
<!-- main welcome page -->
    <header>
        <div class="logo">
            <img src="/images/logoJIm_white.svg" alt="Just Imagine!">
        </div>

<div class="nav-mobile nav-mobile_color_blue nav-mobile_right visible-xs_flex" data-toggle="modal" data-target="#menuModal">
        <span></span>
</div>

<!--
        <div class="menublock rotate">
            <nav>
                <a href="/ru/areas/all/">Работы</a>
                <a href="/about.html">О нас</a>
                <a href="/contacts.html">Контакты</a>
            </nav>
        </div>
-->
    </header>

<main class="welcomePage">

<section class="leadWelcomeBlock">
    <div class="photo__presentation"></div>
        <div class="photo__content">
            <div class="photo__container">
            <div class="row">
                <div class="col">
                <header class="photo__heading ForDesktop">
                    <h1>Создаем дизайн сайтов<br>и&nbsp;мобильных приложений,<br>проектируем интерфейсы,<br>разрабатываем&nbsp;логотипы.</h1>
                    <p><span>Миллионы людей пользуются результатами нашей работы каждый месяц.</span></p>
                </header>
                <header class="photo__heading ForTablet">
                    <h1>Создаем дизайн сайтов<br>и&nbsp;мобильных приложений,<br>проектируем интерфейсы,<br>разрабатываем&nbsp;логотипы. </h1>
                    <p class="citycontacts"><span>Москва</span>&nbsp;&nbsp;&bull;&nbsp;&nbsp;<span class="phone">+7&nbsp;(495)&nbsp;51-484-51&nbsp;&nbsp;&bull;&nbsp;&nbsp;<!--noindex--><span class="email">work@aprilstudio.ru</span><!--/noindex--></p>
                </header>
                <header class="photo__heading ForMobile">
                    <h1>Создаем дизайн сайтов<br>и&nbsp;мобильных приложений,<br>проектируем интерфейсы.</h1>
                    <p class="citycontacts"><span>Москва</span>&nbsp;&nbsp;&bull;&nbsp;&nbsp;<!--noindex--><span class="email">work@aprilstudio.ru</span><!--/noindex--></p>
                </header>
                </div>
            </div>
            </div>
        </div>
        </div>
</section>

<section class="projects">
    @foreach ($favouriteWorks as $work)
        @include('site.favourite_work_at_home', ['work' => $work, 'loop' => $loop])
    @endforeach

    @foreach ($otherWorks as $work)
        @include('site.other_work_at_home', ['work' => $work, 'loop' => $loop])
    @endforeach
</section>

</main>


<footer>
    <!-- div rotate footer right menu --
    <div class="footer_deg90">
            <nav class="lang">
                <a href="#" class="active">Rus</a>
                <a href="#">Eng</a>
            </nav>
            <nav>
                <a href="https://www.facebook.com/union4.design/">Facebook</a>
                <a href="https://www.youtube.com/channel/UCudsl0Brc-5e6GG4Vf9LroQ">YouTube</a>
            </nav>
        </div>
    -- \ div rotate footer right menu --

    <div class="clear"></div> -->

</footer>

<div tabindex="-1" id="menuModal" class="modal fade">
    <div role="document" class="modal-dialog modal-dialog_menu">
        <div class="modal-content modal-content_menu" style="background-color: #2B2B2B">
            <div class="modal-header modal-header_menu">
                <button type="button" class="modal-header__close" data-dismiss="modal" aria-label="Close">
                    <span class="icon icon_close "></span>
                </button>
            </div>
            <div class="modal-body modal-body_menu">
                <div class="modal-body-container ">
                    <nav>
                        <ul class="menu">
                            <li class="menu__item menu__item_modal">
                                <a class="menu__link" href="/">Работы</a>
                            </li> <!--
                            <li class="menu__item menu__item_modal">
                                <a class="menu__link" href="/ru/areas/all/">Работы</a>
                            </li> -->
                            <li class="menu__item menu__item_modal">
                                <a class="menu__link" href="/about.html">О нас</a>
                            </li>
                            <li class="menu__item menu__item_modal">
                                <a class="menu__link" href="/contacts.html">Контакты</a>
                            </li>
                        </ul>
                        <ul class="menu smalltext">
                            <li class="menu__item menu__item_modal">
                                <a class="menu__link" href="https://www.facebook.com/union4.design/">Facebook</a>
                            </li>
                            <li class="menu__item menu__item_modal">
                                <a class="menu__link" href="https://www.youtube.com/channel/UCudsl0Brc-5e6GG4Vf9LroQ">Youtube</a>
                            </li>
    <!-- 
                            <li class="menu__item menu__item_modal">
                                <a class="menu__link" href="#">RUS</a>
                            </li>
                            <li class="menu__item menu__item_modal">
                                <a class="menu__link" href="#">ENG</a>
                            </li>
-->
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script src="/js/union.js"></script>


</body>
</html>
