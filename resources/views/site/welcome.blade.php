<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="p:domain_verify" content="6cc217c99f01ffe595cadc0c77cd4e97"/>
        <title>Union⁴ дизайн сайтов и мобильных приложений</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/frontend.css">
        <link rel="stylesheet" href="/css/union.css">
    </head>
    <body>
        <header class="container-fluid">
            <div class="row">
                <div class="col-10 logo">
                    <h1>Union⁴</h1>
                </div>
                <div class="col-2">
                    <div class="dropdown">
                        <button class="btn btn-secondary-outline dropdown-toggle" type="button" id="langMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ Config::get('languages')[App::getLocale()] }}
                        </button>
                        <div class="dropdown-menu" aria-labelledby="langMenuButton">
                            @foreach (Config::get('languages') as $lang => $language)
                                @if ($lang != App::getLocale())
                                    <a class="dropdown-item" href="{{ route('lang.switch', $lang) }}">{{$language}}</a>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <main>
            @foreach ($favouriteWorks as $chunk)
                @include('site.work_chunk', ['chunk' => $chunk, 'loop' => $loop])
            @endforeach

            @foreach ($otherWorks as $chunk)
                @include('site.work_chunk', ['chunk' => $chunk, 'loop' => $loop])
            @endforeach
        </main>

        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>
