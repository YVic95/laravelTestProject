@if (session('message'))
    <div x-data="{ show: true }" x-init="setTimeout(()=> { show=false }, 4000)" x-show="show" 
         class="fixed top-0 left-1/2 transform -translate-x-1/2 bg-slate-950 text-white px-16 py-3">
        <p>
            {{ session('message') }}
        </p>   
    </div>
@endif