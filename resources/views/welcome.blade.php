<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>AprilStudio</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <style>
            header {margin-bottom: 80px; margin-top: 32px; position: sticky; top: 0; background: white; z-index: 1000;}

            .img-bg {background: #eee;}
            .img-filler {width: 100%; height: 100%; }
            .img-cell {width: 100%;}
            .work-chunk {margin-bottom: 80px;}
            .cell-link, .cell-link:hover, .cell-link:active, .cell-link:visited {text-decoration: none; color: #212529;}

            @media screen and (min-width: 768px) {
                .first-img {min-height: 450px;}
                .secondary-img {height: 210px;}
            }
        </style>
    </head>
    <body>
        <header class="container-fluid">
            <div class="row">
                <div class="col">
                    <h1>AprilStudio</h1>
                </div>
            </div>
        </header>
        <main>
            @foreach ($work_chunks as $chunk)
            <section class="container-fluid work-chunk">
                <div class="row">
                    <a class="main-image-block col-sm-6 d-flex flex-column cell-link mb-sm-0 mb-4 {{$loop->even ? 'order-last' : ''}}" href="/works/{{ $chunk[0]->slugs[0]->slug }}">
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
                            <a class="col-sm-6 cell-link mb-sm-2 mb-4" href="/works/{{ $chunk[1]->slugs[0]->slug }}">
                                <div class="img-cell img-bg d-flex align-items-center justify-content-center secondary-img">
                                    <img src="{{$chunk[1]->image('cover')}}" class="img-fluid">
                                </div>
                                <h4 class="mt-2 flex-fill">
                                    {{$chunk[1]->title}}
                                </h4>
                            </a>
                            @endif
                            @if (isset($chunk[2]))
                            <a class="col-sm-6 cell-link mb-sm-2 mb-4" href="/works/{{ $chunk[2]->slugs[0]->slug }}">
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
                            <a class="col-sm-6 cell-link mb-sm-0 mb-4" href="/works/{{ $chunk[3]->slugs[0]->slug }}">
                                <div class="img-cell img-bg d-flex align-items-center justify-content-center secondary-img">
                                    <img src="{{$chunk[3]->image('cover')}}" class="img-fluid">
                                </div>
                                <h4 class="mt-2 flex-fill d-block d-sm-none">
                                    {{$chunk[3]->title}}
                                </h4>
                            </a>
                            @endif
                            @if (isset($chunk[4]))
                            <a class="col-sm-6 cell-link mb-sm-0 mb-4" href="/works/{{ $chunk[4]->slugs[0]->slug }}">
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
                    <a class="col-sm-6 cell-link {{$loop->even ? 'order-last' : ''}}" href="/works/{{ $chunk[0]->slugs[0]->slug }}">
                        <h4 class="mt-2">
                            {{$chunk[0]->title}}
                        </h4>
                    </a>
                    @if (isset($chunk[3]))
                    <a class="col-sm-3 cell-link" href="/works/{{ $chunk[3]->slugs[0]->slug }}">
                        <h4 class="mt-2 flex-fill">
                            {{$chunk[3]->title}}
                        </h4>
                    </a>
                    @else
                    <div class="col-sm-3"></div>
                    @endif
                    @if (isset($chunk[4]))
                    <a class="col-sm-3 cell-link" href="/works/{{ $chunk[4]->slugs[0]->slug }}">
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
