@if (session('message'))
    <div class="fixed top-0 left-1/2 transform -translate-x-1/2 bg-slate-950 text-white px-16 py-3">
        <p>
            {{ session('message') }}
        </p>   
    </div>
@endif