<?php

namespace TheUzSoft\TiktokScraper;

class TiktokScraperClient
{
    protected $apiKey;
    protected $host = 'tiktok-scraper-fast-stable1.p.rapidapi.com';
    protected $baseUrl = 'https://tiktok-scraper-fast-stable1.p.rapidapi.com';

    public function __construct(string $apiKey)
    {
        $this->apiKey = $apiKey;
    }

    public function downloadVideo(string $videoUrl): array
    {
        return $this->sendRequest('/api/v1/download', ['url' => $videoUrl]);
    }

    public function downloadInstagram(string $igUrl): array
    {
        return $this->sendRequest('/api/v1/instagram/download', ['url' => $igUrl]);
    }

    protected function sendRequest(string $endpoint, array $params): array
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->baseUrl . $endpoint . '?' . http_build_query($params));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'X-RapidAPI-Key: ' . $this->apiKey,
            'X-RapidAPI-Host: ' . $this->host,
            'Accept: application/json'
        ]);

        $response = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        if ($httpCode !== 200) {
            throw new \Exception("API returned error code " . $httpCode . ": " . $response);
        }

        return json_decode($response, true);
    }
}
