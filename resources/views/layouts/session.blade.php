<!DOCTYPE html>

<html>

<head>
    @include('layouts.meta')
    @include('layouts.css')
    
</head>

<body>
   
    <div class="container-fluid nav-fullwidth">
           @include('partials.navigation')
    </div>
    
    @yield('title')
    
    <div class="container">
        @yield('content')
    </div>


        @include('partials.footer')


 <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script>
        
        $(document).ready(function(){
                    $('.nav-main').addClass('past-main');
        $('.nav-link').addClass('past-main');
        
        $('.logo-black').addClass('show');
        $('.logo').addClass('hide');
        $('.logo-black').removeClass('hide');
        $('.logo').removeClass('show');
        })
        
    </script>
</body>

</html>