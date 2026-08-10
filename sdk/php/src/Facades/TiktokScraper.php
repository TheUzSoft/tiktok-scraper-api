<?php

namespace TheUzSoft\\TiktokScraper\Facades;

use Illuminate\Support\Facades\Facade;

class TiktokScraper extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'tiktok-scraper-client';
    }
}
