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
    </head>
    <body class="d-flex flex-column OneWorkPage">
<!-- page for 1 product  -->

    <header>
        <div class="logo rotate">
            <div class="logo_forDay"><a href="/"><img src="/images/logounion4_orange.svg" alt="Union4"></a></div>
            <div class="logo_forNight"><a href="/"><img src="/images/logounion4_white.svg" alt="Union4"></a></div>
        </div>

        <div class="menublock rotate">
            <nav>
                <a href="/ru/areas/all/">Работы</a>
                <a href="/about.html">О нас</a>
                <a href="/contacts.html">Контакты</a>
            </nav>
        </div>
    </header>

        <div class="innerH1block">
                    <h1>{{ $item->title }}</h1>
                    <h3>{{ $item->description}}</h3>
        </div>

        <main class="flex-fill innerProjectPage">
        
            @if ($item->casestudy)
                    <div class="innerCaseStudyText">
                        {!! $item->casestudy !!} 
                    </div>
            @endif

            {!! $item->renderBlocks() !!}
<!-- ---------------- btn_orderblock ---------------- -->
<button type="button" class="btn btn-primary" id="btn_orderblock">Заказать дизайн</button>
<!-- ---------------- \ btn_orderblock -------------- -->
        </main>

        <footer class="container-fluid next-work innerNextWork">

<!-- next-work block -->
        @if (isset($nextWork))
        <section class="next-work">
            <hr class="delimiter mb-4">
            <div class="next-work_info"> 
                <h6>@lang('frontend.next_work'):</h6>
                <h2><a href="{{ $nextWork->getRelativeUrl() }}">{{ $nextWork->title }}</a></h2>
                <h4><a href="{{ $nextWork->getRelativeUrl() }}">{{ $nextWork->description}}</a></h4>    
            </div>
            <div class="next-work_btn">
                <button class="btn btn-primary btn_white"><a href="{{ $nextWork->getRelativeUrl() }}">Смотреть проект</a></button>
            </div>

            <div class="row image">
                <a href="{{ $nextWork->getRelativeUrl() }}">
                    <div style="background-image: url({{$nextWork->image('cover')}});"></div>
                </a>
            </div>
        </section>
        @endif
<!-- \ next-work block -->

<!-- div rotate footer right menu -->
    <div class="footer_deg90">

    <form method="get" class="user_mode"><input type="checkbox" name="user_mode" id="user_mode" value="night" onclick="modecheck()">
    <label for="user_mode">
        <span class="moon_pic">
        <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M15.7614 6.95615C14.9555 4.32385 12.6212 2.31495 9.70394 2.04638C5.86461 1.69292 2.46113 4.50246 2.1078 8.34032C1.89702 10.6298 2.8338 12.7593 4.42712 14.185C4.16612 13.347 4.06358 12.4406 4.1485 11.5182C4.50183 7.68033 7.90531 4.87079 11.7446 5.22425C13.3038 5.36779 14.6819 6.0096 15.7614 6.95615Z" stroke="#51565C" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>

             
        </span>
        <span class="sun_pic">
        <svg width="14" height="14" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8.84692 12.6559C10.8615 12.6559 12.4946 11.0227 12.4946 9.00817C12.4946 6.9936 10.8615 5.36047 8.84692 5.36047C6.83235 5.36047 5.19922 6.9936 5.19922 9.00817C5.19922 11.0227 6.83235 12.6559 8.84692 12.6559Z" stroke="#5C5B51" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M8.8457 1V2.38374" stroke="#5C5B51" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M8.8457 15.6163V17.0001" stroke="#5C5B51" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M16.8457 8.99988L15.462 8.99988" stroke="#5C5B51" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M2.23047 8.99976L0.84673 8.99976" stroke="#5C5B51" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M14.502 3.34338L13.5235 4.32183" stroke="#5C5B51" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M4.16602 13.6787L3.18756 14.6572" stroke="#5C5B51" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M14.502 14.6572L13.5235 13.6788" stroke="#5C5B51" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M4.16602 4.32202L3.18756 3.34357" stroke="#5C5B51" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
                </span>
            </label>
            </form>

            <nav class="lang">
                <a href="#" class="active">Rus</a>
                <a href="#">Eng</a>
            </nav>
            <nav>
                <a href="https://www.facebook.com/union4.design/">Facebook</a>
                <a href="https://www.youtube.com/channel/UCudsl0Brc-5e6GG4Vf9LroQ">YouTube</a>
            </nav>
        </div>
<!-- \ div rotate footer right menu -->

</footer>

        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script>
            /*  ---------------- turn on the night styles ------------------ */
            function updateURL(modewant) {
                if (history.pushState) {
                    var baseUrl = window.location.protocol + "//" + window.location.host + window.location.pathname;
                    var newUrl = baseUrl + modewant;
                    history.pushState(null, null, newUrl);
                }
                else {
                    console.warn('History API не поддерживается');
                }
            }
            function modecheck() {
                if (user_mode.checked) { 
                document.documentElement.classList.add('night');
                updateURL('?mode=nightmode');

                } else {
                document.documentElement.classList.remove('night'); 
                updateURL('?mode=daymode');     
                }
            }
            modecheck();
            /*  ---------------- \ turn on the night styles ------------------ */
    </script>
    </body>
</html>
