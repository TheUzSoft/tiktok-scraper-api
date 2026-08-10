require 'uri'
require 'net/http'

url = URI("https://tiktok-scraper-fast-stable1.p.rapidapi.com")

http = Net::HTTP.new(url.host, url.port)
http.use_ssl = true

request = Net::HTTP::Get.new(url)
request["X-RapidAPI-Key"] = 'YOUR_RAPIDAPI_KEY'
request["X-RapidAPI-Host"] = 'tiktok-scraper-fast-stable1.p.rapidapi.com'

response = http.request(request)
puts response.read_body
