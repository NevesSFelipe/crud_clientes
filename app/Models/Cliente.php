<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'cpf_cnpj',
        'rg',
        'data_nascimento',
        'estado_civil',
        'cep',
        'rua',
        'bairro',
        'complemento',
        'contato'
    ];
}