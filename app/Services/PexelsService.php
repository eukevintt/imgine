<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class PexelsService
{
    public function search(string $query, int $page = 1, int $limit = 10)
    {
        $response = Http::withHeaders([
            'Authorization' => config('services.pexels.key'),
        ])->get('https://api.pexels.com/v1/search', [
            'query' => $query,
            'per_page' => $limit,
            'page' => $page,
        ]);

        if ($response->successful()) {
            $json = $response->json();
            return [
                'data' => collect($response->json()['photos'])->map(function ($item) {
                    return [
                        'source' => 'pexels',
                        'id'     => $item['id'],
                        'url'    => $item['url'],
                        'image'  => $item['src']['large2x'],
                        'author' => $item['photographer'],
                        'alt' => $item['alt'],
                    ];
                })->toArray(),
                'total' => $json['total_results']
            ];
        }

        return [];
    }
}
