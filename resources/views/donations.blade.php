<x-layouts.layout title="Support Us - Imgine">
    <div class="max-w-5xl mx-auto px-4 py-16 text-center">
        <h1 class="text-4xl font-bold mb-6">{{ __('message.donations_title') }}</h1>
        <p class="text-lg text-gray-600 mb-10">
            {{ __('message.donations_description') }}
        </p>

        <div class="grid grid-cols-1 sm:grid-cols-3 gap-8 text-left">
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-xl font-semibold mb-2">Bitcoin (BTC)</h2>
                <p class="text-sm text-gray-600 mb-2">Endereço On-Chain:</p>
                <div class="bg-gray-100 p-3 rounded break-all text-sm font-mono">
                    bc1qpt3s9mh6mua409lmwq96vg4sxmvaxsngsmtntr
                </div>

                <p class="text-sm text-gray-600 mb-2">Endereço Lightning:</p>
                <div class="bg-gray-100 p-3 rounded break-all text-sm font-mono">
                    eukevintt@coinos.io
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-xl font-semibold mb-2">Ethereum (ETH)</h2>
                <p class="text-sm text-gray-600 mb-2">Endereço:</p>
                <div class="bg-gray-100 p-3 rounded break-all text-sm font-mono">
                    0xa4E815977884c6332147CF0E02cBFF7aea120392
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-xl font-semibold mb-2">Solana (SOL)</h2>
                <p class="text-sm text-gray-600 mb-2">Endereço:</p>
                <div class="bg-gray-100 p-3 rounded break-all text-sm font-mono">
                    4TmQ1CJEyk4EWcAwmTiJiEwohMcquZrfx53Acgg8rPBo
                </div>
            </div>
        </div>

        <p class="mt-10 text-sm text-gray-500">
            {{ __('message.donations_future') }}
        </p>
    </div>
</x-layouts.layout>
