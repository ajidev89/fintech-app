@extends('auth.index')

@section('content')
  <div class="my-8">
      <h1 class="text-3xl">Change Password</h1>
      <p class="text-sm mt-2" ></p>

      <form action="" method="post" class="my-8">
            <div class="my-6" >
                <label for="passsword" class="text-sm block">Password</label>
                <input type="password" name="password" class="p-3 rounded-md mt-2 w-full" placeholder="Password">
            </div>
            <div class="my-6" >
                <label for="confirm_passsword" class="text-sm block">Confirm password</label>
                <input type="password" name="confirm_password" class="p-3 rounded-md mt-2 w-full" placeholder="Confirm password">
            </div>
            <button type="submit" class="font-semibold bg-purple-600 p-3 w-full rounded-md text-gray-100" >Change Password</button>
        </form>
  </div>

@endsection