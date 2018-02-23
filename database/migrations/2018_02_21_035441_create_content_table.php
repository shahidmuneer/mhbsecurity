<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('content', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('menu_id')->unsigned();
            $table->string('heading',64);
            $table->string('picture',64)->nullable();
            $table->string('picture_description',64);
            $table->text('copyrights');
            $table->string('metaTitle',155);
            $table->text('metaDescription');
            $table->text('content');
            $table->string('keywords',64);
            $table->timestamps();
        });
        
      
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    
 
        Schema::dropIfExists('content');
    }
    
}