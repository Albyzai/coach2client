<!DOCTYPE html>

<html>

<head>
    @include('layouts.meta')
    
    @yield('title')
    
    @include('layouts.css')
    
</head>

<body>
   
    <div class="container-fluid nav-fullwidth">
           @include('partials.navigation')
    </div>

    <div class="container">
        @yield('content')
    </div>


        @include('partials.footer')


</body>

</html>