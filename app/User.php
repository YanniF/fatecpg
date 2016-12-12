<?php

namespace FatecPG;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'username', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function noticiasCriadasPor() {
        return $this->hasMany('FatecPG\Models\Noticia', 'created_by');
    }

    public function noticiasAtualizadasPor() {
        return $this->hasMany('FatecPG\Models\Noticia', 'updated_by');
    }

    public function sliderCriadoPor() {
        return $this->hasMany('FatecPG\Models\Slider', 'created_by');
    }

    public function sliderAtualizadoPor() {
        return $this->hasMany('FatecPG\Models\Slider', 'updated_by');
    }
}
