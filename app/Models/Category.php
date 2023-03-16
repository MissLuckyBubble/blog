<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    public function posts(){
        // hasOne, hasMany, belongTo, belongsToMany
        return $this->hasMany(Post::class);
    }
    public function getRouteKeyName()
    {
        //kogato iskame da izpolzvame drug atribute vmesto id za prehvurlqne
        return 'slug';
    }
}
