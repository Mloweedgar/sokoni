@include('includes.layouts.head')
<body>
    <div id="app-layout">
        @include('includes.layouts.navigation')
        @include('includes.layouts.search')
        @yield('content')
        @include('includes.layouts.footer')
    </div>
    @include('includes.layouts.jslinks')
</body>
</html>
