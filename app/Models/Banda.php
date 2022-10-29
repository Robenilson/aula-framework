<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banda extends Model
{
    use HasFactory;
    protected $table = 'bandas';
    protected $fillable = [
        'nome',
        'estilo',
        'ano_criacao',
        'total_de_discos',
    ];
}
