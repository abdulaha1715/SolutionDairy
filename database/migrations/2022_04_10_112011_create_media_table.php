<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMediaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('media', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->foreignId('user_id');
            $table->foreignId('problem_id')->nullable();
            $table->foreignId('solution_id')->nullable();
            $table->timestamps();
        });

        // Schema::create('media_problems', function (Blueprint $table) {
        //     $table->id();
        //     $table->unsignedBigInteger('media_id');
        //     $table->unsignedBigInteger('problem_id');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('media');
        Schema::dropIfExists('media_problems');
    }
}
