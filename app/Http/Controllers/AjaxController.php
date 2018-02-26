<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function __construct() {

        if(!\Request::ajax()){
        echo "we don't allowed you doing this";
        exit;
        }
    }
    
    public function get(Request $request){
        
        $product=\App\Products::find($request->id);
        
        return \response()->json(array("product"=>$product),200);
    }
       public function getVideo(Request $request){
        
        $videos=\App\Videos::find($request->id);
        
        return \response()->json(array("videos"=>$videos),200);
    }
}
