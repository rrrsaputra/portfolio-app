<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add New Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <div class="flex justify-end m-2 p-2">
                        <a href="{{ route('abouts.index') }}"
                            class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 text-white rounded-md shadow-md">
                            Back
                        </a>
                    </div>

                    <form method="POST" action="{{ route('abouts.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="my-4">
                            <label for="name" class="block text-sm font-medium text-gray-700">Nama:</label>
                            <input type="text" id="name" name="name"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>
                        <div class="my-4">
                            <label for="email" class="block text-sm font-medium text-gray-700">Email:</label>
                            <input type="email" id="email" name="email"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>
                        <div class="my-4">
                            <label for="phone" class="block text-sm font-medium text-gray-700">Telepon:</label>
                            <input type="text" id="phone" name="phone"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>
                        <div class="my-4">
                            <label for="bio" class="block text-sm font-medium text-gray-700">Bio:</label>
                            <textarea id="bio" name="bio" rows="3"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"></textarea>
                        </div>
                        <div class="my-4">
                            <label for="profile_picture" class="block text-sm font-medium text-gray-700">Foto Profil:</label>
                            <input type="file" id="profile_picture" name="profile_picture"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>
                        <div class="my-4">
                            <button type="submit"
                                class="inline-flex items-center px-4 py-2 bg-indigo-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-700 focus:outline-none focus:border-indigo-700 focus:ring focus:ring-indigo-200 active:bg-indigo-700 transition ease-in-out duration-150">
                                Simpan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
