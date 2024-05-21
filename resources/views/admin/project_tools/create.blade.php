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
                
                <form action="{{ route('admin.project.assign.tool.store', $project) }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    <div class="flex flex-col gap-y-5">
                        <h1 class="text-3xl font-bold text-indigo-950">Assign Tool</h1>
                        <div class="flex flex-col gap-y-2">
                            <h3>Tools</h3>
                            <select name="tool_id" id="tool_id">
                                <option value="">--Choose Tool Below--</option>
                                @forelse($tools as $tool)
                                    <option value="{{ $tool->id }}">{{ $tool->name }}</option>
                                @empty
                                    <option value="">--Choose Tool Below--</option>
                                @endforelse
                            </select>
                        </div>
                        <button type="submit" class="w-full py-4 font-bold text-white rounded-full bg-slate-500">Assign Tool</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
