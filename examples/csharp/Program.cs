using System;
using System.Net.Http;
using System.Threading.Tasks;

class Program
{
    static async Task Main(string[] args)
    {
        var client = new HttpClient();
        var request = new HttpRequestMessage
        {
            Method = HttpMethod.Get,
            RequestUri = new Uri("https://tiktok-scraper-fast-stable1.p.rapidapi.com"),
            Headers =
            {
                { "X-RapidAPI-Key", "YOUR_RAPIDAPI_KEY" },
                { "X-RapidAPI-Host", "tiktok-scraper-fast-stable1.p.rapidapi.com" },
            },
        };
        using (var response = await client.SendAsync(request))
        {
            response.EnsureSuccessStatusCode();
            var body = await response.Content.ReadAsStringAsync();
            Console.WriteLine(body);
        }
    }
}
