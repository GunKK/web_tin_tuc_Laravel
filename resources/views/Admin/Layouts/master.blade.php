<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Blog laravel">
    <meta name="author" content="">
    <title>@yield('title')</title>
    <link rel = "icon" href = "data:image/jpeg;base64,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">    
    <link rel="stylesheet"  href="https://site-assets.fontawesome.com/releases/v6.1.2/css/all.css">
    @yield("css")

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('admin1/bower_components/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{ asset('admin1/bower_components/metisMenu/dist/metisMenu.min.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('admin1/dist/css/sb-admin-2.css') }}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{ asset('admin1/bower_components/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

    <!-- DataTables CSS -->
    <link href="{{ asset('admin1/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css') }}" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="{{ asset('admin1/bower_components/datatables-responsive/css/dataTables.responsive.css') }}" rel="stylesheet">
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        @include('Admin.layouts.header')

        <!-- Page Content -->
        @yield('content')
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="{{ asset('admin1/bower_components/jquery/dist/jquery.min.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('admin1/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{ asset('admin1/bower_components/metisMenu/dist/metisMenu.min.js') }}"></script>

    <!-- Custom Theme JavaScript -->
    <script src="{{ asset('admin1/dist/js/sb-admin-2.js') }}"></script>

    <!-- DataTables JavaScript -->
    <script src="{{ asset('admin1/bower_components/DataTables/media/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin1/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js') }}"></script>
    <script>
    $(document).ready(function() {
        $("#dataTables-example").DataTable({
                responsive: true
        });
    });
    </script>
</body>

</html>