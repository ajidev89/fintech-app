@extends('index')

@section('content')
    @include('components.breadcrumb',[
        'pageName' => 'Contact us'
    ])
    <section class="grid grid-cols-1 lg:grid-cols-2 lg:gap-10 px-5 pt-10 lg:p-36 ">
        <div>
            <h1 class="font-semibold text-4xl" >Let's get in touch.</h1>
            <p class="my-6" >We're open for any suggestion or just to have a chat.</p>
            <div class="my-10">
                <div class="grid grid-rows-1 gap-4" >
                    <div class="flex items-center space-x-16 p-5 border-b-2">
                        <div class="flex items-center">
                            <div>
                                <i class="fi fi-rr-call-incoming text-purple-600 text-4xl"></i>
                            </div>
                        </div>
                        <div class="col-span-2" >
                            <h5 class="uppercase font-light text-sm" >Phone Number</h5>
                            <div class="my-4" >
                                <p class="my-0.5">09035276989</p> 
                                <p>09035276989</p> 
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center space-x-16 p-5 border-b-2">
                        <div class="flex items-center">
                            <div>
                                <i class="fi fi-rr-envelope text-purple-600 text-4xl"></i>
                            </div>
                        </div>
                        <div class="col-span-2" >
                            <h5 class="uppercase font-light text-sm" >Email Address</h5>
                            <div class="my-4" >
                                <p class="my-0.5"><a href="mailto:customerservices@hallifieldmoney.com">customerservices@hallifieldmoney.com</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center space-x-16 p-5 border-b-2">
                        <div class="flex items-center">
                            <div>
                                <i class="fi fi-rr-marker text-purple-600 text-4xl"></i>
                            </div>
                        </div>
                        <div class="col-span-2" >
                            <h5 class="uppercase font-light text-sm" >Location</h5>
                            <div class="my-4" >
                                <p class="my-0.5"><a href="mailto:customerservices@hallifieldmoney.com">Lagos, Nigeria</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shadow-2xl p-8 rounded-md">
            <p class="font-semibold text-2xl" >Send a message</p>
            <form action="" method="post" class="my-8">
                <div class="" >
                    <label for="name" class="text-sm block">Full Name</label>
                    <input type="text" name="name" class="p-3 rounded-md mt-2 w-full bg-gray-200" placeholder="Full Name">
                </div>
                <div class="my-6" >
                    <label for="email" class="text-sm block">Email Address</label>
                    <input type="email" name="email" class="p-3 rounded-md mt-2 w-full bg-gray-200" placeholder="Email Address">
                </div>

                <div class="my-6" >
                    <label for="message" class="text-sm block">Message</label>
                    <textarea name="message" id="" cols="30" rows="10" class="p-3 rounded-md mt-2 w-full bg-gray-200" placeholder="Enter Message .." ></textarea>
                    
                </div>
                
        
                <button type="submit" class="font-semibold bg-purple-600 p-3 w-full rounded-md text-gray-100" >Submit</button>
                
            </form> 
        </div>

    </section>
@endsection