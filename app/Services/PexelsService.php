<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class PexelsService
{
    public function search(string $query, int $limit = 10)
    {
        $response = Http::withHeaders([
            'Authorization' => config('services.pexels.key'),
        ])->get('https://api.pexels.com/v1/search', [
            'query' => $query,
            'per_page' => $limit,
        ]);

        if ($response->successful()) {
            return collect($response->json()['photos'])->map(function ($item) {
                return [
                    'source' => 'pexels',
                    'id'     => $item['id'],
                    'url'    => $item['url'],
                    'image'  => $item['src']['medium'],
                    'author' => $item['photographer'],
                ];
            })->toArray();
        }

        return [];
    }
}
