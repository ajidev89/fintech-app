@extends('auth.index')

@section('content')
  <div class="my-8">
      <h1 class="text-3xl">Change Password</h1>
      <p class="text-sm mt-2" ></p>
      
        @if(session()->get('success'))
            <p class="text-green-500 text-xs my-2">{{ session()->get('success') }}</p>
        @endif
        @if(session()->get('password'))
            <p class="text-red-500 text-xs my-2">{{ session()->get('password') }}</p>
        @endif
        <form action="{{ route("postchangePasssword") }}" method="post" class="my-8">
            @csrf
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
            <input type="hidden" name="email" value="{{ $email }}">
            <input type="hidden" name="token" value="{{ $token }}">

            <button type="submit" class="font-semibold bg-purple-600 p-3 w-full rounded-md text-gray-100" >Change Password</button>
            
        </form>
  </div>

@endsection