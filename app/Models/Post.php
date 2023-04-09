<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //load this model with category in author it solve the db 1+1 problem
    //if we need somewhere to load it without this we can use
    //whitout('author')
    protected $with = ['category' , 'author'];
    public function getRouteKeyName()
    {
        //kogato iskame da izpolzvame drug atribute vmesto id za prehvurlqne
        return 'slug';
    }
    //protected $guarded = ['id'];
    //protected $fillable= ['title','excerpt','body'];
    //$filable - you can Mass Assignment  these variables
    // dont use everyting in fillables becouse it could be inputted bad data
    //$guarded is like everything is fillable except this

    public function category(){
        // hasOne, hasMany, belongTo, belongsToMany
        return $this->belongsTo(Category::class);
    }
    public function author(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
