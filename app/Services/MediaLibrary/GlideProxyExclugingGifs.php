<?php

namespace App\Services\MediaLibrary;

use A17\Twill\Services\MediaLibrary\Glide;
use A17\Twill\Services\MediaLibrary\ImageServiceDefaults;
use A17\Twill\Services\MediaLibrary\ImageServiceInterface;
use Illuminate\Config\Repository as Config;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

class GlideProxyExclugingGifs implements ImageServiceInterface
{
    use ImageServiceDefaults;

    private $localService;
    private $glideService;

    public function __construct(Config $config, Application $app, Request $request) {
        $this->glideService = new Glide($config, $app, $request);
        $this->localService = new LocalWithCorrectPath();
    }

    private function getFileExtension($id) {
        $relativePathAndName = $id;
        $extension = preg_replace('#^.*\.#', '', $relativePathAndName);

        return strtolower($extension);
    }

    private function isAnimatedGif($imageId) {
        return $this->getFileExtension($imageId) === 'gif';
    }

    private function getSuitableService($imageId) {
        return $this->isAnimatedGif($imageId)
            ? $this->localService
            : $this->glideService;
    }

    public function getUrl($id, array $params = []) {
        return $this->getSuitableService($id)->getUrl($id, $params);
    }

    public function getUrlWithCrop($id, array $crop_params, array $params = []) {
        return $this->getSuitableService($id)->getUrlWithCrop($id, $crop_params, $params);
    }

    public function getUrlWithFocalCrop($id, array $cropParams, $width, $height, array $params = []) {
        return $this->getSuitableService($id)->getUrlWithFocalCrop($id, $cropParams, $width, $height, $params);
    }

    public function getLQIPUrl($id, array $params = []) {
        return $this->getSuitableService($id)->getLQIPUrl($id, $params);
    }

    public function getSocialUrl($id, array $params = []) {
        return $this->getSuitableService($id)->getSocialUrl($is, $params);
    }

    public function getCmsUrl($id, array $params = []) {
        return $this->getSuitableService($id)->getCmsUrl($id, $params);
    }

    public function getRawUrl($id) {
        return $this->getSuitableService($id)->getRawUrl($id);
    }

    public function getDimensions($id) {
        return $this->getSuitableService($id)->getDimensions($id);
    }
}
