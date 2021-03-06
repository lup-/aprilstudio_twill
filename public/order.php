<?php
    $sessionIsNotStarted = !isset($_SESSION);
    if ($sessionIsNotStarted) {
        session_start();
    }
?>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="p:domain_verify" content="6cc217c99f01ffe595cadc0c77cd4e97"/>
        <title>Just Imagine! Заказать дизайн</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/frontend.css">
        <link rel="stylesheet" href="/css/buttons.css">
        <link rel="stylesheet" href="/css/bootstrap-modal.css">
        <link rel="stylesheet" href="/css/union.css">
    </head>
    <body class="d-flex flex-column" style="background-color: #2B2B2B">



    <header>
        <div class="logo">
            <a href="/"><img src="/images/logoJIm_white.svg" alt="Just Imagine!"></a>
        </div>

        <div class="ForTablet">
        <div class="nav-mobile nav-mobile_color_blue nav-mobile_right visible-xs_flex" data-toggle="modal" data-target="#menuModal">
                <span></span>
        </div>
        </div>

<div class="ForMobile">
<div class="nav-mobile nav-mobile_color_blue nav-mobile_right visible-xs_flex" data-toggle="modal" data-target="#menuModal">
        <span></span>
</div>
</div>

        <div class="menublock rotate ForDesktop">
            <nav>
                <a href="/ru/areas/all/">Работы</a>
                <a href="/about.html">О нас</a>
                <a href="/contacts.html">Контакты</a>
            </nav>
        </div>

<!-- div rotate right menu -->
<div class="footer_deg90 ForDesktop">
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
        </div>

<?php

    $requestSubmitted = $_POST['submit'] === 'Отправить';
    $newSession = empty($_SESSION['token']) && !$requestSubmitted;

    if ($newSession) {
        $tokenLength = 20;
        $_SESSION['token'] = bin2hex( random_bytes($tokenLength) );
    }

    if ($requestSubmitted):
        $savedToken = $_SESSION['token'];
        $receivedToken = $_POST['title'];
        $validRequest = $savedToken === $receivedToken;

        $userMessage = "Ошибка проверки данных";
        $helpMessage = "Обновите страницу и попробуйте снова";

        if ($validRequest) {
            // Получаем значения переменных из пришедших данных
            $send = 0;
            $receiveemail = 'bytonerka@gmail.com';
            $name = $_POST['name'];
            $emailphone = $_POST['emailphone'];
            $message = $_POST['message'];
            $letterthene = 'Заказ дизайна.' . ' ' . $name;

            // Формируем сообщение для отправки, в нём мы соберём всё, что ввели в форме
            $mes = "Имя: $name \nE-mail или телефон: $emailphone \nТекст: $message";
            $send = mail($receiveemail, $letterthene, $mes, "Content-type:text/plain; charset = UTF-8\r\nFrom:$emailphone");

            if ($send == 1) {
                $userMessage = "Спасибо!";
                $helpMessage = "Мы с вами свяжемся в ближайшее время";
            }
            else {
                $userMessage = "Ой, что-то не так";
                $helpMessage = "Вернитесь назад и повторите отправку";
            }
        }
    ?>
    <main class="py-4 flex-fill innerProjectPage" style="padding-bottom: 400px;">
        <h1 style=" padding-top: 50px;"><?php echo $userMessage ?></h1>
        <h4><?php echo $helpMessage ?></h4>
    </main>
<?php
    else:
?>
    <main class="py-4 flex-fill innerProjectPage" style="padding-bottom: 400px;">
        <h1 style=" padding-top: 50px;">Заказать дизайн</h1>
        <form action="" method="post" name="form">

            <p><input name="name" type="text" placeholder="Ваше имя"/></p>
            <p><input name="emailphone" type="text" placeholder="Ваша почта или телефон"/></p>
            <p><textarea cols="32" name="message" rows="5" placeholder="Ваше сообщение"></textarea></p>
            <p><input type="submit" name="submit" value="Отправить" /></p>

        </form>
    </main>
<?php
    endif;
?>

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
                            <li class="menu__item menu__item_modal">
                                <a class="menu__link" href="#">RUS</a>
                            </li>
                            <li class="menu__item menu__item_modal">
                                <a class="menu__link" href="#">ENG</a>
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

            $('form').append(`<input type="hidden" name="title" value="<?=$_SESSION['token']?>">`);
        </script>
    </body>
</html>
