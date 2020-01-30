<?php


namespace App\Models;


class Block extends \A17\Twill\Models\Block
{
    public function getYoutubeId() {
        $youtubeUrl = $this->content['url'];
        $queryParams = [];

        $urlParts = parse_url($youtubeUrl);

        if (isset($urlParts['query'])) {
            parse_str($urlParts['query'], $queryParams);
        }

        if (isset($queryParams['v'])) {
            return $queryParams['v'];
        }

        if (isset($urlParts['path'])) {
            $pathParts = explode('/', $urlParts['path']);
            $lastPathEntry = $pathParts[ count($pathParts) - 1 ];
            return $lastPathEntry;
        }

        return false;
    }

    public function getVimeoId() {
        $vimeoUrl = $this->content['url'];
        $queryParams = [];

        $urlParts = parse_url($vimeoUrl);

        if (isset($urlParts['query'])) {
            parse_str($urlParts['query'], $queryParams);
        }

        if (isset($queryParams['url'])) {
            return $queryParams['url'];
        }

        if (isset($urlParts['path'])) {
            $pathParts = explode('/', $urlParts['path']);
            $lastPathEntry = $pathParts[ count($pathParts) - 1 ];
            return $lastPathEntry;
        }

        return false;
    }
}
