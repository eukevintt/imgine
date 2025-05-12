<?php

namespace App\Http\Controllers;

use App\Services\GetImageService;
use App\Services\PexelsService;
use App\Services\UnsplashService;
use App\Services\PixabayService;

use Illuminate\Support\Facades\Http;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use PHPUnit\Event\Runtime\PHP;

class ImagesAPIController extends Controller
{

    public function index()
    {
        $pexels = Http::withHeaders([
            'Authorization' => config('services.pexels.key'),
        ])->get('https://api.pexels.com/v1/curated', [
            'per_page' => 8,
            'page' => 1
        ]);

        $pexelsPhotos = collect($pexels->json()['photos'])->map(function ($photo) {
            return [
                'source' => 'pexels',
                'id' => $photo['id'],
                'url' => $photo['url'],
                'image' => $photo['src']['large2x'],
                'alt' => $photo['alt'] ?? '',
            ];
        });

        $unsplash = Http::withHeaders([
            'Authorization' => 'Client-ID ' . config('services.unsplash.key'),
        ])->get('https://api.unsplash.com/photos', [
            'per_page' => 7,
            'page' => 1
        ]);

        $unsplashPhotos = collect($unsplash->json())->map(function ($photo) {
            return [
                'source' => 'unsplash',
                'id' => $photo['id'],
                'url' => $photo['links']['html'],
                'image' => $photo['urls']['regular'],
                'alt' => $photo['alt_description'] ?? '',
            ];
        });

        $curated_photos = $pexelsPhotos->merge($unsplashPhotos)->shuffle();

        return view('dashboard', compact('curated_photos'));
    }


    public function searchImages(Request $request)
    {
        $query = $request->query('query');
        $page = $request->query('page', 1);
        $perPage = 15;

        $pexels = app(PexelsService::class)->search($query, $page);
        $unsplash = app(UnsplashService::class)->search($query, $page);
        $pixabay = app(PixabayService::class)->search($query, $page);

        $imagesArray = array_merge(
            $pexels['data'] ?? [],
            $unsplash['data'] ?? [],
            $pixabay['data'] ?? []
        );

        $collection = collect($imagesArray);

        $totalResults = ($pexels['total'] ?? 0) + ($unsplash['total'] ?? 0) + ($pixabay['total'] ?? 0);

        $paginatedImages = new LengthAwarePaginator(
            $collection,
            $totalResults,
            $perPage,
            $page,
            ['path' => url()->current(), 'query' => $request->query()]
        );

        return view('images', ['images' => $paginatedImages]);
    }

    public function show($database, $id)
    {
        $image = app(GetImageService::class)->getImage($database, $id);

        return view('show', ['image' => $image]);
    }

    public function download($database, Request $request)
    {
        $url = $request->input('url');

        $content = file_get_contents($url);
        $filename = basename(parse_url($url, PHP_URL_PATH)) ?: 'image.jpg';

        if (!preg_match('/\.(jpe?g|png|gif|webp)$/i', $filename)) {
            $filename .= '.jpg';
        }

        return response($content)
            ->header('Content-Type', 'image/jpeg')
            ->header('Content-Disposition', 'attachment; filename="' . $filename . '"');
    }
}
