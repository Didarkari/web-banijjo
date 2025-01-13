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
    {if(!Schema::hasTable('orders')){
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->foreignId('customer_id')->constrained('users')->onUpdate('cascade')->onDelete('casdade');
            $table->string('customer_name');
            $table->string('company_name');
            $table->text('address');
            $table->string('mobile');
            $table->text('order_notes');
            $table->decimal('total_amount')->nullable();
            $table->decimal('total_quantity')->nullable();
            $table->timestamps();
        });
    }}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
