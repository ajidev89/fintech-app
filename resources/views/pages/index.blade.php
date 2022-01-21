@extends('index')

@section('content')

    <section class="bg-gray-100" >
        <div class="lg:container bg lg:mx-auto mx-3 py-5 lg:py-8 grid grid-cols-1 lg:grid-cols-2 lg:gap-4" >
            <div class="flex items-center mb-8 lg:mb-0">
                <div>
                    <h1 class="text-3xl lg:text-5xl font-semibold leading-normal ">
                        Send money <br> 
                        to your family or friend <br>
                        in different countries.
                    </h1>
                    <div class="mt-4">
                        <button class="btn-big mr-4">
                            Log in
                        </button>
                        <button class="btn-big">
                            Sign up
                        </button>
                    </div>

                </div>  
            </div>
            <div class="" >
                <div class="bg-white shadow-2xl rounded-2xl p-8" >
                    <p class="text-xl font-semibold" >Send Money</p>
                    <form action="" method="post" class="mt-6">
                        <select name="" id="" class="hm-input">
                            <option value="NG">Nigeria</option>
                        </select>
                        <select name="" id="" class="hm-input mt-4">
                            <option value="NG">Select Delivery Method</option>
                        </select>
                        <input type="number" class="hm-input mt-4" placeholder="Amount to Send">
                        <input type="number" class="hm-input mt-4" placeholder="Amount to Send">
                        <input type="submit" class="hm-send mt-4" value="Send">
                    </form>
                </div>
            
            </div>

        </div>
    </section>
@endsection