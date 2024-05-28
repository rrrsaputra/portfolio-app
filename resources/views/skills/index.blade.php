<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Skills List') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="flex justify-end m-2 p-2">
                        <a href="{{ route('skills.create') }}"
                            class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 text-white rounded-md shadow-md">
                            New Skill
                        </a>
                    </div>
                    
                    <div>
                        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                            <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                                    <tr>
                                        <th scope="col" class="px-6 py-3">
                                            Skills Name
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Image
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($skills as $skill)
                                        <tr class="odd:bg-white even:bg-gray-50 border-b">
                                            <th scope="row"
                                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                                {{ $skill->name }}
                                            </th>
                                            <td class="px-6 py-4">
                                                <img src="{{ $skill->image }}" alt="" width="100"
                                                    height="100">
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap flex space-x-4">
                                                <a href="{{ route('skills.edit', $skill->id) }}"
                                                    class="font-medium text-yellow-600 hover:underline">Edit</a>
                                                <form method="POST" action="{{ route('skills.destroy', $skill->id) }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                        class="font-medium text-red-600 hover:underline">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
