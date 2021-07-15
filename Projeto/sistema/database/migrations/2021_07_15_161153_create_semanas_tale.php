<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSemanasTale extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('semanas_tale', function (Blueprint $table) {
            $table->id();
            $table->string('segunda',100);
            $table->string('terca',100);
            $table->string('quarta',100);
            $table->string('quinta',100);
            $table->string('sexta',100);
            $table->string('sabado',100);
            $table->string('domingo',100);
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
        Schema::dropIfExists('semanas_tale');
    }
}
