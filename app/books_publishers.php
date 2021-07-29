<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class books_publishers extends Model
{
    use SoftDeletes;

    protected $table = 'books_publishers';
    protected $fillable = ['book_id', 'publisher_id'];

    public function publisher()
    {
        return $this->belongsTo('App\Publisher');
    }
}
