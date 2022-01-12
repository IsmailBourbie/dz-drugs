<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDrugsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drugs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->integer('quantity');     
            $table->unsignedBigInteger('dci_id');
            $table->unsignedBigInteger('laboratory_id');
            $table->unsignedBigInteger('form_id');
            $table->unsignedBigInteger('dosage_id');
            
            $table->foreign('dci_id')->references('id')->on('dcis');
            $table->foreign('laboratory_id')->references('id')->on('laboratories');
            $table->foreign('dosage_id')->references('id')->on('dosages');
            $table->foreign('form_id')->references('id')->on('forms');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('drugs');
    }
}
