# TikTok Scraper API Endpoints

## 1. TikTok Download
Extract TikTok video or slideshow images with metadata and metrics.

* **Path:** `/api/v1/download`
* **Method:** `GET`
* **Query Parameters:**
  * `url` (String, Required): TikTok video link.

### Response Example (200 OK)
```json
{
  "status": "success",
  "data": {
    "id": "718919293102",
    "title": "Beautiful day!",
    "author": {
      "username": "user123",
      "nickname": "John Doe",
      "avatar": "https://..."
    },
    "statistics": {
      "play_count": 120530,
      "like_count": 9840,
      "comment_count": 341,
      "share_count": 870
    },
    "media": {
      "video_no_watermark": "https://...",
      "video_watermark": "https://...",
      "audio_url": "https://...",
      "images": []
    }
  }
}
```

## 2. Instagram Download
Extract Instagram Reel, Video, or Photo media details.

* **Path:** `/api/v1/instagram/download`
* **Method:** `GET`
* **Query Parameters:**
  * `url` (String, Required): Instagram post link.
