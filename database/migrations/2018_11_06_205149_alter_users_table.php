<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            // modificamos la tabla users agregandole una clave foranea con relacion a la tabla pais
            $table->unsignedInteger('pais_id')->after('phone');
            $table->foreign('pais_id')->references('id')->on('pais');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // cuando hacemos el rollback a la DB eliminamos el campo
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign('users_pais_id_foreign');
        });
    }
}
