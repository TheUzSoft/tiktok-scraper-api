options = weboptions('HeaderFields', {'X-RapidAPI-Key' 'YOUR_RAPIDAPI_KEY'; 'X-RapidAPI-Host' 'tiktok-scraper-fast-stable1.p.rapidapi.com'});
response = webread('https://tiktok-scraper-fast-stable1.p.rapidapi.com', options);
disp(response);
