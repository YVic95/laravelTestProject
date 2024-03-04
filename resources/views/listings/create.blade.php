@extends('layout')
@section('listing-form')
    <x-card class="mx-auto max-w-md">
        <header class="mb-2">
            <h3 class="font-bold text-2xl uppercase text-center">Create a job</h3>
            <p class="text-center text-base">Post a job to find a developer</p>
        </header>
        <form method="POST" action="/listings">
            @csrf
            <div class="mb-4">
                <label for="company" class="text-lg font-bold inline-block">Company name</label>
                <input type="text" name="company" value="{{ old('company') }}"
                       class="border-2 border-gray-300 rounded-md w-full p-1 mt-2" />
                @error('company')
                    <p class="text-xs font-bold text-red-600">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="title" class="text-lg font-bold inline-block">Job Title</label>
                <input type="text" name="title" value="{{ old('title') }}"
                       placeholder="Example: Middle Laravel Developer"
                       class="border-2 border-gray-300 rounded-md w-full p-1 mt-2"
                />
                @error('title')
                    <p class="text-xs font-bold text-red-600">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="location" class="text-lg font-bold inline-block">Job Location</label>
                <input type="text" name="location" value="{{ old('location') }}"
                       placeholder="Example: Remote, Germany, etc."
                       class="border-2 border-gray-300 rounded-md w-full p-1 mt-2"
                />
                @error('location')
                    <p class="text-xs font-bold text-red-600">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="website" class="text-lg font-bold inline-block">Website/Application URL</label>
                <input type="text" name="website" value="{{ old('website') }}"
                       class="border-2 border-gray-300 rounded-md w-full p-1 mt-2"
                />
                @error('website')
                    <p class="text-xs font-bold text-red-600">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="email" class="text-lg font-bold inline-block">Email</label>
                <input type="email" name="email" value="{{ old('email') }}"
                       class="border-2 border-gray-300 rounded-md w-full p-1 mt-2"
                />
                @error('email')
                    <p class="text-xs font-bold text-red-600">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="tags" class="text-lg font-bold inline-block">Tags (Separate them with comma)</label>
                <input type="text" name="tags" value="{{ old('tags') }}"
                       placeholder="Example: Laravel, Vue, MySql"
                       class="border-2 border-gray-300 rounded-md w-full p-1 mt-2"
                />
                @error('tags')
                    <p class="text-xs font-bold text-red-600">{{$message}}</p>
                @enderror
            </div>
            {{-- <div class="mb-4">
                <label for="logo" class="text-lg font-bold inline-block">Company Logo</label>
                <input type="file" name="logo"
                       class="border-2 border-gray-300 rounded-md w-full p-1 mt-2"
                />
            </div>  --}}
            <div class="mb-4">
                <label for="description" class="text-lg font-bold inline-block">Job Description</label>
                <textarea name="description" class="border-2 border-gray-300 rounded-md w-full p-1 mt-2" 
                          rows="10" placeholder="Include tasks, requirements, salary, etc."
                >{{ old('description') }}</textarea>
                @error('desc')
                    <p class="text-xs text-red-600 font-bold">{{$message}}</p>
                @enderror
            </div> 
            <div class="mb-4">
                <button class="bg-black text-slate-50 py-2 px-3 rounded hover:bg-red-600">Create a job</button>
                <a href="/" class="text-lg ml-4 text-black">Back</a>
            </div>
        </form>
    </x-card>
@endsection
