<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if( !Schema::hasTable('clients') ){
            Schema::create('clients', function (Blueprint $table) {
                $table->increments('id');
                $table->string('logo', 254);
                $table->string('name', 254);
                $table->string('url', 254);
                $table->timestamps();
            });
        }


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients');
    }
}
