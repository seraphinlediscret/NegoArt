<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artwork extends Model
{
     /**
     * The users that belong to the role.
     */
    public function users()
    {
        return $this->belongsToMany('App\User');
    }

     /**
     * The categorie that belong to the role.
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
