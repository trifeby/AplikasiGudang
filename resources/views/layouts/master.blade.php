<!DOCTYPE html>
<html lang="en" style="height: 100%;">

  <head>
  <!-- Page Content -->

    

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>larastuf</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('css/heroic-features.css')}}" rel="stylesheet">

  </head>

  <body style="height: 100%;">

    <!-- Navigation -->
    @include('layouts.header')

    @yield('content')
  
     <!-- <footer class="py-4 bg-dark">
      @include('layouts.footer')
    </footer> -->

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
