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

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'price', 'date', 'height', 'width', 'weight', 'materials', 'colors', 'theme', 'author', 'description', 'picture', 'minimum_price', 'number_tours', 'time', 'test_rate','number_test'
    ];
}
