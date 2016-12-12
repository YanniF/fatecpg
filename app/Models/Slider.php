<?php

namespace FatecPG\Models;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $table = 'slider';
    protected $fillable = ['imagem', 'link', 'created_by', 'updated_by'];

    public function criadoPor() {
        return $this->belongsTo('FatecPG\User', 'created_by', 'id');
    }

    public function atualizadoPor() {
        return $this->belongsTo('FatecPG\User', 'updated_by', 'id');
    }
}
