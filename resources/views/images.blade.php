<x-layouts.layout>
    <div class="columns-1 sm:columns-2 md:columns-3 lg:columns-4 gap-4 space-y-4 p-4">
        @foreach ($images as $image)
            <div
                class="break-inside-avoid rounded-lg overflow-hidden shadow-md hover:scale-105 transition-transform duration-300">
                <img src="{{ $image['image'] }}" alt="" class="w-full h-auto rounded-lg">
            </div>
        @endforeach
    </div>
    <div class="mt-10 border-b border-gray-200"></div>
    <div class="p-10 ">
        {{ $images->links() }}
    </div>
</x-layouts.layout>
