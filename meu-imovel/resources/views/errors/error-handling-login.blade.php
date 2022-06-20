@extends('layout.messages-base')

@section('message-title', 'Erro - Não Autorizado')

@section('message-content')
    
    <div class="title">
        <h1>{{ $error }}</h1>
    </div>
    <div class="sub-title">
        <span>Tente realizar login novamente  <a href="{{ route('login') }}">Aqui!</a> </span>
    </div>

@endsection