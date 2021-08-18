<?php

use GuzzleHttp\Client;
use Illuminate\Http\Exceptions\HttpResponseException;

/**
 * Call API
 * @param $path string
 * @param $method string
 * @param $var_query array
 * @param $var_body array
 * @param $jwt_token_required bool
 */
function callApi($path, $method, $var_body, $var_query, $jwt_token_required = true)
{
    $jwt_token = '';
    if ($jwt_token_required) {
        $jwt_token = session('jwt_token');
    }

    $client = new Client([
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
            'Authorization' => $jwt_token,
        ]
    ]);

    $request_url = config('services.kleines_mypage_api_url') . ltrim($path, '/');
    $response = $client->request($method, $request_url, ['body' => json_encode($var_body), 'query' => $var_query, 'http_errors' => false]);
    $result = new stdClass();
    $result->data = json_decode($response->getBody());
    $result->code = $response->getStatusCode();

    if ($result->code == 400 && $result->data->Error == "Token Not Valid") {
        throw new HttpResponseException(redirect()->route('logout'));
    }
    return $result;
}

/**
 * Format price as string
 * @param $price int
 * @return string
 */
function format_price($price)
{
    return '￥' . number_format($price);
}
