<?php

namespace FatecPG;

use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    protected $table = 'noticias';
    protected $fillable = ['tituloNoticia','corpoNoticia','dataInicio','dataExpiracao'];
}
