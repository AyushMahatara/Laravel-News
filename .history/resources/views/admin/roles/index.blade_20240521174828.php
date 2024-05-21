<x-admin-layout>
    <div class="py-12 w-full">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-end">
                <p class="text-sm leading-6 text-gray-900 bg-slate-400 rounded-lg px-4 py-2">Name</p>
                <a href="">Create</a>
            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-4">

                <ul role="list" class="divide-y divide-gray-100">
                    @foreach ($roles as $role)

                    <li class="flex justify-between gap-x-6 py-5">
                        <div class="flex min-w-0 gap-x-4">
                            <div class="min-w-0 flex-auto">
                                <p class="text-sm font-semibold leading-6 text-gray-900">{{ $role->name }}</p>
                            </div>
                        </div>
                        <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
                            <div class="text-sm leading-6 text-gray-900">
                                <a href="">Edit</a>
                            </div>
                            <div class="text-sm leading-6 text-gray-900">
                                <a href="">Delete</a>
                            </div>

                        </div>
                    </li>
                    @endforeach

                </ul>

            </div>
        </div>
    </div>
</x-admin-layout>