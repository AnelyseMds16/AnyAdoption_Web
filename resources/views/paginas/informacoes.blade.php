@extends('paginas.layout')

@section('content')
<h1> INFORMAÇÕES CANINAS:</h1>

<ul>
    <li>
        <img src="{{asset('img/cachorro3.png')}}" alt="chorro1" />
        
        <a href="https://www.petz.com.br/blog/pets/caes/por-que-o-cachorro-segue-o-dono/">
            <h2 >Por que os cachorros são dependentes? </h2>
        </a>
        <p>Descubra um pouco mais sobre os sentimentos dos cães </p>
    </li>

    <li>
        <img src="{{asset('img/cachorro1.png')}}" alt="chorro1" />
        <h2>Por que os cachorros são dependentes? </h2>
        <p>Descubra um pouco mais sobre os sentimentos dos cães </p>
    </li>

    <li>
        <img src="{{asset('img/cachorro2.png')}}" alt="chorro1" />
        <h2>Por que os cachorros são dependentes? </h2>
        <p>Descubra um pouco mais sobre os sentimentos dos cães </p>
    </li>

</ul>

@endsection