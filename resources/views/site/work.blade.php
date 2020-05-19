<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="p:domain_verify" content="6cc217c99f01ffe595cadc0c77cd4e97"/>
        <title>33 Union⁴: {{ $item->title }}</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/frontend.css">
        <link rel="stylesheet" href="/css/union.css">
        <link rel="stylesheet" href="/css/buttons.css">
        <link rel="stylesheet" href="/css/bootstrap-modal.css">
    </head>
    <body class="d-flex flex-column OneWorkPage {{$item->page_classes}}"
        @if ($item->page_background)
            style="background: {{$item->page_background}}"
        @endif
    >

<img src="{{$item->image('cover')}}" alt="" class="top_bg">
<!-- page for 1 product  -->

    <header>
        <div class="logo">
            <a href="/"><img src="/images/logounion8_white.svg" alt="Union8"></a>
        </div>

        <div class="nav-mobile nav-mobile_color_blue nav-mobile_right visible-xs_flex" data-toggle="modal" data-target="#menuModal">
                <span></span>
        </div>

        <div class="menublock rotate">
            <nav>
                <a href="/ru/areas/all/">Работы</a>
                <a href="/about.html">О нас</a>
                <a href="/contacts.html">Контакты</a>
            </nav>
        </div>

<!-- div rotate right menu -->
<div class="footer_deg90">
            <nav class="lang">
                <a href="#" class="active">Rus</a>
                <a href="#">Eng</a>
            </nav>
            <nav>
                <a href="https://www.facebook.com/Union8.design/">Facebook</a>
                <a href="https://www.youtube.com/channel/UCudsl0Brc-5e6GG4Vf9LroQ">YouTube</a>
            </nav>
        </div>
<!-- \ div rotate right menu -->
    </header>

        <div class="innerH1block">
                    <img src="http://aprilstudio.ru/imgs/projects/mediamarkt/logo.png" alt="{{ $item->title }}">
                    <h1>{{ $item->title }}</h1>
                    <h3>{{ $item->description}}</h3>
        </div>

        <main class="py-4 flex-fill innerProjectPage">

            @if ($item->casestudy)
                    <div class="innerCaseStudyText">
                        {!! $item->casestudy !!}
                    </div>
            @endif

            {!! $item->renderBlocks() !!}
<!-- ---------------- btn_orderblock ---------------- -->
<button type="button" class="btn btn-primary btn_white" id="btn_orderblock">Заказать дизайн</button>
<!-- ---------------- \ btn_orderblock -------------- -->
        </main>



        <footer class="">
            <!-- next-work block -->
            @if (isset($nextWork))
                <section class="nextWorkBlock {{$nextWork->next_classes}}" style="background-image: url({{$nextWork->image('cover')}});">
                    <div class="shadow"></div>
                    <div class="textalign_center showmore s22">Далее</div>
                    <div class="textalign_center brand_logo"><a href="{{ $nextWork->getRelativeUrl() }}"><img alt="{{ $nextWork->title }}" src="http://aprilstudio.ru/imgs/projects/vedomosti/logo.png"></a></div>
                    <div class="textalign_center showmore_btn small"><button class="btn btn-primary btn_white"><a href="{{ $nextWork->getRelativeUrl() }}">Смотреть</a></button></div>
                </section>
            @endif

                <!--
                <h6>@lang('frontend.next_work'):</h6>
                <h2>{{ $nextWork->title }}</h2>
                <h4><a href="{{ $nextWork->getRelativeUrl() }}">{{ $nextWork->description}}</a></h4>
                <img src="{{$nextWork->image('cover')}}" alt="">
                -->
            <!-- \ next-work block -->
        </footer>



<div tabindex="-1" id="menuModal" class="modal fade">
    <div role="document" class="modal-dialog modal-dialog_menu">
        <div class="modal-content modal-content_menu" style="background-color:#ff7">
            <div class="modal-header modal-header_menu">
                <div class="logo logo_left">
                    <a href="index.html"><img src="images/logo_dark.svg" alt="" ></a>
                </div>
                <button type="button" class="modal-header__close" data-dismiss="modal" aria-label="Close">
                    <span class="icon icon_close "></span>
                </button>
            </div>
            <div class="modal-body modal-body_menu">
                <div class="modal-body-container ">
                    <nav>
                        <ul class="menu">
                            <li class="menu__item menu__item_modal">
                                <a class="menu__link" href="#" style="color:#56a">Работы</a>
                            </li>
                            <li class="menu__item menu__item_modal">
                                <a class="menu__link" href="#" style="color:#56a">О нас</a>
                            </li>
                            <li class="menu__item menu__item_modal">
                                <a class="menu__link" href="#" style="color:#56a">Контакты</a>
                            </li>
                            <li class="menu__item menu__item_modal">
                                <a class="menu__link" href="#" style="color:#56a">Facebook</a>
                            </li>
                            <li class="menu__item menu__item_modal">
                                <a class="menu__link" href="#" style="color:#56a">Youtube</a>
                            </li>
                            <li class="menu__item menu__item_modal">
                                <a class="menu__link" href="#" style="color:#56a">RUS</a>
                            </li>
                            <li class="menu__item menu__item_modal">
                                <a class="menu__link" href="#" style="color:#56a">ENG</a>
                            </li>
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
        <script>
            /*  -------- logo rotate afer scroll -------- */
            $(window).scroll(function(){
                if ($(this).scrollTop() > 200) $('.logo').addClass('rotate')
                else $('.logo').removeClass('rotate')
            });
            /*  -------- \ logo rotate afer scroll -------- */
        </script>
    </body>
</html>
