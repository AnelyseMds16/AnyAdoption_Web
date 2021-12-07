@extends('paginas.layout')

@section('content')
<h1> INFORMAÇÕES FELINAS: </h1>

<ul>
    <li>
        <img src="{{asset('img/gato1.png')}}" alt="cat1"/>
        
        <a href="https://www.petz.com.br/blog/pets/caes/por-que-o-cachorro-segue-o-dono/">
            <h2> Alimentação dos gatos  </h2>
        </a>
        <p>Descubra um pouco mais sobre os sentimentos dos gatos </p>
    </li>

    <li>
        <img src="{{asset('img/gato2.png')}}" alt="cat2"/>
        <h2> Cuidados com os banhos de seu gato  </h2>
        <p>Descubra um pouco mais sobre os sentimentos dos gatos </p>
    </li>

    <li>
        <img src="{{asset('img/gato3.png')}}" alt="cat3"/>
        <h2>Por que os gatos são dependentes? </h2>
        <p>Descubra um pouco mais sobre os sentimentos dos gatos  </p>
    </li>

</ul>

@endsection