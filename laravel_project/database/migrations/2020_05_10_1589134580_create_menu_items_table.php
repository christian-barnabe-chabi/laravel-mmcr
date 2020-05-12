<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenuItemsTable extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */
    public function up()
    {
        Schema::create('menu_items', function (Blueprint $table) {
            
			$table->increments('id');
			$table->unsignedInteger('menu_id')->nullable();
			$table->string('title');
			$table->string('url');
			$table->string('target')->default('_self');
			$table->string('icon_class')->nullable();
			$table->string('color')->nullable();
			$table->unsignedInteger('parent_id')->nullable();
			$table->unsignedInteger('order');
			$table->string('route')->nullable();
			$table->text('parameters')->nullable(); 
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
        Schema::dropIfExists('menu_items');
    }
}