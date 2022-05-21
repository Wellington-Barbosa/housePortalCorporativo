@extends('adminlte::page')

@section('title', 'Cadastro de Despesas')

@section('content_header')
    <button class="btn btn-dark col col-12" disabled="disabled"><h1>Cadastro de Despesas</h1></button>
@stop

@section('content')

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" enctype="multipart/form-data">>
        @csrf
        <!- Primeira linha ->
        <div class="row">
            <div class="col col-2">
                <label for="codigoDespesa">Código</label>
                <div class="input-group">
                    <span class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fa fa-sort-numeric-up"></i>
                        </span>
                    </span>
                    <input type="text" class="form-control" name="codigoDespesa" id="codigoDespesa" maxlength="4" placeholder="ex: 1, 2, 3...">
                </div>
            </div>
            <div class="col col-8">
                <label for="descricaoDespesa">Descrição</label>
                <div class="input-group">
                    <span class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fa fa-tasks"></i>
                        </span>
                    </span>
                    <input type="text" class="form-control" name="descricaoDespesa" id="descricaoDespesa">
                </div>
            </div>

            <div class="col col-2">
                <label for="statusDespesa">Status</label>
                <div class="input-group">
                    <span class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fa fa-check"></i>
                        </span>
                    </span>
                    <select name="statusDespesa" id="statusDespesa" class="form-control">
                        <option value="0">Aberta</option>
                        <option value="1">Fechada</option>
                    </select>
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-primary col col-12 mt-3">
            <b>CADASTRAR</b>
        </button>

    </form>
@stop
