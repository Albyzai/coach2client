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


    <div class="container" style="margin-top:175px">
        @yield('content')
    </div>


        @include('partials.footer')


        <script src="{{ mix('js/app.js')}}"></script>

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
