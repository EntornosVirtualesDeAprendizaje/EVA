<html>
    <head>
        <title>Entornos Virtuales</title>
    </head>
    <body>
        @section('navbar')
            This is the master sidebar.
        @show

        <div class="container">
            @yield('content')
        </div>
        <footer>
        </footer>
    </body>
</html>