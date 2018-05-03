<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Management - Dashboard</title>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
  <body>
        
        @include('_includes.error.alertForForm')
        <!-- nav -->
          @include('_includes.nav.main')
        <!-- side menu for management -->
          @include('_includes.nav.manage')
            
      

          <div class="management-area" id="app">
              @yield('content')
          </div>

          <!-- Scripts -->
          <script src="{{ asset('js/app.js') }}" defer></script>
          @yield('scripts')

          
</body>
</html>