<?php

namespace App\Http\Controllers;

use App\Http\Requests\DespesasFormResquest;
use App\Models\C010_Despesas;
use App\Services\FabricaDespesas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DespesasController extends Controller
{
    /**
     * @var Request
     */
    protected $request;

    public function __construct(Request $request, C010_Despesas $despesas)
    {
        $this->request = $request;
    }

    public function create()
    {
        return view('despesas.create');
    }

    public function index()
    {
        $despesas = DB::table('c010_despesas')
            ->orderBy('C010_CodigoDespesa')
            ->simplePaginate(10);

        $mensagem = $this->request->session()->get('mensagem');

        return view('despesas.index', compact('despesas', 'mensagem'));
    }

    public function store(DespesasFormResquest $request, FabricaDespesas $fabricaDespesas)
    {
        $despesas = $fabricaDespesas->criaDespesas(
            $request->codigoDespesa,
            $request->descricaoDespesa,
        );

        $request->session()
            ->flash(
                'mensagem',
                "A despesa '{$despesas->C010_DescricaoDespesa}' foi inserida com sucesso!"
            );

        return redirect()->route('listar_despesas');
    }

    public function show($id)
    {
        $despesas = C010_Despesas::findOrFail($id);

        return view('despesas.show', ['despesas' => $despesas]);
    }
}
