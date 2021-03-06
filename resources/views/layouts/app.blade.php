<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="My Empire Homes Handymen">
    <meta name="keywords" content="My Empire Homes Handymen">
    <link rel="icon" type="image/png" href="/public/assets/img/favicon.png">  

    <meta name="author" content="My Empire Homes">
    @if(strpos($_SERVER['REQUEST_URI'], 'dashboard') !== false)


    @include('layouts.back_header')
    
  
    @else
    @include('layouts.front_header')
    
      @endif
   
</head>
<body>
    <div id="app">
	<!-- preloader -->
    {{-- <div class="preloader"><div class="load loade"><hr/><hr/><hr/><hr/></div></div> --}}
    <!-- preloader -->
        
            @yield('content')
            
    </div>

    @if(strpos($_SERVER['REQUEST_URI'], 'dashboard') !== false)


    @include('layouts.back_extras')
    
  
    @else
    
    @include('layouts.front_extras')
      @endif
   
      
</body>
</html>
