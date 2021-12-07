@extends('paginas.layout')

@section('content')
@if(count($errors) > 0)
<ul class="validator">
  @foreach($errors->all() as $error)
  <li>{{$error}}</li>
  @endforeach
</ul>
@endif
<form method="POST" action="{{url('cachorro',$cachorro->id)}}">
  @csrf
  @method('PUT')

  <div class="row">
    <label class="col-2" for="user">Usuário</label>
    <select class="col-5" name="user_id" id="user">
      <option></option>
      @foreach($users as $user)
      <option value="{{$user->id}}" @if($user->id==old('user_id')) selected @endif>{{$user->name}}</option>
      @endforeach
    </select>
  </div>

  <div class="row">
    <label class="col-2" for="nome">Nome</label>
    <input type="text" name="nome" id="nome" class="col-5" value="{{ $cachorro->nome }}"/>
  </div>

  <div class="row">
    <label class="col-2" for="idade">Idade</label>
    <input type="number" name="idade" id="idade" class="col-3" value="{{ $cachorro->idade }}"/>
  </div>

  <div class="row">
    <label class="col-2" for="raca">Raça</label>
    <input type="text" name="raca" id="raca" class="col-5" value="{{ $cachorro->raca }}"/>
  </div>

  <div class="row">
    <label class="col-2" for="genero">Gênero</label>
    <input type="text" name="genero" id="genero" class="col-5" value="{{ $cachorro->genero }}"/>
  </div>
  
  <button type="submit" class="buttonAdicionar">Salvar</button>
</form>

@endsection