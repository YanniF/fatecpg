<?php

namespace FatecPG\Policies;

use FatecPG\Models\User;
use FatecPG\Models\Noticia;
use Illuminate\Auth\Access\HandlesAuthorization;

class NoticiaPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the noticia.
     *
     * @param  \FatecPG\User  $user
     * @param  \FatecPG\Noticia  $noticia
     * @return mixed
     */
    public function view(User $user, Noticia $noticia)
    {
        //
    }

    /**
     * Determine whether the user can create noticias.
     *
     * @param  \FatecPG\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return false;    
    }

    /**
     * Determine whether the user can update the noticia.
     *
     * @param  \FatecPG\User  $user
     * @param  \FatecPG\Noticia  $noticia
     * @return mixed
     */
    public function update(User $user, Noticia $noticia)
    {
        //return false;
    }

    /**
     * Determine whether the user can delete the noticia.
     *
     * @param  \FatecPG\User  $user
     * @param  \FatecPG\Noticia  $noticia
     * @return mixed
     */
    public function delete(User $user, Noticia $noticia)
    {
        //
    }
}
