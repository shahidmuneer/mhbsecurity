<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Packages extends Model
{
    
    protected $table="package";
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
