@extends('layout')
@section('listing-content')
    @include('partials._search')
    <a href="/" class="text-lg font-bold hover:underline ml-4 mb-4">
        <i class="fa-solid fa-circle-arrow-left mr-2"></i>
        Back
    </a>
    <div class="mx-4">
        <x-card class="p-10 mb-32">
            <div class="flex flex-col align-center justify-center text-center items-center">
                <img class="w-48 mr-6 mb-6" src="{{$listing->logo ? asset('/storage/' . $listing->logo) : asset('images/no-image.png')}}" alt="">
                <h3 class="text-2xl mb-2">{{$listing->title}}</h1>
                <div class="text-xl font-bold mb-4">{{$listing->company}}</div>
                
                {{-- Tags Component --}}
                <x-listing-tag :tagsCsv="$listing->tags" />

                <div class="text-xl mt-4 mb-4"><i class="fa-solid fa-location-dot mr-1"></i>{{$listing->location}}</div>
                <div class="border border-gray-200 w-full mb-6"></div>
                <div>
                    <h4 class="text-2xl font-bold mb-4">Job Description</h4>
                    <div class="text-lg space-y-6 flex flex-col items-center">
                        <p>{{$listing->description}}</p>
                        <a class="block w-full sm:w-48 bg-red-600 hover:bg-black text-white rounded py-2 px-3 mr-1 text-base" href="mailto:{{$listing->email}}">
                            <i class="fa-regular fa-envelope mr-2"></i>
                            Contact employer
                        </a>
                        <a class="block w-full sm:w-48 bg-red-600 hover:bg-black text-white rounded py-2 px-3 mr-1 text-base" href="{{$listing->website}}" target="_blank">
                            <i class="fa-solid fa-globe mr-2"></i>
                            Visit Website
                        </a>
                    </div> 
                </div>      
            </div>
        </x-card>
        <x-card class="mt-4 p-2 flex space-x-6">
            <a href="/listings/{{$listing->id}}/edit">
                <i class="fa-solid fa-pencil"></i> Edit
            </a>
        </x-card>
    </div> 
@endsection