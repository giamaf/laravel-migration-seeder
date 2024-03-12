<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }} | @yield('title')</title>


    {{-- CDNS --}}
    @yield('cdns')

    {{-- Asset frontend --}}
    @vite('resources/js/app.js')
</head>

<body>
    {{-- Header --}}
    <header>
        @include('includes.header')
    </header>

    {{-- Main --}}
    <main class="container">
        @yield('main-content')
    </main>

    {{-- Footer --}}
    <footer></footer>

    {{-- Scripts --}}
    @yield('scripts')
</body>

</html>
