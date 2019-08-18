<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFungsiParametersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fungsi_parameters', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('parameter_id');

            $table->string('syarat')->comment("Syarat yang harus dipenuhi `x` supaya formula berlaku.");
            $table->string('formula')->comment("Formula yang melambangkan fungsi keanggotaan.");

            $table->foreign('parameter_id')
                ->references('id')
                ->on('parameters');

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
        Schema::dropIfExists('fungsi_parameters');
    }
}
