@extends('layout.base')

    @section('title', 'Home')   
    
    @section('content')
    
        
        <div class="wrapper">
            <div class="title text-center">
               <h1>Meus Imoveis</h1>
            </div>
            @if (!empty($itens))
                @foreach ($itens as $imovel)
                <div class="card">
                    <div class="row">
                        <div class="col-lg-3">
                            <img width="100%" src="imgs/download.jpg" alt="property image">
                        </div>
                        <div class="col-lg-6">
                            <h3>{{ $imovel['titulo'] }} #{{ $imovel['id'] }}</h3>
                            <br>
                            <span><strong>Descrição: </strong>{{ $imovel['descricao'] }}</span>
                            <br>
                            <span><strong>Conteudo: </strong>{{ $imovel['conteudo'] }}</span>
                            <br>
                            @php
                                $valor = number_format($imovel['price'], 2, ',', '.');
                            @endphp
                            <span><strong>Preço: R$ </strong>{{ $valor }}</span>
                            <br>
                            <span><strong>QTD de Quartos: </strong>{{ $imovel['quarto'] }}</span>
                            <br>
                            <span><strong>QTD de Banheiros: </strong>{{ $imovel['banheiro'] }}</span>
                            <br>
                            <span><strong>Area da casa: </strong>{{ $imovel['area_propriedade'] }} m2</span>
                            <span><strong>Area total da propriedade: </strong>{{ $imovel['total_area_propriedade'] }} m2</span>
                        </div>
                        <div class="col-lg-3">
                            <div class="actions">
                                <a class="btn btn-primary btn-sm w-75" href="{{ route('editar', $imovel['id']) }}"><i class="bx bx-pencil"></i> Editar</a>
                                <a class="btn btn-danger btn-sm w-75" href="{{ route('deletar', $imovel['id']) }}"><i class="bx bx-trash"></i> Deletar</a>
                            </div>
                        </div>
                    </div>   
                </div>
                @endforeach
            @else
            <div class="empty card text-center">
                <h4 class="text-center">Nenhum imovel cadastrado</h4>
            </div>
            @endif
        </div>

    @endsection
