<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <!-- Styles -->
    {{-- <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" /> --}}
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"> </script>
    

    <link rel="stylesheet" type="text/css" href="admin/css/custom.css">
    

    <!-- CSS Files -->
    <link href="{{ asset('admin/css/material-dashboard.css') }}" rel="stylesheet">

</head>
<body>
   <div class="wrapper">
       @include('layouts.include.sidebar')
       <div class="main-panel">
        @include('layouts.include.adminnav')
        <div class="content">
          @yield('content')
      </div>
       </div>

   </div>
     

      <!-- Scripts -->
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"> </script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"> </script>

      <script src="{{ asset('admin/js/jquery.min.js') }}" defer></>
      <script src="{{ asset('admin/js/popper.min.js') }}" defer></script>
      <script src="{{ asset('admin/js/bootstrap-material-design.min.js') }}" defer></script>
      <script src="{{ asset('admin/js/smooth-scrollbar.min.js') }}" defer></script>
      <script src="{{ asset('admin/js/perfect-scrollbar.jquery.min.js') }}" defer></script>
      <script src="https://unpkg.com/default-passive-events"></script>
      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
      @if (session('status'))
         <script>
            swal("{{ session('status') }}");
         </script>   
      @endif


     
      

    @yield('scripts')
</body>
</html>
