<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRuleInputsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rule_inputs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('rule_id');
            $table->unsignedBigInteger('parameter_id');
            $table->timestamps();

            $table->foreign('rule_id')
                ->references('id')
                ->on('rules');

            $table->foreign('parameter_id')
                ->references('id')
                ->on('parameters');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rule_inputs');
    }
}
