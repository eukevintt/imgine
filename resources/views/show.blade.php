<x-layouts.layout>
    <div class="max-w-6xl mx-auto px-4 py-10 grid grid-cols-1 md:grid-cols-2 gap-10">
        <div>
            <img src="{{ $image['source'] === 'pexels' ? $image['image_large2x'] : ($image['source'] === 'unsplash' ? $image['image_regular'] : $image['image_large']) }}"
                alt="{{ $image['alt'] ?? '' }}" class="w-full h-auto rounded-xl shadow-md">
        </div>

        <div class="flex flex-col justify-center">
            <h2 class="text-2xl font-bold text-gray-900 mb-2">{{ $image['author'] }}</h2>
            <a href="{{ $image['author_url'] }}" target="_blank"
                class="inline-block w-fit text-primary hover:underline text-sm mb-6 hover:text-primary-200">{{ __('message.author_profile') }}</a>

            <span class="text-gray-700 text-base mb-6">
                {{ __('message.image_url') }} <a href="{{ $image['url'] }}"
                    class="color text-primary hover:underline hover:text-primary-200"
                    target="_blank">{{ $image['source'] }}</a></span>

            <div class="mb-6">
                <form action="{{ route('image.download', ['database' => 'pexels']) }}" method="POST">
                    @csrf
                    <label for="url" class="block text-sm font-medium text-gray-700 mb-1">Select size</label>
                    <select id="url" name="url"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-primary focus:ring focus:ring-primary-200 focus:ring-opacity-50 cursor-pointer">
                        @if ($image['source'] === 'pexels')
                            <option value="{{ $image['image_original'] }}">Original - {{ $image['width'] }} x
                                {{ $image['height'] }}</option>
                            <option value="{{ $image['image_large'] }}">{{ __('message.large') }}</option>
                            <option value="{{ $image['image_medium'] }}">{{ __('message.medium') }}</option>
                            <option value="{{ $image['image_small'] }}">{{ __('message.small') }}</option>
                            <option value="{{ $image['image_portrait'] }}">{{ __('message.portrait') }}</option>
                            <option value="{{ $image['image_landscape'] }}">{{ __('message.landscape') }}</option>
                            <option value="{{ $image['image_tiny'] }}">{{ __('message.tiny') }}</option>
                        @elseif ($image['source'] === 'unsplash')
                            <option value="{{ $image['image_raw'] }}">Original - {{ $image['width'] }} x
                                {{ $image['height'] }}</option>
                            <option value="{{ $image['image_full'] }}">{{ __('message.large') }}</option>
                            <option value="{{ $image['image_regular'] }}">{{ __('message.medium') }}</option>
                            <option value="{{ $image['image_small'] }}">{{ __('message.small') }}</option>
                            <option value="{{ $image['image_thumb'] }}">{{ __('message.tiny') }}</option>
                        @else
                            <option value="{{ $image['image_large'] }}">{{ __('message.large') }}</option>
                            <option value="{{ $image['image_web'] }}">{{ __('message.medium') }} -
                                {{ $image['image_web_width'] }} x {{ $image['image_web_height'] }}
                            </option>
                        @endif
                    </select>

                    <button type="submit"
                        class="w-full bg-primary rounded-lg mt-2 text-white font-medium p-4 hover:bg-primary-200 cursor-pointer duration-300 transition">{{ __('message.download') }}</button>
                </form>
            </div>

            <p class="text-gray-700 text-base leading-relaxed">
                {{ $image['alt'] ?? 'No description available' }}
            </p>
        </div>
    </div>
</x-layouts.layout>
