<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned();
            $table->string('instagram')->nullable();
            $table->string('github')->nullable();
            $table->string('web')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users') // El campo user_id hace referencia al campo id en la tabla users
                ->onDelete('cascade') // Si lo eliminamos se elimina en la tabla users
                ->onUpdate('cascade'); // Si lo modificamos se modifica en la tabla users
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
}
