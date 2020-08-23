<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://kit.fontawesome.com/yourcode.js"></script>


        <title>emanuelnpw</title>

        <!-- Fonts -->
        @include('layouts.head')

    </head>
    <body>

      @include('layouts.navigation')
        <div class="">

            <div class="content">

                @yield('content')

            </div>
            <div class="">

              @yield('project-borobudur')

            </div>
        </div>
        @include('layouts.footer')
    </body>
</html>
