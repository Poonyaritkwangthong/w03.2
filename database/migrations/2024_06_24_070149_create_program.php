<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgram extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('program', function (Blueprint $table) {
            $table->id();
            $table->string('project_th');
            $table->string('project_en');
            $table->integer('grad_year');
            $table->unsignedBigInteger('prg_fac_id');
            $table->timestamps();

            $table->foreign('prg_fac_id')->refernces('id')->on('faculty');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('program');
    }
}
