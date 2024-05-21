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
                        {{-- <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
                            <p class="text-sm leading-6 text-gray-900">Co-Founder / CEO</p>
                            <p class="mt-1 text-xs leading-5 text-gray-500">Last seen <time
                                    datetime="2023-01-23T13:23Z">3h ago</time></p>
                        </div> --}}
                    </li>
                    @endforeach

                </ul>

            </div>
        </div>
    </div>
</x-admin-layout>