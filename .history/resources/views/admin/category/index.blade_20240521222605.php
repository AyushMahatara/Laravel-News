<x-admin-layout>
    <div class="py-12 w-full">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-end py-2">
                <a href="{{ route('admin.roles.create') }}" class="bg-slate-500 px-4 py-2 rounded-lg">Create</a>
            </div>
            <p class="text-sm leading-6 text-gray-900 bg-slate-300 rounded-lg px-2 py-2">Name</p>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-4">

                <ul role="list" class="divide-y divide-gray-100">
                    @foreach ($categories as $category)

                    <li class="flex justify-between gap-x-6 py-5">
                        <div class="flex min-w-0 gap-x-4">
                            <div class="min-w-0 flex-auto">
                                <p class="text-sm font-semibold leading-6 text-gray-900">{{ $category->name }}</p>
                            </div>
                        </div>
                        <div class="flex min-w-0 gap-x-4">
                            <a href="{{ route('admin.category.edit', $category->id) }}"
                                class="px-4 py-2 bg-blue-500 hover:bg-blue-700 text-white rounded-md">Edit</a>

                            <form class="px-4 py-2 bg-red-500 hover:bg-red-700 text-white rounded-lg" method="POST"
                                action="{{ route('admin.category.destroy', $category->id) }}"
                                onsubmit="return confirm('Are you sure?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Delete</button>
                            </form>

                        </div>
                    </li>
                    @endforeach

                </ul>

            </div>
        </div>
    </div>
</x-admin-layout>