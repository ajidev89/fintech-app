@extends('dashboard.index')

@section('content')
    @if ($user->email_verified_at == null)
        <section class="bg-white shadow-sm flex justify-between rounded-md px-6 py-4 mb-4 items-center">
            <p>Kindly verify your email address by clicking the "Verify Email Address"</p>
            <div>
                <button type="submit" class="font-semibold bg-purple-600 text-xs p-3 w-full rounded-md text-gray-100" >Verify Email Address</button>
            </div>
        </section>
    @endif    

    <section class="bg-white shadow-sm rounded-md p-4">
        <h1 class="font-semibold text-2xl">Dashboard</h1>
        <div class="grid grid-cols-3 gap-4 mt-10" >
            <div>
                <div class="text-4xl font-semibold" >10</div>
                <p class="font-bold uppercase text-xs" >Transactions</p>
            </div>
            <div>
                <div class="text-4xl font-semibold" >10</div>
                <p class="font-bold uppercase text-xs" >Pending transfer</p>
            </div>
            
        </div>
    </section>
@endsection