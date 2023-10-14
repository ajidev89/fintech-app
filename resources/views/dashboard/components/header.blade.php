<header class="bg-white px-4 lg:px-10 py-4 flex justify-between items-center ">
    <div class="hidden lg:block" >
        <input type="text" class="bg-gray-50 rounded-md p-3 w-64 text-sm" placeholder="Search transaction">
    </div>
    <div class="lg:hidden flex space-x-2 items-center" >
        <div>
            <button id="menuToggleButton">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>   
            </button> 
        </div>

        <div class="font-semibold uppercase text-xl">
            Hallifield
        </div>
    </div>

    <a href="{{ route('show.profile') }}" class="flex items-center gap-3" >
        <div class="h-10 w-10 bg-brand/10 rounded-full flex items-center justify-center">
            <i class="fi fi-rr-user"></i>
        </div>
        <div class="text-sm hidden lg:block">{{ $user->email }}</div>
    </a >
    
</header>