<section class="container-fluid work-chunk">
    <div class="row">
        @include('site.work_at_home', ['work' => $chunk[0], 'isEven' => $loop->even, 'isPrimary' => true])
        <div class="col-sm-6">
            <div class="row row-1-and-2">
                @includeWhen(isset($chunk[1]), 'site.work_at_home', ['work' => $chunk[1] ?? [], 'isEven' => $loop->even, 'isPrimary' => false, 'alwaysShowTitle' => true])
                @includeWhen(isset($chunk[2]), 'site.work_at_home', ['work' => $chunk[2] ?? [], 'isEven' => $loop->even, 'isPrimary' => false, 'alwaysShowTitle' => true])
            </div>
            <div class="row row-3-and-4">
                @includeWhen(isset($chunk[3]), 'site.work_at_home', ['work' => $chunk[3] ?? [], 'isEven' => $loop->even, 'isPrimary' => false, 'alwaysShowTitle' => false])
                @includeWhen(isset($chunk[4]), 'site.work_at_home', ['work' => $chunk[4] ?? [], 'isEven' => $loop->even, 'isPrimary' => false, 'alwaysShowTitle' => false])
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
