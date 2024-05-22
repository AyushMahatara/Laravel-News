<x-admin-layout>

    <div class="py-12 w-full">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-2">
                <div class="flex p-2">
                    <a href="{{ route('admin.news.index') }}" class="bg-slate-500 px-4 py-2 rounded-lg">News
                        Index</a>
                </div>
                <div class="flex flex-col">
                    <div class="space-y-8 divide-y divide-gray-200 w-1/2 mt-10">
                        <form method="POST" action="{{ route('admin.news.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="sm:col-span-6">
                                <label for="name" class="block text-sm font-medium text-gray-700"> News Title
                                </label>
                                <div class="mt-1">
                                    <input type="text" id="title" name="title"
                                        class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />

                                </div>
                                @error('name') <span class="text-red-400 text-sm">{{ $message }}</span> @enderror
                            </div>

                            <div class="sm:col-span-6">
                                <label for="name" class="block text-sm font-medium text-gray-700">News Description
                                </label>
                                <div class="mt-1">

                                    <input type="text" id="title" name="title"
                                        class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />


                                </div>
                                @error('name') <span class="text-red-400 text-sm">{{ $message }}</span> @enderror
                            </div>
                            <div class="sm:col-span-6">
                                <label for="name" class="block text-sm font-medium text-gray-700"> News Image
                                </label>
                                <div class="mt-1">
                                    <input type="file" id="image" name="image"
                                        class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />

                                </div>
                                @error('image') <span class="text-red-400 text-sm">{{ $message }}</span> @enderror
                            </div>

                            <div class="sm:col-span-6">
                                <label for="name" class="block text-sm font-medium text-gray-700"> News Date
                                </label>
                                <div class="mt-1">
                                    <input type="date" id="title" name="date"
                                        class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />

                                </div>
                                @error('date') <span class="text-red-400 text-sm">{{ $message }}</span> @enderror
                            </div>

                            <div class="sm:col-span-6">
                                <label for="name" class="block text-sm font-medium text-gray-700">News Description
                                </label>
                                <div class="mt-1">
                                    <textarea name="description" id="" cols="30" rows="10"></textarea>
                                    {{-- <input type="text" id="title" name="title"
                                        class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                    --}}

                                </div>
                                @error('name') <span class="text-red-400 text-sm">{{ $message }}</span> @enderror
                            </div>
                            <div class="sm:col-span-6 pt-5">
                                <button type="submit"
                                    class="px-4 py-2 bg-green-500 hover:bg-green-700 rounded-md">Create</button>
                            </div>
                        </form>
                    </div>

                </div>

            </div>
        </div>
    </div>
</x-admin-layout>