@extends('auth.index')

@section('content')
  <div class="my-8">
    <h1 class="text-3xl">Forget Password</h1>
    <p class="text-sm mt-2" >A reset link will be sent to you email address</p>


    @if(session()->get('success'))
      <p class="text-green-500 text-xs my-2">{{ session()->get('success') }}</p>
    @endif
    <form action="{{ route("postForgotPassword") }}" method="post" class="my-8">
        @csrf
        <div class="my-6" >
            <label for="email" class="text-sm block">Email Address</label>
            <input type="email" name="email" class="p-3 rounded-md mt-2 w-full" placeholder="Email Address">
            @if($errors->first('email'))
                <p class="text-red-500 text-xs my-2">{{ $errors->first('email') }}</p>
            @endif
        </div>
        
        <button type="submit" class="font-semibold bg-brand p-3 w-full rounded-md text-gray-100 border" >Forget password</button>
        <div class="text-center text-sm my-6" >
            <a href="{{ route("login") }}" class="font-semibold text-brand" >Log in</a>
        </div>     
    </form>
  </div>

@endsection