<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    use SoftDeletes;


    public function book_authors()
    {
        return $this->hasMany('App\books_authors');
    }

    public function book_categorys()
    {
        return $this->hasMany('App\books_categories');
    }

    public function book_publishers()
    {
        return $this->hasMany('App\books_publishers');
    }
}
