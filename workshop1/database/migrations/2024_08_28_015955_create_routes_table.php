<?php 
use Illuminate\Database\Migrations\Migration; 
use Illuminate\Database\Schema\Blueprint; 
use Illuminate\Support\Facades\Schema; 

 
return new class extends Migration 
{ 
    /** 
     * Run the migrations. 
     * 
     * @return void 
     */ 
    public function up() 
    { 
        Schema::create('routes', function (Blueprint $table) { 
            $table->id(); 
            $table->string('name'); 
            $table->text('description'); 
            $table->string('startPoint'); 
            $table->string('finalPoint'); 
            $table->integer('score'); 
            $table->string('location'); 
            $table->string('image'); 
            $table->string('time'); 
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
        Schema::dropIfExists('routes'); 
    } 
};