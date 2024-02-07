@extends('layout')
@section('listing-content')
    <h1 class="text-3xl font-bold underline">{{$listing['title']}}</h1>
    <p>{{$listing['description']}}</p>
@endsection