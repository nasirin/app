<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNecessitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('necessities', function (Blueprint $table) {
            $table->id();
            $table->string("necessity", 30);
            $table->bigInteger("cost");
            $table->date("tanggal");
            $table->bigInteger("pcs");
            $table->bigInteger("total");
            $table->string("file")->nullable();
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
        Schema::dropIfExists('necessities');
    }
}
