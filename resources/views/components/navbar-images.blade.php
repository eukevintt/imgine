<nav class="bg-white border-b border-gray-200 fixed top-0 left-0 w-full z-50">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <!-- Logo + Mobile toggle in one row -->
        <div class="flex items-center justify-between w-full md:w-auto">
            <a href="{{ route('home') }}" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="{{ asset('images/logo-padrao.png') }}" class="w-20 h-20" alt="Imgine Logo" />
            </a>
            <!-- Mobile hamburger icon -->
            <button data-collapse-toggle="navbar-cta" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
                aria-controls="navbar-cta" aria-expanded="false">
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
        </div>

        <!-- Search -->
        <div class="flex items-center gap-2 flex-grow max-w-xl mx-auto px-4">
            <form action="{{ route('images.search') }}" method="GET" class="relative flex flex-grow">
                <input type="text" name="query" value="{{ request('query') }}"
                    class="w-full pl-12 pr-28 py-2 border border-gray-300 rounded-full focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent shadow-sm placeholder-gray-500"
                    placeholder="{{ __('message.search_placeholder') }}">
                <svg class="absolute left-4 top-1/2 transform -translate-y-1/2 w-5 h-5 text-gray-400" fill="none"
                    stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M21 21l-4.35-4.35m0 0A7.5 7.5 0 1010.5 3a7.5 7.5 0 006.15 13.65z"></path>
                </svg>
                <button type="submit"
                    class="absolute right-1 top-1/2 -translate-y-1/2 px-4 py-1.5 text-white bg-primary rounded-full text-sm font-medium hover:bg-primary-200">
                    {{ __('message.search') }}
                </button>
            </form>
        </div>

        <!-- Desktop buttons -->
        <div class="hidden pt-5 md:pt-0 md:flex items-center space-x-6" id="navbar-cta">
            <ul class="flex flex-col md:flex-row font-medium space-y-2 md:space-y-0 md:space-x-6">
                <li>
                    <a href="#" class="text-primary hover:underline hover:underline-offset-4">
                        {{ __('message.generate') }}
                    </a>
                </li>
                <li>
                    <a href="#" class="text-primary hover:underline hover:underline-offset-4">
                        {{ __('message.about') }}
                    </a>
                </li>
                <li>
                    <a href="#" class="text-primary hover:underline hover:underline-offset-4">
                        {{ __('message.contact') }}
                    </a>
                </li>
            </ul>
            <button type="button"
                class="text-white bg-primary duration-300 transition hover:bg-primary-200 font-semibold rounded-lg text-sm px-4 py-2 text-center cursor-pointer hover:scale-110 font-ui mt-4 md:mt-0">
                {{ __('message.get_started') }}
            </button>
        </div>
    </div>
</nav>
