<?php

namespace App;
use Illuminate\Database\Eloquent\SoftDeletes;

use Illuminate\Database\Eloquent\Model;

class Goods extends Model
{
    use SoftDeletes;

    protected $fillable= [
        'name',
        'type',
        'stock'
    ];

    protected $hidden = [
        //
    ];

}
