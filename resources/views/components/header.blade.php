<header class="lg:container lg:mx-auto mx-3 py-5 lg:py-8" >
    <div class="flex items-center justify-between">
        <div class="font-semibold text-brand text-xl" >Hallifield</div>
        <div class="lg:flex space-x-6 hidden" >
            <ul class="flex items-center space-x-10 text-sm font-medium">
                <li>
                   <a href="{{ route('home') }}">Home</a> 
                </li>
                <li>
                    <a href="{{ route('about') }}">About us</a>
                </li>
                <li>
                    <a href="{{ route('contact') }}">Contact us</a>
                </li>
                <li>
                    <a href="{{ route('faqs') }}">FAQs</a>
                </li>
            </ul>
            <a href="{{ route('login') }}" class="btn">
                Log in
            </a>
            <a href="{{ route("signUp") }}" class="btn">
                Sign up
            </a>
        </div>
        <div class="lg:hidden" >
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-brand" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
            </svg>
        </div>
    </div>    
</header>