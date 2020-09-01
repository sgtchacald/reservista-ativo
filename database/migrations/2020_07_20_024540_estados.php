<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Estados extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ESTADOS', function (Blueprint $table) {
            $table->bigIncrements('idestado')->unsigned();
            $table->string('estnome', 75);
            $table->string('estuf', 2);
            $table->integer('estidibge')->unsigned();
            $table->integer('estpais')->unsigned();
            $table->string('estddd', 50);
            $table->char('estindstatus', 1);
            //Informações Segurança 
            $table->timestamp('dtcadastro')->nullable();
            $table->timestamp('dtedicao')->nullable();
            $table->timestamp('dtexclusao')->nullable();
            $table->bigInteger('usucriou')->nullable();
            $table->bigInteger('usueditou')->nullable();
            $table->bigInteger('usuexcluiu')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ESTADOS');
    }
}
