<x-layouts.layout>

    <div class="flex flex-col items-center justify-center py-16 px-4 sm:px-6 lg:px-8 text-center space-y-8">
        <!-- Título -->
        <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-gray-900">
            Bem vindo ao imgine
        </h1>

        <!-- Campo de busca com botão -->

        <form action="{{ route('images.search') }}" method="get"
            class="w-full max-w-xl flex items-center rounded-xl bg-gray-100 px-4 py-2 shadow-sm">
            <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M21 21l-4.35-4.35m0 0A7.5 7.5 0 1010.5 3a7.5 7.5 0 006.15 13.65z">
                </path>
            </svg>

            <input type="text" placeholder="Search images"
                class="w-full bg-transparent focus:ring-0 focus:outline-none border-0 px-3 py-2 text-gray-700"
                name="query" id="query" />
            <button type="submit"
                class="ml-2 px-4 py-2 text-white bg-blue-600 hover:bg-blue-700 rounded-lg font-medium text-sm">
                Search
            </button>

        </form>


        <!-- Botão amarelo -->
        <button class="mt-4 px-6 py-3 bg-yellow-100 text-gray-900 rounded-xl font-medium shadow-sm hover:bg-yellow-200">
            Generate with AI
        </button>
    </div>

</x-layouts.layout>
