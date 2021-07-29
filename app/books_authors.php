<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class books_authors extends Model
{
    use SoftDeletes;

    protected $table = 'books_authors';

    public function author () {
        return $this->belongsTo('App\Author');
    }
    public function book () {
        return $this->belongsTo('App\Book');
    }
}
