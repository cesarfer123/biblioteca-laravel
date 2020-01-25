<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermissionsRolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permissions_rols', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('rol_id');
            $table->foreign('rol_id')->references('id')->on('rols')->onDelete("restrict")->onUpdate("restrict");
            $table->unsignedBigInteger('permiso_id');
            $table->foreign('permiso_id')->references('id')->on('permissions')->onDelete("restrict")->onUpdate("restrict");
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
        Schema::dropIfExists('permissions_rols');
    }
}
