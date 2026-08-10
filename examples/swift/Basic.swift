import Foundation

var request = URLRequest(url: URL(string: "https://tiktok-scraper-fast-stable1.p.rapidapi.com")!)
request.addValue("YOUR_RAPIDAPI_KEY", forHTTPHeaderField: "X-RapidAPI-Key")
request.addValue("tiktok-scraper-fast-stable1.p.rapidapi.com", forHTTPHeaderField: "X-RapidAPI-Host")
request.httpMethod = "GET"

let session = URLSession.shared
let task = session.dataTask(with: request) { data, response, error in
    if let data = data {
        print(String(data: data, encoding: .utf8)!)
    }
}
task.resume()
