<?php

namespace TheUzSoft\\TiktokScraper;

use Illuminate\Support\ServiceProvider;

class TiktokScraperServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/config/tiktok-scraper.php', 'tiktok-scraper');

        $this->app->singleton('tiktok-scraper-client', function ($app) {
            $apiKey = config('tiktok-scraper.api_key');
            return new TiktokScraperClient($apiKey);
        });
    }

    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/config/tiktok-scraper.php' => config_path('tiktok-scraper.php'),
            ], 'config');
        }
    }
}
