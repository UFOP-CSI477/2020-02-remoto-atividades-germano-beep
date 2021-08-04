<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registros', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('equipamento_id')->nullable(false);
            $table->unsignedBigInteger('user_id')->nullable(false);
            $table->string('descricao', 191);
            $table->date('datalimite');
            $table->timestamps();
            $table->foreign('equipamento_id')
                ->references('id')
                ->on('equipamentos');

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
        Schema::dropIfExists('registros');
    }
}
