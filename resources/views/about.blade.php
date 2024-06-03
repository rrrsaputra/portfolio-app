<x-layout>
<!-- Start Generation Here -->
<section class="bg-white dark:bg-gray-900">
    <div class="container mx-auto px-4 py-16">
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold text-gray-900 dark:text-white">About Me</h1>
            <p class="text-gray-600 dark:text-gray-400 mt-4">Get to know more about me and my journey.</p>
        </div>
        <div class="flex flex-col lg:flex-row items-center">
            <div class="lg:w-1/3 mb-8 lg:mb-0">
                <img class="rounded-full shadow-lg" src="{{ $about->profile_picture }}" alt="{{ $about->name }}">
            </div>
            <div class="lg:w-2/3 lg:pl-12">
                <h2 class="text-3xl font-semibold text-gray-900 dark:text-white">{{ $about->name }}</h2>
                <p class="text-gray-600 dark:text-gray-400 mt-4">{{ $about->bio }}</p>
                <div class="mt-6">
                    <h3 class="text-2xl font-semibold text-gray-900 dark:text-white">Contact Information</h3>
                    <p class="text-gray-600 dark:text-gray-400 mt-2"><strong>Email:</strong> {{ $about->email }}</p>
                    <p class="text-gray-600 dark:text-gray-400 mt-2"><strong>Phone:</strong> {{ $about->phone }}</p>
                </div>
                <div class="mt-6">
                    <a href="/contact" class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-white bg-primary-700 rounded-lg hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900">
                        Contact Me
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Generation Here -->

</x-layout>
