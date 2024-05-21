<x-admin-layout>
    <div class="py-12 w-full">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-end py-2">
                <a href="{{ route('admin.permissions.create') }}" class="bg-slate-500 px-4 py-2 rounded-lg">Create</a>
            </div>
            <p class="text-sm leading-6 text-gray-900 bg-slate-300 rounded-lg px-2 py-2">Name</p>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-4">


                <ul role="list" class="divide-y divide-gray-100">
                    @foreach ($permissions as $permission)

                    <li class="flex justify-between gap-x-6 py-5">
                        <div class="flex min-w-0 gap-x-4">
                            <div class="min-w-0 flex-auto">
                                <p class="text-sm font-semibold leading-6 text-gray-900">{{ $permission->name }}</p>
                            </div>
                        </div>
                        <div>

                        </div>

                    </li>
                    <div class="text-sm leading-6 text-gray-900">
                        <a href="{{ route('admin.permissions.edit', $permission->id) }}"
                            class=" bg-blue-400 rounded-lg px-2 py-2">Edit</a>
                    </div>
                    <div class="text-sm leading-6 text-gray-900">
                        <a href="{{ route('admin.permissions.destroy', $permission->id) }}"
                            class=" bg-red-400 rounded-lg px-2 py-2">Delete</a>
                    </div>
                    @endforeach

                </ul>

            </div>
        </div>
    </div>
</x-admin-layout>