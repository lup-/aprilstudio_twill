<?php

namespace App\Http\Controllers\TwillOverride;
use A17\Twill\Services\MediaLibrary\Glide as TwillGlide;
use Illuminate\Config\Repository as Config;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use League\Glide\Responses\LaravelResponseFactory;
use League\Glide\ServerFactory;
use League\Glide\Signatures\SignatureException;
use League\Glide\Signatures\SignatureFactory;

class Glide extends TwillGlide
{
    /**
     * @var \League\Glide\Server
     */
    protected $server;

    public function __construct(Config $config, Application $app, Request $request)
    {
        parent::__construct($config, $app, $request);

        $disk = "twill_media_library";
        $fileSystem = Storage::disk($disk)->getDriver();

        $baseUrl = join('/', [
            rtrim($this->config->get('twill.glide.base_url'), '/'),
            ltrim($this->config->get('twill.glide.base_path'), '/'),
        ]);

        $this->server = ServerFactory::create([
            'response' => new LaravelResponseFactory($this->request),
            'source' => $fileSystem,
            'cache' => $fileSystem,
            'cache_path_prefix' => $this->config->get('twill.glide.cache_path_prefix'),
            'base_url' => $baseUrl,
            'presets' => $this->config->get('twill.glide.presets', []),
            'driver' => $this->config->get('twill.glide.driver')
        ]);
    }

    /**
     * @param string $path
     * @return mixed
     * @throws SignatureException
     */
    public function render($path)
    {
        if ($this->config->get('twill.glide.use_signed_urls')) {
            SignatureFactory::create($this->config->get('twill.glide.sign_key'))->validateRequest($this->config->get('twill.glide.base_path') . '/' . $path, $this->request->all());
        }

        return $this->server->getImageResponse($path, $this->request->all());
    }
}
