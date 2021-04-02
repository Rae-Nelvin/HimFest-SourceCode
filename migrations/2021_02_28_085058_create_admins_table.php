<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->integer('id');
            $table->text('name');
            $table->text('leader_id');
            $table->text('password');
            $table->text('category');
            $table->text('referrer');
            $table->string('status_pembayaran')->nullable();
            $table->string('file_answer')->nullable();
        });
        Schema::create('member', function (Blueprint $table) {
            $table->increments('id');
            $table->text('member_id')->nullable();
            $table->text('team_id');
            $table->text('name');
            $table->text('email')->nullable();
            $table->text('lineid')->nullable();
            $table->text('phone')->nullable();
            $table->string('studentcard')->nullable();
        });
        Schema::create('admin', function (Blueprint $table) {
            $table->increments('id');
            $table->text('name');
            $table->text('email');
            $table->text('password');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('team');
        Schema::dropIfExists('member');
    }
}
