<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    
    
    protected $fillable=[
        "code",
        "name",
        "picture",
        "picture_description",
        "details"
    ];
    
}
