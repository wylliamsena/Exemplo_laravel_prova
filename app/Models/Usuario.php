<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

     protected $table = 'usuarios';

    // Campos que podem ser preenchidos em massa
    protected $fillable = [
        'nome',
        'email',
        'senha',
    ];

    // Esconde a senha quando o usuário for convertido em array/json
    protected $hidden = ['senha'];
}
