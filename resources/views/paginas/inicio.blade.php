<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Any Adoption</title>
    <link rel="stylesheet" href="{{asset('css/initial/initial.css')}}" />
    <!--Linkar com o css Initial(ainda não fiz)  -->
</head>

<body>
    <header>
        <!-- <p>Não compre, adote</p> -->
        <section>
            @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">logout</a>
                @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>
                @if (Route::has('register'))
                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Registrar</a>
                @endif
                @endauth
            </div>
            @endif
        </section>
    </header>
    <nav >
        <picture>
            <img src="{{asset('img/imagem3.png')}}" alt="chorros" class="cabeça"/>
        </picture>
    </nav>

    <div class="barra">
        <a href="{{url('/informacoes')}}">
            <img src="{{asset('img/icondog.svg')}}" alt="iconedog" class="iconeanimal" width="30px">
            <p class="letraBarra"> Cachorros </p>
        </a>
        
        <img src="{{asset('img/linha.png')}}" alt="linha" width="10px">

        <a href="{{url('/informacoesGatos')}}">
            <img src="{{asset('img/iconcat.svg')}}" alt="iconcat" class="iconeanimal" width="30px">
            <p class="letraBarra"> Gatos </p>
        </a>

        <img src="{{asset('img/linha.png')}}" alt="linha" width="10px">

        <a href="https://www.petz.com.br/blog/pets/caes/por-que-o-cachorro-segue-o-dono/">
            <img src="{{asset('img/iconcoelho.svg')}}" alt="iconecoelho" class="iconeanimal" width="30px">
            <p class="letraBarra"> Coelhos </p>
        </a>

        <img src="{{asset('img/linha.png')}}" alt="linha" width="10px">

        <a href="https://www.petz.com.br/blog/pets/caes/por-que-o-cachorro-segue-o-dono/">
            <p class="letraBarra"> Outros </p>
            <img src="{{asset('img/setaBaixo.svg')}}" alt="iconeoutros" class="iconeanimal" width="15px">
        </a>
    </div>

    <div class="content">
        <p class="escrito">
            SEJA BEM VINDO AO NOSSO SITE!! AQUI VOCÊ PODE <br>
            ENCONTRAR UM PET PARA TE FAZER COMPANHIA OU <br>
            CADASTRAR UM PET QUE ESTEJA PROCURANDO UM DONO
        </p>
        <a href="{{ route('register') }}" class="BOTAO"><button> COMEÇAR </button></a>
    </div>

    <foot>
        <picture>
            <img src="{{asset('img/logo.svg')}}" alt="Logo" class="imgfoot"/>
        </picture>
    </foot>
</body>

</html>