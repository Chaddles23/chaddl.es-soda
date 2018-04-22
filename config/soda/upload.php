<?php

return [
    'default' => 'soda-s3',

    'disks' => [
        'soda-local' => [
            'driver' => 'local',
            'root'   => public_path('uploads'),
        ],

        'soda-s3' => [
            'driver'     => 's3',
            'root'       => 'chaddl.es/uploads',
            'key'        => env('AWS_KEY'),
            'secret'     => env('AWS_SECRET'),
            'region'     => env('AWS_REGION'),
            'bucket'     => env('AWS_BUCKET', env('AWS_S3_BUCKET')),
            'visibility' => 'public',
        ],
    ],
];
