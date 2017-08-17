@include('layouts.top')

  <div class="container">
   @include('flash::message')
   
         @yield('content')
         
  </div>
</div> <!-- #app -->    
@include('layouts.footer')

