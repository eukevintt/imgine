<x-layouts.layout>
    @foreach ($images as $image)
        <div class="flex flex-col items-center justify-center py-16 px-4 sm:px-6 lg:px-8 text-center space-y-8">
            <img src="{{ $image['image'] }}" alt="">

            <p>Essa imagem veio de <span class="bold">{{ $image['source'] }}</span></p>
        </div>
    @endforeach
</x-layouts.layout>
