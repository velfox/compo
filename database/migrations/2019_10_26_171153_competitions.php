<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Competitions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Competitions', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->unsignedInteger('owner_id');
        $table->string('name')->nullable();
        $table->string('gamemode');
        $table->integer('maxplayers');
        $table->integer('minplayers');
        $table->date('date');
        $table->boolean('show')->default(true);
        $table->boolean('admin')->default(false);
        $table->timestamp('created_at')->nullable();
        $table->timestamp('updated_at')->nullable();
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
