<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Create1557189768998RoleUserPivotTable extends Migration
{
    public function up()
    {
        Schema::create('role_user', function (Blueprint $table) {
            $table->unsignedInteger('user_id');
            $table->foreign('user_id', 'user_id_fk_42724')->references('id')->on('users');
            $table->unsignedInteger('role_id');
            $table->foreign('role_id', 'role_id_fk_42724')->references('id')->on('roles');
        });
    }

    public function down()
    {
        Schema::dropIfExists('role_user');
    }
}
