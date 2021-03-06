<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Publisher extends Model
{
    use SoftDeletes;


    protected $fillable = ['name',	'country',	'email',	'phone'];

}
