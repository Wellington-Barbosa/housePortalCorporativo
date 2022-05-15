<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class C010_Despesas extends Model
{
    public function usesTimestamps()
    {
        return false;
    }

    protected $table = 'C010_Despesas'; //Especificando o nome da tabela no banco de dados.

    protected $fillable = [
        'C010_CodigoDespesa',
        'C010_DescricaoDespesa',
        'C010_StatusDespesa',
        'C010_UsuarioInclusao',
        'C010_DataInclusao',
        'C010_UsuarioAlteracao',
        'C010_DataAlteracao',
    ];
}
