$headers = @{
    "X-RapidAPI-Key" = "YOUR_RAPIDAPI_KEY"
    "X-RapidAPI-Host" = "tiktok-scraper-fast-stable1.p.rapidapi.com"
}
$response = Invoke-RestMethod -Uri "https://tiktok-scraper-fast-stable1.p.rapidapi.com" -Headers $headers -Method Get
Write-Output $response
