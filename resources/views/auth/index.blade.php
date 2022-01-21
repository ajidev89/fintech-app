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
    <section class="h-screen grid grid-cols-5" >
        <div class="col-span-2 bg-gray-100 flex items-center p-8 "> 
            <div class="flex-grow">
                <a href="{{ URL::previous() }}" class="text-sm">Back home</a>
                @yield('content')
            </div>
        </div>
        <div class="col-span-3 bg-gray-600" >
            l,;l,;,
        </div>
    </section>
    @yield('scripts')
</body>
</html>