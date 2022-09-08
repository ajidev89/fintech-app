@extends('dashboard.index')

@section('content')
     
    <section class="bg-white shadow-sm rounded-md p-4">
        <h1 class="font-semibold text-xl px-4">My Profile</h1>
        <form method="POST" action="{{ route("post.profile") }}" class="grid grid-rows-1 gap-4 my-10 px-4 ">
            @csrf
            <div class="text-sm grid grid-rows-1 lg:grid-cols-3 gap-4">
                <div class="flex items-center" >
                    <label for="">Full Name <span class="text-red-500" >*</span></label>
                </div>
                <div class="col-span-2 grid grid-cols-2 gap-4">
                    <div>
                        <input type="text" name="first" value="{{ (!empty(old('first'))) ? old('first') : ( ($user->profile) ? $user->profile->firstName  : "") }}" class="p-3 rounded-md bg mt-2 w-full bg-gray-100" placeholder="First Name">
                        @if($errors->first('first'))
                            <p class="text-red-500 text-xs my-2">{{ $errors->first('first') }}</p>
                        @endif
                    </div>
                    <div>
                        <input type="text" name="last"  value="{{ (!empty(old('last'))) ? old('last') :( ($user->profile) ? $user->profile->lastName :"" ) }}" class="p-3 rounded-md bg mt-2 w-full bg-gray-100" placeholder="Last Name">
                        @if($errors->first('last'))
                            <p class="text-red-500 text-xs my-2">{{ $errors->first('last') }}</p>
                        @endif
                    </div> 
                </div>
            </div>
            <div class="text-sm grid grid-rows-1 lg:grid-cols-3 gap-4">
                <div class="flex items-center" >
                    <label for="">Email <span class="text-red-500" >*</span></label>
                </div>
                <div class="col-span-2">
                    <div>
                        <input type="email" name="email" value="{{ $user->email }}" class="p-3 rounded-md bg mt-2 w-full bg-gray-100" placeholder="Email Address" disabled>
                    </div>                    
                </div>
            </div>
            <div class="text-sm grid grid-rows-1 lg:grid-cols-3 gap-4">
                <div class="flex items-center" >
                    <label for="">Phone <span class="text-red-500" >*</span></label>
                </div>
                <div class="col-span-2">
                    <div>
                        <input type="tel" name="phone"  value="{{ (!empty(old('phone'))) ? old('phone') :( ($user->profile) ? $user->profile->phoneNumber :"") }}" class="p-3 rounded-md bg mt-2 w-full bg-gray-100" placeholder="Phone Number">
                        @if($errors->first('phone'))
                            <p class="text-red-500 text-xs my-2">{{ $errors->first('phone') }}</p>
                        @endif
                    </div>                    
                </div>
            </div>
            <div class="text-sm grid grid-rows-1 lg:grid-cols-3 gap-4">
                <div class="flex items-center" >
                    <label for="">Address<span class="text-red-500" >*</span></label>
                </div>
                <div class="col-span-2">
                    <div>
                        <input type="text" name="address"  value="{{ (!empty(old('address'))) ? old('address') : ( ($user->profile) ? $user->profile->address :"")  }}" class="p-3 rounded-md bg mt-2 w-full bg-gray-100" placeholder="Address">
                        @if($errors->first('address'))
                            <p class="text-red-500 text-xs my-2">{{ $errors->first('address') }}</p>
                        @endif
                    </div>                    
                </div>
            </div>
            <div class="text-sm grid grid-rows-1 lg:grid-cols-3 gap-4">
                <div class="flex items-center" >
                    <label for="">National Identification Number (NIN) <span class="text-red-500" >*</span></label>
                </div>
                <div class="col-span-2">
                    <div>
                        <input type="nin" name="nin"  value="{{ (!empty(old('nin'))) ? old('nin') : ( ($user->profile) ? $user->profile->nin :"" ) }}" class="p-3 rounded-md bg mt-2 w-full bg-gray-100" placeholder="National Identification Number (NIN)">
                        @if($errors->first('nin'))
                            <p class="text-red-500 text-xs my-2">{{ $errors->first('nin') }}</p>
                        @endif
                    </div>                    
                </div>
            </div>
            <div class="flex justify-end my-4">
                <button type="submit" class="btn">Save Changes</button>
            </div>
        </form>
    </section>
@endsection

@section('scripts')
    @if(session()->get('success'))
        <script>
            Toastify({
                text: "{{ session()->get('success') }}",
                duration: 3000,
                gravity: "top", // `top` or `bottom`
                position: "right", // `left`, `center` or `right`
                className: "border-l-4 rounded-md border-green-300 text-sm",
                stopOnFocus: true, // Prevents dismissing of toast on hover
                style: {
                    background: "#fff",
                    color:"#000",
                },
            }).showToast();
        </script>
    @endif
@endsection