<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOauthRefreshTokensTable extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */
    public function up()
    {
        Schema::create('oauth_refresh_tokens', function (Blueprint $table) {
            
			$table->string('id');
			$table->string('access_token_id');
			$table->unsignedTinyInteger('revoked');
			$table->dateTime('expires_at')->nullable(); 
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
        Schema::dropIfExists('oauth_refresh_tokens');
    }
}