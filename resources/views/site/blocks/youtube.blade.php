<section class="container-fluid mb-4">
    <div class="row">
        <div class="col-12">
            <div class="videoWrapper videoSize4x3">
                <iframe width="1080" height="810" src="https://www.youtube-nocookie.com/embed/{{Video::getYoutubeId($block->content['url'])}}?autoplay=1&playlist={{Video::getYoutubeId($block->content['url'])}}&loop=1&controls=0&showinfo=0&fs=0&iv_load_policy=0&modestbranding=1&rel=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</section>
