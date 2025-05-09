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
        return view('dashboard');
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
