<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <base href="/">

    <title> Admin Panel</title>
    
    <!-- Bootstrap Core CSS -->
    
    @include('Dashboard.partials.stylesheet')

    

   

    </head>

    <body style="font-size: 12px;">

        <div id="wrapper">

            <!-- Navigation -->
            @include('Dashboard.partials.nav')

            <div id="page-wrapper">

                <!-- /.row -->
                <div class="row">
                    @yield('content')
                </div>
                <!-- /.row -->
            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->

        @include('Dashboard.partials.script')

</body>

</html>
