<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>Diet Sehat</title>

       @stack('before-style')
         @include('includes.frontend.style')
        @stack('after-style')
    </head>

    <body>
        <main>

          @include('includes.frontend.navbar')

          @yield('content')


        </main>

        @include('includes.frontend.footer')

        @stack('before-script')
        @include('includes.frontend.script')
        @stack('after-script')

    </body>
</html>
