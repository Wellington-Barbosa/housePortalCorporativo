@extends('adminlte::page')

@section('title', 'Despesas')

@section('content_header')
    <button class="btn btn-dark col col-12" disabled="disabled"><h1>Dados da Despesa {{ $despesas->C010_DescricaoDespesa }}</h1></button>
@stop

@section('content')

    <!- Primeira linha ->
    <div class="row">
        <div class="col col-2">
            <label for="codigo">Código</label>
            <div class="input-group">
                <span class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fa fa-sort-numeric-up"></i>
                    </span>
                </span>
                <input type="text" class="form-control" name="codigo" id="codigo" disabled="disabled" value="{{ $despesas->C010_CodigoDespesa }}">
            </div>
        </div>

        <div class="col col-10">
            <label for="descricao">Descrição</label>
            <div class="input-group">
                <span class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fa fa-tasks"></i>
                    </span>
                </span>
                <input type="text" class="form-control" name="descricao" id="descricao" disabled="disabled" value="{{ $despesas->C010_DescricaoDespesa }}">
            </div>
        </div>
    </div>

    <button type="submit" disabled="disabled" class="btn btn-secondary col col-12 mt-3">
        <b></b>
    </button>

@stop
