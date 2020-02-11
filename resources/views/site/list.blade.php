<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>AprilStudio: {{ $title }}</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/frontend.css">
    </head>
    <body>
        <header class="container-fluid p-4">
            <div class="row">
                <div class="col-md-6">
                    <h1>{{ $title }}</h1>
                </div>
                <div class="col-md-6">
                    <h3>{{ $description }}</h3>
                </div>
            </div>
        </header>
        <main>
            @foreach ($work_chunks as $chunk)
            <section class="container-fluid work-chunk">
                <div class="row">
                    <a class="main-image-block col-sm-6 d-flex flex-column cell-link mb-sm-0 mb-4 {{$loop->even ? 'order-last' : ''}}" href="{{ $chunk[0]->getRelativeUrl() }}">
                        <div class="img-cell flex-fill img-bg d-flex align-items-center justify-content-center first-img">
                            <img src="{{$chunk[0]->image('cover')}}" class="img-fluid">
                        </div>
                        <h4 class="mt-2 d-inline d-sm-none">
                            {{$chunk[0]->title}}
                        </h4>
                    </a>
                    <div class="col-sm-6">
                        <div class="row row-1-and-2">
                            @if (isset($chunk[1]))
                            <a class="col-sm-6 cell-link mb-sm-2 mb-4" href="{{ $chunk[1]->getRelativeUrl() }}">
                                <div class="img-cell img-bg d-flex align-items-center justify-content-center secondary-img">
                                    <img src="{{$chunk[1]->image('cover')}}" class="img-fluid">
                                </div>
                                <h4 class="mt-2 flex-fill">
                                    {{$chunk[1]->title}}
                                </h4>
                            </a>
                            @endif
                            @if (isset($chunk[2]))
                            <a class="col-sm-6 cell-link mb-sm-2 mb-4" href="{{ $chunk[2]->getRelativeUrl() }}">
                                <div class="img-cell img-bg d-flex align-items-center justify-content-center secondary-img">
                                    <img src="{{$chunk[2]->image('cover')}}" class="img-fluid">
                                </div>
                                <h4 class="mt-2 flex-fill">
                                    {{$chunk[2]->title}}
                                </h4>
                            </a>
                            @endif
                        </div>
                        <div class="row row-3-and-4">
                            @if (isset($chunk[3]))
                            <a class="col-sm-6 cell-link mb-sm-0 mb-4" href="{{ $chunk[3]->getRelativeUrl() }}">
                                <div class="img-cell img-bg d-flex align-items-center justify-content-center secondary-img">
                                    <img src="{{$chunk[3]->image('cover')}}" class="img-fluid">
                                </div>
                                <h4 class="mt-2 flex-fill d-block d-sm-none">
                                    {{$chunk[3]->title}}
                                </h4>
                            </a>
                            @endif
                            @if (isset($chunk[4]))
                            <a class="col-sm-6 cell-link mb-sm-0 mb-4" href="{{ $chunk[4]->getRelativeUrl() }}">
                                <div class="img-cell img-bg d-flex align-items-center justify-content-center secondary-img">
                                    <img src="{{$chunk[4]->image('cover')}}" class="img-fluid">
                                </div>
                                <h4 class="mt-2 flex-fill d-block d-sm-none">
                                    {{$chunk[4]->title}}
                                </h4>
                            </a>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="row d-none d-sm-flex desktop-low-headers-row">
                    <a class="col-sm-6 cell-link {{$loop->even ? 'order-last' : ''}}" href="{{ $chunk[0]->getRelativeUrl() }}">
                        <h4 class="mt-2">
                            {{$chunk[0]->title}}
                        </h4>
                    </a>
                    @if (isset($chunk[3]))
                    <a class="col-sm-3 cell-link" href="{{ $chunk[3]->getRelativeUrl() }}">
                        <h4 class="mt-2 flex-fill">
                            {{$chunk[3]->title}}
                        </h4>
                    </a>
                    @else
                    <div class="col-sm-3"></div>
                    @endif
                    @if (isset($chunk[4]))
                    <a class="col-sm-3 cell-link" href="{{ $chunk[4]->getRelativeUrl() }}">
                        <h4 class="mt-2 flex-fill">
                            {{$chunk[4]->title}}
                        </h4>
                    </a>
                    @else
                    <div class="col-sm-3"></div>
                    @endif
                </div>
            </section>
            @endforeach
        </main>

        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>
