@extends('auth.index')

@section('content')
  <div class="my-8">
    <h1 class="text-3xl">Log in</h1>
    <p class="text-sm mt-2" >Welcome back, login to manage account</p>

    <form action="" method="post" class="my-8">
        <div class="" >
            <label for="email" class="text-sm block">Email Address</label>
            <input type="email" name="email" class="p-3 rounded-md mt-2 w-full" placeholder="Email Address">
        </div>
        <div class="my-6" >
            <label for="passsword" class="text-sm block">Password</label>
            <input type="password" name="password" class="p-3 rounded-md mt-2 w-full" placeholder="Password">
        </div>
        <div class="text-right text-sm my-6">
            <a href="">Forgot Password</a>
        </div>

        <button type="submit" class="font-semibold bg-purple-600 p-3 w-full rounded-md text-gray-100" >Log in</button>
        <div class="text-center text-sm my-6" >
            <a href="{{ route("signUp") }}" class="font-semibold text-purple-600" >Sign up</a>
        </div>
        
    </form>
  </div>

@endsection