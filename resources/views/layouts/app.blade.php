<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>ABUS - UPT PUSKESMAS SUKAMULYA KAB. GARUT</title>

    <!-- Scripts -->

    @include('admin.style')
</head>
<body>
    <div id="app">

        @include('admin.adminnavbar')


        <main class="py-4">
            @yield('content')
        </main>
        @include('admin.adminsidebar')
    </div>
@include('admin.javascript')
</body>
</html>
