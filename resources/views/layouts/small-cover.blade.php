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

    @include('partials.cover-no-search')

    <div class="container">

        @include('partials.reviews')

        @yield('content')
    </div>


        @include('partials.footer')


        <script src="{{ mix('js/app.js')}}"></script>

    <script>$(window).on('scroll', function () {

    // we round here to reduce a little workload
    var stop = Math.round($(window).scrollTop());
            console.log(stop);
    if (stop > 150) {
        $('.nav-main').addClass('past-main');
        $('.nav-link').addClass('past-main');

        $('.logo-black').addClass('show');
        $('.logo').addClass('hide');
        $('.logo-black').removeClass('hide');
        $('.logo').removeClass('show');
    } else {
        $('.nav-main').removeClass('past-main');
        $('.nav-link').removeClass('past-main');


        $('.logo-black').addClass('hide');
        $('.logo').addClass('show');

        $('.logo-black').removeClass('show');
        $('.logo').removeClass('hide');
    }
});</script>
</body>

</html>
