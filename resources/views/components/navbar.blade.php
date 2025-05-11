<nav class="bg-white border-b border-gray-200 ">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="{{ route('home') }}" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="{{ asset('images/logo-padrao.png') }}" class="w-20 h-20" alt="Flowbite Logo" />
        </a>
        <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
            <button type="button"
                class="text-white bg-primary duration-300 transition hover:bg-secondary   font-semibold rounded-lg text-sm px-4 py-2 text-center cursor-pointer hover:text-black font-ui">{{ __('message.get_started') }}</button>

            <button data-collapse-toggle="navbar-cta" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                aria-controls="navbar-cta" aria-expanded="false">

                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
        </div>

        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-cta">
            <ul
                class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row dark:bg-gray-900 md:dark:bg-transparent md:border-0">
                <li>
                    <a href="#"
                        class="block py-2 px-3 md:p-0 text-white bg-blue-700 rounded-sm md:bg-transparent md:text-primary"
                        aria-current="page">Home</a>
                </li>
                <li>
                    <a href="#"
                        class="block py-2 px-3 md:p-0 text-white rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:text-primary dark:hover:bg-gray-700 md:dark:hover:bg-transparent dark:border-gray-700 ">{{ __('message.generate') }}</a>
                </li>
                <li>
                    <a href="#"
                        class="block py-2 px-3 md:p-0 text-white rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:text-primary dark:hover:bg-gray-700 md:dark:hover:bg-transparent dark:border-gray-700 ">{{ __('message.about') }}</a>
                </li>
                <li>
                    <a href="#"
                        class="block py-2 px-3 md:p-0 text-white rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:text-primary dark:hover:bg-gray-700 md:dark:hover:bg-transparent dark:border-gray-700 ">{{ __('message.contact') }}</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
