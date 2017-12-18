<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Collapsible sidebar using Bootstrap 3</title>

        <!-- Our Custom CSS -->
        <link rel="stylesheet" href="{{ asset('css/admin.css') }}">

        @yield('custom-header-content')

    </head>
    <body>



        <div class="wrapper">
            <!-- Sidebar Holder -->
            @include('admin.partials.navigation')

            <!-- Page Content Holder -->
            <div id="content" class="col-md-12">
                @include('admin.partials.topnavigation')
                <div class="container">

                @yield('page title')

                @yield('content')
                </div>

            </div>
        </div>



        <script src="{{ mix('js/admin.js')}}"></script>

         @yield('scripts')



    </body>
</html>
