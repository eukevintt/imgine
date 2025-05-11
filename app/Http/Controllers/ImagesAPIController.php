<?php

namespace App\Http\Controllers;

use App\Services\PexelsService;
use App\Services\UnsplashService;
use App\Services\PixabayService;

use Illuminate\Support\Facades\Http;

use Illuminate\Http\Request;

class ImagesAPIController extends Controller
{

    public function index()
    {
        $response = Http::withHeaders(
            [
                'Authorization' => config('services.pexels.key'),
            ]
        )->get('https://api.pexels.com/v1/curated', [
            'per_page' => 15,
            'page' => 1
        ]);

        $curated_photos = $response->json()['photos'];

        return view('dashboard', compact('curated_photos'));
    }

    public function searchImages(Request $request)
    {

        $query = $request->query('query');
        $page = $request->query('page', 1);

        $pexels = app(PexelsService::class)->search($query, $page);
        $unsplash = app(UnsplashService::class)->search($query, $page);
        $pixabay = app(PixabayService::class)->search($query, $page);

        $images = array_merge($pexels, $unsplash, $pixabay);

        return view('images', compact('images'));
    }
}
