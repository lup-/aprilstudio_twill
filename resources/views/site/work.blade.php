<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>AprilStudio: {{ $item->title }}</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/frontend.css">
    </head>
    <body class="d-flex flex-column">
        <header class="container-fluid p-4">
            <div class="row">
                <div class="col-md-6">
                    <h1>{{ $item->title }}</h1>
                </div>
                <div class="col-md-6">
                    <h3>{{ $item->description}}</h3>
                </div>
            </div>
        </header>
        <main class="py-4 flex-fill">
            @if ($item->casestudy)
            <div class="container-fluid px-4 mb-4">
                <div class="row">
                    <div class="col">
                        {!! $item->casestudy !!}
                    </div>
                </div>
            </div>
            @endif

            {!! $item->renderBlocks() !!}
        </main>

        @if (isset($nextWork))
        <footer class="container-fluid pt-4 px-4 pb-0 next-work">
            <hr class="delimiter mb-4">
            <div class="row">
                <div class="col-12">
                    <a class="btn btn-link px-0" href="{{ $nextWork->getRelativeUrl() }}">
                        @lang('frontend.next_work')
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <h1>{{ $nextWork->title }}</h1>
                </div>
                <div class="col-md-6">
                    <h3>{{ $nextWork->description}}</h3>
                </div>
            </div>
            <div class="row image">
                <a href="{{ $nextWork->getRelativeUrl() }}">
                    <img src="{{$nextWork->image('cover')}}" class="img-fluid">
                </a>
            </div>
        </footer>
        @endif

        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>
