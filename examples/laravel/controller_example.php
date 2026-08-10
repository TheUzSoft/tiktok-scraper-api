<?php

// 1. Installation via composer
// composer require theuzsoft/tiktok-scraper-api-sdk

// 2. Add your RAPIDAPI_KEY to your .env file:
// RAPIDAPI_KEY=your_rapidapi_key_here

// 3. Example usage in a Laravel Controller:
namespace App\Http\Controllers;

use TheUzSoft\\TiktokScraper\Facades\TiktokScraper;
use Illuminate\Http\Request;

class ApiTestController extends Controller
{
    public function index()
    {
        try {
            // Using the Facade to execute request
            $result = TiktokScraper::downloadVideo('https://www.tiktok.com/@user/video/123');
            return response()->json($result);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
