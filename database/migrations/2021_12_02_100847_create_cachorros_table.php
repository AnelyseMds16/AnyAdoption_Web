<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCachorrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cachorros', function (Blueprint $table) {
            $table->foreignId('user_id')->nullable()->constrained()
            ->onDelete('cascade')->onUpdate('cascade');
            $table->id();
            $table->String('nome');
            $table->integer('idade');
            $table->string('raca');
            $table->string('genero');
            $table->string('imagem')->nullable();
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
        Schema::dropIfExists('cachorros');
    }
}
