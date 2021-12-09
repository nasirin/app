<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('first_name', 30);
            $table->string('last_name', 30);
            $table->string('nick_name', 30);
            $table->string('avatar', 50)->nullable();
            $table->string('address', 100);
            $table->string('phone', 16);
            $table->string('email', 30)->unique();
            $table->string('identity', 50)->nullable();
            $table->string('password');
            $table->enum('gender', ['male', 'female']);
            $table->enum('status', ['single', 'married']);
            $table->enum('jobs', ['student', 'worker'])->nullable();
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
        Schema::dropIfExists('customers');
    }
}
