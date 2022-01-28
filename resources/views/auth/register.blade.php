@extends('auth.index')

@section('content')
  <div class="my-8">
      <h1 class="text-3xl">Sign Up</h1>
      <p class="text-sm mt-2" >Register an account with us</p>

      <form action="" method="post" class="my-8" autocomplete="off" >
            @csrf
            <div class="" >
                <label for="email" class="text-sm block">Email Address</label>
                <input type="email" name="email" class="p-3 rounded-md mt-2 w-full" placeholder="Email Address">
                @if($errors->first('email'))
                    <p class="text-red-500 text-xs my-2">{{ $errors->first('email') }}</p>
                @endif
            </div>
            <div class="my-6" >
                <label for="passsword" class="text-sm block">Password</label>
                <input type="password" name="password" class="p-3 rounded-md mt-2 w-full" placeholder="Password">
                @if($errors->first('password'))
                    <p class="text-red-500 text-xs my-2">{{ $errors->first('password') }}</p>
                @endif
            </div>
            <div class="my-6" >
                <label for="confirm_passsword" class="text-sm block">Confirm password</label>
                <input type="password" name="password_confirmation" class="p-3 rounded-md mt-2 w-full" placeholder="Confirm password">
            </div>
            <button type="submit" class="font-semibold bg-purple-600 p-3 w-full rounded-md text-gray-100" >Sign up</button>
            <div class="text-center text-sm my-6" >
                <a href="{{ route("login") }}" class="font-semibold text-purple-600" >Log in</a>
            </div>
        </form>
  </div>

@endsection