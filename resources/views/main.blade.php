<!DOCTYPE html>
<html lang="en">
  
<head> 
   @include('partials._head')
</head>
  <body>

    <div class="container">

        @yield('content')
        
        @include('partials._footer')

    </div><!-- end of .container -->
      
         @include('partials._javascript')

         @yield('scripts')
  </body>
</html>