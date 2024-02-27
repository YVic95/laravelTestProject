@extends('layout')
@section('listing-form')
    <x-card class="mx-auto max-w-md">
        <header class="mb-2">
            <h3 class="font-bold text-2xl uppercase text-center">Create a job</h3>
            <p class="text-center text-base">Post a job to find a developer</p>
        </header>
        <form action="">
            <div class="mb-4">
                <label for="company" class="text-lg font-bold inline-block">Company name</label>
                <input type="text" name="company" class="border-2 border-gray-300 rounded-md w-full p-1 mt-2" />
            </div>
            <div class="mb-4">
                <label for="job-title" class="text-lg font-bold inline-block">Job Title</label>
                <input type="text" name="job-title" placeholder="Example: Middle Laravel Developer"
                       class="border-2 border-gray-300 rounded-md w-full p-1 mt-2"
                />
            </div>
            <div class="mb-4">
                <label for="location" class="text-lg font-bold inline-block">Job Location</label>
                <input type="text" name="location" placeholder="Example: Remote, Germany, etc."
                       class="border-2 border-gray-300 rounded-md w-full p-1 mt-2"
                />
            </div>
            <div class="mb-4">
                <label for="website" class="text-lg font-bold inline-block">Website/Application URL</label>
                <input type="text" name="website"
                       class="border-2 border-gray-300 rounded-md w-full p-1 mt-2"
                />
            </div>
            <div class="mb-4">
                <label for="email" class="text-lg font-bold inline-block">Email</label>
                <input type="email" name="email"
                       class="border-2 border-gray-300 rounded-md w-full p-1 mt-2"
                />
            </div>
            <div class="mb-4">
                <label for="tags" class="text-lg font-bold inline-block">Tags (Separate them with comma)</label>
                <input type="text" name="tags"
                       placeholder="Example: Laravel, Vue, MySql"
                       class="border-2 border-gray-300 rounded-md w-full p-1 mt-2"
                />
            </div>
            <div class="mb-4">
                <label for="logo" class="text-lg font-bold inline-block">Company Logo</label>
                <input type="file" name="logo"
                       class="border-2 border-gray-300 rounded-md w-full p-1 mt-2"
                />
            </div> 
            <div class="mb-4">
                <label for="desc" class="text-lg font-bold inline-block">Job Description</label>
                <textarea name="desc" class="border-2 border-gray-300 rounded-md w-full p-1 mt-2" 
                          rows="10" placeholder="Include tasks, requirements, salary, etc."
                ></textarea>
            </div> 
            <div class="mb-4">
                <button class="bg-black text-slate-50 py-2 px-3 rounded hover:bg-red-600">Create a job</button>
                <a href="/" class="text-lg ml-4 text-black">Back</a>
            </div>
        </form>
    </x-card>
@endsection
