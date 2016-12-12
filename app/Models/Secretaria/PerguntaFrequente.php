<?php

namespace FatecPG\Models\Secretaria;

use Illuminate\Database\Eloquent\Model;

class PerguntaFrequente extends Model
{
    protected $table = 'perguntas_frequentes';
    protected $fillable = ['pergunta','resposta','categoria', 'created_by', 'updated_by'];

    public function criadoPor() {
        return $this->belongsTo('FatecPG\User', 'created_by', 'id');
    }

    public function atualizadoPor() {
        return $this->belongsTo('FatecPG\User', 'updated_by', 'id');
    }
}
