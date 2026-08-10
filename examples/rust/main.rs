use reqwest::header::HeaderMap;

#[tokio::main]
async fn main() -> Result<(), reqwest::Error> {
    let mut headers = HeaderMap::new();
    headers.insert("X-RapidAPI-Key", "YOUR_RAPIDAPI_KEY".parse().unwrap());
    headers.insert("X-RapidAPI-Host", "tiktok-scraper-fast-stable1.p.rapidapi.com".parse().unwrap());

    let client = reqwest::Client::new();
    let res = client.get("https://tiktok-scraper-fast-stable1.p.rapidapi.com")
        .headers(headers)
        .send()
        .await?;

    let body = res.text().await?;
    println!("{}", body);
    Ok(())
}
