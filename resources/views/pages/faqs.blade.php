@extends('index')

@section('content')
    @include('components.breadcrumb',[
        'pageName' => 'FAQs'
    ]);

    <section class="px-5 pt-10 lg:p-36 ">
        <h1 class="font-semibold text-4xl">FAQs</h1>
        <p class="mt-2">Frequently Asked Questions</p>

        <div class="grid grid-rows-1 my-6 gap-4" >

            <div class="border flex justify-between items-center p-8 rounded-md" >
                <p class="font-semibold" >Who is Halifield ?</p>
                <div>
                    <i class="fi fi-rr-angle-down"></i>
                </div>
            </div>

            <div class="border flex justify-between items-center p-8 rounded-md" >
                <p class="font-semibold" >Our product and services?</p>
                <div>
                    <i class="fi fi-rr-angle-down"></i>
                </div>
            </div>

            <div class="border flex justify-between items-center p-8 rounded-md" >
                <p class="font-semibold" >How many countries can we send money to?</p>
                <div>
                    <i class="fi fi-rr-angle-down"></i>
                </div>
            </div>
        </div>

    </section>

@endsection