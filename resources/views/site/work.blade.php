<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="p:domain_verify" content="6cc217c99f01ffe595cadc0c77cd4e97"/>
        <title>{{ $item->title }} Дизайн Just Imagine!</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/frontend.css">
        <link rel="stylesheet" href="/css/buttons.css">
        <link rel="stylesheet" href="/css/bootstrap-modal.css">
        <link rel="stylesheet" href="/css/union.css">
    </head>
    <body class="d-flex flex-column OneWorkPage {{$item->page_classes}}"
        @if ($item->page_background)
            style="background-color: {{$item->page_background}}"
        @endif
    >

<style>
        .btn:hover, .btn:hover a, .btn:focus a, .btn:active a, .btn:focus, .btn:active
        {
        @if ($item->page_background)
            color: {{$item->page_background}}
        @endif
        }
        .ABC {}

        .nextWorkBlock .btn:hover, .nextWorkBlock .btn:hover a, .nextWorkBlock .btn:focus a, .nextWorkBlockter .btn:active a, .nextWorkBlock .btn:focus, .nextWorkBlock .btn:active
        {
        @if ($nextWork->page_background)
            color: {{$nextWork->page_background}}
        @endif
        }
        .ABC {}
        .modal-content
        {
        @if ($item->page_background)
            background-color: {{$item->page_background}}
        @endif
        }
        .ABC {}
        .nextWorkBlock
        {
        @if ($nextWork->page_background)
            background-color: {{$nextWork->page_background}};
        @endif
        @if ($nextWork->image('cover'))
            background-image: url({{$nextWork->image('cover')}});
        @endif
        }
        .ABC {}



/* -- -------- fadeOut after refresh (1/3) -------- */
    .fade_Logo {
        display: block;
    }
    .logo img {position:absolute}
    .fade_WhenInPageDiv, .fade_WhenOutPageDiv {
        z-index: 999;
        height: 100%;
        width: 100%;
        position: absolute;
    }
    .fade_WhenInPageDiv {
        display: block;
    }
    .fade_WhenOutPageDiv {
        display: none;
    }
    .fade_WhenInPageDiv
        {
        @if ($item->page_background)
            background-color: {{$item->page_background}}
            /* background-color: red; */
        @endif
        }
        .ABC {}
        
    .fade_WhenOutPageDiv
        {
        @if ($nextWork->page_background)
           background-color: {{$nextWork->page_background}};
        /* background-color: violet; */
        @endif
        }
        .ABC {}

.logo .whiteLogo {
        filter: none;
        display: block;
        z-index: 1;
        @if ($item->page_classes)
            display: none;
            z-index: 4;
        @endif
    }
        .ABC {}

.logo .blackLogo {
        -webkit-filter: invert(100%); filter: invert(100%);
        display: none;
        z-index: 2;
        @if ($item->page_classes)
            display: block;
            z-index: 3;
        @endif
    }
        .ABC {}

/* -- -------- \ fadeOut after refresh (1/3) -------- */

</style>

@include('site.image_with_scales', ['work' => $item, 'role' => 'cover', 'class' => 'top_bg'])


<!-- -------- fadeOut after refresh (2/3) -------- -->
<div class="fade_WhenInPageDiv"></div>
<div class="fade_WhenOutPageDiv"></div>
<!-- -------- \ fadeOut after refresh (2/3) -------- -->

<!-- page for 1 product  -->

    <header>
        <div class="logo">
            <a href="/" class="fadeOutForClick"><img src="/images/logoJIm_white.svg" alt="Just Imagine!" class="whiteLogo"></a>
            <a href="/" class="fadeOutForClick"><img src="/images/logoJIm_white.svg" alt="Just Imagine!" class="blackLogo"></a>
        </div>

        <div class="nav-mobile nav-mobile_color_blue nav-mobile_right visible-xs_flex" data-toggle="modal" data-target="#menuModal">
                <span></span>
        </div>

    </header>

        <div class="innerH1block">
                    <img src="{{$item->scaledImage('logo', 440)}}" alt="{{ $item->title }}">
                    <!-- <h1>{{ $item->title }}</h1>
                    <h3>{{ $item->description}}</h3> -->
        </div>

        <main class="py-4 flex-fill innerProjectPage">
        <div class="clickme"></div>

            @if ($item->casestudy)
                    <div class="innerCaseStudyText">
                        {!! $item->casestudy !!}
                    </div>
            @endif

            {!! $item->renderBlocks() !!}
<!-- ---------------- btn_orderblock ---------------- -->
<div class="btn_order_container"><a href="/order.php?{{ $item->title }}" class="btn ForDesktop" id="btn_orderblock">Заказать дизайн</a></div>
<!-- ---------------- \ btn_orderblock -------------- -->
        </main>



        <footer class="">
            <!-- next-work block -->
            @if (isset($nextWork))
                <section class="nextWorkBlock {{$nextWork->page_classes}}">
                    <div class="shadow"></div>
                    <div class="textalign_center showmore s22">Далее</div>
                    <div class="textalign_center brand_logo">
                        <a href="{{ $nextWork->getRelativeUrl() }}">
                            <img alt="{{ $nextWork->title }}" src="{{ $nextWork->scaledImage('logo', 440)}} ">
                        </a>
                    </div>
                    <div class="textalign_center showmore_btn small"><a href="{{ $nextWork->getRelativeUrl() }}" class="btn fadeOutForClick">Смотреть</a></div>
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
        <div class="modal-content modal-content_menu">
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
                            </li>
                            <li class="menu__item menu__item_modal">
                                <a class="menu__link" href="/about.html">О нас</a>
                            </li>
                            <li class="menu__item menu__item_modal">
                                <a class="menu__link" href="/contacts.html">Контакты</a>
                            </li>
                        </ul>
                        <ul class="menu smalltext">
                            <li class="menu__item menu__item_modal">
                                <a class="menu__link" href="/order.php?{{ $item->title }}">Заказать дизайн</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

       <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script> -->
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script>
            /*  -------- logo rotate afer scroll -------- 
            $(window).scroll(function(){
                if ($(this).scrollTop() > 200) $('.logo').addClass('rotate')
                else $('.logo').removeClass('rotate')
            });
              -------- \ logo rotate afer scroll -------- */
        </script>



<!-- -------- fadeOut after refresh (3/3) -------- -->
<script>

$('.fade_WhenInPageDiv').fadeOut(1000); /* зашли на страницу -> фон выключается */

$('.fadeOutForClick').on('click', function(e) {
    e.preventDefault();
    var url = $(this).attr('href');
    $('.fade_WhenOutPageDiv').fadeIn(1000); /* медленно включается цветной слой */

    @if (($nextWork->page_classes) > ($item->page_classes)) /* название класса след работы больше, чем название класса предыдущей работы (у нас у работ с белым логотипом класс "", у работ с черным логотипом класс "blacktext") */
        $('.blackLogo').fadeIn(500); /* включаем черный логотип */
    @endif

    @if (($nextWork->page_classes) < ($item->page_classes)) 
        $('.whiteLogo').fadeIn(500);
    @endif

    setInterval(function() { /* переход на след страницу делаем с задержкой */
        window.location = url;
    }, 1000);

});

 </script>

    </body>
</html>
