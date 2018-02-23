<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contents extends Model
{
    
    protected $table="content";
    
    public function menu(){
        return $this->belongsTo(\App\Menus::class);
    }
    protected $fillable=[
        "menu_id",
        'heading',
        'picture',
        'picture_description',
        'copyrights',
        "metaTitle",
        "metaDescription",
        "content",
        "keywords"
    ];
    
}
