<?php

namespace FatecPG\Models\Secretaria;

use Illuminate\Database\Eloquent\Model;

class InformativoSecretaria extends Model
{
    protected $table = 'informativos_secretaria';
    protected $fillable = ['informacao','informacao_sobre', 'created_by', 'updated_by'];

    public function criadoPor() {
        return $this->belongsTo('FatecPG\User', 'created_by', 'id');
    }

    public function atualizadoPor() {
        return $this->belongsTo('FatecPG\User', 'updated_by', 'id');
    }
}
