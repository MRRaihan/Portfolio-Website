<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Homepage extends Model
{
    protected $fillable = [
        'name',
        'title',
        'description',
        'image',
        'status',
    ];
}
