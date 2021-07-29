<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class books_categories extends Model
{
    use SoftDeletes;
    protected $table = 'books_categories';
    protected $fillable = ['book_id', 'category_id'];

    public function category () {
        return $this->belongsTo('App\Category');
    }
}
