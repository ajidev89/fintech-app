@extends('index')

@section('content')

    <section class="bg-gray-50 px-5 lg:px-16 " >
        <div class="lg:container bg lg:mx-auto mx-3 py-5 lg:py-8 grid grid-cols-1 lg:grid-cols-5 lg:gap-4" >
            <div class="flex items-center mb-8 lg:mb-0 col-span-3">
                <div>
                    <h1 class="text-4xl font-semibold">
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
            <div class="col-span-2" >
                <div class="bg-white shadow-2xl rounded-2xl p-8" >
                    <p class="text-xl font-semibold" >Send Money</p>
                    <form action="" method="post" class="mt-6">

                        <div class="" >
                            <label for="name" class="text-sm block">Select country</label>
                            <select name="country" class="p-3 rounded-md mt-2 w-full bg-gray-200">
                                <option value="NG">Nigeria</option>
                            </select>
                        </div>

                        <div class="my-6" >
                            <label for="method" class="text-sm block">Select delivery method</label>
                            <select name="method" class="p-3 rounded-md mt-2 w-full bg-gray-200">
                                <option value="NG">Cash</option>
                                <option value="NG">Transfer</option>
                            </select>
                        </div>

                        <div class="my-6">
                            <label for="name" class="text-sm block">Amount to send</label>
                            <input type="number" name="amount" class="p-3 rounded-md mt-2 w-full bg-gray-200" placeholder="Amount to send">
                        </div>

                        <input type="submit" class="font-semibold bg-brand p-3 w-full rounded-md text-gray-100 mt-4" value="Send">
                    </form>
                </div>
            
            </div>

        </div>
    </section>
@endsection