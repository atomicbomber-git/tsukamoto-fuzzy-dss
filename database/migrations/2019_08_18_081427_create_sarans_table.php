<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSaransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sarans', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('variabel_id');

            $table->double('batas_bawah');
            $table->double('batas_atas');

            $table->longText('konten');

            $table->timestamps();
            $table->foreign('variabel_id')
                ->references('id')
                ->on('variabels');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sarans');
    }
}
