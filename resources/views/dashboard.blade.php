<x-layouts.layout title="Home - Imgine">

    <div class="flex flex-col items-center justify-center py-16 px-4 sm:px-6 lg:px-8 text-center space-y-8">
        <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-gray-900">
            {{ __('message.welcome') }}
        </h1>

        <form action="{{ route('images.search') }}" method="get"
            class="w-full max-w-xl flex items-center rounded-xl bg-gray-100 px-4 py-2 shadow-sm hover:scale-105 transition-transform duration-300">
            <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M21 21l-4.35-4.35m0 0A7.5 7.5 0 1010.5 3a7.5 7.5 0 006.15 13.65z">
                </path>
            </svg>

            <input type="text" placeholder="{{ __('message.search_placeholder') }}"
                class="w-full bg-transparent focus:ring-0 focus:outline-none border-0 px-3 py-2 text-gray-700"
                name="query" id="query" />
            <button type="submit"
                class="ml-2 px-4 py-2 text-white bg-primary duration-300 hover:bg-primary-200 cursor-pointer rounded-lg font-medium text-sm">
                {{ __('message.search') }}
            </button>

        </form>

        <a href=""
            class="mt-4 px-6 py-3 bg-primary text-white rounded-xl font-medium duration-300 hover:bg-primary-200 transition">
            {{ __('message.generate') }}
        </a>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 mb-20">
        <h2 class="text-2xl font-semibold text-gray-900 mb-6 text-center">
            {{ __('message.curated_title') }}</h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
            @foreach ($curated_photos as $photo)
                <div class="overflow-hidden rounded-lg shadow-md hover:scale-105 transition-transform duration-300">
                    <a href="{{ route('images.show', ['database' => $photo['source'], 'id' => $photo['id']]) }}">
                        <img src="{{ $photo['image'] }}" alt="{{ $photo['alt'] ?? 'Image' }}"
                            class="w-full h-full object-cover">
                    </a>
                </div>
            @endforeach
        </div>
    </div>

</x-layouts.layout>
