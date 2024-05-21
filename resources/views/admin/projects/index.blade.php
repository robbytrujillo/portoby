<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('My Projects') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="flex flex-col p-10 overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <a href="{{ route('admin.projects.create') }}" class="px-10 py-4 font-bold text-white rounded-full w-fit bg-indigo-950">
                    Add New Project
                </a>
                <hr class="my-10">
                <div class="flex-col gap-y-5">
                    {{-- melakukan foreach data daru table project --}}
                    <div class="flex flex-row items-center justify-between item-project ">
                        <div class="flex flex-row items-center gap-x-5">
                            <img src="https://images.unsplash.com/photo-1531403009284-440f080d1e12?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="object-cover w-[120px] h-[90px] rounded-2xl">
                                <div class="flex-col gap-y-1">
                                    <h3 class="text-xl font-bold">
                                        Portoby
                                    </h3>
                                    <p class="text-sm text-slate-400">
                                        Website Development
                                    </p>
                                </div>
                            </div>
                        <div class="flex flex-row gap-x-2">
                             <a href="" class="px-5 py-3 text-white rounded-full bg-indigo-950">
                                Add Tools
                            </a>
                            <a href="" class="px-5 py-3 text-white rounded-full bg-indigo-950">
                                Add Screenshoots
                            </a>
                        </div>
                        <div class="flex flex-row gap-x-2">
                             <a href="" class="px-5 py-3 text-white bg-indigo-500 rounded-full">
                                Edit
                            </a>
                            <a href="" class="px-5 py-3 text-white bg-red-500 rounded-full">
                                Delete
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
