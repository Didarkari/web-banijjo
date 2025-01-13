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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->decimal('price');
            $table->integer('quantity')->default(0);
            $table->integer('order')->default(0);
            $table->boolean('status')->nullable();
            $table->integer('discount');
            $table->text('short_description')->nullable();
            $table->text('description')->nullable();
            $table->longtext('product_details')->nullable();
            $table->string('delivery_policy')->nullable();
            $table->string('return_policy')->nullable();
            $table->foreignId('category_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('sub_category_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
