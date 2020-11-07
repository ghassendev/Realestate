<html lang="en">
    
    @yield('layouts.head')

    <body>
        <div id="main-wrapper">
        @yield('layouts.header')
<main>
        @yield('content')
</main>
        @include('layouts.footer')
        </
        @yield('layouts.scripts')
    </body>
</html>