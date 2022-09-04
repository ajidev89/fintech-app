<header class="bg-white px-10 py-4 flex justify-between items-center ">
    <div>
        <input type="text" class="bg-gray-50 rounded-md p-3 w-64 text-sm" placeholder="Search transaction">
    </div>
    <div class="flex items-center gap-3" >
        <div class="h-10 w-10 bg-purple-100 rounded-full flex items-center justify-center">
            <i class="fi fi-rr-user"></i>
        </div>
        <div class="text-sm">{{ $user->email }}</div>
    </div>
    
</header>