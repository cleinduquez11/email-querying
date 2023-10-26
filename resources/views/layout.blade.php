<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Clein Winslee Duquez">
  <title>Multi Email Sender</title>

  @include('partials.styles')
</head>
<body>
    


     <div class="container-lg">
                     <div id="loader">
    <svg width="60" height="60" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><style>.spinner_GmWz{animation:spinner_Ctle .8s linear infinite;animation-delay:-.8s}.spinner_NuDr{animation-delay:-.65s}.spinner_OlQ0{animation-delay:-.5s}@keyframes spinner_Ctle{93.75%,100%{opacity:.2}}</style><rect class="spinner_GmWz" x="1" y="4" width="6" height="14"/><rect class="spinner_GmWz spinner_NuDr" x="9" y="4" width="6" height="14"/><rect class="spinner_GmWz spinner_OlQ0" x="17" y="4" width="6" height="14"/></svg>
  </div>
   </div>

@include('partials.header')
@yield('content')


@include('partials.footer')

@include('partials.scripts')
      
</body>
</html>