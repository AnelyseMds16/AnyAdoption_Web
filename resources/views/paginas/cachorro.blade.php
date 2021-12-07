@extends('paginas.layout')

@section('content')
<div class="content">
    <br>
    <a class="azinho">Adicione informações do cachorro: </a>
    <br><br>
    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Idade</th>
                <th>Raça</th>
                <th>Gênero</th>
                <th>Imagem</th>
                <th>Editar</th>
                <th>Remover</th>
            </tr>
        </thead>
        <tbody>
            @foreach($cachorros as $cachorro)
            <tr>
                <td>{{$cachorro->nome}}</td>
                <td>{{$cachorro->idade}}</td>
                <td>{{$cachorro->raca}}</td>
                <td>{{$cachorro->genero}}</td>
                
                <td><img src="{{$cachorro->imagem}}"/></td>
                
                <td>
                    <a href="{{route('cachorro.edit',$cachorro->id)}}" class="buttonAdicionar">
                        Editar
                    </a>
                </td>

                <td>
                    <form method="POST" action="{{route('cachorro.destroy',$cachorro->id)}}" onsubmit="return confirm('tem certeza?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="buttonAdicionar">
                            Remover
                        </button>
                    </form>
                </td>


            </tr>
            @endforeach
        </tbody>
    </table>
    <br><br>
    <a href="{{url('cachorro/create')}}" class="buttonAdicionar">Adicionar</a>
</div>
    
@endsection