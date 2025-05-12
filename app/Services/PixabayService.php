<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class PixabayService
{
    public function search(string $query, int $page = 1, int $limit = 10)
    {
        $response = Http::get('https://pixabay.com/api/', [
            'key' => config('services.pixabay.key'),
            'q' => $query,
            'per_page' => $limit,
            'page' => $page,
        ]);

        if ($response->successful()) {
            return [
                'data' => collect($response->json()['hits'])->map(function ($item) {
                    return [
                        'source' => 'pixabay',
                        'id'     => $item['id'],
                        'url'    => $item['pageURL'],
                        'image'  => $item['webformatURL'],
                        'author' => $item['user'],
                    ];
                })->toArray(),
                'total' => $response->json()['totalHits'] ?? 0
            ];
        }

        return [];
    }
}
