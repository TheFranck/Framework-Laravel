<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Mon nom est François SARIN et je suis développeur web et infographiste et je recherche actuellement un stage et/ou un contrat de professionalisation.">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel='stylesheet' type='text/css' href='https://fonts.googleapis.com/css?family=Titillium+Web:400,600,700'>
    <link rel="shortcut icon" type="image/x-icon" href="{{ URL::asset('/img/realisation/favicon.ico')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ URL::asset('/css/style.css')}}">
  </head>
  <body>

    <header>
      @include('layout.baseHeader')
    </header>

      @yield('about')
      @yield('skill')
      @yield('formation')
      @yield('realisation')
      @yield('content')

    <div class="background"></div>

    <footer>
      @include('layout.baseFooter')
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
    <script src="{{ URL::asset('/js/lightbox.min.js')}}"></script>
    <script src="{{ URL::asset('/js/main.js')}}"></script>
  </body>
</html>
