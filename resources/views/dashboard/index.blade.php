<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>{{ $title }} | Hallifield money</title>
        <link rel="stylesheet" href="{{ asset('fonts/index.css') }}">
        <link rel='stylesheet' href='{{ asset('icons/css/uicons-regular-rounded.css') }}'>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <script src="{{ asset(mix('js/app.js')) }}"></script>
    </head>
    <body>
        <div class="lg:flex">
            @include('dashboard.components.sidebar')
            <div class="lg:flex-grow relative">
                @include('dashboard.components.header')
                <div class="p-8 bg-purple-100 rounded-md">
                    @yield('content')
                </div> 
                <div class="mt-14" >
                    @include('dashboard.components.footer')
                </div>  
            </div>
        </div>
       
        @yield('scripts')
    </body>
</html>