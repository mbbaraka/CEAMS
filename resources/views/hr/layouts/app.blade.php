<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CEAMS | HR | @yield('title') </title>
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Custom css -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <!-- font awesome -->
    <link href="{{ asset('fonts/css/all.css') }}" rel="stylesheet">
    <script src="http://cdn.ckeditor.com/4.6.1/standard/ckeditor.js"></script>
  </head>
  <body>
    @include('sweetalert::alert')

    @include('hr.partials.nav')

    @include('hr.partials.breadcrub')
    @include('hr.partials.flashmessage')
    <section id="main">
      @yield('content')
    </section>

    <footer id="footer">
       <p>Copyright <a href="{{ url('/') }}">Ceams</a> &copy; {{ date('Y') }}</p>
    </footer>

    <!-- Modals -->

    <!-- Add Page -->


  <script>
     CKEDITOR.replace( 'editor1' );
 </script>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
  </body>
</html>
