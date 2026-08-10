# Error Responses

Our API standardizes error responses. When a request fails, you will receive a corresponding HTTP status code along with a JSON body explaining the error.

## Error Codes
* **400 Bad Request**: Missing or invalid parameters (e.g., malformed URL).
* **403 Forbidden**: Invalid or missing `X-RapidAPI-Key` or unpaid subscription status.
* **405 Method Not Allowed**: Using an unsupported HTTP method on the endpoint.
* **429 Too Many Requests**: You have exceeded the rate limit of your current plan.
* **500 Internal Server Error**: Target service blocked the query, timed out, or has temporary issues.

## Error Format
```json
{
  "status": "error",
  "message": "Detailed description of the error."
}
```
