<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('My Projects') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <div class="p-10 overflow-hidden bg-white shadow-sm sm:rounded-lg">

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                 <li class="py-5 font-bold text-white bg-red-700">{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                
                <form action="{{ route('admin.project_screenshots.tool.store', $project) }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    <div class="flex flex-col gap-y-5">
                        <h1 class="text-3xl font-bold text-indigo-950">Add Project Screenshot</h1>

                        <div class="flex flex-row items-center gap-x-5">
                            <img src="{{ Storage::url($project->cover) }}" class="object-cover w-[120px] h-[90px] rounded-2xl">
                                <div class="flex flex-col gap-y-1">
                                    <h3 class="text-xl font-bold">
                                        {{ $project->name }}
                                    </h3>
                                    <p class="text-sm text-slate-400">
                                        {{ $project->category }}
                                    </p>
                                </div>
                        </div>

                         <div class="flex flex-col gap-y-2">
                            <h3>Screenshot</h3>
                            <input type="file" id="screenshot" name="screenshot">
                        </div>
                        
                        <button type="submit" class="w-full py-4 font-bold text-white rounded-full bg-slate-500">Add Screenshot</button>
                    </div>
                </form>

                <hr class="my-10">
                <h3 class="text-xl font-bold text-indigo-950">Existing Screenshot</h3>

                <div class="flex-col gap-y-5">

                    @forelse ($project->screenshots as $screenshot)
                    {{-- melakukan foreach data daru table tool --}}
                    <div class="flex flex-row items-center justify-between item-tool ">
                        <div class="flex flex-row items-center gap-x-5">
                            <img src="{{ Storage::url($screenshot->screenshot) }}" class="object-cover w-[120px] h-[90px] rounded-2xl">
                                <div class="flex flex-col gap-y-1">
                                    <h3 class="text-xl font-bold">
                                        {{ $tool->name }}
                                    </h3>
                                    <p class="text-sm text-slate-400">
                                        {{ $tool->tagline }}
                                    </p>
                                </div>
                            </div>
                        <div class="flex flex-row items-center gap-x-2">
                            <form action="{{ route('admin.project_tools.destroy', $tool->pivot->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="px-5 py-3 text-white bg-red-500 rounded-full">
                                    Delete
                                </button>
                            </form>
                        </div>
                    </div>
                    @empty
                    <p>
                        Belum ada screenshot tersedia
                    </p>
                    @endforelse
                    
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
