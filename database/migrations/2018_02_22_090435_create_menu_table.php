<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('name',200);
            $table->timestamps();
        });
        
          Schema::table("content",function(Blueprint $table){
           $table->foreign('menu_id')->references('id')->on('menus');   
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
           Schema::table('content', function(Blueprint $table){ 
     $table->dropForeign(['menu_id']); 
    });  
        
        Schema::dropIfExists('menus');
    }
}
