<section class="bg-gray-100 flex items-center justify-center h-96" >
    <div class="text-center">
        <p class="text-3xl" >{{ $pageName }}</p>
        
        <small class="font-semibold" >
           <a href="{{ route('home') }}">Home</a> | 
           <a href="{{ url()->current() }}" class="text-purple-600">{{ $pageName }}</a> 
        </small>
    </div>
</section>