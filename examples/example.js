fetch('https://tiktok-scraper-fast-stable1.p.rapidapi.com/api/v1/download?url=' + encodeURIComponent(tiktokUrl), {
  method: 'GET',
  headers: {
    'X-RapidAPI-Key': 'YOUR_RAPIDAPI_KEY',
    'X-RapidAPI-Host': 'tiktok-scraper-fast-stable1.p.rapidapi.com'
  }
})
.then(res => res.json())
.then(data => console.log(data));