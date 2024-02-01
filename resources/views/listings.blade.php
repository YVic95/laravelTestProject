<h1>{{$heading}}</h1>
@forelse ($listings as $listing)
    <h2><a href="/listing/{{$listing['id']}}">{{$listing['title']}}</a></h2>
    <p>{{$listing['description']}}</p>
@empty
    <h2>No listings found!</h2>
@endforelse