<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  
<head>
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
  
    <title>{{ config('app.name', 'Laravel') }}</title>
    <title>Laravel 12 Toastr JS Notifications Example</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet" />
  
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  
    <!-- Toastr JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
</head>
  
<body>
      <div class="container">
        @yield('content')
       </div>
    <script>
       
        @session("success")
        toastr.success('{{ session("success") }}');
        @endsession
 
         @session("info")
        toastr.info('{{ session("info") }}');
        @endsession
 
         @session("error")
        toastr.error('{{ session("error") }}');
        @endsession
 
         @session("warning")
        toastr.warning('{{ session("warning") }}');
        @endsession
            
    </script>
  
</body>
  
</html>