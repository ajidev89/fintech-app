<section id="sidebar" class="lg:w-64 w-64 bg-brand  shadow-lg lg:shadow-none lg:block hidden fixed z-20 p-8 h-screen text-white lg:sticky top-0 flex-shrink-0" >
   <div class="flex justify-between items-center">
        <div class="font-semibold uppercase text-sm">
            Hallifield
        </div>
        <div class="lg:hidden">
            <button id="closeModalButton">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
   </div>
    
    <div class="my-10 text-sm grid grid-rows-1 gap-4" >
        <a href="{{ route("cust.dashboard") }}" class="flex items-center space-x-4">
            <div class="@if(route('cust.dashboard')==url()->current()) bg-brand/100 @else bg-brand/10  @endif   hover:transition-colors duration-300 delay-75 rounded-md py-2 px-4 flex items-center">
                <div><i class="fi fi-rr-apps  @if(route('cust.dashboard') == url()->current()) @endif"></i></div>
            </div>
            <div>
                <p>Dashboard</p>
            </div>
        </a>
        <p class="uppercase font-normal text-gray-400 mt-6" >Transaction</p>

        <a href="{{ route("send.funds") }}" class="flex items-center space-x-4">
            <div class="@if(route('send.funds')==url()->current()) bg-brand/100 @else bg-brand/10  @endif   transition-colors duration-300 delay-75 rounded-md py-2 px-4 flex items-center">
                <div><i class="fi fi-rr-dollar @if(route('send.funds')==url()->current()) active @endif"></i></div>
            </div>
            <div>
                <p>Send Funds</p>
            </div>
        </a>
        <a href="{{ route("show.transaction") }}" class="flex items-center space-x-4">
            <div class="@if(route('show.transaction')==url()->current()) bg-brand/100 @else bg-brand/10  @endif transition-colors duration-300 delay-75 rounded-md py-2 px-4 flex items-center">
                <div><i class="fi fi-rr-folder @if(route('show.transaction')==url()->current()) active @endif "></i></div>
            </div>
            <div>
                <p>Transaction</p>
            </div>
        </a>

        <p class="uppercase font-normal text-gray-400 mt-6" >Settings</p>

        <a href="{{ route('show.profile') }}" class="flex items-center space-x-4">
            <div class="@if(route('show.profile')==url()->current()) bg-brand/100 @else bg-brand/10  @endif transition-colors duration-300 delay-75 rounded-md py-2 px-4 flex items-center">
                <div><i class="fi fi-rr-user @if(route('show.profile')==url()->current()) active @endif"></i></div>
            </div>
            <div>
                <p>Profile</p>
            </div>
        </a>

        <a href="{{ route("logout") }}" class="flex items-center space-x-4">
            <div class="transition-colors bg-brand/10 duration-300 delay-75 rounded-md py-2 px-4 flex items-center">
                <div><i class="fi fi-rr-sign-out-alt"></i></div>
            </div>
            <div>
                <p>Log out</p>
            </div>
        </a>
    </div>

</section>