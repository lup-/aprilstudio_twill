<section class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="videoWrapper">
                <iframe src="https://player.vimeo.com/video/{{Video::getVimeoId($block->content['url'])}}" width="640" height="235" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</section>
