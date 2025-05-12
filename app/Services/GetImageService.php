<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class GetImageService
{
    public function getImage($database, $id)
    {
        if ($database === 'pexels') {
            $response = Http::withHeaders([
                'Authorization' => config('services.pexels.key'),
            ])->get('https://api.pexels.com/v1/photos/' . $id);

            if ($response->successful()) {
                $photo = $response->json();

                return [
                    'source' => 'pexels',
                    'width'     => $photo['width'],
                    'height'    => $photo['height'],
                    'url'    => $photo['url'],
                    'author' => $photo['photographer'],
                    'author_url' => $photo['photographer_url'],
                    'image_original'  => $photo['src']['original'],
                    'image_large2x'  => $photo['src']['large2x'],
                    'image_large'  => $photo['src']['large'],
                    'image_medium'  => $photo['src']['medium'],
                    'image_small'  => $photo['src']['small'],
                    'image_portrait'  => $photo['src']['portrait'],
                    'image_landscape'  => $photo['src']['landscape'],
                    'image_tiny'  => $photo['src']['tiny'],
                    'alt' => $photo['alt'],
                ];
            }

            return [];
        } elseif ($database === 'unsplash') {
            $key = 'Client-ID ' . config('services.unsplash.key');

            $response = Http::withHeaders([
                'Authorization' => $key,
            ])->get('https://api.unsplash.com/photos/' . $id);

            if ($response->successful()) {
                $photo = $response->json();

                return [
                    'source' => 'unsplash',
                    'width'     => $photo['width'],
                    'height'    => $photo['height'],
                    'alt' => $photo['description'],
                    'image_raw'  => $photo['urls']['raw'],
                    'image_full'  => $photo['urls']['full'],
                    'image_regular'  => $photo['urls']['regular'],
                    'image_small'  => $photo['urls']['small'],
                    'image_thumb'  => $photo['urls']['thumb'],
                    'url'    => $photo['links']['html'],
                    'author' => $photo['user']['name'],
                    'author_portfolio' => $photo['user']['portfolio_url'],
                    'author_url' => $photo['user']['links']['html'],
                ];
            }

            return [];
        } elseif ($database === 'pixabay') {
            $response = Http::get('https://pixabay.com/api/', [
                'key' => config('services.pixabay.key'),
                'id' => $id
            ]);

            if ($response->successful()) {
                $photo = $response->json('hits.0');

                return [
                    'source' => 'pixabay',
                    'url'    => $photo['pageURL'],
                    'image_web'  => $photo['webformatURL'],
                    'image_web_width'  => $photo['webformatWidth'],
                    'image_web_height'  => $photo['webformatHeight'],
                    'image_large'  => $photo['largeImageURL'],
                    'width'     => $photo['imageWidth'],
                    'height'    => $photo['imageHeight'],
                    'author' => $photo['user'],
                    'author_url' => 'https://pixabay.com/users/' . $photo['user'] . '-' . $photo['user_id'],
                ];
            }

            return [];
        }
    }
}
