<section class="w-80 p-8 h-screen bg-white border- sticky r top-0 flex-shrink-0" >
    <div class="font-semibold uppercase text-sm">
        Hallifield
    </div>
    <div class="my-10 text-sm grid grid-rows-1 gap-4" >
        <a href="{{ route("cust.dashboard") }}" class="flex items-center space-x-4">
            <div class="bg-purple-100 hover:bg-purple-300 transition-colors duration-300 delay-75 rounded-md py-2 px-4 flex items-center">
                <div><i class="fi fi-rr-apps  @if(route('cust.dashboard')==url()->current()) active @endif"></i></div>
            </div>
            <div>
                <p>Dashboard</p>
            </div>
        </a>
        <p class="uppercase font-normal text-gray-600 mt-6" >Transaction</p>

        <a href="{{ route("send.funds") }}" class="flex items-center space-x-4">
            <div class="bg-purple-100 hover:bg-purple-300 transition-colors duration-300 delay-75 rounded-md py-2 px-4 flex items-center">
                <div><i class="fi fi-rr-dollar @if(route('send.funds')==url()->current()) active @endif "></i></div>
            </div>
            <div>
                <p>Send Funds</p>
            </div>
        </a>
        <a href="{{ route("show.transaction") }}" class="flex items-center space-x-4">
            <div class="bg-purple-100 hover:bg-purple-300 transition-colors duration-300 delay-75 rounded-md py-2 px-4 flex items-center">
                <div><i class="fi fi-rr-folder @if(route('show.transaction')==url()->current()) active @endif "></i></div>
            </div>
            <div>
                <p>Transaction</p>
            </div>
        </a>

        <p class="uppercase font-normal text-gray-600 mt-6" >Settings</p>

        <a href="{{ route('show.profile') }}" class="flex items-center space-x-4">
            <div class="bg-purple-100 hover:bg-purple-300 transition-colors duration-300 delay-75 rounded-md py-2 px-4 flex items-center">
                <div><i class="fi fi-rr-user @if(route('show.profile')==url()->current()) active @endif"></i></div>
            </div>
            <div>
                <p>Profile</p>
            </div>
        </a>

        <a href="{{ route("logout") }}" class="flex items-center space-x-4">
            <div class="bg-purple-100 hover:bg-purple-300 transition-colors duration-300 delay-75 rounded-md py-2 px-4 flex items-center">
                <div><i class="fi fi-rr-sign-out-alt"></i></div>
            </div>
            <div>
                <p>Log out</p>
            </div>
        </a>
    </div>

</section>