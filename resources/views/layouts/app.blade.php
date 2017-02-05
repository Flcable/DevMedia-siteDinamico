<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="{{asset('lib/materialize/dist/css/materialize.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">

    <title>Laravel</title>

</head>
<body>
    <div id="app-layout">
    
      <header>
           @include('layouts._site._nav')
      </header>
          
      <main>
         @yield('content')
      </main>
      
       
    </div>

    <!-- Scripts -->
     <script src="{{asset('lib/jquery/dist/jquery.js')}}"></script>
     <script src="{{asset('lib/materialize/dist/js/materialize.js')}}"></script>
     <script src="{{asset('js/init.js')}}"></script>
</body>
</html>
