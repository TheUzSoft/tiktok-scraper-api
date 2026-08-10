const axios = require('axios');

class TiktokScraperClient {
    constructor(apiKey) {
        this.apiKey = apiKey;
        this.host = "tiktok-scraper-fast-stable1.p.rapidapi.com";
        this.baseUrl = `https://${this.host}`;
    }

    async downloadVideo(videoUrl) {
        const response = await axios.get(`${this.baseUrl}/api/v1/download`, {
            params: { url: videoUrl },
            headers: {
                'X-RapidAPI-Key': this.apiKey,
                'X-RapidAPI-Host': this.host
            }
        });
        return response.data;
    }

    async downloadInstagram(igUrl) {
        const response = await axios.get(`${this.baseUrl}/api/v1/instagram/download`, {
            params: { url: igUrl },
            headers: {
                'X-RapidAPI-Key': this.apiKey,
                'X-RapidAPI-Host': this.host
            }
        });
        return response.data;
    }
}

module.exports = TiktokScraperClient;
