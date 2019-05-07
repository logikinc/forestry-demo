<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Create1557190195886PackageUserPivotTable extends Migration
{
    public function up()
    {
        Schema::create('package_user', function (Blueprint $table) {
            $table->unsignedInteger('user_id');
            $table->foreign('user_id', 'user_id_fk_42767')->references('id')->on('users');
            $table->unsignedInteger('package_id');
            $table->foreign('package_id', 'package_id_fk_42767')->references('id')->on('packages');
        });
    }

    public function down()
    {
        Schema::dropIfExists('package_user');
    }
}
