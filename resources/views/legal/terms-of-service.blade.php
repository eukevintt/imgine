<x-layouts.layout>
    <section class="py-16 px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mx-auto">
            <h1 class="text-4xl font-bold text-gray-900 mb-8">{{ __('message.terms_of_service') }}</h1>

            <div class="space-y-6 text-gray-700 text-base leading-relaxed text-justify">
                <p>
                    {{ __('message.terms_subtitle') }}
                </p>

                <h2 class="text-2xl font-semibold text-gray-900 mt-6">{{ __('message.terms_one') }}</h2>
                <p>
                    {{ __('message.terms_one_text') }}
                </p>

                <h2 class="text-2xl font-semibold text-gray-900 mt-6">{{ __('message.terms_two') }}</h2>
                <p>
                    {{ __('message.terms_two_text') }}
                </p>

                <h2 class="text-2xl font-semibold text-gray-900 mt-6">{{ __('message.terms_three') }}</h2>
                <p>
                    {{ __('message.terms_three_text') }}
                </p>

                <h2 class="text-2xl font-semibold text-gray-900 mt-6">{{ __('message.terms_four') }}</h2>
                <p>
                    {{ __('message.terms_four_text') }}
                </p>

                <h2 class="text-2xl font-semibold text-gray-900 mt-6">{{ __('message.terms_five') }}</h2>
                <p>
                    {{ __('message.terms_five_text') }}
                </p>

                <h2 class="text-2xl font-semibold text-gray-900 mt-6">{{ __('message.terms_six') }}</h2>
                <p>
                    {{ __('message.terms_six_text') }}
                </p>

                <h2 class="text-2xl font-semibold text-gray-900 mt-6">{{ __('message.terms_seven') }}</h2>
                <p>
                    {{ __('message.terms_seven_text') }} <a href="{{ route('contact') }}"
                        class="text-primary hover:underline">{{ __('message.contact_form') }}</a>.
                </p>
            </div>
        </div>
    </section>
</x-layouts.layout>
