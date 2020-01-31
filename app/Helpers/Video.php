<?php


namespace App\Helpers;


class Video
{
    public static function getYoutubeId($youtubeUrl) {
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

    public static function getVimeoId($vimeoUrl) {
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
