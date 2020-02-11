<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = 'book';
    public $primaryKey = 'id';
    public $timestamps = false;
}
