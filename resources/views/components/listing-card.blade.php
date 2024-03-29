@props(['listing'])
<x-card>
    <div class="flex">
        {{-- <img class="hidden w-48 mr-6 md:block" src="{{asset('images/no-image.png')}}" alt=""> --}}
        <img class="hidden w-48 mr-6 md:block" src="{{$listing->logo ? asset('/storage/' . $listing->logo) : asset('images/no-image.png')}}" alt="">
        <div>
            <h3 class="text-2xl">
                {{-- <a href="/listing/{{$listing->id}}">{{$listing->title}}</a> --}}
                {!! str_replace(request('search'), 
                                '<span class="bg-amber-500">'.request('search').'</span>', 
                                '<a href="/listing/'.$listing->id.'">'.$listing->title.'</a>') !!}
            </h3>
            <div class="text-xl font-bold mb-4">{{$listing->company}}</div>
            {{-- Tags Component --}}
            <x-listing-tag :tagsCsv="$listing->tags" />
            <div class="text-xl mt-4"><i class="fa-solid fa-location-dot mr-1"></i>{{$listing->location}}</div>
        </div>
    </div>
</x-card>
