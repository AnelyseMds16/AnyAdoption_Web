<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inicio</title>
  <link rel="stylesheet" href="{{ asset('css/layout.css') }}">
</head>

<body>
  <header>
    <section>
      <a href="{{url('/')}}" class="text-sm text-gray-700 underline">
        <img src="{{asset('img/sair.png')}}" alt="sair" class="sair">
      </a>
      <a> Não compre, adote! </a> 
    </section>
  </header>
  
  <main>
    @yield('content')
  </main>
  <foot>
    <picture>
      <img src="{{asset('img/logo.svg')}}" alt="Logo" class="imgfoot"/>
    </picture>
  </foot>
</body>

</html>