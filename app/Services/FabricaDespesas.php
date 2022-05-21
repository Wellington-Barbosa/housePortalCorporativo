<?php

namespace App\Services;

use App\Models\C010_Despesas;
use Illuminate\Support\Facades\DB;

class FabricaDespesas
{
    public function criaDespesas(string $codigoDespesa, string $descricaoDespesa): C010_Despesas
    {
        $statusDespesa = $_POST['statusDespesa'];
        $dateInclusao = new \DateTime();

        DB::beginTransaction();

        $despesas = C010_Despesas::create([
            'C010_CodigoDespesa' => $codigoDespesa,
            'C010_DescricaoDespesa' => $descricaoDespesa,
            'C010_StatusDespesa' => $statusDespesa,
            'C010_DataInclusao' => $dateInclusao
        ]);

        DB::commit();

        return $despesas;
    }
}
