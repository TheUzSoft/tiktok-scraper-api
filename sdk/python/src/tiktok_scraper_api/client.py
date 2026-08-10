import requests

class TiktokScraperClient:
    def __init__(self, api_key: str):
        self.api_key = api_key
        self.host = "tiktok-scraper-fast-stable1.p.rapidapi.com"
        self.base_url = f"https://{self.host}"
        
    def download_video(self, video_url: str) -> dict:
        headers = {
            "X-RapidAPI-Key": self.api_key,
            "X-RapidAPI-Host": self.host
        }
        params = {"url": video_url}
        response = requests.get(f"{self.base_url}/api/v1/download", headers=headers, params=params)
        response.raise_for_status()
        return response.json()

    def download_instagram(self, ig_url: str) -> dict:
        headers = {
            "X-RapidAPI-Key": self.api_key,
            "X-RapidAPI-Host": self.host
        }
        params = {"url": ig_url}
        response = requests.get(f"{self.base_url}/api/v1/instagram/download", headers=headers, params=params)
        response.raise_for_status()
        return response.json()
