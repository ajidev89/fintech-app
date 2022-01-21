<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }} | Hallifield money</title>
    <link rel="stylesheet" href="{{ asset('fonts/index.css') }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <section class="h-screen w-full bg-gray-50 flex items-center lg:grid lg:grid-cols-5" >
        <div class="col-span-2 flex flex-grow items-center lg:px-8 p-3 "> 
            <div class="flex-grow">
                <a href="{{ route("home") }}" class="text-sm">Back home</a>
                @yield('content')
            </div>
        </div>
        <div class="hidden lg:block col-span-3 bg-gray-600" >
            <img src="https://images.pexels.com/photos/2988232/pexels-photo-2988232.jpeg?cs=srgb&dl=pexels-energepiccom-2988232.jpg&fm=jpg" class="h-screen" alt="">
        </div>
    </section>
    @yield('scripts')
</body>
</html>