<x-layouts.layout title="About - Imgine">
    <section class="py-16 px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mx-auto text-center">
            <h1 class="text-4xl font-bold text-gray-900 mb-10">{{ __('message.about_title') }}</h1>
        </div>

        <div class="max-w-3xl mx-auto space-y-6 text-gray-700 text-lg leading-relaxed text-justify">
            <p>
                {{ __('message.about_text_one') }}
            </p>
            <p>
                {{ __('message.about_text_two') }}
            </p>
            <p>
                {{ __('message.about_text_three') }}
            </p>
            <p>
                {{ __('message.about_text_four') }}
            </p>
        </div>
    </section>

    <section class="bg-white py-16 px-4 sm:px-6 lg:px-8">
        <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <div>
                <h2 class="text-3xl font-bold text-gray-900 mb-4">{{ __('message.about_creator') }}</h2>
                <p class="text-gray-700 mb-4 leading-relaxed">
                    {!! __('message.presentation', ['name' => '<strong>Kevin Araujo</strong>']) !!}
                </p>
                <p class="text-gray-700 mb-4 leading-relaxed">
                    {{ __('message.support') }} <a href=""
                        class="text-primary hover:underline">{{ __('message.donation') }}</a>. {!! __('message.support_two', [
                            'github' =>
                                '<a href="https://github.com/eukevintt/imgine" target="_blank" class="text-primary hover:underline">Github</a>.',
                        ]) !!}
                </p>

                <div class="mt-6 flex space-x-6">
                    <a href="https://github.com/eukevintt" target="_blank"
                        class="text-gray-600 hover:text-primary text-xl">
                        <i class="fab fa-github"></i>
                    </a>
                    <a href="https://www.instagram.com/eukevintt" target="_blank"
                        class="text-gray-600 hover:text-primary text-xl">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="https://www.linkedin.com/in/kevin-araujo-3b19b314b/" target="_blank"
                        class="text-gray-600 hover:text-primary text-xl">
                        <i class="fab fa-linkedin"></i>
                    </a>
                </div>
            </div>

            <div class="flex justify-center">
                <img src="{{ asset('images/creator-imgine.jpg') }}" alt="Kevin Araujo"
                    class="w-64 h-64 rounded-lg object-cover shadow-md">
            </div>
        </div>
    </section>

</x-layouts.layout>
