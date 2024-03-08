@extends('layout')
@section('listing-content')
    {{-- Site Banner --}}
    @include('partials._banner')
    {{-- Site Serach --}}
    @include('partials._search')
    {{-- Listings Content --}}
    <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">
        @forelse ($listings as $listing)
            <x-listing-card :listing="$listing" />
        @empty
            <h2 class="text-2xl font-bold">No listings found!</h2>
        @endforelse
    </div>
    <div class="mt-6 p-4">
        {{ $listings->onEachSide(3)->links() }}
    </div>
@endsection
