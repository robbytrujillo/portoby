<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('My Projects') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm p-28 sm:rounded-lg">
                <form action="">
                    <div class="flex flex-col gap-y-5">
                        <div class="flex flex-col gap-y-2">
                            <h3>
                                Name
                            </h3>
                            <input type="text">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
