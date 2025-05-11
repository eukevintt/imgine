<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class UnsplashService
{
    public function search(string $query, int $page = 1, int $limit = 10)
    {
        $key = 'Client-ID ' . config('services.unsplash.key');


        $response = Http::withHeaders([
            'Authorization' => $key,
        ])->get('https://api.unsplash.com/search/photos', [
            'query' => $query,
            'per_page' => $limit,
            'page' => $page,
        ]);



        if ($response->successful()) {

            return collect($response->json()['results'])->map(function ($item) {
                return [
                    'source' => 'unsplash',
                    'id'     => $item['id'],
                    'url'    => $item['links']['html'],
                    'image'  => $item['urls']['regular'],
                    'author' => $item['user']['name'],
                ];
            })->toArray();
        }

        return [];
    }
}
