<?php

$s3Config = [
    'driver'          => 's3',
    'key'             => env('S3_KEY', env('AWS_KEY', env('AWS_ACCESS_KEY_ID'))),
    'secret'          => env('S3_SECRET', env('AWS_SECRET', env('AWS_SECRET_ACCESS_KEY'))),
    'region'          => env('S3_REGION', env('AWS_REGION', env('AWS_DEFAULT_REGION', 'us-east-1'))),
    'bucket'          => env('S3_BUCKET', env('AWS_BUCKET')),
    'root'            => env('S3_ROOT', env('AWS_ROOT', '')),
    'use_https'       => env('S3_UPLOADER_USE_HTTPS', env('S3_USE_HTTPS', env('AWS_USE_HTTPS', true))),
    'endpoint'        => env('S3_URL', env('AWS_URL', '')),
];

return [

    /*
    |--------------------------------------------------------------------------
    | Default Filesystem Disk
    |--------------------------------------------------------------------------
    |
    | Here you may specify the default filesystem disk that should be used
    | by the framework. The "local" disk, as well as a variety of cloud
    | based disks are available to your application. Just store away!
    |
    */

    'default' => env('FILESYSTEM_DRIVER', 'local'),

    /*
    |--------------------------------------------------------------------------
    | Default Cloud Filesystem Disk
    |--------------------------------------------------------------------------
    |
    | Many applications store files both locally and in the cloud. For this
    | reason, you may specify a default "cloud" driver here. This driver
    | will be bound as the Cloud disk implementation in the container.
    |
    */

    'cloud' => env('FILESYSTEM_CLOUD', 's3'),

    /*
    |--------------------------------------------------------------------------
    | Filesystem Disks
    |--------------------------------------------------------------------------
    |
    | Here you may configure as many filesystem "disks" as you wish, and you
    | may even configure multiple disks of the same driver. Defaults have
    | been setup for each driver as an example of the required options.
    |
    | Supported Drivers: "local", "ftp", "sftp", "s3", "rackspace"
    |
    */

    'disks' => [
        'twill_media_library' => $s3Config,
        'twill_file_library'  => $s3Config,

        'local' => [
            'driver' => 'local',
            'root' => storage_path('app'),
        ],

        'public' => [
            'driver' => 'local',
            'root' => storage_path('app/public'),
            'url' => env('APP_URL').'/storage',
            'visibility' => 'public',
        ],

        's3' => [
            'driver' => 's3',
            'key' => env('AWS_ACCESS_KEY_ID'),
            'secret' => env('AWS_SECRET_ACCESS_KEY'),
            'region' => env('AWS_DEFAULT_REGION'),
            'bucket' => env('AWS_BUCKET'),
            'url' => env('AWS_URL'),
        ],

    ],

];
