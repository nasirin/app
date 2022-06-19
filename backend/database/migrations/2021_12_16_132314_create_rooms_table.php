<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->string('no_room', 20)->unique();
            $table->string('location', 20);
            $table->enum('type', ['male', 'female']);
            $table->enum('status', ['unavailable', 'available']);
            $table->string('room_size', 30);
            $table->text('map');
            $table->json('gallery');
            $table->bigInteger('price_monthly');
            $table->bigInteger('price_years')->nullable();
            $table->string('thumbnail');
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
        Schema::dropIfExists('rooms');
    }
}
