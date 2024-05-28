<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add New Projects') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <div class="flex justify-end m-2 p-2">
                        <a href="{{ route('projects.index') }}"
                            class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 text-white rounded-md shadow-md">
                            Back
                        </a>
                    </div>

                    <form method="POST" action="{{ route('projects.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="my-4">
                            <label for="skill_id" class="block text-sm font-medium text-gray-700">Skill:</label>
                            <select id="skill_id" name="skill_id"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                @foreach ($skills as $skill)
                                    <option value="{{ $skill->id }}">{{ $skill->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="my-4">
                            <label for="name" class="block text-sm font-medium text-gray-700">Name:</label>
                            <input type="text" id="name" name="name"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>
                        <div class="my-4">
                            <label for="description" class="block text-sm font-medium text-gray-700">Description:</label>
                            <textarea id="description" name="description" rows="3"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"></textarea>
                        </div>
                        <div class="my-4">
                            <label for="project_url" class="block text-sm font-medium text-gray-700">Project URL:</label>
                            <input type="text" id="project_url" name="project_url"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>
                        <div class="my-4">
                            <label for="image" class="block text-sm font-medium text-gray-700">Image:</label>
                            <input type="file" id="image" name="image"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>
                        <div class="my-4">
                            <button type="submit"
                                class="inline-flex items-center px-4 py-2 bg-indigo-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-700 focus:outline-none focus:border-indigo-700 focus:ring focus:ring-indigo-200 active:bg-indigo-700 transition ease-in-out duration-150">
                                Save
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
