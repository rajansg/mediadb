<?php

/*
 * This file is part of Laravel Hashids.
 *
 * (c) Vincent Klaiber <hello@doubledip.se>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

use App\Models\Collection;
use App\Models\Media;
use App\Models\Tag;

return [
    /*
    |--------------------------------------------------------------------------
    | Default Connection Name
    |--------------------------------------------------------------------------
    |
    | Here you may specify which of the connections below you wish to use as
    | your default connection for all work. Of course, you may use many
    | connections at once using the manager class.
    |
    */

    'default' => null,

    /*
    |--------------------------------------------------------------------------
    | Hashids Connections
    |--------------------------------------------------------------------------
    |
    | Here are each of the connections setup for your application. Example
    | configuration has been included, but you may add as many connections as
    | you would like.
    |
    */

    'connections' => [
        Collection::class => [
            'salt' => 'fb226emj467sfsjni6dccw78gjj782sw',
            'length' => '12',
        ],

        Media::class => [
            'salt' => 'yk53ywzm5bfhxcychc3w65eyd3hvdvvr',
            'length' => '12',
        ],

        Tag::class => [
            'salt' => 'bjcgme4mqsqu73qufnn9cd5penuaqkc2',
            'length' => '12',
        ],
    ],
];
