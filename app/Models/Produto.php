<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $guarded = [];
    use HasFactory;

    protected $fillable = [
        'nome',
        'descricao',
        'preco',
        'qtd',
        'categoria'
    ];
}
