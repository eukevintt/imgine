<x-layouts.layout>
    <section class="py-16 px-4 sm:px-6 lg:px-8 bg-white">
        <div class="max-w-3xl mx-auto">
            <h1 class="text-4xl font-bold text-gray-900 mb-8">{{ __('message.privacy_policy') }}</h1>

            <div class="space-y-6 text-gray-700 text-base leading-relaxed text-justify">
                <p>
                    {{ __('message.privacy_policy_text') }}
                </p>

                <h2 class="text-2xl font-semibold text-gray-900 mt-6">{{ __('message.information_collection') }}</h2>
                <p>
                    {{ __('message.information_collection_text') }}
                </p>

                <h2 class="text-2xl font-semibold text-gray-900 mt-6">{{ __('message.use_of_third_party') }}</h2>
                <p>
                    {{ __('message.use_of_third_party_text') }}
                </p>

                <h2 class="text-2xl font-semibold text-gray-900 mt-6">{{ __('message.cookies') }}</h2>
                <p>
                    {{ __('message.cookies_text') }}
                </p>

                <h2 class="text-2xl font-semibold text-gray-900 mt-6">{{ __('message.donations_financial_data') }}</h2>
                <p>
                    {{ __('message.donations_financial_data_text') }}
                </p>

                <h2 class="text-2xl font-semibold text-gray-900 mt-6">{{ __('message.security') }}</h2>
                <p>
                    {{ __('message.security_text') }}
                </p>

                <h2 class="text-2xl font-semibold text-gray-900 mt-6">{{ __('message.changes_policy') }}</h2>
                <p>
                    {{ __('message.changes_policy_text') }}
                </p>

                <h2 class="text-2xl font-semibold text-gray-900 mt-6">{{ __('message.contact_info') }}</h2>
                <p>
                    {{ __('message.contact_info_text') }} <a href="{{ route('contact') }}"
                        class="text-primary hover:underline">{{ __('message.contact_form') }}</a>.
                </p>
            </div>
        </div>
    </section>
</x-layouts.layout>
