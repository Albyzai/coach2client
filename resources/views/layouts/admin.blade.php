<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Collapsible sidebar using Bootstrap 3</title>

        <!-- Our Custom CSS -->
        <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
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





        <!-- jQuery CDN -->
         <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
         <!-- Bootstrap Js CDN -->
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
         <script src="{{ asset('js/admin.js') }}"></script>
    </body>
</html>
