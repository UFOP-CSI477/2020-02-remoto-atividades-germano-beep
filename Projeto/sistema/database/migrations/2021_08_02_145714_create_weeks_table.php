<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWeeksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('weeks', function (Blueprint $table) {
            $table->id();
            $table->string('segunda', 100)->nullable(true);
            $table->string('terca', 100)->nullable(true);
            $table->string('quarta', 100)->nullable(true);
            $table->string('quinta', 100)->nullable(true);
            $table->string('sexta', 100)->nullable(true);
            $table->string('sabado', 100)->nullable(true);
            $table->string('domingo', 100)->nullable(true);
            $table->unsignedBigInteger('user_id');
            $table->timestamps();

            $table->foreign('user_id')
                ->references('id')
                ->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('weeks');
    }
}
