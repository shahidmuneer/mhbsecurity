<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Advantages extends Model
{
    
    protected $table="advantage";
    protected $fillable=[
        
        "name",
        "package_id",
        "comes_with",
        "importance",
        "picture",
        "picture_description",
        "details"
    ];
    
}
