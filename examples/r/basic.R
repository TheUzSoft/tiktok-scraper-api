library(httr)

url <- "https://tiktok-scraper-fast-stable1.p.rapidapi.com"
headers <- c(
  `X-RapidAPI-Key` = 'YOUR_RAPIDAPI_KEY',
  `X-RapidAPI-Host` = 'tiktok-scraper-fast-stable1.p.rapidapi.com'
)

res <- GET(url, add_headers(.headers=headers))
content(res, "text")
