<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Twill</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #000;
                color: #fff;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links {
                position: absolute;
                bottom: 50px;
                left: 0;
                right: 0;
                text-align: center;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 50px;
            }

            .login-btn {
                display: block;
                height: 40px;
                line-height: 40px;
                background-color: #333;
                color: #fff;
                font-weight: bold;
                border-radius: 10px;
                text-decoration: none;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    <svg id="icon--logo" width="279" height="114" viewBox="0 0 93 38">
                        <path fill="currentColor" d="M72 1h9v37h-9zM84 1h9v37h-9z"></path>
                        <circle fill="currentColor" cx="64.5" cy="5.5" r="5.1"></circle>
                        <path fill="currentColor" d="M45.924 26.548L39.686 13H34.13l-6.237 13.158L21.898 13H12V6H3v7H0v7h3v18h9V20h3.527l9.344 18h5.994l5.946-13.694L43.049 38h5.896l9.516-18H60v18h9V13H52.21z"></path>
                    </svg>
                </div>
                <a class="login-btn" href="{{ route('admin.dashboard') }}">Get Started</a>
            </div>
        </div>
        <div class="links">
            <a href="https://twill.io">Twill.io</a>
            <a href="https://twill.io/docs/">Docs</a>
            <a href="https://spectrum.chat/twill">Spectrum</a>
            <a href="https://github.com/area17/twill">Github</a>
            <a href="https://demo.twill.io/welcome">Demo</a>
        </div>
    </body>
</html>
