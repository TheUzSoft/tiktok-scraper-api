package main

import (
	"fmt"
	"net/http"
	"io"
)

func main() {
	url := "https://tiktok-scraper-fast-stable1.p.rapidapi.com"
	req, _ := http.NewRequest("GET", url, nil)

	req.Header.Add("X-RapidAPI-Key", "YOUR_RAPIDAPI_KEY")
	req.Header.Add("X-RapidAPI-Host", "tiktok-scraper-fast-stable1.p.rapidapi.com")

	res, _ := http.DefaultClient.Do(req)
	defer res.Body.Close()
	body, _ := io.ReadAll(res.Body)

	fmt.Println(string(body))
}
