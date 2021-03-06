@extends('dashboard.index')

@section('content')
    <section class="bg-white shadow-sm rounded-md p-4">
        <h1 class="font-semibold text-xl px-4">Send funds</h1>
        <form method="POST" action="{{ route("post.transaction") }}" class="grid grid-rows-1 gap-4 my-10 px-4 ">
            @csrf
            <div class="text-sm grid grid-cols-3 gap-4">
                <div class="flex items-center" >
                    <label for="">Recipient name<span class="text-red-500" >*</span></label>
                </div>
                <div class="col-span-2">
                    <div>
                        <input type="name" name="name" value="" class="p-3 rounded-md bg mt-2 w-full bg-purple-100" placeholder="Recipient name">
                        @if($errors->first('name'))
                            <p class="text-red-500 text-xs my-2">{{ $errors->first('name') }}</p>
                        @endif
                    </div>
                </div>
            </div>
            <div class="text-sm grid grid-cols-3 gap-4">
                <div class="flex items-center" >
                    <label for="">Recipient email <span class="text-red-500" >*</span></label>
                </div>
                <div class="col-span-2">
                    <div>
                        <input type="email" name="email" class="p-3 rounded-md bg mt-2 w-full bg-purple-100" placeholder="Recipient email ">
                        @if($errors->first('email'))
                            <p class="text-red-500 text-xs my-2">{{ $errors->first('email') }}</p>
                        @endif
                    </div>                    
                </div>
            </div>
            <div class="text-sm grid grid-cols-3 gap-4">
                <div class="flex items-center" >
                    <label for="">Recipient phone <span class="text-red-500" >*</span></label>
                </div>
                <div class="col-span-2">
                    <div>
                        <input type="tel" name="phone" class="p-3 rounded-md bg mt-2 w-full bg-purple-100" placeholder="Recipient phone">
                        @if($errors->first('phone'))
                            <p class="text-red-500 text-xs my-2">{{ $errors->first('phone') }}</p>
                        @endif
                    </div>                    
                </div>
            </div>
            <div class="text-sm grid grid-cols-3 gap-4">
                <div class="flex items-center" >
                    <label for="">Currency<span class="text-red-500" >*</span></label>
                </div>
                <div class="col-span-2">
                    <div>
                        <select name="currency" class="p-3 rounded-md bg mt-2 w-full bg-purple-100">
                            <option value="">Select Currency</option>
                            @foreach ($currencies as $currency)
                                <option value="{{ $currency->code }}">{{ $currency->code }}</option>
                            @endforeach
                        </select>
                        @if($errors->first('currency'))
                            <p class="text-red-500 text-xs my-2">{{ $errors->first('currency') }}</p>
                        @endif
                    </div>                    
                </div>
            </div>
            <div class="text-sm grid grid-cols-3 gap-4">
                <div class="flex items-center" >
                    <label for="">Amount<span class="text-red-500" >*</span></label>
                </div>
                <div class="col-span-2">
                    <div>
                        <input type="number" name="amount"  value="" class="p-3 rounded-md bg mt-2 w-full bg-purple-100" placeholder="Amount">
                        @if($errors->first('amount'))
                            <p class="text-red-500 text-xs my-2">{{ $errors->first('amount') }}</p>
                        @endif
                    </div>                    
                </div>
            </div>
            <div class="text-sm grid grid-cols-3 gap-4">
                <div class="flex items-center" >
                    <label for="">Delivery method<span class="text-red-500" >*</span></label>
                </div>
                <div class="col-span-2">
                    <div>
                        <select name="method" class="p-3 rounded-md bg mt-2 w-full bg-purple-100">
                            <option value="transfer">Transfer</option>
                            <option value="cash">Cash</option>
                        </select>
                        @if($errors->first('method'))
                            <p class="text-red-500 text-xs my-2">{{ $errors->first('method') }}</p>
                        @endif
                    </div>                    
                </div>
            </div>
            <div class="text-sm grid grid-cols-3 gap-4">
                <div class="flex items-start" >
                    <label for="">Purpose<span class="text-red-500" >*</span></label>
                </div>
                <div class="col-span-2">
                    <div>
                        <textarea name="purpose" id="" cols="30" rows="10" placeholder="Purpose" class="p-3 rounded-md bg mt-2 w-full bg-purple-100"></textarea>
                        @if($errors->first('purpose'))
                            <p class="text-red-500 text-xs my-2">{{ $errors->first('purpose') }}</p>
                        @endif
                    </div>                    
                </div>
            </div>
            <div class="flex justify-end my-4">
                <button type="submit" class="btn">Send funds</button>
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