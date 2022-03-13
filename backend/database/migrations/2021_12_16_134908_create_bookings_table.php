<?php

use App\Models\Customers;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customers_id')->constrained()->onDelete('cascade');
            $table->foreignId('rooms_id')->constrained()->onDelete('cascade');
            $table->string('code', 50)->unique();
            $table->date('check_in');
            $table->bigInteger('guest')->default(1);
            $table->enum('payment_type', ['on check in', 'transfer']);
            $table->enum('payment_status', ['pending', 'success', 'cancel', 'waiting confirm'])->default('pending');
            $table->bigInteger('cost');
            $table->enum('rental_type', ['month', 'years']);
            $table->text('note')->nullable();
            $table->string('file_payment', 50)->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('bookings');
    }
}
