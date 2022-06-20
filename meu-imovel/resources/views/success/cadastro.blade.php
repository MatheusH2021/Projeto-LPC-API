@extends('layout.messages-base')

@section('message-title', 'OK - Deletado com Sucesso!')

@section('message-content')
    
    <div class="title">
        <h1>{{ $message['msg'] }}</h1>
    </div>
    <div class="sub-title">
        <span>Seu imovel foi cadastrado com sucesso, retorne a pagina <a href="{{ route('home') }}">Home!</a> </span>
    </div>

@endsection