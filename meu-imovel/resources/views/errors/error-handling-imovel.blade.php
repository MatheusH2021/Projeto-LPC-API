@extends('layout.messages-base')

@section('message-title', 'Erro')

@section('message-content')
    
    <div class="title">
        <h1>{{ $error }}</h1>
    </div>
    <div class="sub-title">
        <span>Tente realizar o cadastro de imovel novamente  <a href="{{ route('cadastrar') }}">Aqui!</a> </span>
        <br>
        <span>OBS: Não deixe campos vazios!</span>
    </div>

@endsection