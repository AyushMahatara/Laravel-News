<x-admin-layout>
    <div class="py-12 w-full">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <p class="text-sm leading-6 text-gray-900 bg-slate-400 rounded-1xl">Name</p>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-4">

                <ul role="list" class="divide-y divide-gray-100">
                    @foreach ($roles as $role)

                    <li class="flex justify-between gap-x-6 py-5">
                        <div class="flex min-w-0 gap-x-4">
                            <div class="min-w-0 flex-auto">
                                <p class="text-sm font-semibold leading-6 text-gray-900">{{ $role->name }}</p>
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