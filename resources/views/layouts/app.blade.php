@include('includes.layouts.head')
<body>
    <div id="app-layout">
        @include('includes.layouts.navigation')
        @yield('content')
        
        @include('includes.layouts.footer')
    </div>
    @include('includes.layouts.jslinks')
</body>
</html>
