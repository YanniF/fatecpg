<?php

namespace FatecPG;

use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{	
    protected $table = 'noticias';
    protected $fillable = ['tituloNoticia','corpoNoticia','dataInicio','dataExpiracao', 'created_by', 'updated_by'];

    public function created_by() {
        return $this->belongsTo('FatecPG\User', 'created_by', 'id');
    }

    public function updated_by() {
        return $this->belongsTo('FatecPG\User', 'updated_by', 'id');
    }
}
