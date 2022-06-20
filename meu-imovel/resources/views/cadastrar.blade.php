@extends('layout.base')

@section('title', 'Cadastrar Imovel')

@section('content')

<div class="form-wrapper">
    <div class="form card">
        <div class="title">
            <h3>Cadastrar Imovel</h3>
        </div>
        <div class="form-layout">
            <form action="{{ route('apiCadastro') }}" method="post">
                @csrf
                <div class="input-group">
                    <span class="input-group-text" id="addon-wrapping"><i class="bx bx-home"></i></span>
                    <input class="form-control" type="text" name="title" id="title" placeholder="Informe o titulo do seu Imovel...">
                </div>
                <div class="input-group">
                    <span class="input-group-text" id="addon-wrapping"><i class="bx bx-info-circle"></i></span>
                    <input class="form-control" type="text" name="description" id="description" placeholder="Informe a descrição do seu Imovel...">
                </div>
                <div class="input-group">
                    <span class="input-group-text" id="addon-wrapping"><i class="bx bx-plus"></i></span>
                    <input class="form-control" type="text" name="content" id="content" placeholder="Informe o conteudo do seu Imovel...">
                </div>
                <div class="input-group">
                    <span class="input-group-text" id="addon-wrapping"><i class="bx bx-money"></i></span>
                    <input class="form-control" type="number" name="price" id="price" placeholder="Informe o Preço do seu Imovel...">
                </div>
                <div class="input-group">
                    <span class="input-group-text" id="addon-wrapping"><i class="bx bx-bed"></i></span>
                    <input class="form-control" type="number" name="bedrooms" id="bedrooms" placeholder="Informe a QTD de Quartos do seu Imovel...">
                </div>
                <div class="input-group">
                    <span class="input-group-text" id="addon-wrapping"><i class="bx bx-bath"></i></span>
                    <input class="form-control" type="number" name="bathrooms" id="bathrooms" placeholder="Informe a QTD de Banheiros do seu Imovel...">
                </div>
                <div class="input-group">
                    <span class="input-group-text" id="addon-wrapping"><i class="bx bx-area"></i></span>
                    <input class="form-control" type="number" name="area" id="area" placeholder="Informe a Area do seu Imovel...">
                </div>
                <div class="input-group">
                    <span class="input-group-text" id="addon-wrapping"><i class="bx bx-area "></i></span>
                    <input class="form-control" type="number" name="total_area" id="total_area" placeholder="Informe a Area Total do seu Imovel...">
                </div>
                <div class="text-center">
                    <button class="btn btn-success">Cadastrar</button>   
                </div>
            </form>
        </div>
    </div>
</div>

@endsection