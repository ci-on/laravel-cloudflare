<?php

return [

    /*
     * API key generated on the "My Profile" page located when clicking
     * on the profile picture in the top right corner.
     */
    'key' => env('CLOUDFLARE_KEY'),

    /*
     * The email address you use to log yourself into Cloudflare.
     */
    'email' => env('CLOUDFLARE_EMAIL'),

    /*
     * Each zone must have its identifier as a key. This "Zone ID"
     * can be found when navigating to the Overview page of the domain
     * that you would like to work with.
     *
     * It is an associated array with *optional* arrays of files
     * and/or tags. If nothing is provided, then everything will be
     * purged.
     *
     * E.g.
     *
     * '023e105f4ecef8ad9ca31a8372d0c353' => [
     *      'files' => [
     *          'http://example.com/css/app.css',
     *      ],
     *      'tags' => [
     *          'styles',
     *          'scripts',
     *      ],
     *      'hosts' => [
     *          'www.example.com',
     *          'images.example.com',
     *      ],
     * ],
     */
    'zones' => [
        //
    ],
];
