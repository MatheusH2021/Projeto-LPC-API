@extends('layout.base')

@section('title', 'Editar Imovel')

@section('content')

<div class="form-wrapper">
    <div class="form card">
        <div class="title text-center">
            <h3>Editar Imovel</h3>
        </div>
        <div class="form-layout">
            @foreach($itens as $imovel)
            <form action="{{ route('apiEditar', $imovel['id']) }}" method="post">
            @csrf
                <div class="input-group">
                    <span class="input-group-text" id="addon-wrapping"><i class="bx bx-home"></i></span>
                    <input class="form-control" type="text" name="title" id="title" value="{{ $imovel['titulo'] }}" placeholder="Informe o titulo do seu Imovel...">
                </div>
                <div class="input-group">
                    <span class="input-group-text" id="addon-wrapping"><i class="bx bx-info-circle"></i></span>
                    <input class="form-control" type="text" name="description" id="description" value="{{ $imovel['descricao'] }}" placeholder="Informe a descrição do seu Imovel...">
                </div>
                <div class="input-group">
                    <span class="input-group-text" id="addon-wrapping"><i class="bx bx-plus"></i></span>
                    <input class="form-control" type="text" name="content" id="content" value="{{ $imovel['conteudo'] }}" placeholder="Informe o conteudo do seu Imovel...">
                </div>
                <div class="input-group">
                    <span class="input-group-text" id="addon-wrapping"><i class="bx bx-money"></i></span>
                    <input class="form-control" type="number" name="price" id="price" value="{{ $imovel['price'] }}" placeholder="Informe o Preço do seu Imovel...">
                </div>
                <div class="input-group">
                    <span class="input-group-text" id="addon-wrapping"><i class="bx bx-bed"></i></span>
                    <input class="form-control" type="number" name="bedrooms" id="bedrooms" value="{{ $imovel['quarto'] }}" placeholder="Informe a QTD de Quartos do seu Imovel...">
                </div>
                <div class="input-group">
                    <span class="input-group-text" id="addon-wrapping"><i class="bx bx-bath"></i></span>
                    <input class="form-control" type="number" name="bathrooms" id="bathrooms" value="{{ $imovel['banheiro'] }}" placeholder="Informe a QTD de Banheiros do seu Imovel...">
                </div>
                <div class="input-group">
                    <span class="input-group-text" id="addon-wrapping"><i class="bx bx-area"></i></span>
                    <input class="form-control" type="number" name="area" id="area" value="{{ $imovel['area_propriedade'] }}" placeholder="Informe a Area do seu Imovel...">
                </div>
                <div class="input-group">
                    <span class="input-group-text" id="addon-wrapping"><i class="bx bx-area "></i></span>
                    <input class="form-control" type="number" name="total_area" id="total_area" value="{{ $imovel['total_area_propriedade'] }}" placeholder="Informe a Area Total do seu Imovel...">
                </div>
                @endforeach
                <div class="text-center">
                    <a class="arrow btn btn-success" type="button" href="{{ route('home') }}" title="Voltar"><i class="bx bx-left-arrow-alt"></i></a>
                    <button class="btn btn-success">Editar</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection