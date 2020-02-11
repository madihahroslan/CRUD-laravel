<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $tableC = 'customer';
    public $primaryKeyA = 'id';
    public $timestamps = false;
}
