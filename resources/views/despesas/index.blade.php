@extends('adminlte::page')

@section('title', 'Despesas')

@section('content_header')
    <button class="btn btn-dark col col-12" disabled="disabled"><h1>Despesas</h1></button>
@stop

@section('content')

    @include('mensagem', ['mensagem' => $mensagem])

        <a href="{{ route('form_criar_despesas') }}" class="btn btn-dark col col-2 text-bold" style="height: 40px">
            NOVA DESPESA
        </a>

    <ul class="list-group">

        <br>
        <button class="btn btn-outline-secondary col col-12" disabled="disabled" style="text-align: left">
            &emsp;
            Código
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
            Descrição
        </button>

        @foreach($despesas as $despesa)
            <button class="btn btn-group-sm col col-12" disabled="disabled" style="text-align: left">
                <li class="list-group-item d-flex justify-content-between align-items-left list-group-item-primary">
                    <div class="container-fluid">
                        <form method="post">
                            <a href="/despesas/show/{{ $despesa->id }}">
                                <span id="codigo-despesa-{{ $despesa->id }}">
                                    <dt>
                                        <div class="row">
                                            <div class="col-sm-1 text-bold">
                                                {{ $despesa->C010_CodigoDespesa }}
                                            </div>
                                            <div class="col-sm-6 text-bold">
                                                {{ $despesa->C010_DescricaoDespesa }}
                                            </div>
                                        </div>
                                    </dt>
                                </span>
                            </a>
                        </form>
                    </div>
                </li>
            </button>
        @endforeach

    </ul>

    {{ $despesas->links() }}

@stop
