<x-layouts.layout>
    <section class="min-h-screen bg-background-primary flex flex-col items-center justify-center px-4 py-16">
        <h1 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-10 text-center">Contact</h1>

        <div class="w-full max-w-lg bg-white p-8 rounded-xl shadow-md">
            <form action="{{ route('contact.submit') }}" method="POST" class="space-y-6">
                @csrf

                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Name</label>
                    <input type="text" name="name" id="name" required
                        class="w-full rounded-lg border border-gray-300 px-4 py-2 shadow-sm focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent"
                        placeholder="Name">
                </div>

                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                    <input type="email" name="email" id="email" required
                        class="w-full rounded-lg border border-gray-300 px-4 py-2 shadow-sm focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent"
                        placeholder="Email">
                </div>

                <div>
                    <label for="message" class="block text-sm font-medium text-gray-700 mb-1">Message</label>
                    <textarea name="message" id="message" rows="5" required
                        class="w-full rounded-lg border border-gray-300 px-4 py-2 shadow-sm focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent"
                        placeholder="Write your message here..."></textarea>
                </div>

                <div class="text-right">
                    <button type="submit"
                        class="bg-primary text-white font-semibold px-6 py-2 rounded-lg hover:bg-primary-200 duration-300 cursor-pointer transition w-full">
                        Send
                    </button>
                </div>
            </form>
        </div>
    </section>
</x-layouts.layout>
