@extends('dashboard.index')

@section('content')
    @if ($user->email_verified_at == null)
        <section class="bg-white shadow-sm text-sm flex justify-between rounded-md px-6 py-4 mb-4 items-center">
            <p>Kindly verify your email address by clicking the "Verify Email Address"</p>
            <div>
                <form action="{{ route('verifyEmail') }}" method="post">
                    @csrf
                    <button type="submit" class="font-semibold bg-brand text-xs p-3 w-full rounded-md text-gray-100" >Verify Email Address</button>
                </form>
            </div>
        </section>
    @endif    
    @if ($user->profile == null)
        <section class="bg-white text-sm shadow-sm flex justify-between rounded-md px-6 py-4 mb-4 items-center">
            <p>Kindly complete your registeration in the profile page</p>
            <div>
                <a href="{{ route("show.profile") }}" class="font-semibold bg-brand text-xs p-3 w-full rounded-md text-gray-100" >Complete Registeration</a>
            </div>
        </section>
    @endif 

    <section class="bg-white shadow-sm rounded-md p-4">
        <h1 class="font-semibold text-2xl">Dashboard</h1>
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 mt-10" >
            <div>
                <div class="text-4xl font-semibold">{{ $allTransaction }}</div>
                <p class="font-bold uppercase text-xs" >Transactions</p>
            </div>
            <div>
                <div class="text-4xl font-semibold" >{{ $pendingTransaction }}</div>
                <p class="font-bold uppercase text-xs" >Pending transfers</p>
            </div>
            <div>
                <div class="text-4xl font-semibold" >{{ $processingTransaction }}</div>
                <p class="font-bold uppercase text-xs" >Processing transfers</p>
            </div>
            <div>
                <div class="text-4xl font-semibold" >{{ $sentTransaction }}</div>
                <p class="font-bold uppercase text-xs" >Success transfers</p>
            </div>
            
        </div>
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
    @if(session()->get('error'))
        <script>
            Toastify({
                text: "{{ session()->get('error') }}",
                duration: 3000,
                gravity: "top", // `top` or `bottom`
                position: "right", // `left`, `center` or `right`
                className: "border-l-4 rounded-md border-red-300 text-sm",
                stopOnFocus: true, // Prevents dismissing of toast on hover
                style: {
                    background: "#fff",
                    color:"#000",
                },
            }).showToast();
        </script>
    @endif
@endsection