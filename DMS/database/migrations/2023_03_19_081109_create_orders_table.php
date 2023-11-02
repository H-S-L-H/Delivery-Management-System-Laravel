<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('order_number');
            $table->string('sender_name');
            $table->string('sender_phone');
            $table->text('pickup_address');
            $table->date('pickup_date');
            $table->string('pickup_vehicle');
            $table->string('receiver_name');
            $table->string('receiver_phone');
            $table->text('receiver_address');
            $table->date('estimate_arrival_date')->nullable();
            $table->string('deliver_method');
            $table->string('payment_method');
            $table->integer('parcel_price')->nullable();
            $table->integer('delivery_fee')->nullable();
            $table->integer('parcel_weight')->nullable();
            $table->string('sender_note')->nullable();
            $table->string('order_status');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
