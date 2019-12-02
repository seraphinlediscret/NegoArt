<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
     /**
     * The users that belong to the role.
     */
    public function artworks()
    {
        return $this->hasToMany('App\Artwork');
    }
}
