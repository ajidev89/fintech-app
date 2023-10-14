<section class="relative h-96" >
    <div>
        <img src="https://images.pexels.com/photos/7658429/pexels-photo-7658429.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="w-full h-96 object-cover" alt="">
    </div>
    <div class="absolute top-0 w-full h-full flex items-center justify-center text-gray-200  bg-opacity-60 bg-black">
        <div class="text-center" >
            <p class="text-3xl" >{{ $pageName }}</p>
        
            <small class="font-semibold text-center" >
                <a href="{{ route('home') }}">Home</a> | 
                <a href="{{ url()->current() }}" class="text-brand">{{ $pageName }}</a> 
            </small>
        </div>
        
    </div>
</section>