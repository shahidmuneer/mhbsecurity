<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function __construct() {
        ;
    }
    public function adtPackages(){
        $packages= \App\Packages::select(["name","details","package_id","comes_with","importance","picture","picture_description"])->get();
//  
        return view("packages")->with(["packages"=>$packages]);
    }
}
