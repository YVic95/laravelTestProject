@extends('layout')
@section('listing-content')
    @include('partials._search')
    <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">
        @forelse ($listings as $listing)
            <div class="bg-gray-50 border border-gray-400 rounded p-6">
                <div class="flex">
                    <img class="hidden w-48 mr-6 md:block" src="{{asset('images/no-image.png')}}" alt="">
                    <div>
                        <h3 class="text-2xl">
                            <a href="/listing/{{$listing->id}}">{{$listing->title}}</a>
                        </h3>
                        <div class="text-xl font-bold mb-4">{{$listing->company}}</div>
                        <ul class="flex">
                            <li class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
                                <a href="#">Laravel</a>
                            </li>
                            <li class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
                                <a href="#">Backend</a>
                            </li>
                            <li class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
                                <a href="#">API</a>
                            </li>
                            <li class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
                                <a href="#">Vue</a>
                            </li>
                        </ul>
                        <div class="text-xl mt-4"><i class="fa-solid fa-location-dot mr-1"></i>{{$listing->location}}</div>
                    </div>
                </div>
            </div>
        @empty
            <h2 class="text-2xl font-bold">No listings found!</h2>
        @endforelse
    </div>
@endsection
