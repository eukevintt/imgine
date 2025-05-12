<footer class="bg-gray-900">
    <div class="mx-auto w-full max-w-screen-xl p-2 py-6 lg:py-8">
        <div class="md:flex flex-col md:flex-row md:justify-between items-center">
            <div class="mb-9 md:mb-0 max-w-60 flex flex-col items-center">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('images/avatar-metade-branco.png') }}" alt="Logo"
                        class="w-25 h-25 block mb-2 hover:rotate-10 duration-400 transition" />
                </a>

                <p class="text-center font-normal text-base mt-0 leading-tight text-white">
                    {{ __('message.message_footer') }}
                </p>
            </div>

            <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Imgine</h2>
                    <ul class="text-gray-500 dark:text-gray-400 font-medium">
                        <li class="mb-2">
                            <a href="{{ route('home') }}" class="hover:underline">Home</a>
                        </li>
                        <li class="mb-2">
                            <a href="" class="hover:underline">{{ __('message.generate') }}</a>
                        </li>
                        <li class="mb-2">
                            <a href="{{ route('about') }}" class="hover:underline">{{ __('message.about') }}</a>
                        </li>
                        <li>
                            <a href="" class="hover:underline">{{ __('message.contact') }}</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Support Us</h2>
                    <ul class="text-gray-500 dark:text-gray-400 font-medium">
                        <li class="mb-2">
                            <a href="https://github.com/eukevintt/imgine" target="_blank"
                                class="hover:underline">Github</a>
                        </li>
                        <li>
                            <a href="https://discord.gg/4eeurUVvTy" class="hover:underline">Donations</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Legal</h2>
                    <ul class="text-gray-500 dark:text-gray-400 font-medium">
                        <li class="mb-2">
                            <a href="{{ route('privacy-policy') }}"
                                class="hover:underline">{{ __('message.privacy_policy') }}</a>
                        </li>
                        <li>
                            <a href="{{ route('terms-of-service') }}"
                                class="hover:underline">{{ __('message.terms_of_service') }}</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
        <div class="sm:flex sm:items-center sm:justify-center">
            <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2025 <a href="https://flowbite.com/"
                    class="hover:underline">Imgine™</a>. All Rights Reserved.
            </span>
        </div>
    </div>
</footer>
