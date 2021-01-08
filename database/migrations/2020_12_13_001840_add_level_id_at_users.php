<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddLevelIdAtUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /**
         * Como se va a hacer una relación con una tabla que se
         * va a crear después de la tabla users, hice una migración con una función que
         * agrega este campo y esta relación al final de crear las
         * migraciones de las tablas para no tener errores
         */
        Schema::table('users', function (Blueprint $table) {
            $table->bigInteger('level_id')->unsigned()
                ->nullable()
                ->after('id');

            $table->foreign('level_id')->references('id')->on('levels')
                ->onDelete('set null') // Si se elimina este campo queda con un dato nulo
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
