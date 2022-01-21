@extends('index')

@section('content')
    @include('components.breadcrumb',[
        'pageName' => 'About us'
    ])

    <section class="grid grid-cols-1 lg:grid-cols-2 lg:gap-10 px-5 lg:p-36 " >
        <div class="" >
            <img src="https://images.pexels.com/photos/7007189/pexels-photo-7007189.jpeg" class="rounded-md " alt="">
        </div>
        <div class="flex items-center my-8 lg:my-0">
            <div>
                <h1 class="font-semibold text-4xl" >Best online money transfer service.</h1>
                <div class="my-10" >
                    In 2022, Biodun Alli, ex banker saw an opportunity to make small currencies payments convenient to almost 20 different countries at any remote location within 24-48hours. The focus are on customers who have no educational background about card and/or web payments but wish to exchange to need their urgent needs.
                </div>

                <div class="grid grid-cols-2 my-10">
                    <div class="flex justify-center" >
                        <div>
                            <img src="{{ asset('image/shield.png') }}" class="h-24 ml-5" alt="">
                            <p class="text-center my-4 font-semibold" >Tested & Trusted</p>
                        </div>            
                    </div>
                    <div class="flex justify-center" >
                        <div>
                            <img src="{{ asset('image/rocket.png') }}" class="h-24 ml-5" alt="">
                            <p class="text-center my-4 font-semibold" >Fast Transactions</p>
                        </div>            
                    </div>
                </div>
                <div class="grid grid-cols-2 my-10">
                    <div class="flex justify-center" >
                        <div>
                            <img src="{{ asset('image/secure-payment-1.png') }}" class="h-24" alt="">
                            <p class="text-center my-4 font-semibold" >Security</p>
                        </div>            
                    </div>
                    <div class="flex justify-center" >
                        <div>
                            <img src="{{ asset('image/secure-payment.png') }}" class="h-24 ml-5" alt="">
                            <p class="text-center my-4 font-semibold" >Security</p>
                        </div>            
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection