import requests

url = "https://tiktok-scraper-fast-stable1.p.rapidapi.com/api/v1/download"
querystring = {"url": "YOUR_TIKTOK_URL"}
headers = {
    "X-RapidAPI-Key": "YOUR_RAPIDAPI_KEY",
    "X-RapidAPI-Host": "tiktok-scraper-fast-stable1.p.rapidapi.com"
}

response = requests.get(url, headers=headers, params=querystring)
print(response.json())